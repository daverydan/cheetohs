<div class="_inc-forms-edit-cat">
    <form action="/cat/{{ $cat->id }}" method="POST" class="py-8" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-8">
            <div class="md:flex">
                <label for="name" class="w-32 text-white block mb-2">Name</label>
                <input type="text" name="name"
                    class="font-lg max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"
                    value="{{ old('name', $cat->name) }}">
            </div>
            @error('name')
                <p class="text-white md:ml-[8rem] mt-1 bg-red-600 max-w-lg px-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-8">
            <div class="md:flex">
                <label for="type" class="w-32 text-white block mb-2">Type</label>
                <div class="flex">
                    <div class="flex items-center mr-8">
                        <input name="type" value="queen" id="queen" type="radio"
                            class="focus:ring-indigo-500 h-4 w-4 border-gray-300 cursor-pointer"
                            @if ($cat->type == 'queen') checked @endif>
                        <label for="queen" class="ml-3 block text-sm font-medium text-white cursor-pointer"> Queen
                        </label>
                    </div>
                    <div class="flex items-center">
                        <input name="type" value="king" id="king" type="radio"
                            class="focus:ring-indigo-500 h-4 w-4 border-gray-300 cursor-pointer"
                            @if ($cat->type == 'king') checked @endif>
                        <label for="king" class="ml-3 block text-sm font-medium text-white cursor-pointer"> King
                        </label>
                    </div>
                </div>
            </div>
            @error('type')
                <p class="text-white md:ml-[8rem] mt-1 bg-red-600 max-w-lg px-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-8">
            <div class="md:flex">
                <label for="color" class="w-32 text-white block mb-2">Color</label>
                <input type="text" name="color" value="{{ old('name', $cat->color) }}"
                    class="font-lg max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">
                {{-- <select name="color" id="color"
                    class="font-lg max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">
                    <option value="" selected disabled>Select a Color</option>
                    <option value="Black" @if ($cat->color == 'Black') selected @endif>Black</option>
                    <option value="Charcoal" @if ($cat->color == 'Charcoal') selected @endif>Charcoal</option>
                    <option value="Gold" @if ($cat->color == 'Gold') selected @endif>Gold</option>
                    <option value="Silver" @if ($cat->color == 'Silver') selected @endif>Silver</option>
                    <option value="Snow" @if ($cat->color == 'Snow') selected @endif>Snow</option>
                </select> --}}
            </div>
            @error('color')
                <p class="text-white md:ml-[8rem] mt-1 bg-red-600 max-w-lg px-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- <div class="mb-8">
            <div class="md:flex">
                <label for="pattern" class="w-32 text-white block mb-2">Pattern</label>
                <select name="pattern" id="pattern"
                    class="font-lg max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">
                    <option value="" selected disabled>Select a Pattern</option>
                    <option value="Clouded" @if ($cat->pattern == 'Clouded') selected @endif>Clouded</option>
                    <option value="Marble" @if ($cat->pattern == 'Marble') selected @endif>Marble</option>
                    <option value="Rosetted" @if ($cat->pattern == 'Rosetted') selected @endif>Rosetted</option>
                    <option value="Solid - Black Only" @if ($cat->pattern == 'Solid - Black Only') selected @endif>Solid - Black
                        Only</option>
                    <option value="Spotted" @if ($cat->pattern == 'Spotted') selected @endif>Spotted</option>
                </select>
            </div>
            @error('pattern')
                <p class="text-white md:ml-[8rem] mt-1 bg-red-600 max-w-lg px-1">{{ $message }}</p>
            @enderror
        </div> --}}

        <div class="mb-8">
            <div class="md:flex">
                <label for="generation" class="w-32 text-white block mb-2">Generation</label>
                <select name="generation" id="generation"
                    class="font-lg max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">
                    <option value="" selected disabled>Select a Pattern</option>
                    <option value="F1" @if ($cat->generation == 'F1') selected @endif>F1</option>
                    <option value="F2" @if ($cat->generation == 'F2') selected @endif>F2</option>
                    <option value="F3" @if ($cat->generation == 'F3') selected @endif>F3</option>
                    <option value="F4" @if ($cat->generation == 'F4') selected @endif>F4</option>
                </select>
            </div>
            @error('generation')
                <p class="text-white md:ml-[8rem] mt-1 bg-red-600 max-w-lg px-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-8">
            <div class="md:flex">
                <label for="avatar" class="w-32 text-white block mb-2">Avatar</label>
                <input
                    class="max-w-lg block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white border border-solid border-gray-300 rounded transition ease-in-out m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    type="file" id="avatar" name="avatar" multiple>
            </div>
            @error('avatar')
                <p class="text-white md:ml-[8rem] mt-1 bg-red-600 max-w-lg px-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-8">
            <div class="md:flex">
                <label for="pic" class="w-32 text-white block mb-2">Main Pic</label>
                <input
                    class="max-w-lg block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white border border-solid border-gray-300 rounded transition ease-in-out m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    type="file" id="pic" name="pic" multiple>
            </div>
            @error('pic')
                <p class="text-white md:ml-[8rem] mt-1 bg-red-600 max-w-lg px-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <div class="md:flex">
                <label for="description" class="w-32 text-white block mb-2">Description</label>
                <textarea name="description" rows="5"
                    class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">{{ old('description', $cat->description) }}</textarea>
            </div>
            @error('description')
                <p class="text-white md:ml-[8rem] mt-1 bg-red-600 max-w-lg px-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="md:flex">
            <label for="submit-button" class="w-32 opacity-0 hidden md:block">Description</label>
            <div class="flex max-w-lg w-full">
                <button type="button" @click="addCat = false"
                    class="max-w-lg inline-block text-red-600 bg-transparent border border-red-600 font-bold mt-6 px-6 py-2 hover:bg-red-600 hover:text-white trasnsition duration-200 ease-in-out w-full mr-5">
                    Cancel
                </button>
                <button type="submit"
                    class="max-w-lg inline-block text-white bg-gold border border-gold font-bold mt-6 px-6 py-2 hover:bg-opacity-80 hover:border-gold trasnsition duration-200 ease-in-out w-full">
                    Update Cat
                </button>
            </div>
        </div>
    </form>
</div>
