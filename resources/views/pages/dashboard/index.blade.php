@extends('templates.app')

@section('content')
    <div class="grid grid-cols-6 h-screen z-0">
        @include('pages.dashboard.sidebar')
        <div class="col-span-5 pt-10 bg-color-1 p-10">
            <div class="bg-white p-10">
                <div class="mb-10">
                    <h3 class="mb-2">Dashboard</h3>
                    <h1 class="text-2xl font-semibold">Dashboard</h1>
                </div>
                <div class="grid grid-cols-4 gap-5">
                    <div class="h-32 bg-color-1 text-color-4 p-3 text-center">
                        <i class="material-icons text-2xl">groups</i>
                        <h1 class="text-4xl">{{$total_murid}}</h1>
                        <p>Total Murid</p>
                    </div>
                    <div class="h-32 bg-color-1 text-color-4 p-3 text-center">
                        <i class="material-icons text-2xl">groups</i>
                        <h1 class="text-4xl">{{$total_guru}}</h1>
                        <p>Total Guru</p>
                    </div>
                    <div class="h-32 bg-color-1 text-color-4 p-3 text-center">
                        <i class="material-icons text-2xl">auto_stories</i>
                        <h1 class="text-4xl">{{$total_mapel}}</h1>
                        <p>Total Mata Pelajaran</p>
                    </div>
                    <div class="h-32 bg-color-1 text-color-4 p-3 text-center">
                        <i class="material-icons text-2xl">feed</i>
                        <h1 class="text-4xl">{{$total_berita}}</h1>
                        <p>Total Berita</p>
                    </div>

                    <div class="col-span-2 border-2 border-color-1 p-5">
                        <h1 class="font-bold text-xl mb-3">Data Murid Terbaru</h1>
                        <table id="list_murid" class="text-center">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Dibuat pada</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_murid as $index => $murid)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>{{$murid->nama}}</td>
                                    <td>{{$murid->created_at->diffForHumans()}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-span-2 border-2 border-color-1 p-5">
                        <h1 class="font-bold text-xl mb-3">Data Guru Terbaru</h1>
                        <table id="list_murid" class="text-center">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Dibuat pada</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_guru as $index => $guru)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>{{$guru->nama}}</td>
                                    <td>{{$guru->created_at->diffForHumans()}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-span-2 border-2 border-color-1 p-5">
                        <h1 class="font-bold text-xl mb-3">Data Mata Pelajaran Terbaru</h1>
                        <table id="list_murid" class="text-center">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Mapel</th>
                                <th>Dibuat pada</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_mapel as $index => $mapel)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>{{$mapel->nama}}</td>
                                    <td>{{$mapel->created_at->diffForHumans()}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-span-2 border-2 border-color-1 p-5">
                        <h1 class="font-bold text-xl mb-3">Data Berita Terbaru</h1>
                        <table id="list_murid" class="text-center">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Dibuat pada</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_berita as $index => $berita)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>{{$berita->nama}}</td>
                                    <td>{{$berita->created_at->diffForHumans()}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('table').DataTable({
                "bPaginate": false,
                "bLengthChange": false,
                "bFilter": false,
                "bInfo": false
            });
        });
    </script>
@endsection
