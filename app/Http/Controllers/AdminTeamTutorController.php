<?php

namespace App\Http\Controllers;

use App\Models\TeamTutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminTeamTutorController extends Controller
{
    public function index()
    {
        $datas = TeamTutor::latest()->get();

        $data = [
            'page_title'  => 'Team Tutor',
            'page_header' => 'Team Tutor',
            'datas'       => $datas,
        ];

        return view('admin.team_tutor.main', $data);
    }

    public function create()
    {
        $data = [
            'page_title'  => 'Team Tutor | Create',
            'page_header' => 'Team Tutor | Create',
        ];

        return view('admin.team_tutor.form', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'  => 'required',
            'photo' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $photo = Storage::disk('team_tutor')->put('', $request->file('photo'));

        $exec        = new TeamTutor();
        $exec->name  = $request->name;
        $exec->photo = $photo;

        if (!$exec->save()) {
            return redirect()
                ->route('admin.team_tutor.create')
                ->withErrors("500 Failed connect to database")
                ->withInput();
        }

        return redirect()
            ->route('admin.team_tutor')
            ->withSuccess("Store Success");
    }

    public function edit($id)
    {
        $exec = TeamTutor::find($id);
        $data = [
            'page_title'  => 'Team Tutor | Edit',
            'page_header' => 'Team Tutor | Edit',
            'exec'        => $exec,
        ];

        return view('admin.team_tutor.form_edit', $data);
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

        $exec       = TeamTutor::find($id);
        $exec->name = $request->name;

        if ($request->photo) {
            $photo       = Storage::disk('team_tutor')->put('', $request->file('photo'));
            $exec->photo = $photo;
        }

        if (!$exec->save()) {
            return redirect()
                ->back()
                ->withErrors("500 Failed connect to database")
                ->withInput();
        }

        return redirect()
            ->route('admin.team_tutor')
            ->withSuccess("Update Success");
    }
}
