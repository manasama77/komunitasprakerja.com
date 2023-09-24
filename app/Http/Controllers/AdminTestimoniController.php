<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminTestimoniController extends Controller
{
    public function index()
    {
        $datas = Testimoni::latest()->get();

        $data = [
            'page_title'  => 'Testimoni',
            'page_header' => 'Testimoni',
            'datas'       => $datas,
        ];

        return view('admin.testimoni.main', $data);
    }

    public function create()
    {
        $data = [
            'page_title'  => 'Testimoni | Create',
            'page_header' => 'Testimoni | Create',
        ];

        return view('admin.testimoni.form', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'testimoni' => 'required',
            'photo'     => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $photo = Storage::disk('testimoni')->put('', $request->file('photo'));

        $exec            = new Testimoni();
        $exec->name      = $request->name;
        $exec->testimoni = $request->testimoni;
        $exec->photo     = $photo;

        if (!$exec->save()) {
            return redirect()
                ->back()
                ->withErrors("500 Failed connect to database")
                ->withInput();
        }

        return redirect()
            ->route('admin.testimoni')
            ->withSuccess("Store Success");
    }

    public function edit($id)
    {
        $exec = Testimoni::find($id);
        $data = [
            'page_title'  => 'Testimoni | Edit',
            'page_header' => 'Testimoni | Edit',
            'exec'        => $exec,
        ];

        return view('admin.testimoni.form_edit', $data);
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'  => 'required',
            'photo' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $exec            = Testimoni::find($id);
        $exec->name      = $request->name;
        $exec->testimoni = $request->testimoni;

        if ($request->photo) {
            $photo       = Storage::disk('testimoni')->put('', $request->file('photo'));
            $exec->photo = $photo;
        }

        if (!$exec->save()) {
            return redirect()
                ->back()
                ->withErrors("500 Failed connect to database")
                ->withInput();
        }

        return redirect()
            ->route('admin.testimoni')
            ->withSuccess("Update Success");
    }
}
