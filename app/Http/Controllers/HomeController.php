<?php

namespace App\Http\Controllers;

use App\Models\Syair;
use App\Models\Pasaran;
use App\Models\Prediksi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pasarans = Pasaran::all();
        $syairs = Syair::all();
        $prediksis = Prediksi::all();
        return view('dashboard.index', compact('pasarans', 'syairs', 'prediksis'));
    }
}
