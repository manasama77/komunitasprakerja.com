<?php

namespace App\Http\Controllers;

use App\Models\SliderBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminSliderBannerController extends Controller
{
    public function index()
    {
        $datas = SliderBanner::latest()->get();

        $data = [
            'page_title'  => 'Slider Banner',
            'page_header' => 'Slider Banner',
            'datas'       => $datas,
        ];

        return view('admin.slider_banner.main', $data);
    }

    public function create()
    {
        $data = [
            'page_title'  => 'Slider Banner | Create',
            'page_header' => 'Slider Banner | Create',
        ];

        return view('admin.slider_banner.form', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'           => 'required',
            'url'            => 'required',
            'banner_desktop' => 'required',
            'banner_mobile'  => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $banner_desktop = Storage::disk('slider_banner')->put('', $request->file('banner_desktop'));
        $banner_mobile  = Storage::disk('slider_banner')->put('', $request->file('banner_mobile'));

        $exec                 = new SliderBanner();
        $exec->name           = $request->name;
        $exec->url            = $request->url;
        $exec->banner_desktop = $banner_desktop;
        $exec->banner_mobile  = $banner_mobile;

        if (!$exec->save()) {
            return redirect()
                ->route('admin.slider_banner.create')
                ->withErrors("500 Failed connect to database")
                ->withInput();
        }

        return redirect()
            ->route('admin.slider_banner')
            ->withSuccess("Store Success");
    }

    public function edit($id)
    {
        $exec = SliderBanner::find($id);
        $data = [
            'page_title'  => 'Slider Banner | Edit',
            'page_header' => 'Slider Banner | Edit',
            'exec'        => $exec,
        ];

        return view('admin.slider_banner.form_edit', $data);
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'           => 'required',
            'url'            => 'required',
            'banner_desktop' => 'nullable',
            'banner_mobile'  => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->banner_desktop) {
            $banner_desktop = Storage::disk('slider_banner')->put('', $request->file('banner_desktop'));
        }

        if ($request->banner_mobile) {
            $banner_mobile  = Storage::disk('slider_banner')->put('', $request->file('banner_mobile'));
        }


        $exec                 = SliderBanner::find($id);
        $exec->name           = $request->name;
        $exec->url            = $request->url;

        if ($request->banner_desktop) {
            $banner_desktop       = Storage::disk('slider_banner')->put('', $request->file('banner_desktop'));
            $exec->banner_desktop = $banner_desktop;
        }

        if ($request->banner_mobile) {
            $banner_mobile       = Storage::disk('slider_banner')->put('', $request->file('banner_mobile'));
            $exec->banner_mobile = $banner_mobile;
        }

        if (!$exec->save()) {
            return redirect()
                ->route('admin.banner.edit')
                ->withErrors("500 Failed connect to database")
                ->withInput();
        }

        return redirect()
            ->route('admin.slider_banner')
            ->withSuccess("Update Success");
    }
}
