<x-layout>
    <!-- header -->
    <x-slot:title>{{$title}}</x-slot:title>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mb-40">

        <a class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 mb-10" rel="prev" href="/agenda"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z">
                </path>
            </svg> &nbsp; Back
        </a>

        <div class="flex flex-wrap space-x-8">
            <div class="h-full flex w-full justify-center items-center dark:bg-gray-800">
                <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
                    @foreach($result as $data)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden mb-10">
                        <img class="rounded-t-lg h-48 w-96 " src="{{ Storage::url($data->agenda_image) }}" alt="" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data->agenda_name }}</h5>
                            @foreach ($data->agendatags as $tagAgenda)
                            <a href="/detailagendatag/{{ $tagAgenda->service_subtype_slug }}">
                                <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">{{ $tagAgenda->service_subtype_name }}</span>
                            </a>
                            @endforeach
                            <h5 class="mb-2 text-sm font-normal tracking-tight text-gray-900 dark:text-white text-right">{{ date('d F Y', strtotime($data->agenda_start_date)) }}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?php
                                $description = htmlspecialchars_decode($data->agenda_desc, ENT_QUOTES);
       
                                $final = substr(strip_tags($description), 0, 100);
                                echo $final . '...';
                                ?></p>
                            <a href="/detailagenda/{{ $data->agenda_slug }}" class="flex flex-row-reverse">
                                <h5 class="mb-2 text-sm font-medium tracking-tight text-right text-blue-800">Baca Selengkapnya</h5>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>
