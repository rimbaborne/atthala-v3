<x-layouts.main :unit="$unit">

    <div class="p-4">
        <h2 class="text-2xl font-bold uppercase">
            Periode {{ $unit }}  Angkatan {{ $dataperiode->angkatan }}, Tahun {{ $dataperiode->tahun_ajaran }}
        </h2>
    </div>

    <div class="md:flex p-4">
        @include('dashboard.admin.periode.menu')

    </div>
</x-layouts.main>
