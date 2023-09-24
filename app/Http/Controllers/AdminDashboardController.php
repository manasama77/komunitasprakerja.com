<?php

namespace App\Http\Controllers;

use App\Models\Panduan;
use App\Models\TeamTutor;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $count_team_tutor = TeamTutor::count();
        $count_panduan    = Panduan::count();

        $data = [
            'page_title'       => 'Dashboard',
            'page_header'      => 'Dashboard',
            'count_team_tutor' => $count_team_tutor,
            'count_panduan'    => $count_panduan,
        ];

        return view('admin.dashboard.main', $data);
    }
}
