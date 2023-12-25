<x-layouts.main>
    <x-layouts.card>
        <h4 class="text-2xl font-bold border-b border-gray-200 mb-4 leading-loose">Manajemen Roles</h4>
        <div class="items-center justify-end block flex">
            <Link modal max-width="lg" href="{{ route('superadmin.roles.create') }}" class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:ring-sky-300 font-medium rounded-lg text-sm px-4 py-2 mb-2 flex items-center focus:outline-none">
                Tambah Data
                @svg('carbon-add-filled', 'ml-2 text-white h-4 w-4')
            </Link>
        </div>
        <x-splade-table :for="$roles">
            <x-splade-cell actions>
                <Link href="#">tes</Link>
            </x-splade-cell>
        </x-splade-table>
    </x-layouts.card>
</x-layouts.main>
