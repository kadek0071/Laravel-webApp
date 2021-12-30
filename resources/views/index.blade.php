@extends('layouts/default')

@section('page-content')
    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl">Siema <span class="text-pink-500">Eniu</span></h2>
            <h3 class="text-2xl sm:text-4xl italic">Tu Kadek</h3>
        </div>
        
        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center">Scroll to learn more</p>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Introduction</h3>
            <h4 class="text-xl mb-3 text-gray-200">Short description</h4>
            <p class="mb-6">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Sed non cumque ipsa consectetur architecto quo labore officia 
                accusamus tempore natus distinctio laudantium, ratione eius 
                quibusdam modi, impedit recusandae error. 
                Velit animi quis eveniet ullam 
                alias nisi tempora, laborum ratione 
                praesentium reprehenderit porro laudantium 
                excepturi sapiente corporis, odio quas. Fugit, architecto.
            </p>
            <a href="{{route('about')}}" target="_blank" rel="noopener norefer" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Learn More</a>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">What purpose?</h3>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Printers</h3>
                        <p class="text-gray-200 mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quasi libero earum itaque hic labore dolorem, odit porro vitae totam minus?
                        </p>
                        <a href="{{url('https://www.youtube.com/channel/UCNZSUwIa4vaWGvgU8BBPssw')}}" target="_blank" rel="noopener norefer" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Kanał YT</a>
                    </div>             
                </div>
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Printers Database</h3>
                        <p class="text-gray-200 mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Quasi libero earum itaque hic labore dolorem, odit porro vitae totam minus?
                        </p>
                        <a href="#" target="_blank" rel="noopener norefer" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Baza</a>
                    </div>           
                </div>
            </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Where?</h3>
            <h3 class="text-xl mb-6">Odwiedź kanał</h3>
            <div class="-mx-2 sm:flex">
                <a href="#" target="_blank" rel="noopener norefer" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2 mb-3">
                    <span class="mr-2">😁</span><strong>Eniu</strong>
                </a>
                <a href="#" target="_blank" rel="noopener norefer" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition mx-2 mb-3">
                    <span class="mr-2">😁</span><strong>Eniu</strong>
                </a>
            </div>
        </div>
    </section>
@endsection