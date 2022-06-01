<div x-show="addCat">
    <form action="" class="py-8">
        <div class="md:flex mb-8">
            <label for="name" class="w-32 text-white block mb-2">Name</label>
            <input type="text"
                class="font-lg max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md">
        </div>

        <div class="md:flex mb-8">
            <label for="type" class="w-32 text-white block mb-2">Type</label>
            <div class="flex">
                <div class="flex items-center mr-8">
                    <input name="type" value="queen" id="queen" type="radio"
                        class="focus:ring-indigo-500 h-4 w-4 border-gray-300 cursor-pointer" checked>
                    <label for="queen" class="ml-3 block text-sm font-medium text-white cursor-pointer"> Queen </label>
                </div>
                <div class="flex items-center">
                    <input name="type" value="king" id="king" type="radio"
                        class="focus:ring-indigo-500 h-4 w-4 border-gray-300 cursor-pointer">
                    <label for="king" class="ml-3 block text-sm font-medium text-white cursor-pointer"> King </label>
                </div>
            </div>
        </div>

        <div class="md:flex mb-3">
            <label for="description" class="w-32 text-white block mb-2">Description</label>
            <textarea name="description" rows="5"
                class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
        </div>

        <div class="md:flex">
            <label for="submit-button" class="w-32 opacity-0 hidden md:block">Description</label>
            <div class="flex max-w-lg w-full">
                <button type="submit"
                    class="max-w-lg inline-block text-red-600 bg-transparent border border-red-600 font-bold mt-6 px-6 py-2 hover:bg-red-600 hover:text-white trasnsition duration-200 ease-in-out w-full mr-5">
                    Cancel
                </button>
                <button type="submit"
                    class="max-w-lg inline-block text-white bg-gold border border-gold font-bold mt-6 px-6 py-2 hover:bg-opacity-80 hover:border-gold trasnsition duration-200 ease-in-out w-full">
                    Add Cat
                </button>
            </div>
        </div>
    </form>
</div>
