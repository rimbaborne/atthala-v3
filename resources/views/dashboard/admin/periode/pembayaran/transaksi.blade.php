<x-layouts.main :unit="$unit">

    <div class="p-4">
        <h2 class="text-2xl font-bold uppercase">
            Periode {{ $unit }}  Angkatan {{ $dataperiode->angkatan }}, Tahun {{ $dataperiode->tahun_ajaran }}
        </h2>
    </div>

    <div class="md:flex p-4">
        @include('dashboard.admin.periode.menu')
        <div class="p-6 bg-white border border-gray-200 text-medium text-gray-500 dark:text-gray-400 rounded-lg w-full">

            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Profile Tab</h3>
            <p class="mb-2">This is some placeholder content the Profile tab's associated content, clicking another tab will toggle the visibility of this one for the next.</p>
            <p>The tab JavaScript swaps classes to control the content visibility and styling.</p>

        </div>

    </div>
</x-layouts.main>
