@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <form action="{{route('postCreate')}}" method="post" class="mb-4">
            {{ csrf_field() }}
            <div class="mb-4">
                <label for="description" class="sr-only">Body</label>
                <textarea name="description" id="description" cols="30" rows="4"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('description') border-red-500 @enderror"
                    placeholder="Post something!"></textarea>

                @error('description')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
            </div>

        </form>
    </div>
</div>

@endsection