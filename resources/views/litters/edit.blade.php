@extends('layouts.admin', ['title' => 'Edit Litter'])

@section('content')
    <h1 class="text-white text-3xl font-bold">Edit Litter</h1>
    {{-- @include('_inc.forms.edit-cat') --}}

    <div class="edit-litter-form">
        <form action="/litter/{{ $litter->id }}" method="POST" class="py-8" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <div class="md:flex">
                    <label for="pics" class="w-32 text-white block mb-2">
                        <i class="fa fa-plus"></i> Litter Pics
                    </label>
                    <input
                        class="max-w-lg block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white border border-solid border-gray-300 rounded transition ease-in-out m-0
                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        type="file" id="pics" name="pics[]" multiple>
                </div>
                @error('pics')
                    <p class="text-white md:ml-[8rem] mt-1 bg-red-600 max-w-lg px-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="md:flex">
                <label for="submit-button" class="w-32 opacity-0 hidden md:block">Description</label>
                <div class="flex max-w-lg w-full">
                    <a href="/kittens"
                        class="max-w-lg inline-block text-red-600 bg-transparent border border-red-600 font-bold mt-6 px-6 py-2 hover:bg-red-600 hover:text-white trasnsition duration-200 ease-in-out w-full mr-5 text-center">
                        Cancel
                    </a>
                    <button type="submit"
                        class="max-w-lg inline-block text-white bg-gold border border-gold font-bold mt-6 px-6 py-2 hover:bg-opacity-80 hover:border-gold trasnsition duration-200 ease-in-out w-full">
                        Update Litter
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
