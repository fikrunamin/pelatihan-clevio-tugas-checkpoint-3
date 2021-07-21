@extends('templates.app')

@section('content')
    <div class="grid grid-cols-6 h-screen z-0">
        @include('pages.dashboard.sidebar')
        <div class="col-span-5 pt-10 bg-color-1 p-10">
            <div class="bg-white p-10">
                <div class="mb-10">
                    <h3 class="mb-2"><a href="{{route('dashboard.index')}}"
                                        class="border-b-2 border-color-1">Dashboard</a> / Mata Pelajaran</h3>
                    <h1 class="text-2xl font-semibold">Daftar Mata Pelajaran</h1>
                </div>
                <div class="grid grid-cols-1">
                    <div class="flex justify-end gap-x-5 mb-5">
                        <a href="{{route('mapel.create')}}" class="flex items-center py-1 px-3 bg-color-1 text-color-4"><i
                                class="material-icons">add</i> Tambah Mata Pelajaran</a>
                    </div>
                    <div class="grid grid-cols-1">
                        <table id="table" class="text-center">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Perubahan Data Terakhir</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list_mapel as $index => $mapel)
                                <tr>
                                    <td>{{$index + 1}}</td>
                                    <td>{{$mapel->nama}}</td>
                                    <td>{{$mapel->kelas}}</td>
                                    <td>{{$mapel->updated_at->diffForHumans()}}</td>
                                    <td>
                                        <div class="flex gap-x-5">
                                            <a href="{{route('mapel.show', ['mapel' => $mapel->id])}}"><i
                                                    class="material-icons">visibility</i></a>
                                            <a href="{{route('mapel.edit', ['mapel' => $mapel->id])}}"><i
                                                    class="material-icons">edit</i></a>
                                            <form action="{{route('mapel.destroy', ['mapel' => $mapel->id])}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Anda yakin menghapus data ini?')">
                                                    <i class="material-icons">delete</i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });
    </script>
    @if ($message = Session::get('success'))
        <script>
            Swal.fire(
                'Mantap!',
                '{{$message}}',
                'success'
            )
        </script>
    @elseif($message = Session::get('error'))
        <script>
            Swal.fire(
                'Gagal!',
                '{{$message}}',
                'error'
            )
        </script>
    @endif

@endsection
