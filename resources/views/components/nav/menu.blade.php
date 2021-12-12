<div class="max-w-7xl mx-auto px-4 md:px-4 xl:px-8 relative">
    <div id="x-nav-menu" x-data="{ show: false }">
        <div class="flex flex-col lg:flex-row lg:justify-between">
            <div class="flex justify-end lg:justify-between lg:block">

                {{-- <a class="block h-12 w-40 mt-3 mb-5"
                    style="background-image: url(http://msjobs.test/img/medical-sales-jobs-logo.png); background-repeat: no-repeat; background-size: contain;"
                    href="/"></a> --}}

                <a href="/"
                    class="block absolute top-0 left-0 bg-white border-b-4 border-gold shadow-md pt-1 pb-2 px-2 rounded-b-sm z-10 ml-4 lg:ml-8 w-52 lg:w-auto">
                    <img src="{{ Storage::disk('s3')->url('wind-haven-cheetohs.png') }}" alt="Wind Haven Cheetohs"
                        style="margin-right: 10px;">
                </a>


                <button @click="show = !show"
                    class="block h-8 text-black items-center hover:text-opacity-50 focus:outline-none lg:hidden mt-5 mb-5">
                    <svg class="w-8 fill-current" viewBox="0 0 24 24">
                        <path x-show="!show" fill-rule="evenodd"
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                        <path x-show="show" fill-rule="evenodd"
                            d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
                            style="display: none;"></path>
                    </svg>
                </button>
            </div>
            <ul x-show="show" @click.away="show = false" id="x-guest-menu-mobile" class="flex flex-col lg:hidden"
                style="display: none;">
                <li>
                    <a href="/jobs"
                        class="block text-sm py-3 hover:text-green hover:bg-green hover:bg-opacity-20 hover:pl-3 transition-all duration-200 ease-in-out ">
                        Search Jobs
                    </a>
                </li>
                <li>
                    <a href="/my-jobs"
                        class="block text-sm py-3 hover:text-green hover:bg-green hover:bg-opacity-20 hover:pl-3 transition-all duration-200 ease-in-out ">
                        My Jobs
                    </a>
                </li>
                <li>
                    <a href="/messages"
                        class="block text-sm py-3 hover:text-green hover:bg-green hover:bg-opacity-20 hover:pl-3 transition-all duration-200 ease-in-out ">
                        Messages
                    </a>
                </li>
                <li>
                    <a href="/company-candidates"
                        class="block text-sm py-3 hover:text-green hover:bg-green hover:bg-opacity-20 hover:pl-3 transition-all duration-200 ease-in-out ">
                        My Candidates
                    </a>
                </li>
                <li>
                    <a href="/candidates"
                        class="block text-sm py-3 hover:text-green hover:bg-green hover:bg-opacity-20 hover:pl-3 transition-all duration-200 ease-in-out ">
                        Find Candidates
                    </a>
                </li>
                <li>
                    <a href="/services"
                        class="block text-sm py-3 hover:text-green hover:bg-green hover:bg-opacity-20 hover:pl-3 transition-all duration-200 ease-in-out ">
                        Services
                    </a>
                </li>


            </ul>


            <ul id="x-nav-desktop-menu" class="hidden items-center lg:flex flex-col lg:flex-row">
                <li>
                    <a href="/" class="block mx-5 group hover:text-gold transition duration-200 ease-in-out relative">
                        <i class="absolute fas fa-cat text-white z-10"
                            style="font-size: 14px; top: 18px; left: 9px"></i>
                        <i class="fas fa-home text-3xl z-10"></i>
                        <i class="absolute text-black text-sm group-hover:text-gold fas fa-square z-0"
                            style="top: 15px; left: 11px"></i>
                    </a>
                </li>
                <li>
                    <a href="/about"
                        class="block px-5 py-6 font-bold hover:text-gold transition duration-200 ease-in-out uppercase">
                        About
                    </a>
                </li>
                <li>
                    <a href="/cats"
                        class="block px-5 py-6 font-bold hover:text-gold transition duration-200 ease-in-out uppercase">Cats</a>
                </li>
                <li>
                    <a href="/available"
                        class="block px-5 py-6 font-bold hover:text-gold transition duration-200 ease-in-out uppercase">Available</a>
                </li>
                <li>
                    <a href="/resources"
                        class="block px-5 py-6 font-bold hover:text-gold transition duration-200 ease-in-out uppercase">Resources</a>
                </li>
                <li>
                    <a href="/contact"
                        class="block px-5 py-6 font-bold hover:text-gold transition duration-200 ease-in-out uppercase">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
