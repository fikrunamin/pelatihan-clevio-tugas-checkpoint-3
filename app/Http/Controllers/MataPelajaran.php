<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataPelajaran as MataPelajaranModel;
use Illuminate\Support\Str;

class MataPelajaran extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'list_mapel' => MataPelajaranModel::latest()->get()
        ];

        return view('pages.dashboard.mata-pelajaran.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.mata-pelajaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'kelas' => 'required',
            'deskripsi' => 'required',
        ]);
        if ($validated) {
            MataPelajaranModel::create([
                'nama' => $request->nama,
                'slug' => Str::slug($request->nama),
                'kelas' => $request->kelas,
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect()->route('mapel.index')->with('success', 'Berhasil menambahkan data!');
        }
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'mapel' => MataPelajaranModel::find($id)
        ];
        return view('pages.dashboard.mata-pelajaran.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mapel = MataPelajaranModel::find($id);
        $mapel->delete();
        return redirect()->route('mapel.index')->with('success', 'Berhasil menghapus data!');
    }
}
