<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminFaqController extends Controller
{
    public function index()
    {
        $datas = Faq::latest()->get();

        $data = [
            'page_title'  => 'Faq',
            'page_header' => 'Faq',
            'datas'       => $datas,
        ];

        return view('admin.faq.main', $data);
    }

    public function create()
    {
        $data = [
            'page_title'  => 'Faq | Create',
            'page_header' => 'Faq | Create',
        ];

        return view('admin.faq.form', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'answer'   => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $exec = Faq::create($request->only('question', 'answer'));

        if (!$exec) {
            return redirect()
                ->back()
                ->withErrors("500 Failed connect to database")
                ->withInput();
        }

        return redirect()
            ->route('admin.faq')
            ->withSuccess("Store Success");
    }

    public function edit($id)
    {
        $exec = Faq::find($id);
        $data = [
            'page_title'  => 'Faq | Edit',
            'page_header' => 'Faq | Edit',
            'exec'        => $exec,
        ];

        return view('admin.faq.form_edit', $data);
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required',
            'answer'   => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $exec           = Faq::find($id);
        $exec->question = $request->question;
        $exec->answer   = $request->answer;

        if (!$exec->save()) {
            return redirect()
                ->back()
                ->withErrors("500 Failed connect to database")
                ->withInput();
        }

        return redirect()
            ->route('admin.faq')
            ->withSuccess("Update Success");
    }
}
