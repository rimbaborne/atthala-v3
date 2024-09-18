<x-layouts.main :unit="$unit ?? null">
    <x-layouts.card>
        <x-layouts.title>Data Peserta Baru</x-layouts.title>

        <div class="mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 dark:bg-gray-900">
                <div class="col-span-full sm:col-auto">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg  2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="items-center flex space-x-4">
                            <x-carbon-user-avatar-filled-alt class="w-20 h-20 text-primary-700"/>
                            <div>
                                <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Peserta</h3>
                                <div class="mb-1 text-sm text-gray-500 dark:text-gray-400">
                                    {{ $data->peserta->nama }}
                                </div>
                                <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                                    {{ $data->peserta->phone_number }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg  2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="items-center flex space-x-4">
                            <div>
                                <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Hasil Penilaian</h3>
                                @php
                                    $levelhasilpenguji = null;
                                @endphp
                                @if ($data->data_nilai == null)
                                    <div class="text-lg font-bold border rounded text-stone-500 border-stone-500 px-4 py-1 dark:text-gray-400">
                                        BELUM DINILAI
                                    </div>
                                @else
                                    @php
                                        $levelhasilpenguji = json_decode($data->data_nilai, true)[0]['level_hasil_penguji'];
                                    @endphp
                                    @if ($levelhasilpenguji == null)
                                        <div class="text-lg font-bold border rounded text-stone-500 border-stone-500 px-4 py-1 dark:text-gray-400">
                                            BELUM DINILAI
                                        </div>
                                    @else
                                        <div class="text-lg font-bold border rounded text-primary-700 border-primary-700 px-4 py-1 dark:text-gray-400">
                                            {{  $levelhasilpenguji }}
                                        </div>
                                    @endif

                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg  2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <h3 class="mb-4 text-xl font-semibold dark:text-white">Biodata</h3>
                        <ul class="grid grid-cols-6 gap-2  dark:divide-gray-700">
                            <li class="col-span-3 py-2">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                            Nama
                                        </p>
                                        <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                            {{ $data->peserta->nama }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="col-span-3 py-2">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                            Tanggal Lahir
                                        </p>
                                        <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                            {{ $data->peserta->tanggal_lahir }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="col-span-3 py-2">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                            Jenis Peserta
                                        </p>
                                        <p class="text-base font-semibold text-gray-900 truncate uppercase dark:text-white">
                                            {{ $data->peserta->jenis_peserta }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @php
                                $biodata = json_decode($data->peserta->biodata, true);
                            @endphp
                            @foreach ($biodata as $bio)
                                <li class="col-span-3 py-2">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                                Kota
                                            </p>
                                            <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                                {{ $bio['kota_domisili'] }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-span-3 py-2">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                                Pekerjaan
                                            </p>
                                            <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                                {{ $bio['pekerjaan'] }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-span-3 py-2">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                                Alamat
                                            </p>
                                            <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                                {{ $bio['alamat'] }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto">
            <div class="grid grid-cols-1 dark:bg-gray-900">
                <div class="col-auto">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg  2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="items-center flex space-x-4">
                            <ul class="flex gap-4">
                                @foreach ($biodata as $item)
                                <li class="col-span-3 py-2">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-1 min-w-0 gap-4">
                                            <p class="text-lg font-normal text-gray-500 truncate dark:text-gray-400">
                                                KTP
                                            </p>
                                            <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                                <img src="{{ asset('storage/') }}/{{  $item['ktp'] }}" alt="" width="100px">
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-span-3 py-2">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-1 min-w-0">
                                            <p class="text-lg font-normal text-gray-500 truncate dark:text-gray-400">
                                                Rekaman
                                            </p>
                                            <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                                <audio class="" controls>
                                                    <source src="{{ asset('storage/') }}/{{  $item['rekaman'] }}" type="audio/{{ explode('.', $item['rekaman'])[1] ?? '' }}">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg  2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="items-center flex space-x-4">
                            <form action="{{ route('penguji.peserta-baru.update', ['unit' => $unit, 'id' => $data->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <label for="" class="pb-4">Hasil Penilaian</label>

                                <div class="flex space-x-4 mt-4">
                                    <select name="status" class="w-full">
                                        <option value="">Pilih Hasil Penilaian..</option>
                                        @foreach ($datalevel as $level)
                                            <option value="{{ $level->nama }}" {{ $level->nama == $levelhasilpenguji ? 'selected' : '' }}>{{ $level->nama }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="text-white bg-green-500 hover:bg-green-900 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                                        Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layouts.card>
</x-layouts.main>

