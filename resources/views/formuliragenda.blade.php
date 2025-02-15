<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 mb-40">
        <div class="bg-white rounded-lg p-4">
            <div class="space-y-12">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 text-center p-10">{{ $data->agenda_name }}</h2>
                    <form class="max-w-6xl mx-auto" action="{{ route('agenda.store') }}" method="POST">
                        @csrf
                        {{-- <div style="overflow-x:auto;"> --}}
                        <table class="table-auto w-1/3 text-sm text-left rtl:text-right text-gray-900 dark:text-gray-400 mb-10">
                            <tr>
                                <th>Hari/Tanggal</th>
                                <td>: {{ date('d F Y', strtotime($data->agenda_start_date))}} - {{ date('d F Y', strtotime($data->agenda_end_date))}}</td>
                            </tr>
                            <tr>
                                <th>Waktu</th>
                                <td>: {{ $data->agenda_time }}</td>
                            </tr>
                            <tr>
                                <th>Tempat</th>
                                <td>: {{ $data->agenda_loc_address }}</td>
                            </tr>
                        </table>
                        {{-- </div> --}}
                        <div class="border-b mb-5">
                            <h2 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Info Peserta</h2>
                        </div>

                        <input hidden name="agenda_id" id="agenda_id" value="{{ $data->id }}" />

                        <div class="mb-5">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input id="participant_name" name="participant_name" type="text" autocomplete="participant_name" class="block w-full rounded-sm bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-200 shadow placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            @error('participant_name')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Peserta</label>
                            <input id="participant_email" name="participant_email" type="text" autocomplete="participant_email" class="block w-full rounded-sm bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-200 shadow placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            @error('participant_email')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Handphone Peserta</label>
                            <input id="phone_number" name="phone_number" type="text" autocomplete="phone_number" class="block w-full rounded-sm bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-200 shadow placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            @error('phone_number')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan/Unit Kerja</label>
                            <input id="participant_orgunit" name="participant_orgunit" type="text" autocomplete="participant_orgunit" class="block w-full rounded-sm bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-200 shadow placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            @error('participant_orgunit')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="border-b mb-5">
                            <h2 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Info Perusahaan</h2>
                        </div>

                        <div class="mb-5">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Instansi/Perusahaan</label>
                            <input id="company_name" name="company_name" type="text" autocomplete="company_name" class="block w-full rounded-sm bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-200 shadow placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            @error('company_name')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Perusahaan</label>
                            <textarea name="company_address" id="company_address" rows="3" autocomplete="company_address" class="block w-full rounded-sm bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-200 shadow placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                            @error('company_address')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email Perusahaan</label>
                            <input id="company_email" name="company_email" type="text" autocomplete="company_email" class="block w-full rounded-sm bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-200 shadow placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            @error('company_email')
                            <text for="" class="text-red-900">
                                {{ $message }}
                            </text>
                            @enderror
                        </div>

                        <div class="border-gray-900/10 mb-10 ">
                            <div class="mt-10 space-y-10">
                                <fieldset>
                                    <legend class="text-sm/6 font-semibold text-gray-900">Pernyataan</legend>
                                    <div class="mt-6 space-y-6">
                                        <div class="flex gap-3">
                                            <div class="flex h-6 shrink-0 items-center">
                                                <div class="group grid size-4 grid-cols-1">
                                                    <input id="privacy_agreement" aria-describedby="privacy_agreement-description" name="privacy_agreement" type="checkbox" value="1" checked="true" onclick="terms_changed(this)" class="col-start-1 row-start-1 appearance-none rounded border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                                    <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-[:disabled]:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                                                        <path class="opacity-0 group-has-[:checked]:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path class="opacity-0 group-has-[:indeterminate]:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="text-sm/6">
                                                <label for="privacy_agreement" class="font-medium text-gray-900">Pernyataan mengenai perlindungan data pengguna</label>
                                                <p id="privacy_agreement-description" class="text-gray-500">Saya setuju untuk memberikan data pribadi saya kepada BCM Indonesia, yang akan digunakan hanya untuk keperluan yang telah dijelaskan dalam Kebijakan Privasi. Saya memahami bahwa data saya akan dilindungi sesuai dengan Undang-Undang No. 27 Tahun 2022 tentang Perlindungan Data Pribadi dan tidak akan dibagikan kepada pihak ketiga tanpa persetujuan saya, kecuali diwajibkan oleh hukum.</p>
                                            </div>
                                        </div>
                                        <div class="flex gap-3 border-b mb-5">
                                            <div class="flex h-6 shrink-0 items-center">
                                                <div class="group grid size-4 grid-cols-1">
                                                    <input id="email_agreement" aria-describedby="email_agreement-description" name="email_agreement" type="checkbox" value="1" class="col-start-1 row-start-1 appearance-none rounded border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                                    <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-[:disabled]:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                                                        <path class="opacity-0 group-has-[:checked]:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path class="opacity-0 group-has-[:indeterminate]:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="text-sm/6">
                                                <label for="email_agreement" class="font-medium text-gray-900">Email Promote</label>
                                                <p id="email_agreement-description" class="text-gray-500">Dengan mencentang kotak ini, saya setuju untuk menerima email promosi dan informasi terbaru dari BCM Indonesia.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="text-sm/6">

                                            <p id="privacy_agreement-description" class="text-gray-500">Kebijakan Privasi <br>

                                                Dengan menggunakan layanan kami dan/atau memberikan data pribadi Anda, Anda menyatakan bahwa Anda setuju untuk memberikan data pribadi Anda kepada kami. Kami berkomitmen untuk menjaga keamanan informasi yang Anda berikan dan memastikan bahwa data tersebut hanya digunakan untuk tujuan yang telah disepakati bersama.

                                                Kami tidak akan membagikan, menjual, atau menyebarluaskan data pribadi Anda kepada pihak ketiga tanpa persetujuan Anda, kecuali diwajibkan oleh hukum. Kebijakan privasi kami mematuhi Peraturan Pemerintah Republik Indonesia No. 71 Tahun 2019 tentang Penyelenggaraan Sistem dan Transaksi Elektronik serta Undang-Undang No. 27 Tahun 2022 tentang Perlindungan Data Pribadi.
                                            </p>
                                        </div>

                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center justify-start gap-x-6">
                            <a href="/agenda">
                                <button type="button" class="text-sm/6 font-semibold text-gray-900">Batal</button>
                            </a>
                            <button type="submit" id="submit_button" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm disabled:bg-indigo-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-layout>

<script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
    function terms_changed(termsCheckBox) {
        //If the checkbox has been checked
        if (termsCheckBox.checked) {
            //Set the disabled property to FALSE and enable the button.
            document.getElementById("submit_button").disabled = false;
        } else {
            //Otherwise, disable the submit button.
            document.getElementById("submit_button").disabled = true;
        }
    }

</script>
