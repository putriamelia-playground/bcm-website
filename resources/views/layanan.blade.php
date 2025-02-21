<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="relative font-sans before:absolute before:w-full before:h-full before:inset-0 before:bg-black before:opacity-50 before:z-10 sm:w-full">
        <img src="https://readymadeui.com/cardImg.webp" alt="Banner Image" class="absolute inset-0 w-full h-full object-cover" />

        <div class="min-h-[350px] relative z-50 h-full max-w-6xl mx-auto flex flex-col justify-center items-center text-center text-white p-6">
            <h2 class="sm:text-4xl text-5xl font-bold mb-6">Layanan</h2>
            <p class="sm:text-lg text-base text-center text-gray-200">Empowering Your Success, One Service at a Time</p>
        </div>
    </div>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mb-40">
        <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mb-14">
            <img class="object-fill w-full rounded-md h-96 lg:w-1/2" src="{{ Storage::url('company-overview-photo/company-overview-final.png') }}" alt="">
            <div class="flex flex-col justify-between mx-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BCM Indonesia</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    PT P3MKU didirikan untuk merespons tingginya kebutuhan organisasi dan perusahaan dalam penerapan Manajemen Risiko dan Keberlangsungan Usaha. Seiring dengan perkembangan bisnis dan operasional, perusahaan dihadapkan pada berbagai tntangan, termasuk perubahan regulasi, penyesuaian terhadap standar internasional, serta risiko bencana dan gangguan yang dapat memengaruhi keberlangsungan usaha. <br> <br>
                    Kami hadir untuk membantu perusahaan dalam merancang dan mengimplementasikan stragesi ketahanan bisnis yang efektif bisnis ketahanan bisnis yang efektif. Dengan pendekatan berbasis regulasi dan praktik terbaik, P3MKU berkomitmen mendukung organisasi dalam memastikan kesiapan menghadapi risiko serta mencapai tujuan bisnis secara berkelanjutan.
                </p>
            </div>
        </div>

        <div class="flex flex-col bg-white sm:py-32 rounded-lg p-4 justify-between align-center grid grid-cols-1 gap-1 md:grid-cols-2 md:gap-2 lg:grid-cols-3 lg:gap-3 ">
            <div class="w-80 h-80 justify-center justify-self-center relative rounded-lg text-wrap p-2">
                <img class="h-full w-full object-cover rounded-lg" src="{{ Storage::url('layananpage-service-photo/pengembangan-dokumen.jpg') }}" alt="">
                <div class="opacity-20 hover:opacity-100 hover:bg-sky-950 hover:bg-opacity-50 rounded-lg hover:text-3xl duration-300 absolute inset-0 z-10 flex justify-center items-center text-2xl text-white text-center font-semibold">Penyusunan dan Pengembangan Dokumen</div>
            </div>

            <div class="w-80 h-80 justify-center justify-self-center relative rounded-lg text-wrap p-2 ">
                <img class="h-full w-full object-cover rounded-lg" src="{{ Storage::url('layananpage-service-photo/proses-dan-implementasi-BCMS.jpg') }}" alt="">
                <div class="opacity-20 hover:opacity-100 hover:bg-sky-950 hover:bg-opacity-50 rounded-lg hover:text-3xl duration-300 absolute inset-0 z-10 flex justify-center items-center text-2xl text-white text-center font-semibold">Proses dan Implementasi BCMS</div>
            </div>

            <div class="w-80 h-80 justify-center justify-self-center relative rounded-lg text-wrap p-2">
                <img class="h-full w-full object-cover rounded-lg" src="{{ Storage::url('layananpage-service-photo/audit-dan-sertifikasi.jpg') }}" alt="">
                <div class="opacity-20 hover:opacity-100 hover:bg-sky-950 hover:bg-opacity-50 rounded-lg hover:text-3xl duration-300 absolute inset-0 z-10 flex justify-center items-center text-2xl text-white text-center font-semibold">Audit dan Sertifikasi</div>
            </div>

            <div class="w-80 h-80 justify-center justify-self-center relative rounded-lg text-wrap p-2">
                <img class="h-full w-full object-cover rounded-lg" src="{{ Storage::url('layananpage-service-photo/pelatihan-dan-simulasi.jpg') }}" alt="">
                <div class="opacity-20 hover:opacity-100 hover:bg-sky-950 hover:bg-opacity-50 rounded-lg hover:text-3xl duration-300 absolute inset-0 z-10 flex justify-center items-center text-2xl text-white text-center font-semibold">Pelatihan dan Simulasi</div>
            </div>

            <div class="w-80 h-80 justify-center justify-self-center relative rounded-lg text-wrap p-2">
                <img class="h-full w-full object-cover rounded-lg" src="{{ Storage::url('layananpage-service-photo/pengembangan-aplikasi.jpg') }}" alt="">
                <div class="opacity-20 hover:opacity-100 hover:bg-sky-950 hover:bg-opacity-50 rounded-lg hover:text-3xl duration-300 absolute inset-0 z-10 flex justify-center items-center text-2xl text-white text-center font-semibold">Pengembangan Aplikasi</div>
            </div>

            <div class="w-80 h-80 justify-center justify-self-center relative rounded-lg text-wrap p-2">
                <img class="h-full w-full object-cover rounded-lg" src="{{ Storage::url('layananpage-service-photo/workshop-dan-training.jpg') }}" alt="">
                <div class="opacity-20 hover:opacity-100 hover:bg-sky-950 hover:bg-opacity-50 rounded-lg hover:text-3xl duration-300 absolute inset-0 z-10 flex justify-center items-center text-2xl text-white text-center font-semibold">Workshop dan Training</div>
            </div>
        </div>
    </div>
</x-layout>
