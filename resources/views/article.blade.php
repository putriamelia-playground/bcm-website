<x-layout>
    <!-- header -->
    <x-slot:title>{{$title}}</x-slot:title>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mb-40">

        <div class="flex flex-wrap mt-10 space-x-8">

            <div class="h-full flex w-full justify-center items-center dark:bg-gray-800">
                <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
                    @foreach($article as $data)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 overflow-hidden mb-10">
                        <img class="rounded-t-lg h-48 w-96 " src="{{ Storage::url($data->article_image) }}" alt="" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data->article_title }}</h5>
                            @foreach ($data->articletags as $tagArticle)
                            <a href="/detailarticletag/{{ $tagArticle->service_subtype_slug }}">
                                <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">{{ $tagArticle->service_subtype_name }}</span>
                            </a>
                            @endforeach
                            <h5 class="mb-2 text-sm font-normal tracking-tight text-gray-900 dark:text-white text-right">{{ date('d F Y', strtotime($data->article_date)) }}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ substr(strip_tags($data->article_desc), 0, 300) }} {{ strlen(strip_tags($data->article_desc)) > 300 ? "..." : "" }}</p>
                            <a href="detailarticle/{{ $data->article_slug }}" class="flex flex-row-reverse">
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
