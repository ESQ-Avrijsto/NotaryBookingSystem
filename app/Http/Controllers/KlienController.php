<?php

namespace App\Http\Controllers;

use App\Models\Klien;
use Illuminate\Http\Request;

class KlienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.klien.index', [
            'klien' => Klien::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.klien.create');
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
            'id_klien' => 'required|max:8',
            'nama_klien' => 'required|max:80',
            'alamat' => 'required|max:100',
            'no_tlp' => 'required|max:14',

        ]);
        Klien::create($request->all());

        return redirect('/dashboard/klien')->with('Berhasil', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Klien  $klien
     * @return \Illuminate\Http\Response
     */
    public function show(Klien $klien)
    {
        return view('dashboard.klien.show', [
            'klien' => $klien
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Klien  $klien
     * @return \Illuminate\Http\Response
     */
    public function edit(Klien $klien)
    {
        return view('dashboard.klien.edit', [
            'klien' => $klien
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Klien  $klien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Klien $klien)
    {
        $request->validate([
            'id_klien' => 'required|max:8',
            'nama_klien' => 'required|max:80',
            'alamat' => 'required|max:100',
            'no_tlp' => 'required|max:14',

        ]);
        $klien->update($request->all());

        return redirect('/dashboard/klien')->with('Berhasil', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Klien  $klien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Klien $klien)
    {
        Klien::destroy($klien->id);

        return redirect('/dashboard/klien')->with('Berhasil', 'Data Berhasil Dihapus');
    }
}
