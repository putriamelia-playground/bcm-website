<x-layout>
    <!-- header -->
    <x-slot:title>{{$title}}</x-slot:title>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        <!-- start image slider -->
        <div id="default-carousel" class="relative w-full mb-14" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ Storage::url('corousel-content/corousel-1.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>

                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ Storage::url('corousel-content/corousel-2.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>

                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ Storage::url('corousel-content/corousel-3.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>

                {{-- <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ Storage::url('corousel-content/example-4.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>

            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ Storage::url('corousel-content/example-5.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div> --}}

        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            {{-- <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button> --}}
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <!-- end image slider -->

    <!-- start overview perusahaan -->
    <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mb-14">
        <img class="object-cover h-80 w-full object-scale-down rounded-md lg:1/2 md:w-1/2" src="{{ Storage::url('company-overview-photo/company-overview-final.png') }}" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BCM Indonesia, Solusi Keberlanjutan Bisnis Anda</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                BCM Indonesia hadir untuk membantu dalam menerapkan Business Continuity Management Systems (BCMS) secara efektif. Kami mendukung perusahaan dalam menghadapi perusbahan regulasi, standarisasi sesuai dengan ketentuan yang berlaku, serta berbagai risiko operasional agar bisnis tetap berjalan dengan lancar dan berkelanjutan.
            </p>
        </div>
    </div>
    <!-- end overview perusahaan -->

    <!-- start layanan -->
    <div class="relative flex flex-col items-center justify-center mb-14">
        <div class="carousel scrollbar-hide flex w-full snap-x snap-mandatory gap-4 overflow-x-scroll scroll-smooth">
            <div class="relative aspect-[1/1] w-[85%] shrink-0 snap-start snap-always border border-gray-200 rounded-lg shadow md:w-[calc(32.30%-(32px/3))]">
                <img class="object-cover rounded-t-lg h-48 w-96 " src="{{ Storage::url('homepage-service-photo/project-implementation.jpg') }}" alt="" />
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Project Implementation</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Kami membantu organisasi dalam merancang dan mengimplementasikan Business Continuity Management System (BCMS) sesuai standar internasional. Dengan pendekatan yang terstruktur, kami memastikan kesiapan bisnis dalam menghadapi gangguan operasional.</p>
                </div>
            </div>

            <div class="relative aspect-[1/1] w-[85%] shrink-0 snap-start snap-always border border-gray-200 rounded-lg shadow md:w-[calc(32.30%-(32px/3))]">
                <img class="object-cover rounded-t-lg h-48 w-96 " src="{{ Storage::url('homepage-service-photo/consulting-services.jpg') }}" alt="" />
                </a>
                <div class="p-5">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Consulting Services</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Layanan konsultasi kami mencakup asesmen risiko, pengembangan strategi keberlanjutan bisnis, serta kepatuhan terhadap regulasi dan standar industri. Tim ahli kami siap memberikan solusi terbaik yang disesuaikan dengan kebutuhan perusahaan Anda.</p>
                </div>
            </div>

            <div class="relative aspect-[1/1] w-[85%] shrink-0 snap-start snap-always border border-gray-200 rounded-lg shadow md:w-[calc(32.30%-(32px/3))]">
                <img class="object-cover rounded-t-lg h-48 w-96 " src="{{ Storage::url('homepage-service-photo/technical-advisory.jpg') }}" alt="" />
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Technical Advisory</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Kami menyediakan dukungan teknis dalam implementasi kebijakan, prosedur, dan teknologi terkait manajemen risiko dan keberlanjutan bisnis. Dengan pendekatan berbasis data, kami membantu organisasi mengoptimalkan sistem dan infrastruktur BCMS.</p>
                </div>
            </div>

            <div class="relative aspect-[1/1] w-[85%] shrink-0 snap-start snap-always border border-gray-200 rounded-lg shadow md:w-[calc(32.30%-(32px/3))]">
                <img class="object-cover rounded-t-lg h-48 w-96 " src="{{ Storage::url('homepage-service-photo/maturity-assignment.jpg') }}" alt="" />
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Maturity Assignment</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Layanan ini bertujuan untuk mengukur tingkat kesiapan dan kematangan BCMS di perusahaan Anda. Kami memberikan analisis komprehensif serta rekomendasi strategis untuk peningkatan yang berkelanjutan.</p>
                </div>
            </div>

            <div class="relative aspect-[1/1] w-[85%] shrink-0 snap-start snap-always border border-gray-200 rounded-lg shadow md:w-[calc(32.30%-(32px/3))]">
                <img class="object-cover rounded-t-lg h-48 w-96 " src="{{ Storage::url('homepage-service-photo/training-services.jpg') }}" alt="" />
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Training Services</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Kami menawarkan pelatihan berbasis praktik terbaik untuk meningkatkan pemahaman dan keterampilan dalam implementasi BCMS. Program pelatihan kami mencakup berbagai level, dari pemula hingga profesional yang ingin memperoleh sertifikasi.</p>
                </div>
            </div>

            <div class="relative aspect-[1/1] w-[85%] shrink-0 snap-start snap-always border border-gray-200 rounded-lg shadow md:w-[calc(32.30%-(32px/3))]">
                <img class="object-cover rounded-t-lg h-48 w-96 " src="{{ Storage::url('homepage-service-photo/software-development.jpg') }}" alt="" />
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Software Development</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Kami mengembangkan perangkat lunak yang dirancang khusus untuk mendukung manajemen risiko dan keberlanjutan bisnis. Solusi berbasis teknologi ini membantu perusahaan dalam pemantauan, dokumentasi, dan pengelolaan program BCM secara efektif.</p>
                </div>
            </div>

            <div class="relative aspect-[1/1] w-[85%] shrink-0 snap-start snap-always border border-gray-200 rounded-lg shadow md:w-[calc(32.30%-(32px/3))]">
                <img class="object-cover rounded-t-lg h-48 w-96 " src="{{ Storage::url('homepage-service-photo/K3-product.jpg') }}" alt="" />
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">K3 Product</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center">Kami menyediakan berbagai produk dan solusi untuk mendukung Keselamatan dan Kesehatan Kerja (K3) di lingkungan bisnis Anda. Produk kami membantu memastikan kepatuhan terhadap regulasi dan menciptakan tempat kerja yang lebih aman.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- end layanan -->

    <!-- start testimoni -->
    <div id="default-carousel" class="relative w-full mb-14" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96 z-0">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <section class="relative isolate bg-white lg:px-6 lg:py-24 px-4 py-14">
                    <div class="flex justify-center">
                        <div class="flex flex-col">
                            <img class="mx-auto size-16 lg:size-40 rounded-full" src="{{ Storage::url('testimonial-photo/jamsyar.jpg') }}" alt="">
                            <figcaption class="mt-2 lg:text-lg sm:text-sm text-center text-gray-500 dark:text-gray-400">Jamkrindo Syariah</figcaption>
                        </div>
                        <a href="#" class="flex flex-col items-center bg-white rounded-lg md:flex-row md:max-w-4xl hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 ">

                            <div class="flex flex-col justify-between px-4 lg:p-4 leading-normal">
                                <h5 class="mb-2 text-xl lg:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">PT Jamkrindo Syariah</h5>
                                <p class="mb-3 text-xs lg:text-xl text-gray-700 dark:text-gray-400">“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis."</p>
                                <p class="mb-3 hidden lg:block lg:font-normal text-gray-700 dark:text-gray-400 text-right">Kepala Divisi Teknologi Informasi</p>
                            </div>
                        </a>
                    </div>
                </section>
            </div>

            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <section class="relative isolate bg-white lg:px-6 lg:py-24 px-4 py-14">
                    <div class="flex justify-center">
                        <div class="flex flex-col">
                            <img class="mx-auto size-16 lg:size-40 rounded-full" src="{{ Storage::url('testimonial-photo/jamkrindo.jpg') }}" alt="">
                            <figcaption class="mt-2 lg:text-lg sm:text-sm text-center text-gray-500 dark:text-gray-400">Jamkrindo</figcaption>
                        </div>
                        <a href="#" class="flex flex-col items-center bg-white rounded-lg md:flex-row md:max-w-4xl hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 ">

                            <div class="flex flex-col justify-between px-4 lg:p-4 leading-normal">
                                <h5 class="mb-2 text-xl lg:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">PT Jamkrindo</h5>
                                <p class="mb-3 text-xs lg:text-xl text-gray-700 dark:text-gray-400">“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis."</p>
                                <p class="mb-3 hidden lg:block lg:font-normal text-gray-700 dark:text-gray-400 text-right">Kepala Divisi Pengembangan</p>
                            </div>
                        </a>
                    </div>
                </section>
            </div>

        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <!-- end testimoni -->

    {{-- start our organization --}}
    <div class="bg-white py-24 sm:py-32 rounded-lg">
        <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
            <ul role="list" class="nostyle-ul grid gap-x-8 gap-y-12 sm:grid-cols-3 sm:gap-y-16 xl:col-span-3">
                <li>
                    <div class="flex flex-col items-center gap-x-6">
                        <img class="size-48 rounded-full" src="{{ Storage::url('organization-photo/fajar.png') }}" alt="">
                        <div>
                            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 text-center">Fajar Atrifani SE. MM. BCCS.</h3>
                            <p class="text-sm/6 font-semibold text-indigo-600 text-center">Founder</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="flex flex-col items-center gap-x-6">
                        <img class="size-48 rounded-full" src="{{ Storage::url('organization-photo/alvin.png') }}" alt="">
                        <div>
                            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 text-center">Alvin</h3>
                            <p class="text-sm/6 font-semibold text-indigo-600 text-center">Director</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="flex flex-col items-center gap-x-6">
                        <img class="size-48 rounded-full" src="{{ Storage::url('organization-photo/nana.png') }}" alt="">
                        <div>
                            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 text-center">Nabila Pahlevi</h3>
                            <p class="text-sm/6 font-semibold text-indigo-600 text-center">Junior Associate</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="flex flex-col items-center gap-x-6">
                        <img class="size-48 rounded-full" src="{{ Storage::url('organization-photo/nabiilah.png') }}" alt="">
                        <div>
                            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 text-center">Nabiilah Mufiidah</h3>
                            <p class="text-sm/6 font-semibold text-indigo-600 text-center">Support Staff</p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="flex flex-col items-center gap-x-6">
                        <img class="size-48 rounded-full" src="{{ Storage::url('organization-photo/putri.png') }}" alt="">
                        <div>
                            <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 text-center">Putri Amelia</h3>
                            <p class="text-sm/6 font-semibold text-indigo-600 text-center">IT Support</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    {{-- end our organization --}}

    </div>
</x-layout>
