<x-admin.layout>
    <div class="flex flex-col bg-white rounded-lg p-4 justify-between">
        <form action="{{ route('inputagenda.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="space-y-12">

                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Input Data Agenda</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">Isi formulir agenda dengan informasi yang diperlukan.</p>

                    <div class="mt-10 grid grid-cols-12 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-12 sm:col-span-6">
                            <label for="agenda_slug" class="block text-sm/6 font-medium text-gray-900">Slug Agenda</label>
                            <div class="mt-2">
                                <input type="text" name="agenda_slug" id="agenda_slug" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('agenda_slug')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="col-span-12 sm:col-span-6">
                            <label for="agenda_name" class="block text-sm/6 font-medium text-gray-900">Nama Agenda</label>
                            <div class="mt-2">
                                <input type="text" name="agenda_name" id="agenda_name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('agenda_name')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="agenda_start_date" class="block text-sm/6 font-medium text-gray-900">Tanggal Agenda (Day 1)</label>
                            <div class="mt-2">
                                <input type="date" name="agenda_start_date" id="agenda_start_date" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('agenda_start_date')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="agenda_end_date" class="block text-sm/6 font-medium text-gray-900">Tanggal Agenda (Day 2)</label>
                            <div class="mt-2">
                                <input type="date" name="agenda_end_date" id="agenda_end_date" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('agenda_end_date')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="sm:col-span-6">
                            <label for="agenda_time" class="block text-sm/6 font-medium text-gray-900">Jam Agenda</label>
                            <div class="mt-2">
                                <input type="text" name="agenda_time" id="agenda_time" placeholder="ex : 08.00 - 16.00" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('agenda_time')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="sm:col-span-6">
                            <label for="agenda_loc_address" class="block text-sm/6 font-medium text-gray-900">Lokasi Agenda</label>
                            <div class="mt-2">
                                <input type="text" name="agenda_loc_address" id="agenda_loc_address" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('agenda_loc_address')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="sm:col-span-6">
                            <label for="agenda_loc_link" class="block text-sm/6 font-medium text-gray-900">Link Lokasi Agenda (Opsional)</label>
                            <div class="mt-2">
                                <input type="text" name="agenda_loc_link" id="agenda_loc_link" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('agenda_loc_link')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="col-span-12 sm:col-span-6">
                            <label for="agenda_desc" class="block text-sm/6 font-medium text-gray-900">Deskripsi Agenda</label>
                            <div class="mt-2">
                                <textarea name="agenda_desc" id="agenda_desc" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                            </div>
                            @error('agenda_desc')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="agenda_pamphlet" class="block text-sm/6 font-medium text-gray-900">Pamflet Agenda</label>
                            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                <div class="text-center">
                                    <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                                    </svg>
                                    <div class="mt-4 flex text-sm/6 text-gray-600">
                                        <label for="agenda_pamphlet" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <input id="agenda_pamphlet" name="agenda_pamphlet" type="file" class="form-control @error('agenda_pamphlet') is-invalid @enderror">
                                        </label>
                                        <p class=" pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                    @error('agenda_pamphlet')
                                    <text for="" class="text-red-900">
                                        {{ $message }}
                                    </text>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="agenda_image" class="block text-sm/6 font-medium text-gray-900">Photo Agenda</label>
                            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                <div class="text-center">
                                    <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                                    </svg>
                                    <div class="mt-4 flex text-sm/6 text-gray-600">
                                        <label for="agenda_image" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <input id="agenda_image" name="agenda_image" type="file" class="form-control @error('agenda_image') is-invalid @enderror">
                                        </label>
                                        <p class=" pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                    @error('agenda_image')
                                    <text for="" class="text-red-900">
                                        {{ $message }}
                                    </text>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            {{-- TODO WORDING --}}
                            <label for="article_desc" class="block text-sm/6 font-medium text-gray-900">Sub Tipe Layanan</label>
                            <div class="mt-2">
                                <select id="subtipelayananId" name="subtipelayananId" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>Pilih Sub Tipe Layanan</option>
                                    @foreach($data as $key)
                                    <option value="{{ $key->id }}">{{ $key->service_subtype_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('article_desc')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                    </div>
                </div>


            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </div>
</x-admin.layout>
