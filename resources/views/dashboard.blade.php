<x-app-layout>
    <x-slot name="header">
        <h3 class="font-semibold text-xl text-gray-800 leading-tight">
            Selamat datang di sistem, {{ Auth::user()->name ?? Auth::user()->phone_number }}
        </h3>
    </x-slot>

    <section>
        <div class="bg-primary-900 py-24 rounded-b-3xl">

        </div>
    </section>

    <div class="pt-10 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 pb-0 bg-white border-b border-gray-200">
                    <div class="w-full max-w-screen-xl mb-20">
                        <div class="mb-10">
                            <x-partials.list-item>
                                <x-slot:title>Super Admin</x-slot>
                                <x-slot:description>Manajemen seluruh core system</x-slot>
                                <x-slot:link>{{ route('superadmin.index') }}</x-slot>
                            </x-partials.list-item>
                        </div>
                    </div>
                    <h3 class="text-2xl pb-4 font-bold">Divisi Pendidikan</h3>
                    <div class="p-4">
                        <ol class="relative border-s border-gray-200 dark:border-gray-700">
                            <li class="mb-10 ms-6">
                                <x-partials.list-item>
                                    <x-slot:title>Admin Tahsin</x-slot>
                                    <x-slot:description>Manajemen seluruh komponen Tahsin</x-slot>
                                    <x-slot:link>#</x-slot>
                                </x-partials.list-item>
                            </li>
                            <li class="mb-10 ms-6">
                                <x-partials.list-item>
                                    <x-slot:title>Pengajar Tahsin</x-slot>
                                    <x-slot:description>Manajemen Absensi dan Nilai Peserta Tahsin</x-slot>
                                    <x-slot:link>#</x-slot>
                                </x-partials.list-item>
                            </li>
                            <li class="mb-10 ms-6">
                                <x-partials.list-item>
                                    <x-slot:title>Admin Tahfizh Lil Athfal</x-slot>
                                    <x-slot:description>Manajemen seluruh komponen TLA</x-slot>
                                    <x-slot:link>#</x-slot>
                                </x-partials.list-item>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="min-[640px]:hidden">
        <div class="fixed bottom-0 left-0 z-50 w-full h-16 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
            <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
                <button type="button" class="inline-flex flex-col items-center justify-center px-5 border-gray-200 border-x hover:bg-gray-50 dark:hover:bg-gray-800 group dark:border-gray-600">
                    <svg class="w-5 h-5 mb-2 text-primary-700 dark:text-gray-400 group-hover:text-primary-600 dark:group-hover:text-primary-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                    <span class="text-sm text-primary-500 dark:text-gray-400 group-hover:text-primary-600 dark:group-hover:text-primary-500">Dashboard</span>
                </button>
                <button type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                    <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12.25V1m0 11.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M4 19v-2.25m6-13.5V1m0 2.25a2.25 2.25 0 0 0 0 4.5m0-4.5a2.25 2.25 0 0 1 0 4.5M10 19V7.75m6 4.5V1m0 11.25a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5ZM16 19v-2"/>
                    </svg>
                    <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Jadwal</span>
                </button>
                <button type="button" class="inline-flex flex-col items-center justify-center px-5 border-e border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 group dark:border-gray-600">
                    <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M11.074 4 8.442.408A.95.95 0 0 0 7.014.254L2.926 4h8.148ZM9 13v-1a4 4 0 0 1 4-4h6V6a1 1 0 0 0-1-1H1a1 1 0 0 0-1 1v13a1 1 0 0 0 1 1h17a1 1 0 0 0 1-1v-2h-6a4 4 0 0 1-4-4Z"/>
                        <path d="M19 10h-6a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1Zm-4.5 3.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM12.62 4h2.78L12.539.41a1.086 1.086 0 1 0-1.7 1.352L12.62 4Z"/>
                    </svg>
                    <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Pembayaran</span>
                </button>
                <button type="button" class="inline-flex flex-col items-center justify-center px-5 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 group border-x dark:border-gray-600">
                    <svg class="w-5 h-5 mb-2 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
                    </svg>
                    <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Akun</span>
                </button>
            </div>
        </div>
    </div>

</x-app-layout>
