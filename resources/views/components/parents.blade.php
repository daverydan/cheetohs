@props([
    'loop' => [],
    'litter' => [],
])

<div class="x-parents">
    <span class="hidden sm:block absolute left-1/2 transform -translate-x-1/2 top-14 text-gold text-opacity-40 text-9xl"
        style="">+</span>
    @if ($loop->odd)
        <div class="sm:flex">
            <div class="sm:w-1/2">
                <a href="/queens#{{ $litter->mom[0]->name }}" class="flex flex-col items-center group">
                    <img class="inline-block h-28 w-28 border-8 border-red-200 rounded-full object-cover group-hover:scale-110 transition duration-200 ease-in-out"
                        src="{{ asset('/storage/' . $litter->mom[0]->avatar) }}" alt="{{ $litter->mom[0]->name }}">
                    <h3 class="title text-center pt-3 group-hover:text-gold transition duration-200 ease-in-out"
                        style="font-size: 4rem; line-height: 74px">
                        {{ $litter->mom[0]->name }}
                    </h3>
                </a>
            </div>
            <div class="sm:w-1/2">
                <a href="/kings#{{ $litter->dad[0]->name }}" class="flex flex-col items-center group">
                    <img class="inline-block h-28 w-28 border-8 border-blue-200 rounded-full object-cover group-hover:scale-110 transition duration-200 ease-in-out"
                        src="{{ asset('/storage/' . $litter->dad[0]->avatar) }}" alt="{{ $litter->dad[0]->name }}">
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
</div>
