@extends('layouts.app')

@section('content')
    <section class="py-20 min-h-screen flex items-center">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-6xl text-center mb-6">About</h2>
            <h3 class="text-4xl text-center text-gray-200 mb-6">Who?</h3>
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus laborum commodi laudantium reprehenderit unde aperiam deserunt beatae maxime quo ea accusantium odit, exercitationem nam reiciendis ut iusto. Explicabo, optio nulla?
            </p>
            <p class="mb-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, voluptatibus?
            </p>
            <p class="mb-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta repudiandae eius ex sapiente suscipit a iste nobis recusandae rerum quos tempora exercitationem asperiores beatae, laborum ratione sint architecto libero modi illum quibusdam optio maiores quisquam accusantium harum? Corporis, ipsum repudiandae.
            </p>
            <div class="text-center">
                <a href="{{route('home')}}" class="inline-block bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition">Go Home</a>
            </div>
        </div>
    </section>
@endsection
