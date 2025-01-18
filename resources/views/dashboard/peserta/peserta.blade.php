<x-app-layout>
    <div class="pt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="grid grid-cols-1 px-4 md:grid-cols-3 md:gap-4 dark:bg-gray-900">
                <!-- Right Content -->
                <div class="col-span-full sm:col-auto">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg  2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
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

                <div class="col-span-full">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg  2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="flow-root">
                            <h3 class="text-xl mb-4 font-semibold dark:text-white">{{ $peserta->periode->unit->nama }} {{ $peserta->periode->nama }}</h3>

                            <h3 class="text-md py-2 text-gray-500 dark:text-white">Absensi</h3>
                            <div class="relative overflow-x-auto border rounded-md mb-4">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead>
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            @for ($i = 1; $i <= 16; $i++)
                                                <th scope="col"
                                                    class="px-3 py-3 text-center font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                    {{ $i }}
                                                </th>
                                            @endfor
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        @for ($i = 1; $i <= 16; $i++)
                                                <td class="px-3 py-3 text-center">
                                                    -
                                                </td>
                                            @endfor
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <h3 class="text-md py-2 text-gray-500 dark:text-white">Pembayaran</h3>
                            <div class="relative overflow-x-auto border rounded-md mb-4">
                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead>
                                        <tr class="border-b border-gray-200 dark:border-gray-700">
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Jenis Pembayaran
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($peserta->kelas as $kelas)
                                            @php
                                                $dataPembayaran = json_decode($kelas->data_pembayaran, true);
                                            @endphp
                                            @foreach ($dataPembayaran as $item)
                                            <tr class="border-b text-sm border-gray-200 dark:border-gray-700">
                                                <td class="px-3 py-3 uppercase">
                                                    {{ ucfirst(array_key_first($item)) }}
                                                </td>
                                                <td class="px-3 py-3 uppercase">
                                                    @foreach ($peserta->transaksi as $transaksi_)
                                                        @if (array_values($item)[0] == 1)
                                                            @if ($transaksi_->status == 1)
                                                                Menunggu Pembayaran
                                                            @elseif ($transaksi_->status == 2)
                                                                Menunggu Konfirmasi
                                                            @elseif ($transaksi_->status == 3)
                                                                Lunas
                                                            @elseif ($transaksi_->status == 4)
                                                                Kadaluarsa
                                                            @endif
                                                        @else
                                                            BELUM LUNAS
                                                        @endif
                                                    @endforeach
                                                    {{-- {{ array_values($item)[0] == 1 ? 'LUNAS' : 'BELUM LUNAS' }} --}}
                                                </td>
                                            </tr>
                                            @endforeach
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
                                                Pembayaran
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Tanggal Bayar
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($peserta->transaksi as $transaksi_)
                                            <tr class="border-b text-sm border-gray-200 dark:border-gray-700">
                                                <td class="px-3 py-3">
                                                    {{ \Carbon\Carbon::parse($transaksi_->created_at)->format('Ymd') }}-{{ $transaksi_->id}}
                                                </td>
                                                <td class="px-3 py-3">
                                                    {{ $transaksi_->created_at }}
                                                </td>
                                                <td class="px-3 py-3">
                                                    @if ($transaksi_->status == 1)
                                                        Menunggu Pembayaran
                                                    @elseif ($transaksi_->status == 2)
                                                        Menunggu Konfirmasi
                                                    @elseif ($transaksi_->status == 3)
                                                        Lunas
                                                    @elseif ($transaksi_->status == 4)
                                                        Kadaluarsa
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
