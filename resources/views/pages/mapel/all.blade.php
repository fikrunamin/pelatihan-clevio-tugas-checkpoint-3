@extends('templates.app')

@section('content')
<div class="xl:container mx-auto px-4 mb-16">
    <div class="py-8 flex justify-between items-center">
        <h1 class="text-2xl">Semua Mata Pelajaran Kelas 10</h1>
    </div>
    <div class="grid grid-cols-6">
        @foreach($list_mapel_10 as $index => $mapel)
        <div class="border min-h-96 py-5">
            <div class="px-8 pt-5">
                <h1 class="text-xl font-medium mb-1">{{$mapel->nama}}</h1>
                <p class="text-sm text-gray-800 mb-1">Kelas {{$mapel->kelas}}</p>
                <a href="{{route('mapel.show', ['slug' => $mapel->slug])}}" class="text-sm">Detail</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="xl:container mx-auto px-4 mb-16">
    <div class="py-8 flex justify-between items-center">
        <h1 class="text-2xl">Semua Mata Pelajaran Kelas 11</h1>
    </div>
    <div class="grid grid-cols-6">
        @foreach($list_mapel_11 as $index => $mapel)
            <div class="border min-h-96 py-5">
                <div class="px-8 pt-5">
                    <h1 class="text-xl font-medium mb-1">{{$mapel->nama}}</h1>
                    <p class="text-sm text-gray-800 mb-1">Kelas {{$mapel->kelas}}</p>
                    <a href="{{route('mapel.show', ['slug' => $mapel->slug])}}" class="text-sm">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="xl:container mx-auto px-4 mb-16">
    <div class="py-8 flex justify-between items-center">
        <h1 class="text-2xl">Semua Mata Pelajaran Kelas 12</h1>
    </div>
    <div class="grid grid-cols-6">
        @foreach($list_mapel_12 as $index => $mapel)
            <div class="border min-h-96 py-5">
                <div class="px-8 pt-5">
                    <h1 class="text-xl font-medium mb-1">{{$mapel->nama}}</h1>
                    <p class="text-sm text-gray-800 mb-1">Kelas {{$mapel->kelas}}</p>
                    <a href="{{route('mapel.show', ['slug' => $mapel->slug])}}" class="text-sm">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
