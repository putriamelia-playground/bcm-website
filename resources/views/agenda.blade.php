<x-layout>
  <!-- header -->
  <x-slot:title>{{$title}}</x-slot:title>
  
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mb-40">

    <div class="flex flex-row space-x-8">

    @foreach($agenda as $data)
      <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
              <img class="rounded-t-lg h-48 w-96 " src="{{ Storage::url('corousel-content/example-3.jpg') }}" alt="" />
          <div class="p-5">
            <a href=""> 
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$data->agenda_name}}</h5>
            </a>
            <a href="">
                <h5 class="mb-2 text-sm font-normal tracking-tight text-gray-500 dark:text-white">Manajemen Risiko, BCM</h5>
            </a>
                <h5 class="mb-2 text-sm font-normal tracking-tight text-gray-900 dark:text-white text-right">{{$data->agenda_date}}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$data->agenda_desc}}</p>
                <a href="/detailagenda/{{$data->id}}" class="flex flex-row-reverse">
                    <h5 class="mb-2 text-sm font-medium tracking-tight text-right text-blue-800">Baca Selengkapnya</h5>
                </a>
          </div>

          <div class="px-5 mb-5">
              <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Daftar
            </a>
          </div>
      </div>
    @endforeach
     
    </div>
  </div>
</x-layout>