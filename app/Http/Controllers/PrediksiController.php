<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Syair;
use App\Models\Pasaran;
use App\Models\Prediksi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PrediksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasarans = Pasaran::all();
        $syairs = Syair::all();
        $prediksis = Prediksi::orderBy('tanggal','desc')->paginate(10);
        return view ('dashboard.prediksi.index', compact('prediksis', 'syairs', 'pasarans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasarans = Pasaran::all();
        $syairs = Syair::all();
        return view ('dashboard.prediksi.create', compact('pasarans', 'syairs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'pasaran_id' => 'required',
            'am1' => 'required|numeric',
            'am2' => 'required|numeric',
            'am3' => 'required|numeric',
            'ja1' => 'required|numeric',
            'ja2' => 'required|numeric',
            'ja3' => 'required|numeric',
            'mau' => 'required|max:50',
            'binatang' => 'required',
            'shio' => 'required',
            'url_gambar' => 'required',
            'makau' => 'required',
            'syair_id' => 'required',
            'angka' => 'required',
        ], [
            'tanggal.required' => 'Tanggal kosong',
            'pasaran_id.required' => 'Pilih pasaran prediksinya',
            'am1.required' => 'Angka Main harus diisi',
            'am1.numeric' => 'Hanya angka saja',
            'am2.required' => 'Angka Main harus diisi',
            'am2.numeric' => 'Hanya angka saja',
            'am3.required' => 'Angka Main harus diisi',
            'am3.numeric' => 'Hanya angka saja',
            'ja1.required' => 'Angka Main harus diisi',
            'ja1.numeric' => 'Hanya angka saja',
            'ja2.required' => 'Angka Main harus diisi',
            'ja2.numeric' => 'Hanya angka saja',
            'ja3.required' => 'Angka Main harus diisi',
            'ja3.numeric' => 'Hanya angka saja',
            'mau.required' => 'Harus diisi',
            'mau.max' => 'Maximal hanya 50 kata',
            'binatang.required' => 'Harus diisi',
            'shio.required' => 'Shio belum dipilih',
            'url_gambar.required' => 'Link gambar harus diisi',
            'makau.required' => 'Colok Makau harus diisi',
            'syair_id.required' => 'Pilih syair prediksinya',
            'angka.required' => 'Isi 4 angka prediksi Anda'
        ]);

        $prediksi = new Prediksi;
        $prediksi->tanggal = Carbon::parse($request->tanggal);
        $prediksi->pasaran_id = $request->pasaran_id;
        $prediksi->am1 = $request->am1;
        $prediksi->am2 = $request->am2;
        $prediksi->am3 = $request->am3;
        $prediksi->ja1 = $request->ja1;
        $prediksi->ja2 = $request->ja2;
        $prediksi->ja3 = $request->ja3;
        $prediksi->mau = $request->mau;
        $prediksi->binatang = $request->binatang;
        $prediksi->shio = $request->shio;
        $prediksi->url_gambar = $request->url_gambar;
        $prediksi->makau = $request->makau;
        $prediksi->syair_id = $request->syair_id;
        $prediksi->angka = $request->angka;
        $prediksi->save();

        Alert::success('Berhasil', 'Prediksi baru berhasil disimpan');
        return redirect()->route('prediksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prediksi  $prediksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasarans = Pasaran::all();
        $syairs = Syair::all();
        $prediksis = Prediksi::find($id);
        return view ('dashboard.prediksi.show', compact('pasarans', 'syairs', 'prediksis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prediksi  $prediksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasarans = Pasaran::all();
        $syairs = Syair::all();
        $prediksis = Prediksi::find($id);
        return view ('dashboard.prediksi.edit', compact('prediksis', 'syairs', 'pasarans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prediksi  $prediksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required',
            'pasaran_id' => 'required',
            'am1' => 'required|numeric',
            'am2' => 'required|numeric',
            'am3' => 'required|numeric',
            'ja1' => 'required|numeric',
            'ja2' => 'required|numeric',
            'ja3' => 'required|numeric',
            'mau' => 'required|max:50',
            'binatang' => 'required',
            'shio' => 'required',
            'url_gambar' => 'required',
            'makau' => 'required',
            'syair_id' => 'required',
            'angka' => 'required',
        ], [
            'tanggal.required' => 'Tanggal kosong',
            'pasaran_id.required' => 'Pilih pasaran prediksinya',
            'am1.required' => 'Angka Main harus diisi',
            'am1.numeric' => 'Hanya angka saja',
            'am2.required' => 'Angka Main harus diisi',
            'am2.numeric' => 'Hanya angka saja',
            'am3.required' => 'Angka Main harus diisi',
            'am3.numeric' => 'Hanya angka saja',
            'ja1.required' => 'Angka Main harus diisi',
            'ja1.numeric' => 'Hanya angka saja',
            'ja2.required' => 'Angka Main harus diisi',
            'ja2.numeric' => 'Hanya angka saja',
            'ja3.required' => 'Angka Main harus diisi',
            'ja3.numeric' => 'Hanya angka saja',
            'mau.required' => 'Harus diisi',
            'mau.max' => 'Maximal hanya 50 kata',
            'binatang.required' => 'Harus diisi',
            'shio.required' => 'Shio belum dipilih',
            'url_gambar.required' => 'Link gambar harus diisi',
            'makau.required' => 'Colok Makau harus diisi',
            'syair_id.required' => 'Pilih syair prediksinya',
            'angka.required' => 'Isi 4 angka prediksi Anda'
        ]);

        Prediksi::find($id)->update([
            'tanggal' => Carbon::parse($request->tanggal),
            'pasaran_id' => $request->pasaran_id,
            'am1' => $request->am1,
            'am2' => $request->am2,
            'am3' => $request->am3,
            'ja1' => $request->ja1,
            'ja2' => $request->ja2,
            'ja3' => $request->ja3,
            'mau' => $request->mau,
            'binatang' => $request->binatang,
            'shio' => $request->shio,
            'url_gambar' => $request->url_gambar,
            'makau' => $request->makau,
            'syair_id' => $request->syair_id,
            'angka' => $request->angka
        ]);

        Alert::info('Berhasil', 'Prediksi baru berhasil diperbaruin');
        return redirect()->route('prediksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prediksi  $prediksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Prediksi::find($id)->delete();

        Alert::error('Berhasil', 'Data Prediksi berhasil dihapus.');
        return redirect()->route('prediksi.index');
    }
}
