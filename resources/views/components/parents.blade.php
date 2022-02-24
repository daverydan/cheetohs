@props([
    'queenImg' => '',
    'queenName' => '',
    'kingImg' => '',
    'kingName' => '',
    'date' => '',
])

<div class="x-parents px-4 sm:px-8">
    <div class="flex flex-col sm:flex-row justify-center items-center">
        <div class="flex flex-col items-center">
            <img class="inline-block h-24 w-24 rounded-full object-cover" src="{{ asset($queenImg) }}"
                alt="{{ $queenName }}">
            <h3 class="title text-center pt-3" style="font-size: 4rem; line-height: 74px">
                {{ $queenName }}
            </h3>
        </div>
        <p class="text-6xl mx-2 mb-4 sm:mb-0">+</p>
        <div class="flex flex-col items-center">
            <img class="inline-block h-24 w-24 rounded-full object-cover" src="{{ asset($kingImg) }}"
                alt="{{ $kingName }}">
            <h3 class="title text-center pt-3" style="font-size: 4rem; line-height: 74px">
                {{ $kingName }}
            </h3>
        </div>
    </div>
    <h3 class="text-center ml-2" style="font-size: 1.5rem;">{{ $date }}</h3>
</div>
