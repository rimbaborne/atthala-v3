<x-layouts.main>
    <x-layouts.card>
        <div class="pt-10">
            <div class="mx-auto sm:px-6 lg:px-8 ">
                <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-2">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search...">
                    </div>
                </div>
                <div class="bg-white rounded-lg p-4">
                    <div class="flex items-center justify-between mb-4">
                        <h1 class="text-2xl font-bold mb-4">SPP TLA - Semester Ganjil Periode 2024</h1>
                    </div>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead>
                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                    <th scope="col"
                                        class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Nama
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Januari
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Februari
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Maret
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        April
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Mei
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Juni
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Juli
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Agustus
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        September
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Oktober
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        November
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Desember
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        Total
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $dataPembayaran = [
                                        "Adam Indrawan" => 12,
                                        "Budi Setiawan" => 10,
                                        "Charlie Wijaya" => 6,
                                        "Dave Dewa" => 9,
                                        "Emma Wulan" => 11,
                                        "Fiona Pertiwi" => 8,
                                        "Gilang Gunawan" => 7,
                                        "Hana Hidayati" => 5,
                                        "Ivan Ivanov" => 4,
                                    ];
                                @endphp
                                @foreach ($dataPembayaran as $nama => $nilai)
                                <tr class="border-b text-sm border-gray-200 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                        {{ $nama }}
                                    </th>
                                    @for ($i = 0; $i < $nilai; $i++)
                                        <td class="px-6 py-4">
                                            150.000
                                        </td>
                                    @endfor
                                    @for ($i = 0; $i < 12-$nilai; $i++)
                                        <td class="px-6 py-4">
                                        </td>
                                    @endfor
                                    <td class="px-6 py-4">
                                        {{ number_format($nilai * 150000, 0, ',', '.') }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 border-t border-gray-200 sm:px-6">
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            <button type="button"
                                class="mr-3 text-sm font-medium text-primary-600 hover:text-primary-900">
                                Previous
                            </button>
                            <button type="button"
                                class="mr-3 text-sm font-medium text-primary-600 hover:text-primary-900">
                                1
                            </button>
                            <button type="button"
                                class="mr-3 text-sm font-medium text-primary-600 hover:text-primary-900">
                                2
                            </button>
                            <span class="text-sm font-medium text-gray-700">...</span>
                            <button type="button"
                                class="mr-3 text-sm font-medium text-primary-600 hover:text-primary-900">
                                10
                            </button>
                            <button type="button"
                                class="text-sm font-medium text-primary-600 hover:text-primary-900">
                                Next
                            </button>
                        </div>
                        <div class="flex items-center">
                            <span class="text-sm font-medium text-gray-700 mr-3">Page 1 of 10</span>
                            <select class="block w-20 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-primary-200 focus:border-primary-300">
                                <option value="">10</option>
                                <option value="">25</option>
                                <option value="">50</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layouts.card>
</x-layouts.main>
