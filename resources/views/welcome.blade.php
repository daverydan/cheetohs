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
                    <h3 class="text-4xl font-bold mb-5">Cheetoh Cat Founder</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus nostrum sed voluptatem, et
                        esse, maxime ad magni nam fugiat numquam aliquam explicabo ducimus iste laborum eaque rem a
                        commodi neque.</p>
                    <a href="#"
                        class="inline-block border border-white font-bold mt-6 px-4 py-2 hover:bg-gold hover:border-gold trasnsition duration-200 ease-in-out">
                        Available Kittens
                    </a>
                </div>
            </div>

            <img class="md:max-w-xl lg:max-w-3xl xl:max-w-4xl md:absolute md:bottom-0 md:right-0"
                src="{{ Storage::disk('s3')->url('Past Customers/Windhaven’s Royalspotted Treasure ,born March 13,2017.jpg') }}"
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
                        <h4 class="text-gold uppercase ml-2">About Us</h4>
                    </div>

                    <h2 class="text-4xl font-bold mb-5">
                        Breeding jungle lap cats since <span class="text-gold">1985</span>
                    </h2>
                    <p class="mb-5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                    <ul class="font-bold leading-9 pl-5">
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>Year round night staff</span>
                        </li>
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>World-class farriery team</span>
                        </li>
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>Complete fostering service</span>
                        </li>
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>24hr resident veterinary care</span>
                        </li>
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>Own fleet of equine transport</span>
                        </li>
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>Quarantine and isolation facilities</span>
                        </li>
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>Full time and stud season boarders</span>
                        </li>
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>4 purpose-built foaling units encompassing 24hr supervision</span>
                        </li>
                        <li>
                            <i class="fa fa-paw text-gold mr-1"></i>
                            <span>On-site veterinary hospital with neo-natal intensive care unit</span>
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

                <h2 class="font-bold text-4xl mb-5">Creator of the <br>Cheetoh Breed</h2>

                <p class="mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut
                    labore et dolore magna aliqua.
                </p>
            </div>

            <div class="flex lg:justify-between flex-col lg:flex-row">
                {{-- Queens --}}
                <div class="max-w-lg mx-auto lg:w-1/3 bg-white mb-12 lg:mb-0">
                    <a href="/queens" class="block group">
                        <div class="block overflow-hidden" style="max-height: 364px">
                            <div class="h-96 w-full scale-100 transform hover:scale-125 transition duration-1000 ease-in-out bg-cover bg-no-repeat"
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
                            <p class="inline-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            <button type="button" href="/queens"
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
                            <div class="h-96 w-full scale-100 transform hover:scale-125 transition duration-1000 ease-in-out bg-cover bg-no-repeat"
                                style="background-image: url({{ asset('img/king-cheetoh.jpeg') }})">
                                {{-- 'https://templates.envytheme.com/semental/default/assets/img/courses1.jpg' --}}
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
                            <p class="inline-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            <button type="button" href="/queens"
                                class="inline-block text-white bg-gold border border-gold font-bold mt-8 px-6 py-2 group-hover:bg-transparent group-hover:text-gold hover:border-gold hover:text-gold trasnsition duration-200 ease-in-out">
                                View Now
                            </button>
                        </div>
                    </a>
                </div>
                {{-- Kittens --}}
                <div class="max-w-lg mx-auto lg:w-1/3 bg-white mb-12 lg:mb-0">
                    <a href="/queens" class="block group">
                        <div class="block overflow-hidden" style="max-height: 364px">
                            <div class="h-96 w-full scale-100 transform hover:scale-125 transition duration-1000 ease-in-out bg-cover bg-no-repeat"
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
                            <p class="inline-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                            <button type="button" href="/queens"
                                class="inline-block text-white bg-gold border border-gold font-bold mt-8 px-6 py-2 group-hover:bg-transparent group-hover:text-gold hover:border-gold hover:text-gold trasnsition duration-200 ease-in-out">
                                View Now
                            </button>
                        </div>
                    </a>
                </div>
            </div>
        </x-site-width>
    </div>
    <div class="w-full bg-gold border-t-2 border-white pt-96">
        <x-site-width>
            <div class="pt-7 pb-28">
                <div class="flex flex-col sm:justify-around sm:flex-row">
                    <div class="text-center text-white mb-16 sm:mb-0">
                        <span class="text-6xl font-bold inline-block mb-2">35</span>
                        <br>
                        <span class="uppercase font-bold">Trainers</span>
                    </div>
                    <div class="text-center text-white mb-16 sm:mb-0">
                        <span class="text-6xl font-bold inline-block mb-2">358</span>
                        <br>
                        <span class="uppercase font-bold">Students</span>
                    </div>
                    <div class="text-center text-white mb-16 sm:mb-0">
                        <span class="text-6xl font-bold inline-block mb-2">47</span>
                        <br>
                        <span class="uppercase font-bold">Cheetohs</span>
                    </div>
                    <div class="text-center text-white mb-16 sm:mb-0">
                        <span class="text-6xl font-bold inline-block mb-2">36</span>
                        <br>
                        <span class="uppercase font-bold">Years of Experience</span>
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


    {{-- <div x-data="{ show: false }">
        <button @click="show = !show">Show</button>
        <h1 x-show="show">Alpine Js is working !</h1>
    </div>
    <hr>

    <div x-data>
        <button @click="alert('Alpine Js is working !')">Click</button>
    </div> --}}
</x-app-layout>
