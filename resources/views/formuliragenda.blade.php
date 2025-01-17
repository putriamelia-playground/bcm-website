<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <div class="mx-auto max-w-xl px-4 py-6 sm:px-6 lg:px-8 mb-40">
        <div class="flex flex-row bg-white rounded-lg p-4 justify-between">

            <form action="{{ route('agenda.store') }}" method="POST">
                @csrf
                {{-- @method('PUT') --}}
                <div class="space-y-12">
                    <h2 class="text-2xl font-semibold text-gray-900 text-center">{{ $data->agenda_name }}</h2>

                    <table class="w-full text-sm text-left rtl:text-right text-gray-900 dark:text-gray-400">
                        <tr>
                            <th>Hari/Tanggal</th>
                            <td>: {{ date('d F Y', strtotime($data->agenda_date))}}</td>
                        </tr>
                        <tr>
                            <th>Waktu</th>
                            <td>: {{ $data->agenda_time }}</td>
                        </tr>
                    </table>



                    <div class="border-b border-gray-900/10 pb-12">

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                            {{-- ini hidden input untuk masukin id agenda --}}
                            <input hidden name="agenda_id" id="agenda_id" value="{{ $data->id }}" />

                            <div class="sm:col-span-4">
                                @error('participant_name')
                                <text for="" class="text-red-900">
                                    {{ $message }}
                                </text>
                                @enderror
                                <label for="participant_name" class="block text-sm/6 font-medium text-gray-900">Nama</label>
                                <div class="mt-2">
                                    <input id="participant_name" name="participant_name" type="text" autocomplete="participant_name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="sm:col-span-4">
                                @error('participant_email')
                                <text for="" class="text-red-900">
                                    {{ $message }}
                                </text>
                                @enderror
                                <label for="participant_email" class="block text-sm/6 font-medium text-gray-900">Alamat Email Peserta</label>
                                <div class="mt-2">
                                    <input id="participant_email" name="participant_email" type="text" autocomplete="participant_email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="sm:col-span-4">
                                @error('company_name')
                                <text for="" class="text-red-900">
                                    {{ $message }}
                                </text>
                                @enderror
                                <label for="company_name" class="block text-sm/6 font-medium text-gray-900">Nama Instansi/Perusahaan</label>
                                <div class="mt-2">
                                    <input id="company_name" name="company_name" type="text" autocomplete="company_name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="sm:col-span-4">
                                @error('participant_orgunit')
                                <text for="" class="text-red-900">
                                    {{ $message }}
                                </text>
                                @enderror
                                <label for="participant_orgunit" class="block text-sm/6 font-medium text-gray-900">Jabatan/Nama Unit Kerja</label>
                                <div class="mt-2">
                                    <input id="participant_orgunit" name="participant_orgunit" type="text" autocomplete="participant_orgunit" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="sm:col-span-4">
                                @error('company_address')
                                <text for="" class="text-red-900">
                                    {{ $message }}
                                </text>
                                @enderror
                                <label for="company_address" class="block text-sm/6 font-medium text-gray-900">Alamat Perusahaan</label>
                                <div class="mt-2">
                                    <textarea name="company_address" id="company_address" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                @error('phone_number')
                                <text for="" class="text-red-900">
                                    {{ $message }}
                                </text>
                                @enderror
                                <label for="phone_number" class="block text-sm/6 font-medium text-gray-900">Nomor Kontak (HP)</label>
                                <div class="mt-2">
                                    <input type="text" name="phone_number" id="phone_number" autocomplete="address-level1" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                @error('company_email')
                                <text for="" class="text-red-900">
                                    {{ $message }}
                                </text>
                                @enderror
                                <label for="company_email" class="block text-sm/6 font-medium text-gray-900">Alamat Email Perusahaan</label>
                                <div class="mt-2">
                                    <input type="text" name="company_email" id="company_email" autocomplete="company_email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                </div>
                            </div>
                        </div>

                        <div class="border-gray-900/10">
                            <div class="mt-10 space-y-10">
                                <fieldset>
                                    <legend class="text-sm/6 font-semibold text-gray-900">Agreement</legend>
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
                                                <label for="privacy_agreement" class="font-medium text-gray-900">Agreement mengenai perlindungan data pengguna</label>
                                                <p id="privacy_agreement-description" class="text-gray-500">agreement before submit form</p>
                                            </div>
                                        </div>
                                        <div class="flex gap-3">
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
                                                <p id="email_agreement-description" class="text-gray-500">agreement for blasting news letter.</p>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <a href="/agenda">
                            <button type="button" class="text-sm/6 font-semibold text-gray-900">Batal</button>
                        </a>
                        <button type="submit" id="submit_button" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm disabled:bg-indigo-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
                    </div>
            </form>
        </div>
    </div>
</x-layout>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
