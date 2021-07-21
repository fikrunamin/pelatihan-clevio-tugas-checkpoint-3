<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita as BeritaModel;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class Berita extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'list_berita' => BeritaModel::latest()->get()
        ];

        return view('pages.dashboard.berita.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.berita.create');
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
            'sampul' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'required|max:255',
            'penulis' => 'required|max:255',
            'isi' => 'required',
        ]);
        if ($validated) {
            $imageName = time() . '.' . $request->sampul->extension();
            $request->sampul->move(public_path('images'), $imageName);

            BeritaModel::create([
                'sampul' => $imageName,
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'penulis' => $request->penulis,
                'views' => 0,
                'isi' => $request->isi,
            ]);
            return redirect()->route('berita.index')->with('success', 'Berhasil menambahkan data!');
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
        $data = [
            'berita' => BeritaModel::find($id)
        ];
        return view('pages.dashboard.berita.edit', $data);
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
        $berita = BeritaModel::find($id);
        $validated = $request->validate([
            'sampul' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'judul' => 'required|max:255',
            'penulis' => 'required|max:255',
            'isi' => 'required',
        ]);
        if ($validated) {
            if (isset($request->sampul)) {
                if (File::delete(public_path('images/' . $berita->sampul))) {
                    $imageName = time() . '.' . $request->sampul->extension();
                    $request->sampul->move(public_path('images'), $imageName);
                }
            }

            $berita->update([
                'sampul' => $request->sampul ? $imageName : $berita->sampul,
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'isi' => $request->isi,
            ]);
            return redirect()->route('berita.index')->with('success', 'Berhasil mengubah data!');
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
        $berita = BeritaModel::find($id);
        if (File::delete(public_path('images/' . $berita->sampul))) {
            $berita->delete();
            return redirect()->route('berita.index')->with('success', 'Berhasil menghapus data!');
        }
        return redirect()->route('berita.index')->with('error', 'Gagal menghapus data!');
    }
}
