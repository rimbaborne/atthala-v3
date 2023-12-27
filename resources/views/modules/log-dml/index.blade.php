<x-layouts.main>
    <x-layouts.card>
        <h4 class="text-2xl font-bold border-b border-gray-200 mb-4 leading-loose">Log Data</h4>
        <x-splade-table :for="$log_dml">
        </x-splade-table>
    </x-layouts.card>
</x-layouts.main>
