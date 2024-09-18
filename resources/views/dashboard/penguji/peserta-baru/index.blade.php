<x-layouts.main :unit="$unit ?? null">
    <x-layouts.card>
        <x-layouts.title>Data Peserta Baru</x-layouts.title>
        <x-splade-table :for="$pesertas">
        </x-splade-table>
    </x-layouts.card>
</x-layouts.main>

