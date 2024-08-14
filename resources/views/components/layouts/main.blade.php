@props(['unit'])

<x-layouts.nav />
<div class="flex overflow-hidden bg-gray-50">
    <x-layouts.sidebar :unit="$unit ?? null" />

    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64">
        <main>
            {{ $slot }}
        </main>

        <x-layouts.footer />
    </div>
</div>

