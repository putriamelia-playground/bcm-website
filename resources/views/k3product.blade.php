<x-layout>
    <x-slot:title>
        {{$title}}
    </x-slot:title>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mb-40">

        <div class="flex flex-row bg-white sm:py-32 rounded-lg justify-center">
            <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-xl">
                <div class="p-4">
                    <div class="mb-2 flex items-center justify-between">
                        <p class="text-slate-800 text-xl font-semibold text-center">
                        Informasi Lengkap untuk Keputusan Cerdas
                        </p>
                        </div>
                            <p class="text-slate-600 leading-normal font-light text-center">
                            click here for more product and place an order
                            </p>
                            <a href=<?= env('K3_PRODUCT_LINK') ?>>
                                <button class="rounded-md w-full mt-6 bg-blue-700 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-cyan-700 focus:shadow-none active:bg-cyan-700 hover:bg-cyan-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                                Hubungi kami via Whatsapp
                                </button>
                            </a>
                        </div>
                </div>
        </div>

    </div>
</x-layout>