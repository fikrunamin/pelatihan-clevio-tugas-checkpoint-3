@extends('templates.app')

@section('content')
    <div class="bg-color-4 mb-10">
        <div class="xl:container mx-auto px-4">
            <div class="grid grid-cols-12 gap-4 h-96 ">
                <div class="col-span-6 text-left flex items-center">
                    <div>
                        <h1 class="text-6xl font-semibold mb-14 tracking-tight"><span class="font-light">SELAMAT DATANG</span><br> di Sekolahku</h1>
                        {{-- <a href="<?=route_to('books.popular')?>" class="py-4 px-10 bg-black text-white">Selengkapnya</a>--}}
                    </div>
                </div>
                <div class="col-span-6 flex items-center justify-center">
                    <img src="{{asset('images/bg.png')}}" alt="buku populer bulan ini" class="w-96">
                </div>
            </div>
        </div>
    </div>
    <div class="xl:container mx-auto px-4 mb-16">
        <div class="py-8 flex justify-between items-center">
            <h1 class="text-2xl border-b-2 border-color-1">Visi & Misi</h1>
        </div>
        <div class="grid grid-cols-2 gap-x-5">
            <div>
                <h1 class="text-xl mb-5">Visi</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad debitis quasi reiciendis rerum suscipit? Ab dolore, eos et id incidunt maiores maxime neque praesentium quod, sint sit unde vero vitae.</p>
            </div>
            <div>
                <h1 class="text-xl mb-5">Misi</h1>
                <ul class="list-decimal list-inside">
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, cum facere</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, cum facere</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, cum facere</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, cum facere</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, cum facere</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
