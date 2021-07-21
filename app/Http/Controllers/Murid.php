<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid as MuridModel;
use Illuminate\Support\Facades\File;

class Murid extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'list_murid' => MuridModel::latest()->get()
        ];

        return view('pages.dashboard.murid.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.murid.create');
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
            'gambar_profil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required|max:255',
            'kelas' => 'required',
            'jurusan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ]);
        if ($validated) {
            $imageName = time() . '.' . $request->gambar_profil->extension();
            $request->gambar_profil->move(public_path('images'), $imageName);

            MuridModel::create([
                'gambar_profil' => $imageName,
                'nis' => $request->nis ?? 0,
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'jurusan' => $request->jurusan,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
            ]);
            return redirect()->route('murid.index')->with('success', 'Berhasil menambahkan data!');
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
        $data = [
            'murid' => MuridModel::find($id)
        ];
        return view('pages.dashboard.murid.show', $data);
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
            'murid' => MuridModel::find($id)
        ];
        return view('pages.dashboard.murid.edit', $data);
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
        $murid = MuridModel::find($id);
        $validated = $request->validate([
            'gambar_profil' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required|max:255',
            'kelas' => 'required',
            'jurusan' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ]);
        if ($validated) {
            if (isset($request->gambar_profil)) {
                if (File::delete(public_path('images/' . $murid->gambar_profil))) {
                    $imageName = time() . '.' . $request->gambar_profil->extension();
                    $request->gambar_profil->move(public_path('images'), $imageName);
                }
            }

            $murid->update([
                'gambar_profil' => $request->gambar_profil ? $imageName : $murid->gambar_profil,
                'nis' => $request->nis ?? 0,
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'jurusan' => $request->jurusan,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
            ]);
            return redirect()->route('murid.index')->with('success', 'Berhasil mengedit data!');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $murid = MuridModel::find($id);
        if (File::delete(public_path('images/' . $murid->gambar_profil))) {
            $murid->delete();
            return redirect()->route('murid.index')->with('success', 'Berhasil menghapus data!');
        }
        return redirect()->route('murid.index')->with('error', 'Gagal menghapus data!');
    }
}
