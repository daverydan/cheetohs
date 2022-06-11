@extends('layouts.app', ['title' => ucfirst($type . 's')])

@section('content')
    <div class="block w-[100%] h-[390px] relative"
        style="background: url({{ asset('img/page-' . $type . 's/' . $type . '-hero.png') }}) no-repeat center / cover">
        <h1 class="absolute w-full text-center text-white text-5xl md:text-7xl font-bold z-50 top-1/2 left-1/2"
            style="transform: translate(-50%,-50%)">
            Our {{ ucfirst($type . 's') }}
        </h1>
        <div class="absolute top-0 right-0 bottom-0 left-0 bg-black bg-opacity-50"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 xl:px-8">
        @auth
            <div class="text-center">
                <a href="/cat/create"
                    class="text-center bg-gold border border-gold hover:bg-white hover:text-gold text-white mt-8 inline-block px-8 py-2 transition duration-200 ease-in-out">
                    <i class="fa fa-plus"></i> <b>Add a Cat</b>
                </a>
            </div>
        @endauth
        <div class="overflow-auto">
            @foreach ($cats as $cat)
                <div id="{{ $cat->name }}"></div>
                @if ($loop->odd)
                    <div class="flex flex-col md:flex-row my-16">
                        <div class="w-full md:w-1/2 z-10" style="padding-left: 20px">
                            <img class="border-8 border-white shadow-gold w-full" src="{{ asset($cat->pic) }}" alt=""
                                style="margin-top: 20px; margin-right: 20px">
                        </div>
                        <div class="bg-white md:w-1/2 ml-5 md:ml-0 p-8 md:mt-5 relative">
                            @auth
                                <div class="absolute top-2 right-2 flex">
                                    <form action="/cat/{{ $cat->id }}" method="POST" class="mr-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="border border-red-600 text-red-600 hover:text-white px-2 py-2 hover: hover:bg-red-600 flex justify-center items-center rounded transition duration-200 ease-in-out">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                    <a href="/cat/{{ $cat->id }}/edit"
                                        class="border border-blue-600 text-blue-600 hover:text-white px-2 py-1 hover: hover:bg-blue-600 flex justify-center items-center rounded transition duration-200 ease-in-out">
                                        Edit
                                    </a>
                                </div>
                            @endauth
                            <h3 class="text-3xl font-bold mb-5">{{ $cat->name }}</h3>
                            <p class="mb-5">
                                <span class="font-bold text-gold">Color:</span>
                                <span class="text-black">{{ $cat->color }}</span>
                            </p>
                            <p class="mb-5">
                                <span class="font-bold text-gold">Generation:</span>
                                <span class="text-black">{{ $cat->generation }}</span>
                            </p>
                            <p class="mb-5">
                                <span class="block font-bold mb-2 text-gold">Description:</span>
                                {{ $cat->description }}
                            </p>
                            {{-- Paws --}}
                            <i class="fa fa-paw fa-2x transform text-gold opacity-30 absolute bottom-60"
                                style="bottom: 150px; transform: rotate(25deg); right: 0"></i>
                            <i class="fa fa-paw fa-3x transform text-gold opacity-30 absolute"
                                style="bottom: 100px; transform: rotate(15deg); right: 30px"></i>
                            <i
                                class="fa fa-paw fa-4x transform rotate-45 text-gold opacity-30 absolute bottom-5 right-5"></i>
                            <i class="fa fa-paw fa-2x transform text-gold opacity-30 absolute"
                                style="bottom: 10px; transform: rotate(15deg); right: 100px"></i>
                        </div>
                    </div>
                @else
                    <div class="flex flex-col-reverse md:flex-row my-12">
                        <div class="bg-white md:w-1/2 mr-5 md:mr-0 p-8 md:mt-5 relative">
                            @auth
                                <div class="absolute top-2 right-2 flex">
                                    <form action="/cat/{{ $cat->id }}" method="POST" class="mr-2">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="border border-red-600 text-red-600 hover:text-white px-2 py-2 hover: hover:bg-red-600 flex justify-center items-center rounded transition duration-200 ease-in-out">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                    <a href="/cat/{{ $cat->id }}/edit"
                                        class="border border-blue-600 text-blue-600 hover:text-white px-2 py-1 hover: hover:bg-blue-600 flex justify-center items-center rounded transition duration-200 ease-in-out">
                                        Edit
                                    </a>
                                </div>
                            @endauth

                            <h3 class="text-3xl mb-5 font-bold">{{ $cat->name }}</h3>
                            <p class="mb-5">
                                <span class="font-bold text-gold">Color:</span>
                                <span class="text-black">{{ $cat->color }}</span>
                            </p>
                            <p class="mb-5">
                                <span class="font-bold text-gold">Generation:</span>
                                <span class="text-black">{{ $cat->generation }}</span>
                            </p>
                            <p class="mb-5">
                                <span class="block font-bold text-gold mb-2">Description:</span>
                                {{ $cat->description }}
                            </p>
                            {{-- Paws --}}
                            <i class="fa fa-paw fa-2x transform text-gold opacity-30 absolute bottom-60 hidden md:block"
                                style="bottom: 150px; transform: rotate(-25deg); left: 0"></i>
                            <i class="fa fa-paw fa-3x transform text-gold opacity-30 absolute hidden md:block"
                                style="bottom: 100px; transform: rotate(-15deg); left: 30px"></i>
                            <i
                                class="fa fa-paw fa-4x transform rotate-45 md:-rotate-45 text-gold opacity-30 absolute bottom-5 left-5 hidden md:block"></i>
                            <i class="fa fa-paw fa-2x transform text-gold opacity-30 absolute hidden md:block"
                                style="bottom: 10px; transform: rotate(-15deg); left: 100px"></i>
                            {{-- Mobile Paws --}}
                            <i class="fa fa-paw fa-2x transform text-gold opacity-30 absolute bottom-60 block md:hidden"
                                style="bottom: 150px; transform: rotate(25deg); right: 0"></i>
                            <i class="fa fa-paw fa-3x transform text-gold opacity-30 absolute block md:hidden"
                                style="bottom: 100px; transform: rotate(15deg); right: 30px"></i>
                            <i
                                class="fa fa-paw fa-4x transform rotate-45 md:-rotate-45 text-gold opacity-30 absolute bottom-5 right-5 block md:hidden"></i>
                            <i class="fa fa-paw fa-2x transform text-gold opacity-30 absolute block md:hidden"
                                style="bottom: 10px; transform: rotate(15deg); right: 100px"></i>
                        </div>
                        <div class="w-full md:w-1/2 z-10" style="padding-right: 20px">
                            <img class="border-8 border-white w-full mt-5 mr-5" src="{{ asset($cat->pic) }}" alt=""
                                style="box-shadow: 20px -20px 0px 0px #956C34">
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="h-[1000px]"></div>
@endsection
