@extends('layouts.app', ['title' => 'kittens'])

@section('content')
    <img class="w-full" src="{{ asset('./img/page-kittens/2kittenscuddle-Terry-Tilford-edited.jpg') }}" alt="">

    <div class="py-12">
        {{-- <x-parents queenImg="./img/queens/mountain-melody/thumb.png" queenName="Mountain Melody"
            kingImg="./img/kings/noble-warrior/thumb2.png" kingName="Noble Warrior" date="12/30/21" />

        <div class="relative max-w-7xl mx-auto w-full py-8">
            <div class="mx-4 sm:mx-8">
                <div class="border-b-2 border-gray-200 mb-8"></div>

                <div class="flex flex-col sm:flex-row justify-between space-y-8 sm:space-y-0 sm:space-x-8 mb-8">
                    <div>
                        <img src="{{ asset('/img/kittens/melody-n-warrior/01-dark-girl.jpeg') }}" alt="dark-girl">
                    </div>
                    <div>
                        <img src="{{ asset('/img/kittens/melody-n-warrior/02-light-girl.jpg') }}" alt="dark-girl">
                    </div>
                    <div>
                        <img src="{{ asset('/img/kittens/melody-n-warrior/03-boy1.jpeg') }}" alt="dark-girl">
                    </div>
                    <div>
                        <img src="{{ asset('/img/kittens/melody-n-warrior/04-boy2.jpeg') }}" alt="dark-girl">
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row justify-between space-y-8 sm:space-y-0 sm:space-x-8 mb-8">
                    <div>
                        <img src="{{ asset('/img/kittens/melody-n-warrior/05-boy3.jpeg') }}" alt="dark-girl">
                    </div> --}}
        {{-- hidden images for spacing --}}
        {{-- <div>
                        <img class="hidden sm:block opacity-0"
                            src="{{ asset('/img/kittens/melody-n-warrior/05-boy3.jpeg') }}" alt="dark-girl">
                    </div>
                    <div>
                        <img class="hidden sm:block opacity-0"
                            src="{{ asset('/img/kittens/melody-n-warrior/05-boy3.jpeg') }}" alt="dark-girl">
                    </div>
                    <div>
                        <img class="hidden sm:block opacity-0"
                            src="{{ asset('/img/kittens/melody-n-warrior/05-boy3.jpeg') }}" alt="dark-girl">
                    </div>
                </div>
            </div>
        </div> --}}

        <x-site-width>
            @foreach ($litters as $litter)
                {{-- <x-parents queenImg="{{ asset($litter->mom[0]->avatar) }}" queenName="{{ $litter->mom[0]->name }}"
                kingImg="{{ asset($litter->dad[0]->avatar) }}" kingName="{{ $litter->dad[0]->name }}"
                date="{{ \Carbon\Carbon::parse($litter->birthday)->format('n / j / y') }}" /> --}}
                <x-parents :litter="$litter" :loop="$loop" />
            @endforeach
        </x-site-width>
    </div>
@endsection
