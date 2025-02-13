<x-admin.layout>
    <div class="flex flex-col bg-white rounded-lg p-4 justify-between">
        <form action="{{ route('inputregulation.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="space-y-12">

                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Input Data Regulasi</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">Isi formulir regulasi dengan informasi yang diperlukan.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="regulation_number" class="block text-sm/6 font-medium text-gray-900">Nomor Regulasi</label>
                            <div class="mt-2">
                                <input type="text" name="regulation_number" id="regulation_number" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('regulation_number')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="regulation_title" class="block text-sm/6 font-medium text-gray-900">Judul Regulasi</label>
                            <div class="mt-2">
                                <input type="text" name="regulation_title" id="regulation_title" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                            @error('regulation_title')
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
