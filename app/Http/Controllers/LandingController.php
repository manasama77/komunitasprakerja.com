<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Panduan;
use App\Models\SliderBanner;
use App\Models\TeamTutor;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $slider_banners = SliderBanner::orderBy('id', 'desc')->get();
        $panduan_total  = Panduan::orderBy('id', 'desc')->count();
        $panduans       = Panduan::orderBy('id', 'desc')->limit(6)->get();
        $team_tutors    = TeamTutor::latest()->get();
        $jadwals        = Jadwal::orderBy('dt_jadwal', 'desc')->get();
        $testimonis     = Testimoni::latest()->get();

        $data = [
            'page_title'     => 'Beranda',
            'page_header'    => 'Beranda',
            'slider_banners' => $slider_banners,
            'panduan_total'  => $panduan_total,
            'panduans'       => $panduans,
            'team_tutors'    => $team_tutors,
            'jadwals'        => $jadwals,
            'testimonis'     => $testimonis,
        ];
        return view('landing.home.main', $data);
    }

    public function panduan()
    {
        $panduans = Panduan::orderBy('id', 'desc')->paginate(6);
        $breadcrumbs = '<li>Panduan List</li>';

        $data = [
            'page_title'  => 'Panduan List',
            'page_header' => 'Panduan List',
            'breadcrumbs' => $breadcrumbs,
            'panduans'    => $panduans,
        ];
        return view('landing.panduan.main', $data);
    }

    public function panduan_detail($slug)
    {
        $panduan = Panduan::where('slug', $slug)->first();
        $breadcrumbs = '<li><a href="{{ route("panduan") }}">Panduan List</a></li>';
        $breadcrumbs .= '<li>' . $panduan->title . '</li>';

        $data = [
            'page_title'  => 'Panduan Detail | ' . $panduan->title,
            'page_header' => 'Panduan Detail',
            'breadcrumbs' => $breadcrumbs,
            'panduan'     => $panduan,
        ];
        return view('landing.panduan.detail', $data);
    }
}
