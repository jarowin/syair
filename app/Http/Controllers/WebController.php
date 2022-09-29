<?php

namespace App\Http\Controllers;

use App\Models\Syair;
use App\Models\Pasaran;
use App\Models\Prediksi;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $pasarans = Pasaran::all();
        $syairs = Syair::all();
        $prediksis = Prediksi::orderBy('tanggal','desc')->paginate(20);
        return view('index', compact('pasarans', 'syairs', 'prediksis'));
    }

    public function detail($id)
    {
        $pasarans = Pasaran::all();
        $syairs = Syair::all();
        $prediksis = Prediksi::find($id);
        return view ('post.detail', compact('pasarans', 'syairs', 'prediksis'));
    }

    public function filterByPasaran(Request $request, $nama)
    {
        $pasarans = Pasaran::all();
        $prediksis = Prediksi::whereHas('pasaran', function($query) use($request) {
            $query->where('nama', 'like', '%' . $request->nama . '%');
        })->orderBy('tanggal', 'desc')->paginate(20);
        return view ('post.pasaran', compact('prediksis', 'pasarans'));
    }
}
