<x-layouts.main :unit="$unit">
    <x-layouts.card>
        <x-layouts.title>Data Transaksi Pembayaran <text class="uppercase">{{ $unit }}</text> </x-layouts.title>
        <x-splade-table :for="$table">
            <x-splade-cell actions as="$data">
                <div class="flex items-center gap-1">

                    @if ($data->status == 'MENUNGGU KONFIRMASI')
                        <Link href="/users/edit" class="text-yellow-500 border border-yellow-500 rounded-md px-2 py-1">
                            <x-carbon-edit class="w-5 h-5 text-yellow-500"/>
                        </Link>
                    @endif
                    <Link href="{{ route('invoice.index', ['uuid' => $data->uuid]) }}" target="_blank" class="text-sky-500 border border-sky-500 rounded-md px-2 py-1">
                        <x-carbon-report class="w-5 h-5 text-sky-500"/>
                    </Link>
                    <Link href="{{ route('admin.pembayaran.peserta', ['unit' => $data->periode->unit->slug, 'peserta' => $data->peserta->id]) }}" target="_blank" class="text-primary-500 border border-primary-500 rounded-md px-2 py-1">
                        <x-carbon-user class="w-5 h-5 text-primary-500"/>
                    </Link>
                    @if ($data->status == 'KADALUARSA')
                        <Link
                            confirm="Konfirmasi Hapus Data"
                            confirm-text="Apakah yakin data {{ $data->peserta->nama }} dihapus ?"
                            confirm-button="Ya"
                            cancel-button="Tidak"
                            href="/users/edit" class="text-red-700 border border-red-700 rounded-md px-2 py-1">
                            <x-carbon-trash-can class="w-5 h-5 text-red-700"/>
                        </Link>
                    @endif
                </div>
            </x-splade-cell>
        </x-splade-table>
    </x-layouts.card>
</x-layouts.main>
