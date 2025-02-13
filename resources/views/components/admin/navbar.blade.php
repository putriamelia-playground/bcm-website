<nav class="bg-gray-800" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img class="size-8" src="{{ Storage::url('favicon/favicon.ico') }}" alt="BCM Indonesia">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <x-admin.nav-link href="/admin" :active="request()->is('admin')">Dashboard</x-nav-link>
                            <x-admin.nav-link href="/inputarticle" :active="request()->is('inputarticle')">Input Artikel</x-nav-link>
                                <x-admin.nav-link href="/inputagenda" :active="request()->is('inputagenda')">Input Agenda</x-nav-link>
                                    <x-admin.nav-link href="/inputregulations" :active="request()->is('inputregulations')">Input Regulasi</x-nav-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
