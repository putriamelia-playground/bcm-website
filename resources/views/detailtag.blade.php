<x-layout>
    <!-- header -->
    <x-slot:title>{{$title}}</x-slot:title>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mb-40">
        <div class="flex flex-row bg-white sm:py-32 rounded-lg p-4 justify-between">
            <div class="max-w-screen-lg mx-auto p-5 sm:p-10 md:p-16">

                <div class="mb-10 rounded overflow-hidden flex flex-col mx-auto">
                    <div class="text-xl sm:text-4xl font-semibold inline-block transition duration-500 ease-in-out inline-block mb-2">
                        {{$data->agenda_name}}
                    </div>

                    <div class="relative">
                        <a href="#">
                            <img class="w-full p-20" src="{{ Storage::url('pamflet-agenda/pamflet-1.png') }}" alt="">
                        </a>
                    </div>
                    <p class="text-gray-700 py-5 text-base leading-8">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis tellus a elit volutpat vulputate. Donec tincidunt sem id nisi ultricies facilisis. Quisque ultricies magna eu nibh molestie, et mollis lorem molestie. Nunc lobortis eros in urna ullamcorper, in finibus quam hendrerit. Suspendisse tempus luctus elit, eu euismod est euismod ac. Duis at dui turpis. Phasellus ut magna purus. Proin maximus quam et dui rhoncus tincidunt. Sed sapien mauris, cursus vel ante sit amet, lacinia tincidunt dui. Nulla scelerisque risus et eros elementum, in vulputate justo tempor. Praesent urna ante, rutrum placerat dui quis, convallis viverra sem. Nulla semper erat a facilisis aliquet. Duis et vehicula diam, a consequat turpis. Integer commodo justo tortor, ornare consequat magna viverra ut.
                    </p>
                    <div class="py-5 text-sm font-regular text-gray-900 flex">
                        <span class="mr-3 flex flex-row items-center">
                            <svg class="text-indigo-600" fill="currentColor" height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"></path>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-1">{{ Carbon\Carbon::parse($data->agenda_date)->diffForHumans() }}</span></span>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <div class="px-5 mb-5">
                            <a href="/formuliragenda/{{ $data->agenda_slug }}" class="inline-flex items-center px-6 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Daftar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
