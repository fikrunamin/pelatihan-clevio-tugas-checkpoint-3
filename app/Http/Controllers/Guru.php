<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru as GuruModel;
use Illuminate\Support\Facades\File;

class Guru extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'list_guru' => GuruModel::with(['mata_pelajaran'])->latest()->get()
        ];

        return view('pages.dashboard.guru.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'mata_pelajaran' => \App\Models\MataPelajaran::all()
        ];
        return view('pages.dashboard.guru.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'gambar_profil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required|max:255',
            'mata_pelajaran' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ]);
        if ($validated) {
            $imageName = time() . '.' . $request->gambar_profil->extension();
            $request->gambar_profil->move(public_path('images'), $imageName);

            GuruModel::create([
                'gambar_profil' => $imageName,
                'nim' => $request->nis ?? NULL,
                'nama' => $request->nama,
                'mata_pelajaran_id' => $request->mata_pelajaran,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
            ]);
            return redirect()->route('guru.index')->with('success', 'Berhasil menambahkan data!');
        }
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'guru' => GuruModel::find($id)
        ];
        return view('pages.dashboard.guru.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'guru' => GuruModel::find($id),
            'mata_pelajaran' => \App\Models\MataPelajaran::all()
        ];
        return view('pages.dashboard.guru.edit', $data);
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
        $guru = GuruModel::find($id);
        $validated = $request->validate([
            'gambar_profil' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required|max:255',
            'mata_pelajaran' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ]);
        if ($validated) {
            if (isset($request->gambar_profil)) {
                if (File::delete(public_path('images/' . $guru->gambar_profil))) {
                    $imageName = time() . '.' . $request->gambar_profil->extension();
                    $request->gambar_profil->move(public_path('images'), $imageName);
                }
            }

            $guru->update([
                'gambar_profil' => $request->gambar_profil ? $imageName : $guru->gambar_profil,
                'nim' => $request->nim ?? NULL,
                'nama' => $request->nama,
                'mata_pelajaran_id' => $request->mata_pelajaran,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
            ]);
            return redirect()->route('guru.index')->with('success', 'Berhasil mengedit data!');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $murid = GuruModel::find($id);
        if (File::delete(public_path('images/' . $murid->gambar_profil))) {
            $murid->delete();
            return redirect()->route('guru.index')->with('success', 'Berhasil menghapus data!');
        }
        return redirect()->route('guru.index')->with('error', 'Gagal menghapus data!');
    }
}
