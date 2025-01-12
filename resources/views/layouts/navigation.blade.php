<nav x-data="{ open: false }" class="">
    <!-- Primary Navigation Menu -->

    <div class="max-w-7xl mx-auto px-2 lg:px-6">
        <div class="flex justify-between h-16">
            <div class="shrink-0 md:hidden lg:hidden flex h-16">
                <a href="{{ route('dashboard') }}" class="flex no-underline items-center text-black">
                    <div>
                        <x-application-logo class="block h-4 w-auto fill-current text-gray-600" />
                    </div>
                    <div class="font-bold ml-4">SMK JAMBI</div>
                </a>
            </div>
            <div class="flex">

                <!-- <button><i class="fa fa-bars bg-white py-3 shadow-sm px-3 rounded-lg"></i></button> -->
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <!-- <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Home') }}
                    </x-nav-link> -->
                </div>

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center lg:ml-6 md:ml-0">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <x-application-logo class="block h-4 w-auto fill-current text-gray-600" />


                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <div class="flex items-center px-4 py-2 font-light text-sm text-gray-700 capitalize border-b">
                                <div class="mr-2">
                                    <img class="w-8 h-8" src="{{ asset('img/logo/logo.png')}}" alt="">
                                </div>
                                <div>
                                {{ Auth::user()->name }}
                                </div>
                            </div>
                            <x-dropdown-link class="no-underline hover:text-pink-500" :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>

                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1 bg-white">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('classes')" :active="request()->routeIs('classes')">
                {{ __('Kelas') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('period')" :active="request()->routeIs('period')">
                {{ __('Periode') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('student')" :active="request()->routeIs('student')">
                {{ __('Data Siswa') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('mutation')" :active="request()->routeIs('mutation')">
                {{ __('Mutasi') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('transaction')" :active="request()->routeIs('transaction')">
                {{ __('Pembayaran') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('report')" :active="request()->routeIs('report')">
                {{ __('Laporan') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('user')" :active="request()->routeIs('user')">
                {{ __('Operator') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('profile')" :active="request()->routeIs('profile')">
                {{ __('Profile Sekolah') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 bg-white">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1 ">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link class="no-underline" :href="route('logout')" onclick="event.preventDefault();
     this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
