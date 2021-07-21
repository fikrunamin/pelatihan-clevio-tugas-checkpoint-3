<div class="pt-10">
    <div class="text-center mb-16">
        <h1 class="font-black">DASHBOARD</h1>
    </div>
    <div class="text-right pl-5">
        <div class="pr-10 py-3 mb-3 {{\request()->segment(2) == '' ? 'bg-color-1 text-color-4' : 'bg-white text-color-1'}}">
            <a href="{{route('dashboard.index')}}">BERANDA</a>
        </div>
        <div class="pr-10 py-3 mb-3  {{\request()->segment(2) == 'murid' ? 'bg-color-1 text-color-4' : 'bg-white text-color-1'}}">
            <a href="{{route('murid.index')}}">MURID</a>
        </div>
        <div class="pr-10 py-3 mb-3  {{\request()->segment(2) == 'guru' ? 'bg-color-1 text-color-4' : 'bg-white text-color-1'}}">
            <a href="{{route('guru.index')}}">GURU</a>
        </div>
        <div class="pr-10 py-3 mb-3  {{\request()->segment(2) == 'mapel' ? 'bg-color-1 text-color-4' : 'bg-white text-color-1'}}">
            <a href="{{route('mapel.index')}}">MATA PELAJARAN</a>
        </div>
        <div class="pr-10 py-3  {{\request()->segment(2) == 'berita' ? 'bg-color-1 text-color-4' : 'bg-white text-color-1'}}">
            <a href="{{route('berita.index')}}">BERITA</a>
        </div>
    </div>
</div>
