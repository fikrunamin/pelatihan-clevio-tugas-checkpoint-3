@extends('templates.app')

@section('content')
    <div class="grid grid-cols-6 h-screen z-0">
        @include('pages.dashboard.sidebar')
        <div class="col-span-5 pt-10 bg-color-1 p-10">
            <div class="bg-white p-10">
                <div class="mb-10">
                    <h3 class="mb-2"><a href="{{route('dashboard.index')}}"
                                        class="border-b-2 border-color-1">Dashboard</a> / <a href="{{route('murid.index')}}" class="border-b-2 border-color-1">Murid</a> / Tambah Murid</h3>
                    <h1 class="text-2xl font-semibold">Tambah Murid</h1>
                </div>
                <div class="grid grid-cols-1">
                    <div class="flex justify-start gap-x-5 mb-5">
                        <a href="{{route('murid.index')}}" class="flex items-center py-1 px-3 bg-color-1 text-color-4"><i class="material-icons">chevron_left</i> Kembali</a>
                    </div>
                    <div class="grid grid-cols-1">
                        <form action="{{route('murid.store')}}" method="post" class="" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="w-full mb-3">
                                <label class="">Gambar Profil</label><br>
                                <input type="file" class="px-3 py-2 bg-color-1 text-color-4 w-full mt-3" name="gambar_profil">
                            </div>
                            <div class="w-full mb-3">
                                <label class="">NIS</label><br>
                                <input type="text" class="px-3 py-2 bg-color-1 text-color-4 w-full mt-3" name="nis">
                            </div>
                            <div class="w-full mb-3">
                                <label class="">Nama Lengkap</label><br>
                                <input type="text" class="px-3 py-2 bg-color-1 text-color-4 w-full mt-3" name="nama">
                            </div>
                            <div class="w-full mb-3">
                                <label class="">Kelas</label><br>
                                <select name="kelas" id="" class="px-3 py-2 bg-color-1 text-color-4 w-full mt-3">
                                    <option disabled selected>-- Pilih Kelas --</option>
                                    <option value="10">X</option>
                                    <option value="11">XI</option>
                                    <option value="12">XII</option>
                                </select>
                            </div>
                            <div class="w-full mb-3">
                                <label class="">Jurusan</label><br>
                                <select name="jurusan" id="" class="px-3 py-2 bg-color-1 text-color-4 w-full mt-3">
                                    <option disabled selected>-- Pilih Jurusan --</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                    <option value="BAHASA">BAHASA</option>
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
