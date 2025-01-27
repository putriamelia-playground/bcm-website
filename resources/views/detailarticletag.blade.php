<x-layout>
    <!-- header -->
    <x-slot:title>{{$title}}</x-slot:title>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mb-40">
        <div class="flex flex-row bg-white sm:py-32 rounded-lg p-4 justify-between">
            <div class="max-w-screen-lg mx-auto p-5 sm:p-10 md:p-16">

                <a class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 mb-10" rel="prev" href="/article"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z">
                        </path>
                    </svg> &nbsp; Back
                </a>

                <div class="mb-10 rounded overflow-hidden flex flex-col mx-auto">
                    <div class="text-xl sm:text-4xl font-semibold inline-block transition duration-500 ease-in-out inline-block mb-2">
                        {{$data->service_subtype_name}}
                    </div>

                    <div class="relative">
                        <a href="#">
                            <img class="size-3/4 p-10" src="{{ Storage::url('corousel-content/example-3.jpg') }}" alt="">
                        </a>
                    </div>
                    <p class="text-gray-700 py-5 text-base leading-8">
                        {{$data->service_subtype_desc}}
                    </p>

                </div>
            </div>
        </div>
    </div>
</x-layout>
