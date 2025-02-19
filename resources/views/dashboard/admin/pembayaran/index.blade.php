<x-layouts.main :unit="$unit">
    <x-layouts.card>
        <x-layouts.title>Manajemen Data Pembayaran <text class="uppercase">{{ $unit }}</text> </x-layouts.title>

        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-6">
            <div class="flex flex-col border justify-center bg-white rounded-lg">
                <div class="max-w-md p-4 flex items-center justify-center text-center">
                    <x-carbon-data-view-alt class="w-12 h-12 m-6 text-primary-700"/>
                </div>
                <div class="px-4">
                    <p class="text-sm lg:text-lg font-medium text-gray-700">Data Transaksi Terbaru</p>
                    <div class="gap-4 pb-4 sm:gap-2 sm:items-center sm:flex mt-4">
                        <Link href="{{ route('admin.pembayaran.transaksi', ['unit' => $unit]) }}" title=""
                            class="text-primary-700 mt-4 sm:mt-0 border border-primary-700 font-medium rounded-lg text-sm px-4 py-1 lg:py-2.5 flex items-center justify-between"
                            role="button">
                            Lihat
                            <x-carbon-arrow-right class="w-4 h-4 ml-3 text-primary-700"/>
                        </Link>
                    </div>
                </div>
            </div>
            <div class="flex flex-col border justify-center bg-white rounded-lg">
                <div class="max-w-md p-4 flex items-center justify-center text-center">
                    <x-carbon-report-data class="w-12 h-12 m-6 text-primary-700"/>
                </div>
                <div class="px-4">
                    <p class="text-sm lg:text-lg font-medium text-gray-700">Data Rekap Pembayaran</p>
                    <div class="gap-4 pb-4 sm:gap-2 sm:items-center sm:flex mt-4">
                        <Link href="{{ route('admin.pembayaran.rekap', ['unit' => $unit]) }}" title=""
                            class="text-primary-700 mt-4 sm:mt-0 border border-primary-700 font-medium rounded-lg text-sm px-4 py-1 lg:py-2.5 flex items-center justify-between"
                            role="button">
                            Lihat
                            <x-carbon-arrow-right class="w-4 h-4 ml-3 text-primary-700"/>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </x-layouts.card>
</x-layouts.main>
