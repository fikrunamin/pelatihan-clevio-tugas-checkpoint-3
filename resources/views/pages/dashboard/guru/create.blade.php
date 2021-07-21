@extends('templates.app')

@section('content')
    <div class="grid grid-cols-6 h-screen z-0">
        @include('pages.dashboard.sidebar')
        <div class="col-span-5 pt-10 bg-color-1 p-10">
            <div class="bg-white p-10">
                <div class="mb-10">
                    <h3 class="mb-2"><a href="{{route('dashboard.index')}}"
                                        class="border-b-2 border-color-1">Dashboard</a> / <a href="{{route('guru.index')}}" class="border-b-2 border-color-1">Guru</a> / Tambah Guru</h3>
                    <h1 class="text-2xl font-semibold">Tambah Guru</h1>
                </div>
                <div class="grid grid-cols-1">
                    <div class="flex justify-start gap-x-5 mb-5">
                        <a href="{{route('guru.index')}}" class="flex items-center py-1 px-3 bg-color-1 text-color-4"><i class="material-icons">chevron_left</i> Kembali</a>
                    </div>
                    <div class="grid grid-cols-1">
                        <form action="{{route('guru.store')}}" method="post" class="" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="w-full mb-3">
                                <label class="">Gambar Profil</label><br>
                                <input type="file" class="px-3 py-2 bg-color-1 text-color-4 w-full mt-3" name="gambar_profil">
                            </div>
                            <div class="w-full mb-3">
                                <label class="">NIM</label><br>
                                <input type="text" class="px-3 py-2 bg-color-1 text-color-4 w-full mt-3" name="nim">
                            </div>
                            <div class="w-full mb-3">
                                <label class="">Nama Lengkap</label><br>
                                <input type="text" class="px-3 py-2 bg-color-1 text-color-4 w-full mt-3" name="nama">
                            </div>
                            <div class="w-full mb-3">
                                <label class="">Mata Pelajaran</label><br>
                                <select name="mata_pelajaran" id="" class="px-3 py-2 bg-color-1 text-color-4 w-full mt-3">
                                    <option disabled selected>-- Pilih Mata Pelajaran --</option>
                                    @foreach($mata_pelajaran as $index => $mp)
                                        <option value="{{$mp->id}}">{{$mp->nama}} Kelas {{$mp->kelas}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full mb-3">
                                <label class="">Tempat Lahir</label><br>
                                <input type="text" class="px-3 py-2 bg-color-1 text-color-4 w-full mt-3" name="tempat_lahir">
                                {{-- <p class="text-red-500">Kolom ini tidak boleh kosong</p>--}}
                            </div>
                            <div class="w-full mb-5">
                                <label class="">Tanggal Lahir</label><br>
                                <input type="date" class="px-3 py-2 bg-color-1 text-color-4 w-full mt-3" name="tanggal_lahir">
                            </div>
                            <div class="w-full mb-3 text-right">
                                <button type="submit" class="bg-color-1 text-color-4 py-1 px-3">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
@endsection

@section('scripts')
@endsection
