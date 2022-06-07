@extends('layouts.admin', ['title' => 'Dashboard'])

@section('content')
    {{-- <p class="text-white mt-8 mb-2">Admin Menu</p>
    <div class="flex justify-between">
        <a href="/queens"
            class="text-white text-lg text-center px-3 py-3 border rounded block hover:text-black hover:bg-white transition duration-200 ease-in-out w-full {{ request()->routeIs('/queens') ? 'text' : '' }}">
            Queens
        </a>
        <a href="/kings"
            class="text-white text-lg text-center px-3 py-3 border rounded block hover:text-black hover:bg-white transition duration-200 ease-in-out w-full mx-5">
            Kings
        </a>
        <a href="/litters"
            class="text-white text-lg text-center px-3 py-3 border rounded block hover:text-black hover:bg-white transition duration-200 ease-in-out w-full">
            Litters
        </a>
    </div>

    <p class="text-white mt-5 mb-2">Actions</p>
    <div class="flex">
        <button type="button" @click="addCat = !addCat"
            class="w-full text-white bg-gold border border-gold font-bold px-6 py-3 hover:bg-transparent hover:text-gold hover:border-gold trasnsition duration-200 ease-in-out mb-3 mr-5">
            <i class="fa fa-plus"></i>
            Add a Cat
        </button>
        <button type="button" @click="addCat = !addCat"
            class="w-full text-white bg-gold border border-gold font-bold px-6 py-3 hover:bg-transparent hover:text-gold hover:border-gold trasnsition duration-200 ease-in-out mb-3">
            <i class="fa fa-plus"></i>
            Add a Litter
        </button>
    </div> --}}

    <h1 class="text-white text-3xl font-bold">Add Cat</h1>
    @include('_inc.forms.add-cat')
    {{-- @include('_inc.forms.add-litter') --}}
@endsection
