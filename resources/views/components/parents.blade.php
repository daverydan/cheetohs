@props([
    'loop' => [],
    'litter' => [],
])

<div
    class="x-parents px-4 sm:px-8 bg-white py-8 rounded-lg hover:shadow-lg mb-12 relative transition duration-200 ease-in-out">
    <span class="hidden sm:block absolute left-1/2 transform -translate-x-1/2 top-14 text-gold text-opacity-40 text-9xl"
        style="">+</span>
    @if ($loop->odd)
        <div class="sm:flex">
            <div class="sm:w-1/2">
                <a href="/queens#{{ $litter->mom[0]->name }}" class="flex flex-col items-center group">
                    <img class="inline-block h-28 w-28 border-8 border-red-200 rounded-full object-cover group-hover:scale-110 transition duration-200 ease-in-out"
                        src="{{ asset($litter->mom[0]->avatar) }}" alt="{{ $litter->mom[0]->name }}">
                    <h3 class="title text-center pt-3 group-hover:text-gold transition duration-200 ease-in-out"
                        style="font-size: 4rem; line-height: 74px">
                        {{ $litter->mom[0]->name }}
                    </h3>
                </a>
            </div>
            <div class="sm:w-1/2">
                <a href="/kings#{{ $litter->dad[0]->name }}" class="flex flex-col items-center group">
                    <img class="inline-block h-28 w-28 border-8 border-blue-200 rounded-full object-cover group-hover:scale-110 transition duration-200 ease-in-out"
                        src="{{ asset($litter->dad[0]->avatar) }}" alt="{{ $litter->dad[0]->name }}">
                    <h3 class="title text-center pt-3 group-hover:text-gold transition duration-200 ease-in-out"
                        style="font-size: 4rem; line-height: 74px">
                        {{ $litter->dad[0]->name }}
                    </h3>
                </a>
            </div>
        </div>
    @else
        <div class="flex flex-col-reverse sm:flex-row">
            <div class="sm:w-1/2">
                <a href="/kings#{{ $litter->dad[0]->name }}" class="flex flex-col items-center group">
                    <img class="inline-block h-28 w-28 border-8 border-blue-200 rounded-full object-cover group-hover:scale-110 transition duration-200 ease-in-out"
                        src="{{ asset($litter->dad[0]->avatar) }}" alt="{{ $litter->dad[0]->name }}">
                    <h3 class="title text-center pt-3 group-hover:text-gold transition duration-200 ease-in-out"
                        style="font-size: 4rem; line-height: 74px">
                        {{ $litter->dad[0]->name }}
                    </h3>
                </a>
            </div>
            <div class="sm:w-1/2">
                <a href="/queens#{{ $litter->mom[0]->name }}" class="flex flex-col items-center group">
                    <img class="inline-block h-28 w-28 border-8 border-red-200 rounded-full object-cover group-hover:scale-110 transition duration-200 ease-in-out"
                        src="{{ asset($litter->mom[0]->avatar) }}" alt="{{ $litter->mom[0]->name }}">
                    <h3 class="title text-center pt-3 group-hover:text-gold transition duration-200 ease-in-out"
                        style="font-size: 4rem; line-height: 74px">
                        {{ $litter->mom[0]->name }}
                    </h3>
                </a>
            </div>
        </div>
    @endif
    {{-- <div class="flex flex-col sm:flex-row justify-center items-center">
        <a href="/queens#{{ $litter->mom[0]->name }}" class="flex flex-col items-center group">
            <img class="inline-block h-28 w-28 border-8 border-red-200 rounded-full object-cover group-hover:scale-110 transition duration-200 ease-in-out"
                src="{{ asset($litter->mom[0]->avatar) }}" alt="{{ $litter->mom[0]->name }}">
            <h3 class="title text-center pt-3 group-hover:text-gold transition duration-200 ease-in-out"
                style="font-size: 4rem; line-height: 74px">
                {{ $litter->mom[0]->name }}
            </h3>
        </a>
        <p class="text-6xl mx-2 mb-4 sm:mb-0">+</p>
        <a href="/kings#{{ $litter->dad[0]->name }}" class="flex flex-col items-center group">
            <img class="inline-block h-28 w-28 border-8 border-blue-200 rounded-full object-cover group-hover:scale-110 transition duration-200 ease-in-out"
                src="{{ asset($litter->dad[0]->avatar) }}" alt="{{ $litter->dad[0]->name }}">
            <h3 class="title text-center pt-3 group-hover:text-gold transition duration-200 ease-in-out"
                style="font-size: 4rem; line-height: 74px">
                {{ $litter->dad[0]->name }}
            </h3>
        </a>
    </div> --}}
    <p class="text-center text-2xl mt-3 mb-2">
        {{ \Carbon\Carbon::parse($litter->birthday)->format('n / j / y') }}
    </p>
    <div class="text-center mt-3">
        <button type="button"
            class="bg-gold text-white text-xl px-5 py-2 font-bold hover:bg-opacity-80 transition duration-200 ease-in-out">
            View Kittens
        </button>
    </div>
</div>
