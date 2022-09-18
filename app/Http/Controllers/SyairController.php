<?php

namespace App\Http\Controllers;

use App\Models\Syair;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SyairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $syairs = Syair::latest()->paginate(10);
        return view('dashboard.syair.index', compact('syairs'));
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
            'judul' => 'required|unique:syairs,judul,',
        ],[
            'judul.required' => 'Judul syair tidak boleh kosong',
            'judul.unique' => 'Judul syair sudah ada',
        ]);

        $syair = new Syair;
        $syair->judul = $request->judul;
        $syair->save();

        Alert::success('Berhasil', 'Data Syair berhasil disimpan');
        return redirect()->route('syair.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Syair  $syair
     * @return \Illuminate\Http\Response
     */
    public function show(Syair $syair)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Syair  $syair
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $syairs = Syair::find($id);
        return view('dashboard.syair.edit', compact('syairs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Syair  $syair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|unique:syairs,judul,' .$id. 'ID',
        ],[
            'judul.required' => 'Judul syair tidak boleh kosong',
            'judul.unique' => 'Judul syair sudah ada',
        ]);

        Syair::find($id)->update([
            'judul' => $request->judul,
        ]);

        Alert::info('Berhasil', 'Data syair berhasil diperbaruin');
        return redirect()->route('syair.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Syair  $syair
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Syair::find($id)->delete();

        Alert::error('Berhasil', 'Data syair berhasil dihapus');
        return redirect()->route('syair.index');
    }
}
