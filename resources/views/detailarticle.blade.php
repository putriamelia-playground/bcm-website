<x-layout>
    <!-- header -->
    <x-slot:title>{{$title}}</x-slot:title>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mb-40">

        <div class="flex flex-row bg-white sm:py-32 rounded-lg p-4 justify-between">
            <div class="max-w-screen-lg mx-auto p-5 sm:p-10 md:p-16">
                <a class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 mb-10" rel="prev" href="/article"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z">
                        </path>
                    </svg> &nbsp; Back
                </a>

                <div class="flex flex-col items-center mb-10 rounded flex flex-col mx-auto mb-10 ">
                    <div class="sm:text-2xl md:text-3xl text-center font-semibold inline-block transition duration-500 ease-in-out inline-block mb-2">
                        {{ $data->article_title }}
                    </div>

                    <div class="flex flex-col items-center relative md:size-3/4">
                        <img class="sm:size-full lg:size-1/2" src="{{ Storage::url($data->article_image) }}" alt="">
                    </div>

                    <div>
                        <p class="text-gray-700 py-5 text-base leading-8">
                            {!! $data->article_desc !!}
                        </p>
                    </div>
                </div>

                <div class="flex justify-end border-y">
                    <input type="text" hidden value="{{ url()->current() }}" id="myInput">
                    <button class="sharebtn relative flex z-10 bg-white border rounded-md p-2 focus:outline-none focus:border-blue-400 mb-3 mt-3" onclick="myFunction()">
                        <span class="inline-block pr-4 text-gray-600">Share</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-6 my-1 text-blue-700">
                            <path fill="currentColor" d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {

            if (!navigator.clipboard) return
            // Get the text field
            var copyText = document.getElementById("myInput");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Link Artikel Berhasil di Salin: " + copyText.value);
        }

    </script>
</x-layout>
