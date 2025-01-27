<x-layout>
    <!-- header -->
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mb-40">
        @session('success')
        <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">{{ $value }}</span>
            </div>
        </div>
        @endsession

        <div class="h-full flex w-full justify-center items-center dark:bg-gray-800">
            <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
                @foreach($agenda as $data)
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="rounded-t-lg h-48 w-96 " src="{{ Storage::url('corousel-content/example-3.jpg') }}" alt="" />
                    <div class="p-5">
                        <a href="/detailagenda/{{ $data->agenda_slug }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$data->agenda_name}}</h5>
                        </a>
                        @foreach ($data->agendatags as $tagAgenda)
                        <a href="/detailagendatag/{{ $tagAgenda->service_subtype_slug }}">
                            <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">{{ $tagAgenda->service_subtype_name }}</span>
                        </a>
                        @endforeach
                        <h5 class="mb-2 text-sm font-normal tracking-tight text-gray-900 dark:text-white text-right">{{date('d F Y', strtotime($data->agenda_date))}}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$data->agenda_desc}}</p>
                        <a href="/detailagenda/{{ $data->agenda_slug }}" class="flex flex-row-reverse">
                            <h5 class="mb-2 text-sm font-medium tracking-tight text-right text-blue-800">Baca Selengkapnya</h5>
                        </a>
                    </div>

                    <div class="px-5 mb-5">
                        <a href="/formuliragenda/{{ $data->agenda_slug }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Daftar
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
