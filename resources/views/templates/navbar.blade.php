<!-- Navbar -->
<div class="grid grid-cols-1 bg-white w-full shadow-md z-50">
    <div class="px-4 xl:px-12">
        <div class="flex items-center justify-between h-28">
            <div class="flex gap-x-20">
                <div class="text-xl font-bold">
                    <a href="{{route('index')}}" class="flex items-center gap-x-3">
                        <i class="material-icons text-color-1">school</i>
                        Sekolahku
                    </a>
                </div>
                <div class="flex items-center gap-x-8 font-medium">
                    <div class="{{\request()->segment(1) == '' ? 'border-b-2 border-black' : ''}}"><a href="{{route('index')}}">BERANDA</a></div>
                    <div class="{{\request()->segment(1) == 'mapel' ? 'border-b-2 border-black' : ''}}"><a href="{{route('mapel.index')}}">MATA PELAJARAN</a></div>
                    <div class="{{\request()->segment(1) == 'berita' ? 'border-b-2 border-black' : ''}}"><a href="{{route('berita.index')}}">BERITA</a></div>
                    <div class="{{\request()->segment(1) == 'dashboard' ? 'border-b-2 border-black' : ''}}"><a href="{{route('dashboard.index')}}">DASHBOARD</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
