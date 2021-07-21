@extends('templates.app')

@section('content')
<div class="xl:container mx-auto px-4 mb-16">
    <div class="py-8 flex justify-between items-center">
        <h1 class="text-2xl">{{$judul}}</h1>
    </div>
    <div class="grid grid-cols-6">
        @foreach($list_berita as $index => $berita)
        <div class="border min-h-96 py-5">
            <div class="h-1/2 flex justify-center">
                <img src="{{asset('images/' . $berita->sampul)}}" alt="" class="h-full">
            </div>
            <div class="h-1/2 px-8 pt-5">
                <h1 class="text-xl font-medium mb-1">{{$berita->judul}}</h1>
                <p class="text-sm text-gray-800 mb-1">{{$berita->penulis}}</p>
                <p class="text-xs text-gray-800 mb-1 flex items-center"><i class="material-icons text-sm mr-2">visibility</i> {{$berita->views}}x dilihat</p>
                <a href="{{route('berita.show', ['slug' => $berita->slug])}}" class="text-sm">Baca Sekarang</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
