<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\MataPelajaran;

class Main extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.beranda');
    }

    public function berita(){
        $data = [
            'list_berita_populer' => Berita::orderBy('views', 'asc')->limit(5)->get(),
            'list_berita_terbaru' => Berita::latest()->limit(6)->get(),
        ];
        return view('pages.berita', $data);
    }

    public function berita_all(){
        $data = [
            'judul' => 'Semua Berita',
            'list_berita' => Berita::latest()->get()
        ];
        return view('pages.berita.all', $data);
    }

    public function berita_populer(){
        $data = [
            'judul' => 'Berita Terpopuler',
            'list_berita' => Berita::orderBy('views', 'asc')->get()
        ];
        return view('pages.berita.all', $data);
    }

    public function berita_show($slug){
        $berita = Berita::where('slug', $slug)->first();
        $berita->increment('views', 1);

        $data = [
            'berita' => $berita
        ];
        return view('pages.berita.show', $data);
    }

    public function mapel(){
        $data = [
            'list_mapel_10' => MataPelajaran::where('kelas', '10')->get(),
            'list_mapel_11' => MataPelajaran::where('kelas', '11')->get(),
            'list_mapel_12' => MataPelajaran::where('kelas', '12')->get(),
        ];
        return view('pages.mapel.all', $data);
    }

    public function mapel_show($slug){
        $data = [
            'mapel' => MataPelajaran::where('slug', $slug)->first()
        ];
        return view('pages.mapel.show', $data);
    }
}
