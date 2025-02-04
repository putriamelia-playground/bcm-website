<x-admin.layout>
    <div class="flex flex-col bg-white rounded-lg p-4 justify-between">
        <form action="{{ route('inputarticle.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="space-y-12">

                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Input Data Artikel</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">Isi formulir artikel dengan informasi yang diperlukan.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="article_slug" class="block text-sm/6 font-medium text-gray-900">Slug Artikel</label>
                            <div class="mt-2">
                                <input type="text" name="article_slug" id="article_slug" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('article_slug')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="article_title" class="block text-sm/6 font-medium text-gray-900">Judul Artikel</label>
                            <div class="mt-2">
                                <input type="text" name="article_title" id="article_title" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('article_title')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="article_date" class="block text-sm/6 font-medium text-gray-900">Tanggal Artikel</label>
                            <div class="mt-2">
                                <input type="date" name="article_date" id="article_date" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('article_date')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="article_desc" class="block text-sm/6 font-medium text-gray-900">Deskripsi Artikel</label>
                            <div class="mt-2">
                                <textarea name="article_desc" id="article_desc" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                            </div>
                            @error('article_desc')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="col-span-full">
                            <label for="article_image" class="block text-sm/6 font-medium text-gray-900">Foto Artikel</label>
                            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                <div class="text-center">
                                    <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                                    </svg>
                                    <div class="mt-4 flex text-sm/6 text-gray-600">
                                        <label for="article_image" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                            {{-- <span>Upload a file</span> --}}
                                            <input id="article_image" name="article_image" type="file" class="form-control @error('article_image') is-invalid @enderror">
                                        </label>
                                        <p class=" pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                    @error('article_image')
                                    <text for="" class="text-red-900">
                                        {{ $message }}
                                    </text>
                                    @enderror
                                </div>
                            </div>
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
