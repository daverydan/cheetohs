<x-app-layout>
    {{-- <p class="hidden xl:block text-center font-bold mb-6">XL</p>
    <p class="hidden lg:block xl:hidden text-center font-bold mb-6">LG</p>
    <p class="hidden md:block lg:hidden text-center font-bold mb-6">MD</p>
    <p class="hidden sm:block md:hidden text-center font-bold mb-6">SM</p>
    <p class="hidden xs:block sm:hiddentext-center font-bold mb-6">XS</p> --}}

    <div class="bg-black">
        <div class="relative" style="max-width: 1440px; margin: auto">
            <div class="flex sm:h-full z-50 md:w-1/2 lg:w-1/2">
                <div
                    class="text-white lg:w-auto mx-auto text-center z-50 px-10 pt-16 sm:h-full md:py-24 lg:py-44 xl:py-56">
                    <h3 class="text-4xl font-bold mb-5 leading-snug">
                        Cheetoh Cat Founder
                        <span class="block text-sm">Carol Drymon</span>
                    </h3>
                    <p>
                        The Cheetoh is the newest hybrid cross, utilizing the best of both the Bengal and the Ocicat
                        breeds, eight generations or more removed from the wild, yet retaining the same beauty and
                        exotic looks.
                    </p>
                    <a href="/kittens"
                        class="inline-block border border-white font-bold mt-6 px-4 py-2 hover:bg-gold hover:border-gold trasnsition duration-200 ease-in-out">
                        Available Kittens
                    </a>
                </div>
            </div>

            {{-- <img class="md:max-w-xl lg:max-w-3xl xl:max-w-4xl md:absolute md:bottom-0 md:right-0"
                src="{{ Storage::disk('s3')->url('Past Customers/Windhaven’s Royalspotted Treasure ,born March 13,2017.jpg') }}"
                style="width: 100%; z-index: 1" alt="Windhaven’s Royalspotted Treasure"> --}}
            <img class="md:max-w-xl lg:max-w-3xl xl:max-w-4xl md:absolute md:bottom-0 md:right-0"
                src="{{ asset('img/Windhavens_Royalspotted_Treasure_born_03_13_2017.jpeg') }}"
                style="width: 100%; z-index: 1" alt="Windhaven’s Royalspotted Treasure">
        </div>
    </div>

    {{-- Girl Pic + Jumping Cat Vector --}}
    <div class="bg-white w-full px-4 py-28 relative">
        <x-site-width>
            <div class="md:flex relative">
                {{-- sm:overflow-hidden --}}
                <div class="w-full mb-10 md:mb-0 md:w-2/5 z-10">
                    <img class="border-8 border-white shadow-gold" src="{{ asset('img/cheetoh-companion.jpeg') }}"
                        alt="" style="max-width: 100%">
                </div>
                <div class="w-full md:w-3/5 relative md:ml-16 z-10">
                    <div class="flex justify-start items-center mb-2">
                        <div class="w-8 bg-gold" style="height: 2px;"></div>
                        <h4 class="text-gold uppercase ml-2">About</h4>
                    </div>

                    <h2 class="text-4xl font-bold mb-5">
                        <span class="text-gold">Cheetoh Cats</span>
                        <i class="fa fa-paw transform rotate-45 text-gold opacity-30"></i>
                        <br>From the Jungle to Your Lap
                    </h2>
                    <p class="mb-5">
                        The Cheetoh breed, created by Carol Drymon of Windhaven Cheetohs, combines the wild beauty of
                        the
                        Bengal with the
                        sweet,
                        dependable and loving nature of the Ocicat. The result is a large beautifully spotted cat that
                        loves to be with its humans and is gentle enough for even your little ones!
                    </p>
                    <ul class="font-bold leading-9 pl-5">
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>Cheetoh breed founded in <span class="text-gold font-black">2004</span></span>
                        </li>
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>Wonderful Family Companion Pets</span>
                        </li>
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>Extremely Intelligent & Curious</span>
                        </li>
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>Unsurpassed Gentle Character</span>
                        </li>
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>Highly Sociable & Loving</span>
                        </li>
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>Great With All Children</span>
                        </li>
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>Larger Than Life Sized</span>
                        </li>
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>Doglike Temperment</span>
                        </li>
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>Playful & Energetic</span>
                        </li>
                    </ul>

                    <a href="#"
                        class="inline-block text-white bg-gold border border-gold font-bold mt-8 px-6 py-2 hover:bg-transparent hover:border-gold hover:text-gold trasnsition duration-200 ease-in-out">
                        Learn More
                    </a>
                </div>
                <img class="absolute -bottom-16 right-0 max-w-3xl opacity-20 z-0"
                    src="{{ asset('img/jumping-cheetoh-vector.jpeg') }}" alt="Jumping Cheetoh">
            </div>
        </x-site-width>
    </div>

    {{-- border-t-2 border-gold --}}
    <div class="w-full px-4 pt-28 relative -mb-80">
        <x-site-width>
            <div class="text-center mb-16">
                <div class="flex justify-center items-center mb-5">
                    <div class="w-8 bg-gold" style="height: 2px;"></div>
                    <h4 class="text-gold uppercase mx-2">Our Cheetohs</h4>
                    <div class="w-8 bg-gold" style="height: 2px;"></div>
                </div>

                <h2 class="font-bold text-4xl mb-5">Founder of the <br>Cheetoh Breed</h2>

                <p class="mb-5">
                    Carol Drymon has been breeding exotic cats since 1985. She created the Cheetoh breed <br>to add a
                    gentle and loving nature to the exotic beauty
                    of the hybrids.
                </p>
            </div>
        </x-site-width>

        <div class="max-w-7xl mx-auto px-3 xl:px-8">
            <div class="flex lg:justify-between flex-col lg:flex-row">
                {{-- Queens --}}
                <div class="max-w-lg mx-auto lg:w-1/3 bg-white mb-12 lg:mb-0">
                    <a href="/queens" class="block group">
                        <div class="block overflow-hidden" style="max-height: 364px">
                            <div class="h-96 w-full scale-100 transform hover:scale-125 transition duration-1000 ease-in-out bg-cover bg-no-repeat bg-center lg:bg-top"
                                style="background-image: url({{ asset('img/queen-cheetoh.jpeg') }})">
                                {{-- 'https://templates.envytheme.com/semental/default/assets/img/courses2.jpg' --}}
                                <p
                                    class="flex justify-center items-center h-full text-white text-6xl font-bold transition duration-200 opacity-0 group-hover:opacity-70">
                                    Queens</p>
                            </div>
                        </div>
                        <div class="block p-7">
                            <h3 class="text-2xl flex items-center mb-5">
                                <span class="text-5xl text-gold font-bold">Q</span>
                                <span class="transition duration-200 ease-in-out group-hover:text-gold">ueens</span>
                            </h3>
                            <p class="inline-block">
                                {{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. --}}
                                Meet our Wind Haven Queens. Newest additions are Snow and Clouded Leopards.
                            </p>
                            <button type="button"
                                class="inline-block text-white bg-gold border border-gold font-bold mt-8 px-6 py-2 group-hover:bg-transparent group-hover:text-gold hover:border-gold hover:text-gold trasnsition duration-200 ease-in-out">
                                View Now
                            </button>
                        </div>
                    </a>
                </div>
                {{-- Kings --}}
                <div class="max-w-lg mx-auto lg:w-1/3 bg-white mb-12 lg:mb-0 lg:mx-8">
                    <a href="/queens" class="block group">
                        <div class="block overflow-hidden" style="max-height: 364px">
                            <div class="h-96 w-full scale-100 transform hover:scale-125 transition duration-1000 ease-in-out bg-cover bg-no-repeat bg-center lg:bg-top"
                                style="background-image: url({{ asset('img/king-cheetoh.jpeg') }})">
                                <p
                                    class="flex justify-center items-center h-full text-white text-6xl font-bold transition duration-200 opacity-0 group-hover:opacity-70">
                                    Kings</p>
                            </div>
                        </div>
                        <div class="block p-7">
                            <h3 class="text-2xl flex items-center mb-5">
                                <span class="text-5xl text-gold font-bold">K</span>
                                <span class="transition duration-200 ease-in-out group-hover:text-gold">ings</span>
                            </h3>
                            <p class="inline-block">
                                Our Wind Haven Kings now include Clouded Leopards.
                            </p>
                            <button type="button"
                                class="inline-block text-white bg-gold border border-gold font-bold mt-8 px-6 py-2 group-hover:bg-transparent group-hover:text-gold hover:border-gold hover:text-gold trasnsition duration-200 ease-in-out">
                                View Now
                            </button>
                        </div>
                    </a>
                </div>
                {{-- Kittens --}}
                <div class="max-w-lg mx-auto lg:w-1/3 bg-white mb-12 lg:mb-0">
                    <a href="/kittens" class="block group">
                        <div class="block overflow-hidden" style="max-height: 364px">
                            <div class="h-96 w-full scale-100 transform hover:scale-125 transition duration-1000 ease-in-out bg-cover bg-no-repeat bg-center lg:bg-top"
                                style="background-image: url({{ asset('img/cheetoh-kittens.jpg') }})">
                                {{-- 'https://templates.envytheme.com/semental/default/assets/img/courses3.jpg' --}}
                                <p
                                    class="flex justify-center items-center h-full text-white text-6xl font-bold transition duration-200 opacity-0 group-hover:opacity-70">
                                    Kittens</p>
                            </div>
                        </div>
                        <div class="block p-7">
                            <h3 class="text-2xl flex items-center mb-5">
                                <span class="text-5xl text-gold font-bold">K</span>
                                <span class="transition duration-200 ease-in-out group-hover:text-gold">ittens</span>
                            </h3>
                            <p class="inline-block">
                                View upcoming litters, see past kittens and get on our waiting list!
                            </p>
                            <button type="button"
                                class="inline-block text-white bg-gold border border-gold font-bold mt-8 px-6 py-2 group-hover:bg-transparent group-hover:text-gold hover:border-gold hover:text-gold trasnsition duration-200 ease-in-out">
                                View Now
                            </button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-gold border-t-2 border-white pt-96">
        <x-site-width>
            <div class="pt-7 pb-28">
                <div class="flex flex-col sm:justify-around sm:flex-row">
                    <div class="text-center text-white mb-16 sm:mb-0">
                        <span class="text-6xl font-bold inline-block mb-2">
                            {{ \Carbon\Carbon::createFromDate(1985)->diff(\Carbon\Carbon::now())->format('%y') }}
                        </span>
                        <br>
                        <span class="uppercase font-bold">Years of Experience</span>
                    </div>
                    <div class="text-center text-white mb-16 sm:mb-0">
                        <span class="text-6xl font-bold inline-block mb-2">12</span>
                        <br>
                        <span class="uppercase font-bold">Countries</span>
                    </div>
                    <div class="text-center text-white mb-16 sm:mb-0">
                        <span class="text-6xl font-bold inline-block mb-2">8</span>
                        <br>
                        <span class="uppercase font-bold">Colors / Patterns</span>
                    </div>
                    <div class="text-center text-white mb-16 sm:mb-0">
                        <span class="text-6xl font-bold inline-block mb-2">2,625+</span>
                        <br>
                        <span class="uppercase font-bold">Satisfied Owners</span>
                    </div>
                </div>
            </div>
        </x-site-width>
    </div>

    {{-- Video --}}
    <div class="bg-black py-20">
        <x-site-width>
            <div
                class="bg-white rounded-full w-36 h-36 mx-auto mb-8 text-center relative transform hover:rotate-180 transition duration-200">
                <i class="fa fa-paw fa-6x text-gold absolute top-5 right-6"></i>
                <i class="fa fa-play fa-2x text-white absolute" style="top: 69px; left: 61px"></i>
                {{-- Play --}}
            </div>
            {{-- <div class="bg-white rounded-full w-20 h-20 mx-auto mb-8">
                <i class="fa fa-play fa-2x text-gold"></i>
            </div> --}}
            <h3 class="text-center text-6xl text-white font-bold">Watch some cute Cheetohs <br>to cheer your day
            </h3>
        </x-site-width>
    </div>

    {{-- Contact Form --}}
    <div id="contact" class="relative bg-white">
        <div class="absolute inset-0">
            <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
        </div>
        <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
            <div class="bg-gray-50 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
                <div class="max-w-lg mx-auto">
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">
                        Contact Us
                    </h2>
                    <p class="mt-3 text-lg leading-6 text-gray-500">
                        Please contact us with any questions or to get on the waiting list! We would love to help you
                        decide which Cheetoh kitten will be right for you!
                    </p>
                    <dl class="mt-8 text-base text-gray-500">
                        <div class="mt-6">
                            <dt class="sr-only">Phone number</dt>
                            <dd class="flex">
                                <!-- Heroicon name: outline/phone -->
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="ml-3">
                                    <a href="tel:928-532-7300">(928) 532-7300</a>
                                </span>
                            </dd>
                        </div>
                        <div class="mt-3">
                            <dt class="sr-only">Email</dt>
                            <dd class="flex">
                                <!-- Heroicon name: outline/mail -->
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3">
                                    <a href="mailto:windhavencheetohs@gmail.com">windhavencheetohs@gmail.com</a>
                                </span>
                            </dd>
                        </div>
                    </dl>
                    <p class="hidden mt-6 text-base text-gray-500 lg:flex">
                        Get on the waiting list.
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </p>
                    <a href="/kittens"
                        class="inline-block text-white bg-gold border border-gold font-bold mt-6 px-6 py-2 hover:bg-transparent hover:text-gold hover:border-gold trasnsition duration-200 ease-in-out">
                        View Available Kittens
                    </a>
                </div>
            </div>

            {{-- Get on the waiting list
                - Please describe what kind of cat you're interested in. --}}
            <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
                <div class="max-w-lg mx-auto lg:max-w-none">
                    <p class="mb-4 text-red-600">
                        Form functionality coming soon.
                    </p>
                    <form x-data="{ show: false }" action="/contact" method="POST">

                        <div class="flex items-center mb-4">
                            <label for="check"
                                class="cursor-pointer relative w-20 h-10 rounded-full transition-all duration-500"
                                :class="show ? 'bg-green-600 bg-opacity-70' : 'bg-gray-100'">
                                <input @click="show = !show" type="checkbox" id="check" class="sr-only peer">
                                <span
                                    class="w-2/5 h-4/5 shadow bg-white absolute rounded-full
                                left-1 top-1 peer-checked:bg-white peer-checked:left-11 transition-all duration-500"
                                    :class="show ? 'left-11' : 'left-1'"></span>
                            </label>

                            <div class="ml-3">
                                <p class="text-base text-gray-500">
                                    <span
                                        x-text="show ? 'Yes, I would like to join the Waiting List.' : 'Would you like to join the Waiting List?'"></span>
                                </p>
                            </div>
                        </div>
                        <div class="w-full" :class="show ? 'md:flex' : ''">
                            <div :class="show ? 'w-full md:w-1/2' : 'w-full'" class="transition-all duration-500">
                                <div class="mb-5">
                                    <label for="full-name" class="sr-only">Full name</label>
                                    <input type="text" name="full-name" id="full-name" autocomplete="name"
                                        class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300"
                                        placeholder="Full name">
                                </div>
                                <div class="mb-5">
                                    <label for="email" class="sr-only">Email</label>
                                    <input id="email" name="email" type="email" autocomplete="email"
                                        class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300"
                                        placeholder="Email">
                                </div>
                                <div class="mb-5">
                                    <label for="phone" class="sr-only">Phone</label>
                                    <input type="text" name="phone" id="phone" autocomplete="tel"
                                        class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300"
                                        placeholder="Phone">
                                </div>
                            </div>
                            <div :class="show ? 'w-full md:w-1/2 opacity-1 md:ml-4' : 'w-0 opacity-0'"
                                class="overflow-hidden transition-all duration-500">
                                <div :class="show ? 'mt-0' : '-mt-96'" class="transition-all duration-700">
                                    <div class="mb-5">
                                        <select id="gender" name="gender" autocomplete="gender-type"
                                            class="block w-full border-gray-300 shadow-sm focus:border-indigo-500 py-3 px-4 focus:ring-0">
                                            <option selected disabled value="">Choose a Gender</option>
                                            <option>Female</option>
                                            <option>Male</option>
                                        </select>
                                    </div>
                                    <div class="mb-5">
                                        <select id="color" name="color" autocomplete="color-name"
                                            class="block w-full border-gray-300 shadow-sm focus:border-indigo-500 py-3 px-4 focus:ring-0">
                                            <option selected disabled value="">Choose a Color</option>
                                            <option>Black</option>
                                            <option>Charcoal</option>
                                            <option>Gold</option>
                                            <option>Silver</option>
                                            <option>Snow</option>
                                        </select>
                                    </div>
                                    <div class="mb-5">
                                        <select id="pattern" name="pattern" autocomplete="pattern-type"
                                            class="block w-full border-gray-300 shadow-sm focus:border-indigo-500 py-3 px-4 focus:ring-0">
                                            <option selected disabled value="">Choose a Pattern</option>
                                            <option>Clouded</option>
                                            <option>Marble</option>
                                            <option>Rosetted</option>
                                            <option>Solid - Black Only</option>
                                            <option>Spotted</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="mb-5">
                                <label for="message" class="sr-only">Message</label>
                                <textarea id="message" name="message" rows="4"
                                    class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300"
                                    placeholder="Message"></textarea>
                            </div>
                            <button type="submit"
                                class="inline-block text-white bg-gold border border-gold font-bold px-6 py-2 hover:bg-transparent hover:text-gold hover:border-gold trasnsition duration-200 ease-in-out">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    {{-- <div class="bg-white w-full px-4 py-28 relative">
        <x-site-width>
            <form action="#" method="POST">
                @csrf
                <div class="max-w-4xl mx-auto overflow-hidden">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="mb-4">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">
                                First name
                            </label>
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="mt-1 focus:ring-gold focus:border-gold block w-full shadow-sm border-gray-300 rounded-sm">
                        </div>

                        <div class="mb-4">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">
                                Last name
                            </label>
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                class="mt-1 focus:ring-gold focus:border-gold block w-full shadow-sm border-gray-300 rounded-sm">
                        </div>

                        <div class="mb-4">
                            <label for="email-address" class="block text-sm font-medium text-gray-700">
                                Email address
                            </label>
                            <input type="text" name="email-address" id="email-address" autocomplete="email"
                                class="mt-1 focus:ring-gold focus:border-gold block w-full shadow-sm border-gray-300 rounded-sm">
                        </div>
                    </div>
                </div>
            </form>
        </x-site-width>
    </div> --}}

    {{-- <div class="bg-white w-full px-4 py-8 relative">
        hi
    </div> --}}


    {{-- <div x-data="{ show: false }">
        <button @click="show = !show">Show</button>
        <h1 x-show="show">Alpine Js is working !</h1>
    </div>
    <hr>

    <div x-data>
        <button @click="alert('Alpine Js is working !')">Click</button>
    </div> --}}
</x-app-layout>
