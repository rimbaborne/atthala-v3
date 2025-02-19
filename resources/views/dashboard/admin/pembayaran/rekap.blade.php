<x-layouts.main :unit="$unit">
    <x-layouts.card>
        <x-layouts.title>Data Rekap Pembayaran <text class="uppercase">{{ $unit }}</text> </x-layouts.title>
        <x-splade-table :for="$table" />
    </x-layouts.card>
</x-layouts.main>
