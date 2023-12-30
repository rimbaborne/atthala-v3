<x-layouts.main>
    <x-layouts.card>
        <h4 class="text-2xl font-bold border-b border-gray-200 mb-4 leading-loose">Manajemen Users</h4>
        <div class="items-center justify-end block flex">
            <Link modal max-width="lg" href="{{ route('superadmin.users.create') }}" class="text-white bg-sky-500 hover:bg-sky-600 focus:ring-4 focus:ring-sky-300 font-medium rounded-lg text-sm px-4 py-2 mb-2 flex items-center focus:outline-none">
                Tambah Data
                @svg('carbon-add-filled', 'ml-2 text-white h-4 w-4')
            </Link>
        </div>
        <x-splade-table :for="$users">
            @cell('tes', $user)
                {{ $user->divisi_->nama }}
            @endcell
            @cell('action')
                <a href="#" class="text-xs inline-flex items-center font-medium rounded-lg px-2 py-1 text-center text-green-400 hover:text-white border border-green-400 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-300 ">
                    <x-carbon-view class="pr-2 w-5 h-5 inline" /> View
                </a>
                <a href="#" class="ml-2 text-xs inline-flex items-center font-medium rounded-lg px-2 py-1 text-center text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 ">
                    <x-carbon-edit class="pr-2 w-5 h-5 inline" /> Edit
                </a>
                <a href="#" class="ml-2 text-xs inline-flex items-center font-medium rounded-lg px-2 py-1 text-center text-red-400 hover:text-white border border-red-400 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-red-300 ">
                    <x-carbon-trash-can class="pr-2 w-5 h-5 inline" /> Delete
                </a>
            @endcell
        </x-splade-table>
    </x-layouts.card>
</x-layouts.main>

