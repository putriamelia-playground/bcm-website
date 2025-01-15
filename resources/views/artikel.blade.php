<x-layout>
  <!-- header -->
  <x-slot:title>{{$title}}</x-slot:title>
  
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mb-40">

    <div class="flex flex-row space-x-8">

    @foreach($article as $data)
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
              <img class="rounded-t-lg h-48 w-96 " src="{{ Storage::url('corousel-content/example-3.jpg') }}" alt="" />
          <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $data->article_title }}</h5>
                <h5 class="mb-2 text-sm font-normal tracking-tight text-gray-500 dark:text-white">Manajemen Risiko, BCM</h5>
                <h5 class="mb-2 text-sm font-normal tracking-tight text-gray-900 dark:text-white text-right">{{ date('d F Y', strtotime($data->article_date)) }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $data->article_desc }}</p>
                <a href="detailartikel/{{ $data->article_slug }}" class="flex flex-row-reverse">
                    <h5 class="mb-2 text-sm font-medium tracking-tight text-right text-blue-800">Baca Selengkapnya</h5>
                </a>
          </div>
      </div>
    @endforeach
    </div>
  </div>
</x-layout>