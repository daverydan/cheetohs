<div class="_inc-forms-add-litter">
    <form action="/litter" method="POST" class="py-8" enctype="multipart/form-data">
        @csrf

        {{-- Mom --}}
        <div class="mb-8">
            <div class="md:flex">
                <label for="mom_id" class="w-32 text-white block mb-2">Mom</label>
                <select name="mom_id" id="mom_id"
                    class="font-lg max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">
                    <option value="" selected disabled>Select a Mom</option>
                    @foreach ($moms as $mom)
                        <option value="{{ $mom->id }}">{{ $mom->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('mom_id')
                <p class="text-white md:ml-[8rem] mt-1 bg-red-600 max-w-lg px-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Dad --}}
        <div class="mb-8">
            <div class="md:flex">
                <label for="dad_id" class="w-32 text-white block mb-2">Dad</label>
                <select name="dad_id" id="dad_id"
                    class="font-lg max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">
                    <option value="" selected disabled>Select a Dad</option>
                    @foreach ($dads as $dad)
                        <option value="{{ $dad->id }}">{{ $dad->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('dad_id')
                <p class="text-white md:ml-[8rem] mt-1 bg-red-600 max-w-lg px-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-8">
            <div class="md:flex">
                <label for="birthday" class="w-32 text-white block mb-2">Birthday</label>
                <input type="text" name="birthday" id="datepicker"
                    class="font-lg max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">
            </div>
            @error('birthday')
                <p class="text-white md:ml-[8rem] mt-1 bg-red-600 max-w-lg px-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <div class="md:flex">
                <label for="pics" class="w-32 text-white block mb-2">Litter Pics</label>
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
                <button type="button" @click="addCat = false"
                    class="max-w-lg inline-block text-red-600 bg-transparent border border-red-600 font-bold mt-6 px-6 py-2 hover:bg-red-600 hover:text-white trasnsition duration-200 ease-in-out w-full mr-5">
                    Cancel
                </button>
                <button type="submit"
                    class="max-w-lg inline-block text-white bg-gold border border-gold font-bold mt-6 px-6 py-2 hover:bg-opacity-80 hover:border-gold trasnsition duration-200 ease-in-out w-full">
                    Add Litter
                </button>
            </div>
        </div>
    </form>
</div>
