<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mb-40">

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center p-4">Tentang Kami</h5>

            <a class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-7xl dark:border-gray-700 dark:bg-gray-800">
                <img class="object-cover w-1/2 rounded-t-lg h-96 md:h-32 md:w-96 md:rounded-none md:rounded-s-lg" src="{{ Storage::url('corousel-content/example-3.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Brief Desc & Sejarah</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis tellus a elit volutpat vulputate. 
                        Donec tincidunt sem id nisi ultricies facilisis. Quisque ultricies magna eu nibh molestie, et mollis lorem molestie. 
                        Nunc lobortis eros in urna ullamcorper, in finibus quam hendrerit. Suspendisse tempus luctus elit, eu euismod est euismod ac. 
                        Duis at dui turpis. Phasellus ut magna purus. Proin maximus quam et dui rhoncus tincidunt. Sed sapien mauris, cursus vel ante sit amet, lacinia tincidunt dui. 
                        Nulla scelerisque risus et eros elementum, in vulputate justo tempor.
                    </p>
                </div>
            </a>

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center p-4">Visi Misi</h5>
        
            <a class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-7xl dark:border-gray-700 dark:bg-gray-800">
                <img class="object-cover w-1/2 rounded-t-lg h-96 md:h-32 md:w-96 md:rounded-none md:rounded-s-lg" src="{{ Storage::url('corousel-content/example-3.jpg') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                                    
                    <div class="block max-w-sm p-6 mb-4 bg-white rounded-lg">
                        <div class="inline-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                            </svg>
    
                            <h5 class="mb-2 ml-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Visi</h5>
                        </div>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis tellus a elit volutpat vulputate.</p>
                    </div>

                    <div class="block max-w-sm p-6 bg-white rounded-lg">
                        <div class="inline-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0 1 12 21 8.25 8.25 0 0 1 6.038 7.047 8.287 8.287 0 0 0 9 9.601a8.983 8.983 0 0 1 3.361-6.867 8.21 8.21 0 0 0 3 2.48Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 0 0 .495-7.468 5.99 5.99 0 0 0-1.925 3.547 5.975 5.975 0 0 1-2.133-1.001A3.75 3.75 0 0 0 12 18Z" />
                            </svg>

                            <h5 class="mb-2 ml-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Misi</h5>
                        </div>
                        <p class="font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis tellus a elit volutpat vulputate.</p>
                    </div>

                </div>
            </a>

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center p-4">Our Organization</h5>

            <div class="bg-white py-24 sm:py-32 rounded-lg">
                <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
                    <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-3 sm:gap-y-16 xl:col-span-3">
                        <li>
                            <div class="flex flex-col items-center gap-x-6">
                                <img class="size-48 rounded-full" src="{{ Storage::url('organization-photo/org1.jpeg') }}" alt="">
                                <div>
                                    <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 text-center">Putri Amelia</h3>
                                    <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                        </li>
                        
                        <li>
                            <div class="flex flex-col items-center gap-x-6">
                                <img class="size-48 rounded-full" src="{{ Storage::url('organization-photo/org1.jpeg') }}" alt="">
                                <div>
                                    <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 text-center">Putri Amelia</h3>
                                    <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                        </li>
                        
                        <li>
                            <div class="flex flex-col items-center gap-x-6">
                                <img class="size-48 rounded-full" src="{{ Storage::url('organization-photo/org1.jpeg') }}" alt="">
                                <div>
                                    <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 text-center">Putri Amelia</h3>
                                    <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                        </li>
                        
                        <!-- <div class="flex flex-col gap-20 px-6 lg:px-8 xl:grid-cols-2"> -->
                            <li>
                                <div class="flex flex-col items-center gap-x-6">
                                    <img class="size-48 rounded-full" src="{{ Storage::url('organization-photo/org1.jpeg') }}" alt="">
                                    <div>
                                        <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 text-center">Putri Amelia</h3>
                                        <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CEO</p>
                                    </div>
                                </div>
                            </li>
                            
                            <li>
                                <div class="flex flex-col items-center gap-x-6">
                                    <img class="size-48 rounded-full" src="{{ Storage::url('organization-photo/org1.jpeg') }}" alt="">
                                    <div>
                                        <h3 class="text-base/7 font-semibold tracking-tight text-gray-900 text-center">Putri Amelia</h3>
                                        <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CEO</p>
                                    </div>
                                </div>
                            </li>
                        <!-- </div> -->
                        
                       
                    </ul>

                </div>
            </div>

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center p-4">Our Client</h5>
        
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

    </div>
</x-layout>