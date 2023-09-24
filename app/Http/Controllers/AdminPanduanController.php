<?php

namespace App\Http\Controllers;

use App\Models\Panduan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminPanduanController extends Controller
{
    public function index()
    {
        $datas = Panduan::latest()->get();

        $data = [
            'page_title'  => 'Panduan',
            'page_header' => 'Panduan',
            'datas'       => $datas,
        ];

        return view('admin.panduan.main', $data);
    }

    public function create()
    {
        $data = [
            'page_title'  => 'Panduan | Create',
            'page_header' => 'Panduan | Create',
        ];

        return view('admin.panduan.form', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required',
            'description' => 'required',
            'banner'      => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $banner = Storage::disk('panduan')->put('', $request->file('banner'));

        $exec              = new Panduan();
        $exec->title       = $request->title;
        $exec->slug        = Str::slug($request->title);
        $exec->description = $request->description;
        $exec->banner      = $banner;

        if (!$exec->save()) {
            return redirect()
                ->route('admin.panduan.create')
                ->withErrors("500 Failed connect to database")
                ->withInput();
        }

        return redirect()
            ->route('admin.panduan')
            ->withSuccess("Store Success");
    }

    public function edit($id)
    {
        $exec = Panduan::find($id);
        $data = [
            'page_title'  => 'Panduan | Edit',
            'page_header' => 'Panduan | Edit',
            'exec'        => $exec,
        ];

        return view('admin.panduan.form_edit', $data);
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'       => 'required',
            'description' => 'required',
            'banner'      => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $exec              = Panduan::find($id);
        $exec->title       = $request->title;
        $exec->description = $request->description;

        if ($request->banner) {
            $banner       = Storage::disk('panduan')->put('', $request->file('banner'));
            $exec->banner = $banner;
        }

        if (!$exec->save()) {
            return redirect()
                ->back()
                ->withErrors("500 Failed connect to database")
                ->withInput();
        }

        return redirect()
            ->route('admin.panduan')
            ->withSuccess("Update Success");
    }

    public function upload(Request $request)
    {
        // $fileName = $request->file('file')->getClientOriginalName();
        $path = Storage::disk('description_panduan')->put('', $request->file('file'));
        $file = Storage::disk('description_panduan')->url($path);
        return response()->json(['location' => $file]);

        /*$imgpath = request()->file('file')->store('uploads', 'public');
        return response()->json(['location' => "/storage/$imgpath"]);*/
    }
}
