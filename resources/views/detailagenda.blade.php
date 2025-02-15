<x-layout>
    <!-- header -->
    <x-slot:title>{{$title}}</x-slot:title>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mb-40">
        <div class="flex flex-row bg-white sm:py-32 rounded-lg p-4 justify-between">
            <div class="max-w-screen-lg mx-auto p-5 sm:p-10 md:p-16">
                <a class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 mb-10" rel="prev" href="/agenda"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z">
                        </path>
                    </svg> &nbsp; Back
                </a>
                <div class="flex flex-col items-center mb-10 rounded overflow-hidden mx-auto">
                    <div class="sm:text-2xl md:text-3xl text-center font-semibold inline-block transition duration-500 ease-in-out inline-block mb-2">
                        {{$data->agenda_name}}
                    </div>

                    <div class="sm:text-md md:text-md text-center font-normal inline-block transition duration-500 ease-in-out inline-block mb-2">
                        {{ date('d F Y', strtotime($data->agenda_start_date)) . ' - ' . date('d F Y', strtotime($data->agenda_end_date)) . ' | ' . $data->agenda_time . ' | ' . $data->agenda_loc_address }}
                    </div>

                    <div class="flex flex-col items-center relative md:size-3/4">
                        <img class="sm:w-full lg:size-3/4 lg:p-10" src="{{ Storage::url($data->agenda_pamphlet) }}" alt="">
                    </div>

                    <p class="text-gray-700 py-5 text-base leading-8">
                        {!! $data->agenda_desc !!}
                    </p>

                    <div class="flex flex-col justify-center items-center mt-10">
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
