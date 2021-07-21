@extends('templates.app')

@section('content')
<div class="bg-color-4 mb-10">
    <div class="xl:container mx-auto px-4">
        <div class="grid grid-cols-6 gap-4 h-96 ">
            <div class="col-span-6 text-center flex items-center justify-center">
                <div>
                    <h4 class="font-medium text-gray-700 tracking-widest">BERITA PILIHAN SEKOLAH</h4>
                    <h1 class="text-6xl font-semibold mb-14 tracking-tight"><span class="font-light">Paling Populer</span><br>Bulan Ini</h1>
                    <a href="{{route('berita.populer')}}" class="py-4 px-10 bg-color-1 text-white">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="xl:container mx-auto px-4 mb-16">
    <div class="py-8 flex justify-between items-center">
        <h1 class="text-2xl">Paling Sering Dibaca</h1>
        <a href="{{route('berita.populer')}}" class="flex items-center gap-x-3">Lihat Semua<i class="material-icons">chevron_right</i></a>
    </div>
    <div class="grid grid-cols-3">
        @foreach($list_berita_populer as $index => $berita)
        <div class="border h-96 py-5 px-8">
            <div class="h-1/2 flex justify-center">
                <img src="{{asset('images/' . $berita->sampul)}}" alt="" class="h-full object-cover">
            </div>
            <div class="h-1/2 pt-5">
                <h1 class="text-xl font-medium mb-1">{{$berita->judul}}</h1>
                <p class="text-sm text-gray-800 mb-1">{{$berita->penulis}}</p>
                <a href="{{route('berita.show', $berita->slug)}}" class="text-sm">Baca Sekarang</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="xl:container mx-auto px-4 mb-16">
    <div class="py-8 flex justify-between items-center">
        <h1 class="text-2xl">Berita Terbaru</h1>
        <a href="{{route('berita.all')}}" class="flex items-center gap-x-3">Lihat Semua<i class="material-icons">chevron_right</i></a>
    </div>
    <div class="grid grid-cols-4">
        @foreach($list_berita_terbaru as $index => $berita)
            <div class="border h-96 py-5 px-8">
                <div class="h-1/2 flex justify-center">
                    <img src="{{asset('images/' . $berita->sampul)}}" alt="" class="h-full object-cover">
                </div>
                <div class="h-1/2 pt-5">
                    <h1 class="text-xl font-medium mb-1">{{$berita->judul}}</h1>
                    <p class="text-sm text-gray-800 mb-1">{{$berita->penulis}}</p>
                    <a href="{{route('berita.show', $berita->slug)}}" class="text-sm">Baca Sekarang</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
