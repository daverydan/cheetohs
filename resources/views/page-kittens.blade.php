@extends('layouts.app', ['title' => 'kittens'])

@section('content')
    <img class="w-full" src="{{ asset('./img/page-kittens/2kittenscuddle-Terry-Tilford-edited.jpg') }}" alt="">

    @auth
        <div class="text-center">
            <a href="/litter/create"
                class="text-center bg-gold border border-gold hover:bg-white hover:text-gold text-white mt-8 inline-block px-8 py-2 transition duration-200 ease-in-out">
                <i class="fa fa-plus"></i> <b>Add a Litter</b>
            </a>
        </div>
    @endauth

    <div class="py-12">
        <x-site-width>
            @foreach ($litters as $litter)
                <div
                    class="px-4 sm:px-8 bg-white py-8 rounded-lg hover:shadow-lg mb-12 relative transition duration-200 ease-in-out">
                    @auth
                        <div class="absolute top-2 right-2 flex">
                            <form action="/litter/{{ $litter->id }}" method="POST" class="mr-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="border border-red-600 text-red-600 hover:text-white px-2 py-2 hover: hover:bg-red-600 flex justify-center items-center rounded transition duration-200 ease-in-out">
                                    <i class="fa fa-times"></i>
                                </button>
                            </form>
                            <a href="/litter/{{ $litter->id }}/edit"
                                class="border border-blue-600 text-blue-600 hover:text-white px-2 py-1 hover: hover:bg-blue-600 flex justify-center items-center rounded transition duration-200 ease-in-out">
                                Edit
                            </a>
                        </div>
                    @endauth
                    <x-parents :litter="$litter" :loop="$loop" />

                    <p class="text-center text-2xl mt-3 mb-2">
                        {{ \Carbon\Carbon::parse($litter->birthday)->format('n / j / y') }}
                    </p>
                    @if (count($litter->images))
                        <div class="text-center mt-3">
                            <view-kittens-btn :id="@json($litter->id)" :loggedIn="@json(auth()->check())">
                            </view-kittens-btn>
                        </div>
                    @endif
                </div>
            @endforeach
        </x-site-width>
    </div>
@endsection
