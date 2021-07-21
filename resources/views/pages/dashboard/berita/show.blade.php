@extends('templates.app')

@section('content')
    <div class="grid grid-cols-6 h-screen z-0">
        @include('pages.dashboard.sidebar')
        <div class="col-span-5 pt-10 bg-color-1 p-10">
            <div class="bg-white p-10">
                <div class="mb-10">
                    <h3 class="mb-2"><a href="{{route('dashboard.index')}}"
                                        class="border-b-2 border-color-1">Dashboard</a> / <a
                            href="{{route('guru.index')}}" class="border-b-2 border-color-1">Guru</a> /
                        {{$guru->nama}}</h3>
                    <h1 class="text-2xl font-semibold">Profil {{$guru->nama}}</h1>
                </div>
                <div class="grid grid-cols-1">
                    <div class="flex justify-start gap-x-5 mb-5">
                        <a href="{{route('guru.index')}}"
                           class="flex items-center py-1 px-3 bg-color-1 text-color-4"><i class="material-icons">chevron_left</i>
                            Kembali</a>
                    </div>
                    <div class="grid grid-cols-1">
                        <table class="text-left border-2 border-black">
                            <thead>
                            <tr>
                                <th class="border-2 border-black p-5">Nama</th>
                                <th class="border-2 border-black p-5">Deskripsi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="border-2 border-black p-5">Gambar Profil</td>
                                <td class="border-2 border-black p-5"><img src="{{asset('images/' . $guru->gambar_profil)}}" alt="" width="100px"></td>
                            </tr>
                            <tr>
                                <td class="border-2 border-black p-5">Nomor Induk Mahasiswa (NIM)</td>
                                <td class="border-2 border-black p-5">{{$guru->nim ?? 'Belum ada NIM'}}</td>
                            </tr>
                            <tr>
                                <td class="border-2 border-black p-5">Nama Lengkap</td>
                                <td class="border-2 border-black p-5">{{$guru->nama}}</td>
                            </tr>
                            <tr>
                                <td class="border-2 border-black p-5">Mata Pelajaran</td>
                                <td class="border-2 border-black p-5">{{$guru->mata_pelajaran->nama}} kelas {{$guru->mata_pelajaran->kelas}}</td>
                            </tr>
                            <tr>
                                <td class="border-2 border-black p-5">Tempat Lahir</td>
                                <td class="border-2 border-black p-5">{{$guru->tempat_lahir}}</td>
                            </tr>
                            <tr>
                                <td class="border-2 border-black p-5">Tanggal Lahir</td>
                                <td class="border-2 border-black p-5">{{\Carbon\Carbon::parse($guru->tanggal_lahir)->translatedFormat('l, d F Y')}}</td>
                            </tr>
                            <tr>
                                <td class="border-2 border-black p-5">Dibuat Pada</td>
                                <td class="border-2 border-black p-5">{{\Carbon\Carbon::parse($guru->created_at)->translatedFormat('l, d F Y')}}</td>
                            </tr>
                            <tr>
                                <td class="border-2 border-black p-5">Perubahan Terakhir</td>
                                <td class="border-2 border-black p-5">{{\Carbon\Carbon::parse($guru->updated_at)->translatedFormat('l, d F Y')}}</td>
                            </tr>
                            </tbody>
                        </table>
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
