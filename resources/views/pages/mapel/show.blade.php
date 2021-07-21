@extends('templates.app')

@section('content')
    <div class="xl:container mx-auto px-4 mb-16" id="app">
        <div class="py-8 flex justify-between items-center">
            <h1 class="text-2xl"><a href="{{route('mapel')}}" class="border-b-2 border-black">Mata Pelajaran</a> /
                {{$mapel->nama}}</h1>
        </div>
        <div class="grid grid-cols-1 gap-y-5">
            <div class="text-center">
                <h1 class="text-xl font-medium mb-1">{{$mapel->nama}}</h1>
                <p class="text-sm text-gray-800 mb-1">Kelas {{$mapel->kelas}}</p>
            </div>
            <div class="leading-loose">
                {!! $mapel->deskripsi !!}
            </div>
        </div>
    </div>
@endsection
