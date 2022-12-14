<?php

namespace App\Http\Controllers;

use App\Models\bahanAjar;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BahanAjarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('BahanAjar',[
            'title' => 'LePlace',
            'description' => 'Halaman Bahan Ajar',
        ]);
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
        $BahanAjar = new bahanAjar();
        $BahanAjar->title = $request->judul_materi;
        $BahanAjar->description = $request->deskripsi;
        $BahanAjar->minggu_ke = $request->minggu_ke;
        $BahanAjar->file = $request->file_materi;
        $BahanAjar->save();
        return redirect()->back()->with('message', 'Bahan Ajar Telah Berhasil Diunggah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bahanAjar  $bahanAjar
     * @return \Illuminate\Http\Response
     */
    public function show(bahanAjar $bahanAjar)
    {
        //bahanAjar = $bahanAjar::where('author', auth()->user()->email)->get();
        return Inertia::render('Dashboard',[
            'bahanAjar' => $bahanAjar,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bahanAjar  $bahanAjar
     * @return \Illuminate\Http\Response
     */
    public function edit(bahanAjar $bahanAjar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bahanAjar  $bahanAjar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bahanAjar $bahanAjar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bahanAjar  $bahanAjar
     * @return \Illuminate\Http\Response
     */
    public function destroy(bahanAjar $bahanAjar)
    {
        //
    }
}
