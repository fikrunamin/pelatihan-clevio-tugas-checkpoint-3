<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid as MuridModel;
use App\Models\Guru as GuruModel;
use App\Models\MataPelajaran as MataPelajaranModel;
use App\Models\Berita as BeritaModel;

class Dashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'total_murid' => MuridModel::count(),
            'total_guru' => GuruModel::count(),
            'total_mapel' => MataPelajaranModel::count(),
            'total_berita' => BeritaModel::count(),
            'list_murid' => MuridModel::latest()->limit(5)->get(),
            'list_guru' => GuruModel::latest()->limit(5)->get(),
            'list_mapel' => MataPelajaranModel::latest()->limit(5)->get(),
            'list_berita' => BeritaModel::latest()->limit(5)->get(),
        ];
        return view('pages.dashboard.index', $data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
