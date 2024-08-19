<x-app-layout>
    <div class="pt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white rounded-lg p-4">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="text-2xl font-bold mb-4">Peserta</h1>
                    <Link href="/dashboard/daftar-program" class="py-2.5 px-5 text-primary-800 border border-primary-800 rounded-lg">Daftar Program</Link>
                </div>
                {{-- <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="col"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    Nama
                                </th>
                                <th scope="col"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    Program
                                </th>
                                <th scope="col"
                                    class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    Muhammad Fikri
                                </th>
                                <td class="px-6 py-4 text-blue-500">
                                    Aktif
                                </td>
                                <td class="px-6 py-4">
                                    Raudhotul Quran
                                </td>
                                <td class="px-6 py-4">
                                    <Link href="#"
                                        class="text-sm font-semibold text-primary-700 hover:text-white bg-white  hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300">
                                    Pilih
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> --}}
            </div>
        </div>
    </div>

    @include('layouts.navigation-mobile')
</x-app-layout>
