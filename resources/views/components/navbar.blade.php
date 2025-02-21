<nav class="bg-blue-900" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img class="size-8" src="{{ Storage::url('favicon/favicon.ico') }}" alt="BCM Indonesia">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href="/article" :active="request()->is('article')">Artikel</x-nav-link>
                        <x-nav-link href="/agenda" :active="request()->is('agenda')">Agenda</x-nav-link>
                        <x-nav-link href="/about-us" :active="request()->is('about-us')">Tentang Kami</x-nav-link>
                        <x-nav-link href="/layanan" :active="request()->is('layanan')">Layanan</x-nav-link>
                        <x-nav-link href="/k3-product" :active="request()->is('k3-product')">K3 Product</x-nav-link>
                        {{-- <!-- <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">K3 Product</a> --> --}}
                    </div>
                </div>
            </div>

            {{-- start select language --}}

            <div class="flex flex-row justify-center bg-white h-auto select-none">
                <div class="flex flex-row items-center right-1 ">
                    <a href="#">
                        <button class="p-2 flex flex-row items-center border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:bg-gray-200 focus:outline-none">
                            <span class="text-md">ID</span>
                            <span class="ml-1"> <img src="{{ Storage::url('language-logo/ind.png') }}" class="w-5 h-5" /></span>
                        </button>
                    </a>

                    <a href="/landingenpage">
                        <button class="p-2 flex flex-row items-center border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-100 focus:bg-gray-200 focus:outline-none ">
                            <span class="text-md">EN</span>
                            <span class="ml-1"> <img src="{{ Storage::url('language-logo/en.png') }}" class="w-5 h-5" /></span>
                        </button>
                    </a>
                </div>
            </div>

            {{-- end select language --}}

            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <x-nav-link-mobile href="/" :active="request()->is('/')">Home</x-nav-link-mobile>
            <x-nav-link-mobile href="/article" :active="request()->is('article')">Artikel</x-nav-link-mobile>
            <x-nav-link-mobile href="/agenda" :active="request()->is('agenda')">Agenda</x-nav-link-mobile>
            <x-nav-link-mobile href="/about-us" :active="request()->is('about-us')">Tentang Kami</x-nav-link-mobile>
            <x-nav-link-mobile href="/layanan" :active="request()->is('layanan')">Layanan</x-nav-link-mobile>
            <x-nav-link-mobile href="/k3-product" :active="request()->is('k3-product')">K3 Product</x-nav-link-mobile>
        </div>
    </div>
</nav>
