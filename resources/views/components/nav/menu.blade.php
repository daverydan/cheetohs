<div class="max-w-7xl mx-auto px-4 md:px-4 xl:px-8">
    <div id="x-nav-menu" x-data="{ show: false }">
        <div class="flex flex-col lg:flex-row lg:justify-between">
            <div class="flex justify-between lg:block">

                <a class="block h-12 w-40 mt-3 mb-5"
                    style="background-image: url(http://msjobs.test/img/medical-sales-jobs-logo.png); background-repeat: no-repeat; background-size: contain;"
                    href="/"></a>

                <button @click="show = !show"
                    class="block h-8 text-black items-center hover:text-opacity-50 focus:outline-none lg:hidden mt-5">
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

                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="flex items-center px-4">
                        <div class="flex-shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full object-cover"
                                src="https://ui-avatars.com/api/?name=Danny+Avery&amp;color=7F9CF5&amp;background=EBF4FF"
                                alt="Danny Avery">
                        </div>

                        <div>
                            <div class="font-medium text-base text-gray-800">Danny
                                Avery</div>
                            <div class="font-medium text-sm text-gray-500">danny.w.avery@gmail.com</div>
                        </div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <!-- Account Management -->

                        <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition"
                            href="/account-settings">Account Settings</a>


                        <!-- Authentication -->
                        <form method="POST" action="http://msjobs.test/logout">
                            <input type="hidden" name="_token" value="XkYoHACTCES3I7Ll4qA2WY96Bab4sVOhOaFcKqhB">
                            <a class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition"
                                href="http://msjobs.test/logout" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                Log Out
                            </a>
                        </form>

                        <!-- Team Management -->
                    </div>
                </div>
            </ul>


            <ul id="x-nav-desktop-menu" class="hidden lg:flex flex-col lg:flex-row">
                <li>
                    <a href="/jobs"
                        class="block text-sm border-t-4 border-transparent pt-7 pb-7 mx-5 hover:text-green hover:border-green hover:border-opacity-75 transition-colors duration-200 ease-in-out ">Search
                        Jobs</a>
                </li>
                <li>
                    <a href="/my-jobs"
                        class="block text-sm border-t-4 border-transparent pt-7 pb-7 mx-5 hover:text-green hover:border-green hover:border-opacity-75 transition-colors duration-200 ease-in-out ">My
                        Jobs</a>
                </li>
                <li>
                    <a href="/messages"
                        class="block text-sm border-t-4 border-transparent pt-7 pb-7 mx-5 hover:text-green hover:border-green hover:border-opacity-75 transition-colors duration-200 ease-in-out ">Messages</a>
                </li>
                <li>
                    <a href="/company-candidates"
                        class="block text-sm border-t-4 border-transparent pt-7 pb-7 mx-5 hover:text-green hover:border-green hover:border-opacity-75 transition-colors duration-200 ease-in-out ">My
                        Candidates</a>
                </li>
                <li>
                    <a href="/candidates"
                        class="block text-sm border-t-4 border-transparent pt-7 pb-7 mx-5 hover:text-green hover:border-green hover:border-opacity-75 transition-colors duration-200 ease-in-out ">Find
                        Candidates</a>
                </li>
                <li>
                    <a href="/services"
                        class="block text-sm border-t-4 border-transparent pt-7 pb-7 mx-5 hover:text-green hover:border-green hover:border-opacity-75 transition-colors duration-200 ease-in-out ">Services</a>
                </li>

                <!-- Settings Dropdown -->
                <div class="ml-2 relative" style="margin-top: 22px">
                    <div class="relative" x-data="{ open: false }" @click.away="open = false"
                        @close.stop="open = false">
                        <div @click="open = ! open">
                            <button
                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover"
                                    src="https://ui-avatars.com/api/?name=Danny+Avery&amp;color=7F9CF5&amp;background=EBF4FF"
                                    alt="Danny Avery">
                            </button>
                        </div>

                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute z-50 mt-2 w-48 rounded-md shadow-lg origin-top-right right-0 "
                            style="display: none;" @click="open = false">
                            <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Manage Account
                                </div>


                                <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition"
                                    href="/account-settings">Account Settings</a>


                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="http://msjobs.test/logout">
                                    <input type="hidden" name="_token" value="XkYoHACTCES3I7Ll4qA2WY96Bab4sVOhOaFcKqhB">
                                    <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition"
                                        href="http://msjobs.test/logout" onclick="event.preventDefault();
                                                this.closest('form').submit();">Log Out</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>


        </div>
    </div>
</div>
