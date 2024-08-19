<x-app-layout>
    <div class="pt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="grid grid-cols-1 px-4 pt-6 md:grid-cols-3 md:gap-4 dark:bg-gray-900">
                <!-- Right Content -->
                <div class="col-span-full sm:col-auto">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="items-center flex space-x-4">
                            <x-carbon-user-avatar-filled-alt class="w-20 h-20 text-primary-700"/>
                            <div>
                                <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Peserta</h3>
                                <div class="mb-1 text-sm text-gray-500 dark:text-gray-400">
                                    {{ $peserta->nama }}
                                </div>
                                <div class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                                    {{ $peserta->phone_number }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <h3 class="mb-4 text-xl font-semibold dark:text-white">Biodata</h3>
                        <ul class="grid grid-cols-6 gap-2  dark:divide-gray-700">
                            <li class="col-span-3 py-2">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                            Nama
                                        </p>
                                        <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                            {{ $peserta->nama }}
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
                                            {{ $peserta->tanggal_lahir }}
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
                                        <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                            {{ $peserta->jenis_peserta }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                            @php
                                $biodata = json_decode($peserta->biodata, true);
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

                {{-- <div class="col-span-full">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="flow-root">
                            <h3 class="text-xl mb-4 font-semibold dark:text-white">{{ $peserta->periode->unit->nama }} {{ $peserta->periode->nama }}</h3>

                            <h3 class="text-md py-2 text-gray-500 dark:text-white">Absensi</h3>
                            <div class="relative overflow-x-auto border rounded-md mb-4">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead>
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Januari
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Februari
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Maret
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                April
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Total
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $dataPembayaran = [
                                                "Budi Setiawan" => 4,
                                            ];
                                            $data_kelas = $peserta->kelas;
                                        @endphp
                                        @foreach ($data_kelas as $kelas)
                                        @php
                                            $absensi = json_decode($kelas->data_absensi, true);
                                        @endphp
                                            {!! $absensi !!}
                                        @endforeach
                                        @foreach ($dataPembayaran as $nama => $nilai)
                                        <tr class="border-b text-sm border-gray-200 dark:border-gray-700">
                                            @for ($i = 0; $i < $nilai; $i++)
                                                <td class="px-3 py-3">
                                                    150.000
                                                </td>
                                            @endfor
                                            @for ($i = 0; $i < 4-$nilai; $i++)
                                                <td class="px-3 py-3">
                                                </td>
                                            @endfor
                                            <td class="px-3 py-3">
                                                {{ number_format($nilai * 150000, 0, ',', '.') }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="text-md py-2 text-gray-500 dark:text-white">SPP</h3>
                            <div class="relative overflow-x-auto border rounded-md mb-4">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead>
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Januari
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Februari
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Maret
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                April
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Total
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $dataPembayaran = [
                                                "Budi Setiawan" => 4,
                                            ];
                                        @endphp
                                        @foreach ($dataPembayaran as $nama => $nilai)
                                        <tr class="border-b text-sm border-gray-200 dark:border-gray-700">
                                            @for ($i = 0; $i < $nilai; $i++)
                                                <td class="px-3 py-3">
                                                    150.000
                                                </td>
                                            @endfor
                                            @for ($i = 0; $i < 4-$nilai; $i++)
                                                <td class="px-3 py-3">
                                                </td>
                                            @endfor
                                            <td class="px-3 py-3">
                                                {{ number_format($nilai * 150000, 0, ',', '.') }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="text-md py-2 text-gray-500 dark:text-white">Riwayat Pembayaran</h3>
                            <div class="relative overflow-x-auto border rounded-md mb-4">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead>
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Januari
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Februari
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Maret
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                April
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Total
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $dataPembayaran = [
                                                "Budi Setiawan" => 4,
                                            ];
                                        @endphp
                                        @foreach ($dataPembayaran as $nama => $nilai)
                                        <tr class="border-b text-sm border-gray-200 dark:border-gray-700">
                                            @for ($i = 0; $i < $nilai; $i++)
                                                <td class="px-3 py-3">
                                                    150.000
                                                </td>
                                            @endfor
                                            @for ($i = 0; $i < 4-$nilai; $i++)
                                                <td class="px-3 py-3">
                                                </td>
                                            @endfor
                                            <td class="px-3 py-3">
                                                {{ number_format($nilai * 150000, 0, ',', '.') }}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

</x-app-layout>
