<x-admin.layout>
    <button>
        <a href="/inputarticle/create" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">buat baru</a>
    </button>
    <ul role="list" class="divide-y divide-gray-100">
        @foreach($article as $data)
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <div class="min-w-0 flex-auto">
                    <p class="text-sm/6 font-semibold text-gray-900">{{ $data->article_title }}</p>
                    <p class="mt-1 truncate text-xs/5 text-gray-500">{{ substr(strip_tags($data->article_desc), 0, 300) }} {{ strlen(strip_tags($data->article_desc)) > 300 ? "..." : "" }}</p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm/6 text-gray-900">{{ $data->article_date }}</p>
            </div>
        </li>
        @endforeach

    </ul>

</x-admin.layout>
