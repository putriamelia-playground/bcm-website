<x-layout>
    <!-- header -->
    <x-slot:title>{{$title}}</x-slot:title> 
    
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mb-40">

    <!-- start image slider -->
        <div id="default-carousel" class="relative w-full mb-14" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ Storage::url('corousel-content/example-1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>

                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ Storage::url('corousel-content/example-2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>

                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ Storage::url('corousel-content/example-3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>

                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ Storage::url('corousel-content/example-4.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>

                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ Storage::url('corousel-content/example-5.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                
            </div>
            <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
            <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
        </div>
    <!-- end image slider -->

    <!-- start overview perusahaan -->
        <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-full hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mb-14">
            <img class="object-cover w-full rounded-md h-96" src="{{ Storage::url('corousel-content/example-5.jpg') }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BCM Indonesia</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel cursus urna. In consectetur nulla vel lectus finibus laoreet id vitae ex. 
                    Proin id tortor quis risus dignissim rhoncus non sit amet enim. Proin ullamcorper egestas facilisis. Curabitur auctor eros nec sapien auctor bibendum. 
                    Cras convallis mauris nunc, sed pharetra arcu dignissim in. Nullam viverra quam ac nulla viverra pulvinar.</p>
            </div>
        </div>
    <!-- end overview perusahaan -->

    <!-- start layanan -->
        <div id="animation-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Slide 1 -->
                    <div class="hidden duration-700 ease-linear flex flex-row space-x-8" data-carousel-item>

                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg h-48 w-96 " src="{{ Storage::url('corousel-content/example-2.jpg') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Project Implementation</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum sapien iaculis, venenatis tellus sit amet, dictum leo.</p>
                            </div>
                        </div>

                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg h-48 w-96 " src="{{ Storage::url('corousel-content/example-2.jpg') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Consulting Services</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum sapien iaculis, venenatis tellus sit amet, dictum leo.</p>
                            </div>
                        </div>

                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg h-48 w-96 " src="{{ Storage::url('corousel-content/example-2.jpg') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Technical Advisory</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum sapien iaculis, venenatis tellus sit amet, dictum leo.</p>
                            </div>
                        </div>

                    </div>

                <!-- Slide 2 -->
                    <div class="hidden duration-700 ease-linear flex flex-row space-x-8" data-carousel-item>

                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg h-48 w-96 " src="{{ Storage::url('corousel-content/example-2.jpg') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Maturity Assignment</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum sapien iaculis, venenatis tellus sit amet, dictum leo.</p>
                            </div>
                        </div>

                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg h-48 w-96 " src="{{ Storage::url('corousel-content/example-2.jpg') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Training Services</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum sapien iaculis, venenatis tellus sit amet, dictum leo.</p>
                            </div>
                        </div>

                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg h-48 w-96 " src="{{ Storage::url('corousel-content/example-2.jpg') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Software Development</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum sapien iaculis, venenatis tellus sit amet, dictum leo.</p>
                            </div>
                        </div>

                    </div>

                <!-- Slide 3 -->
                    <div class="hidden duration-700 ease-linear flex flex-row space-x-8" data-carousel-item>

                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg h-48 w-96 " src="{{ Storage::url('corousel-content/example-2.jpg') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">K3 Product</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum sapien iaculis, venenatis tellus sit amet, dictum leo.</p>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>

            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    <!-- end layanan -->

    <!-- start testimoni -->
        <div id="animation-carousel" class="relative w-full mt-14" data-carousel="static">
            <!-- Carousel wrapper -->
                <div class="relative h-auto overflow-hidden rounded-lg md:h-96">
                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <section class="relative isolate bg-white px-6 py-24">
                                <div class="flex justify-center">
                                    <div class="flex flex-col">
                                        <img class="mx-auto size-40 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                        <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Jamkrindo Syariah</figcaption>
                                    </div>
                                    <a href="#" class="flex flex-col items-center bg-white rounded-lg md:flex-row md:max-w-4xl hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 ">
        
                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">PT Jamkrindo Syariah</h5>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis."</p>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-right">Kepala Divisi Teknologi Informasi</p>
                                        </div>
                                    </a>
                            </div>
                        </section>
                    </div>

                    <div class="hidden duration-200 ease-linear" data-carousel-item>
                        <section class="relative isolate bg-white px-6 py-24">
                                <div class="flex justify-center">
                                    <div class="flex flex-col">
                                        <img class="mx-auto size-40 rounded-full" src="" alt="">
                                        <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">Jamkrindo</figcaption>
                                    </div>
                                    <a href="#" class="flex flex-col items-center bg-white rounded-lg md:flex-row md:max-w-4xl hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 ">
        
                                        <div class="flex flex-col justify-between p-4 leading-normal">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">PT Jamkrindo</h5>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis."</p>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-right">Kepala Divisi Pengembangan</p>
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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black/30 dark:bg-gray-800/30 group-hover:bg-black/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
    <!-- end testimoni -->

    </div>
</x-layout>