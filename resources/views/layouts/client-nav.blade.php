<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 fixed w-full z-10 top-0">
    <!-- Primary Navigation Menu -->


    <header>
        <div class="relative bg-white">
            <div class="flex justify-between items-center max-w-7xl mx-auto px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
                <div class="flex justify-start lg:w-0 lg:flex-1 items-center">
                    <a href="{{route('index')}}">
                        <span class="sr-only">Workflow</span>
                        <img class="h-8 w-auto sm:h-10 rounded-full mr-3" src="{{asset('/images/logo.jpg')}}" alt="">

                    </a>
                    <span class="font-extrabold tracking-tight text-gray-900">СТОМА ВМЕСТЕ</span>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <button id="user-menu-button" data-collapse-toggle="mobile-menu-4" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <nav class="hidden md:flex space-x-10">
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('help')" :active="request()->routeIs('help')">
                            {{ __('Как помочь') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('deals')" :active="request()->routeIs('deals')">
                            {{ __('Что мы делаем') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('articles')" :active="request()->routeIs('articles')">
                            {{ __('Новости') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('patients')" :active="request()->routeIs('patients')">
                            {{ __('Пациентам') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('organisations')" :active="request()->routeIs('organisations')">
                            {{ __('Организациям') }}
                        </x-nav-link>
                    </div>
                    <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                        <!-- Dropdown toggle button -->
                        <x-nav-link :href="route('about')" :active="request()->routeIs('about')" @mouseover="open = true">
                            {{ __('О нас') }}
                        </x-nav-link>


                        <!-- Dropdown menu -->
                        <div x-show="open"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform scale-90"
                             x-transition:enter-end="opacity-100 transform scale-100"
                             x-transition:leave="transition ease-in duration-300"
                             x-transition:leave-start="opacity-100 transform scale-100"
                             x-transition:leave-end="opacity-0 transform scale-90"
                             class="absolute right-0 w-48 py-2  bg-gray-100 rounded-md shadow-xl">
                            <a href="{{route('vacancy')}}"
                               class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                Вакансии
                            </a>
                            <a href="{{route('smi')}}"
                               class="block px-4 py-2 text-sm text-gray-300 text-gray-700 hover:bg-gray-400 hover:text-white">
                                СМИ о нас
                            </a>
                        </div>
                    </div>

                </nav>
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                    <a href="#" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700">
                       Помочь
                    </a>
                </div>
            </div>

            <!--
              Mobile menu, show/hide based on mobile menu state.

              Entering: "duration-200 ease-out"
                From: "opacity-0 scale-95"
                To: "opacity-100 scale-100"
              Leaving: "duration-100 ease-in"
                From: "opacity-100 scale-100"
                To: "opacity-0 scale-95"
            -->
            <div id="mobile-menu" class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right hidden">
                <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
                    <div class="pt-5 pb-6 px-5">
                        <div class="flex items-center justify-between">
                            <div class="-mr-2">
                                <button type="button" id="mobile-menu-button-toggled" class="bg-white rounded-md inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                                    <span class="sr-only">Close menu</span>
                                    <!-- Heroicon name: outline/x -->
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-6">
                            <nav class="grid grid-cols-1 gap-7">
                                <div class=" space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <x-nav-link :href="route('help')" :active="request()->routeIs('help')">
                                        {{ __('Как помочь') }}
                                    </x-nav-link>
                                </div>
                                <div class=" space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <x-nav-link :href="route('deals')" :active="request()->routeIs('deals')">
                                        {{ __('Что мы делаем') }}
                                    </x-nav-link>
                                </div>
                                <div class=" space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <x-nav-link :href="route('articles')" :active="request()->routeIs('articles')">
                                        {{ __('Новости') }}
                                    </x-nav-link>
                                </div>
                                <div class=" space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <x-nav-link :href="route('patients')" :active="request()->routeIs('patients')">
                                        {{ __('Пациентам') }}
                                    </x-nav-link>
                                </div>
                                <div class=" space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <x-nav-link :href="route('organisations')" :active="request()->routeIs('organisations')">
                                        {{ __('Организациям') }}
                                    </x-nav-link>
                                </div>
                                <div class=" space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                                        {{ __('О нас') }}
                                    </x-nav-link>
                                </div>
                                <div class=" space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <x-nav-link :href="route('smi')" :active="request()->routeIs('smi')">
                                        {{ __('СМИ о нас') }}
                                    </x-nav-link>
                                </div>
                                <div class=" space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <x-nav-link :href="route('vacancy')" :active="request()->routeIs('vacancy')">
                                        {{ __('Вакансии') }}
                                    </x-nav-link>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </header>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('manage.index')" :active="request()->routeIs('manage.index')">
                {{ __('manage') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
