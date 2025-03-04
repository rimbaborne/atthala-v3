<ul class="flex-column space-y space-y-4 text-sm font-medium text-gray-500 md:me-4 mb-4 md:mb-0">
    <li>
        <x-periode-link-item :href="route('admin.jadwal.index', ['unit' => $unit, 'periode' => $periode])" :active="request()->routeIs('admin.jadwal.index', ['unit' => $unit, 'periode' => $periode])">
            Jadwal <x-carbon-chevron-right class="ml-2 h-4 w-4" />
        </x-periode-link-item>
    </li>
    <li>
        <x-periode-link-item :href="route('admin.jadwal.absen', ['unit' => $unit, 'periode' => $periode])" :active="request()->routeIs('admin.jadwal.absen', ['unit' => $unit, 'periode' => $periode])">
            Absen Pengajar <x-carbon-chevron-right class="ml-2 h-4 w-4" />
        </x-periode-link-item>
    </li>
    <li>
        <x-periode-link-item :href="route('admin.peserta.index', ['unit' => $unit, 'periode' => $periode])" :active="request()->routeIs('admin.peserta.index', ['unit' => $unit, 'periode' => $periode])">
            Peserta <x-carbon-chevron-right class="ml-2 h-4 w-4" />
        </x-periode-link-item>
    </li>
    <li>
        <x-periode-link-item :href="route('admin.peserta.kehadiran', ['unit' => $unit, 'periode' => $periode])" :active="request()->routeIs('admin.peserta.kehadiran', ['unit' => $unit, 'periode' => $periode])">
            Kehadiran <x-carbon-chevron-right class="ml-2 h-4 w-4" />
        </x-periode-link-item>
    </li>
    <li>
        <x-periode-link-item :href="route('admin.pembayaran.transaksi', ['unit' => $unit, 'periode' => $periode])" :active="request()->routeIs('admin.pembayaran.transaksi', ['unit' => $unit, 'periode' => $periode])">
            Transkasi <x-carbon-chevron-right class="ml-2 h-4 w-4" />
        </x-periode-link-item>
    </li>
    <li>
        <x-periode-link-item :href="route('admin.pembayaran.rekap', ['unit' => $unit, 'periode' => $periode])" :active="request()->routeIs('admin.pembayaran.rekap', ['unit' => $unit, 'periode' => $periode])">
            Pembayaran <x-carbon-chevron-right class="ml-2 h-4 w-4" />
        </x-periode-link-item>
    </li>
</ul>
