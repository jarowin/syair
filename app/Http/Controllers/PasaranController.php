<?php

namespace App\Http\Controllers;

use App\Models\Pasaran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PasaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasarans = Pasaran::latest()->paginate(10);
        return view('dashboard.pasaran.index', compact('pasarans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'nama' => 'required|unique:pasarans,nama,',
        ],[
            'nama.required' => 'Nama pasaran tidak boleh kosong',
            'nama.unique' => 'Nama pasaran sudah ada',
        ]);

        $pasaran = new Pasaran;
        $pasaran->nama = $request->nama;
        $pasaran->save();

        Alert::success('Berhasil', 'Data Pasaran berhasil disimpan');
        return redirect()->route('pasaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasaran  $pasaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pasaran $pasaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasaran  $pasaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasarans = Pasaran::find($id);
        return view('dashboard.pasaran.edit', compact('pasarans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasaran  $pasaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|unique:pasarans,nama,' .$id. 'ID',
        ],[
            'nama.required' => 'Nama pasaran tidak boleh kosong',
            'nama.unique' => 'Nama pasaran sudah ada',
        ]);

        Pasaran::find($id)->update([
            'nama' => $request->nama,
        ]);

        Alert::info('Berhasil', 'Data Pasaran berhasil diperbaruin');
        return redirect()->route('pasaran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasaran  $pasaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pasaran::find($id)->delete();

        Alert::error('Berhasil', 'Data Pasaran berhasil dihapus');
        return redirect()->route('pasaran.index');
    }
}
