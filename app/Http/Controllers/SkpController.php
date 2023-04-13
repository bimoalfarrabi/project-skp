<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class SkpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periode = Periode::all();
        return view('pegawai.skp.skp', [
            "title" => "Halaman SKP",
            "periodeSkp" => $periode,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pegawai.skp.tambah_skp', [
            'title' => 'Tambah SKP'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'periode_awal' => 'required',
            'periode_akhir' => 'required'
        ]);

        $create = Periode::create($validatedData);
        return redirect()->route('pegawai.skp');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periode $Periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periode $Periode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periode $Periode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periode $Periode)
    {
        //
    }
}
