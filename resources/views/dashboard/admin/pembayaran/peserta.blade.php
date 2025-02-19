<x-layouts.main :unit="$unit">
    <x-layouts.card>
        <div class="">
            <div class="mx-auto">
                <div class="grid grid-cols-1 px-4 md:grid-cols-3 md:gap-4 dark:bg-gray-900">
                    <!-- Right Content -->
                    <div class="col-span-full sm:col-auto">
                        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg  2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <div class="items-center flex space-x-4">
                                <x-carbon-user-avatar-filled-alt class="w-20 h-20 text-primary-700"/>
                                <div>
                                    <h3 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">Peserta {{ $peserta->unit->nama }}</h3>
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
                                <li class="col-span-3 py-2">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-normal text-gray-500 truncate dark:text-gray-400">
                                                Kota
                                            </p>
                                            <p class="text-base font-semibold text-gray-900 truncate dark:text-white">
                                                {{ $peserta->biodata['kota_domisili'] ?? '' }}
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
                                                {{ $peserta->biodata['kota_pekerjaan'] ?? '' }}
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
                                                {{ $peserta->biodata['kota_alamat'] ?? '' }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
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
                                                <th scope="col"
                                                        class="px-3 py-3 text-center font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                                        Ujian
                                                    </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-gray-900 ">
                                                @for($i = 1; $i <= 16; $i++)
                                                    <td class="text-center p-2 uppercase text-xs font-bold">
                                                        @if(array_key_exists($i, $peserta->kelas->data_absensi))
                                                            {{ $peserta->kelas->data_absensi[$i] == "" ? '-' : $peserta->kelas->data_absensi[$i] }}
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                @endfor
                                                <td class="text-center p-2 uppercase text-xs font-bold">
                                                    @if(array_key_exists('ujian', $peserta->kelas->data_absensi))
                                                        {{ $peserta->kelas->data_nilai['ujian'] == "" ? '-' : $peserta->kelas->data_nilai['ujian'] }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
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
                                            <tr class="border-b text-sm border-gray-200 dark:border-gray-700">
                                                <td class="px-3 py-3 uppercase">
                                                    PENDAFTARAN
                                                </td>
                                                <td class="px-3 py-3 uppercase">
                                                    {{ $peserta->kelas->data_pembayaran['pendaftaran'] != '' ? 'LUNAS' : '' }}
                                                </td>
                                            </tr>
                                            @for($i = 1; $i <= 4; $i++)
                                                <tr class="border-b text-sm border-gray-200 dark:border-gray-700">
                                                    <td class="px-3 py-3 uppercase">
                                                        SPP BULAN {{ $i }}
                                                    </td>
                                                    <td class="px-3 py-3 uppercase">
                                                        {{ $peserta->kelas->data_pembayaran['spp' . $i] != '' ? 'LUNAS' : '' }}
                                                    </td>
                                                </tr>
                                            @endfor
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
                                                    <td class="px-3 py-4">
                                                        {{ $transaksi_->created_at }}
                                                    </td>
                                                    <td class="px-3 py-4">
                                                        {{ $transaksi_->status }}
                                                    </td>
                                                    <td class="px-3 py-4">
                                                        <Link href="{{ route('invoice.index', ['uuid' => $transaksi_->uuid]) }}" class=" py-2 px-4 text-sm font-medium text-primary-700 hover:text-white bg-white border border-primary-700 rounded-lg hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">
                                                            Lihat Invoice
                                                        </Link>
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
    </x-layouts.card>
</x-layouts.main>

