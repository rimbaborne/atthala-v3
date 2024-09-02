<x-layouts.main :unit="$unit">
    <x-layouts.card>
        <x-layouts.title>Manajemen Peserta {{ $unit }}</x-layouts.title>
        <div class="items-left justify-start flex">
            <Link modal max-width="lg" href="{{ route('superadmin.users.create') }}" class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:ring-sky-300 font-medium rounded-lg text-sm px-4 py-2 mb-2 flex items-center focus:outline-none">
                Tambah Data
                @svg('carbon-add-filled', 'ml-2 text-white h-4 w-4')
            </Link>
        </div>
        <x-splade-table :for="$peserta" />
    </x-layouts.card>
</x-layouts.main>
