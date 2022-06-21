@extends('layouts.app', ['title' => 'kittens'])

@section('content')
    <img class="w-full" src="{{ asset('./img/page-kittens/2kittenscuddle-Terry-Tilford-edited.jpg') }}" alt="">

    <div class="py-12">
        <x-site-width>
            @foreach ($litters as $litter)
                <div
                    class="px-4 sm:px-8 bg-white py-8 rounded-lg hover:shadow-lg mb-12 relative transition duration-200 ease-in-out">
                    <x-parents :litter="$litter" :loop="$loop" />

                    <p class="text-center text-2xl mt-3 mb-2">
                        {{ \Carbon\Carbon::parse($litter->birthday)->format('n / j / y') }}
                    </p>

                    <div class="text-center mt-3">
                        <view-kittens-btn :id="@json($litter->id)" :loggedIn="@json(auth()->check())"></view-kittens-btn>
                    </div>
                </div>
            @endforeach
        </x-site-width>
    </div>
@endsection
