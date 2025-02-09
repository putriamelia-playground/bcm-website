<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mb-40">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center p-4">Tentang Kami</h5>
        {{-- start about us --}}
        <a class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full dark:border-gray-700 dark:bg-gray-800 mb-14">
            <img class="object-cover max-w-full lg:w-1/2 md:w-1/2 rounded-md h-96 " src="{{ Storage::url('corousel-content/example-3.jpg') }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Brief Desc & Sejarah</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    PT. P3MKU didirikan untuk merespons tingginya kebutuhan organisasi dalam penerapan Business Continuity Management Systems (BCMS). Seiring dengan perkembangan bisnis dan operasional, organisasi dihadapkan pada berbagai tantangan, termasuk perubahan regulasi, penyesuaian terhadap standar internasional, serta risiko bencana dan gangguan yang dapat mempengaruhi keberlangsungan usaha. <br> <br>
                    Kami hadir untuk membantu perusahaan dalam merancang dan mengimplementasikan strategi ketahanan bisnis yang efektif. Dengan pendekatan berbasis regulasi dan praktik terbaik, P3MKU berkomitmen mendukung organisasi dalam memastikan kesiapan menghadapi risiko serta mencapai tujuan bisnis secara berkelanjutan.
                </p>
            </div>
        </a>
        {{-- end about us --}}

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center p-4">Visi Misi</h5>

        {{-- start visi misi --}}
        <a class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full dark:border-gray-700 dark:bg-gray-800">
            <img class="object-cover max-w-full lg:w-1/2 md:w-1/2 rounded-md h-96" src="{{ Storage::url('corousel-content/example-3.jpg') }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">

                <div class="block max-w-full p-6 mb-4 bg-white rounded-lg">
                    <div class="inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                        </svg>

                        <h5 class="mb-2 ml-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Visi</h5>
                    </div>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Menjadi konsultan menajemen terdepan di Indonesia dalam pengembangan kapabilitas, pelatihan, dan implementasi manajemen keberlangsungan usaha.</p>
                </div>

                <div class="block max-w-full p-6 bg-white rounded-lg">
                    <div class="inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
                        </svg>

                        <h5 class="mb-2 ml-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Misi</h5>
                    </div>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Menjadi mitra terpercaya bagi organisasi dengan memberikan layanan berkualitas yang mendukung pencapaian tujuan bisnis secara strategis dan berkelanjutan.</p>
                </div>

            </div>
        </a>
        {{-- end visi misi --}}

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center p-4">Our Client</h5>

        {{-- start our client --}}
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <h2 class="text-center text-lg/8 font-semibold text-gray-900">Trusted by the world’s most innovative teams</h2>
                <div class="mx-auto mt-10 grid grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                    <img class="h-full w-full" src="{{ Storage::url('client-logo/logo-bi.png') }}" alt="">
                    <img class="h-full w-full" src="{{ Storage::url('client-logo/logo-jamsyar.png') }}" alt="">
                    <img class="h-full w-full" src="{{ Storage::url('client-logo/logo-bi.png') }}" alt="">
                    <img class="h-full w-full" src="{{ Storage::url('client-logo/logo-jamsyar.png') }}" alt="">
                </div>
            </div>
        </div>
        {{-- end our client --}}
    </div>
</x-layout>
