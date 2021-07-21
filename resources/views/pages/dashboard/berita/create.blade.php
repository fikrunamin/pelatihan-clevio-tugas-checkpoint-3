@extends('templates.app')

@section('content')
    <div class="grid grid-cols-6 h-screen z-0">
        @include('pages.dashboard.sidebar')
        <div class="col-span-5 pt-10 bg-color-1 p-10">
            <div class="bg-white p-10">
                <div class="mb-10">
                    <h3 class="mb-2"><a href="{{route('dashboard.index')}}"
                                        class="border-b-2 border-color-1">Dashboard</a> / <a href="{{route('berita.index')}}" class="border-b-2 border-color-1">Berita</a> / Tambah Berita</h3>
                    <h1 class="text-2xl font-semibold">Tambah Berita</h1>
                </div>
                <div class="grid grid-cols-1">
                    <div class="flex justify-start gap-x-5 mb-5">
                        <a href="{{route('berita.index')}}" class="flex items-center py-1 px-3 bg-color-1 text-color-4"><i class="material-icons">chevron_left</i> Kembali</a>
                    </div>
                    <div class="grid grid-cols-1">
                        <form action="{{route('berita.store')}}" method="post" class="" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="w-full mb-3">
                                <label class="">Sampul</label><br>
                                <input type="file" class="px-3 py-2 bg-color-1 text-color-4 w-full mt-3" name="sampul">
                            </div>
                            <div class="w-full mb-3">
                                <label class="">Judul</label><br>
                                <input type="text" class="px-3 py-2 bg-color-1 text-color-4 w-full mt-3" name="judul">
                            </div>
                            <div class="w-full mb-3">
                                <label class="">Penulis</label><br>
                                <input type="text" class="px-3 py-2 bg-color-1 text-color-4 w-full mt-3" name="penulis">
                            </div>
                            <div class="w-full mb-3">
                                <label class="">Isi</label><br>
                                <textarea name="isi" id="deskripsi"></textarea>
                                {{-- <p class="text-red-500">Kolom ini tidak boleh kosong</p>--}}
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
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'deskripsi' );
    </script>
@endsection
