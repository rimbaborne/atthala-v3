<x-app-layout>
    <div class="pt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white rounded-lg p-4">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="text-2xl font-bold mb-4">Riwayat Pembayaran</h1>
                </div>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="col"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    Nomor Invoice
                                </th>
                                <th scope="col"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    Nama
                                </th>
                                <th scope="col"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    Program
                                </th>
                                <th scope="col"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    Tanggal
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_transaksi as $item)
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('Ymd') }}-{{ $item->id}}
                                </th>
                                <td class="px-6 py-4 uppercase">
                                    {{ $item->peserta->nama }}
                                </td>

                                <td class="px-6 py-4 uppercase">
                                    {{ $item->peserta->periode->unit->nama }} {{ $item->peserta->periode->nama }}
                                </td>
                                <td class="px-6 py-4 uppercase">
                                    @if ($item->status == 1)
                                        <span class="bg-yellow-300 text-gray-900 px-2 py-1 rounded text-sm">Menunggu Pembayaran</span>
                                    @elseif ($item->status == 2)
                                        <span class="bg-blue-500 text-white px-2 py-1 rounded text-sm">Menunggu Konfirmasi</span>
                                    @elseif ($item->status == 3)
                                        <span class="bg-green-500 text-white px-2 py-1 rounded text-sm">LUNAS</span>
                                    @elseif ($item->status == 4)
                                        <span class="bg-red-500 text-white px-2 py-1 rounded text-sm">Kadaluarsa</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 uppercase">
                                    {{ $item->created_at}}
                                </td>

                                <td class="px-6 py-4">
                                    <Link href="{{ route('website.lttq.invoice', ['uuid' => $item->uuid, 'program' => $item->program_slug]) }}"
                                    class="text-sm font-semibold border rounded-lg py-2.5 px-5 border-primary-700 text-primary-700 hover:text-white bg-white  hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">
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

    @include('layouts.navigation-mobile')


</x-app-layout>
