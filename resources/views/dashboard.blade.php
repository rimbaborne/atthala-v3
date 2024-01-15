<x-app-layout>
    <x-slot name="header">
        <h3 class="font-semibold text-xl text-gray-800 leading-tight">
            Selamat datang di sistem, {{ Auth::user()->name }}
        </h3>
    </x-slot>

    <div class="pt-10">
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

</x-app-layout>
