
<x-splade-script>
    document.addEventListener("DOMContentLoaded", function() {
        setInterval(function() {
            location.reload();
        }, 120000); // 120000 milliseconds = 2 minutes
    });
</x-splade-script>



<div class="bg-gray-100">
    <div class="text-center py-8 bg-gray-100">
        <p class="text-sm text-gray-600">
            <Link href="{{ url('/dashboard') }}" class="text-md text-gray-600 hover:text-gray-900">
            &larr; Kembali
            </Link>
        </p>
    </div>

    <!-- Invoice -->
    <div class="max-w-[70rem] px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
        <div class="sm:w-11/12 lg:w-3/4 mx-auto">
            <!-- Card -->
            <div class="flex flex-col p-4 sm:p-10 bg-white shadow-md rounded-xl dark:bg-neutral-800">
                <!-- Grid -->
                <div class="flex justify-between">
                    <div>
                        <img src="{{ url('/') }}/assets/img/logo-arrahmah.png" alt="yayasan arrahmah" class="h-12">

                        <h1 class="mt-2 text-lg md:text-xl font-semibold text-gray-800 dark:text-white">
                            Yayasan Ar Rahmah Balikpapan
                        </h1>
                        <h4 class="text-sm md:text-xl font-semibold text-gray-500 dark:text-white">
                            Lembaga Tahsin Tahfizhil Quran
                        </h4>
                    </div>
                    <!-- Col -->

                    <div class="text-end">
                        <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 dark:text-neutral-200">Invoice #
                        </h2>
                        <span class="mt-1 block text-gray-500 dark:text-neutral-500">2024060102</span>

                        {{-- <address class="mt-4 not-italic text-gray-800 dark:text-neutral-200">
                            45 Roker Terrace<br>
                            Latheronwheel<br>
                            KW5 8NW, London<br>
                            United Kingdom<br>
                        </address> --}}
                    </div>
                    <!-- Col -->
                </div>
                <!-- End Grid -->

                <!-- Grid -->
                <div class="mt-8 grid sm:grid-cols-2 gap-3">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">Kepada:</h3>
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">PESERTA TLA</h3>
                        <address class="mb-2 not-italic text-gray-500 dark:text-neutral-500">
                            BAYU INDARA<br>
                            01/01/2010<br>
                            08125144744<br>
                        </address>
                    </div>
                    <!-- Col -->

                    <div class="sm:text-end space-y-2">
                        <!-- Grid -->
                        <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800 dark:text-neutral-200">Tanggal Invoice:
                                </dt>
                                <dd class="col-span-2 text-gray-500 dark:text-neutral-500">{{ date('d/m/Y H:i') }}</dd>
                            </dl>
                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800 dark:text-neutral-200">Batas Pembayaran:</dt>
                                <dd class="col-span-2 text-gray-500 dark:text-neutral-500">{{ date('d/m/Y H:i', strtotime('+1 day')) }}</dd>
                            </dl>
                            <dl class="grid sm:grid-cols-5 gap-x-3">
                                <dt class="col-span-3 font-semibold text-gray-800 dark:text-neutral-200">Status Pembayaran:</dt>
                                <dd class="col-span-2 text-gray-500 dark:text-neutral-500">
                                    <span class="bg-red-500 text-white px-2 py-1 rounded text-sm">BELUM LUNAS</span>
                                </dd>
                            </dl>
                        </div>
                        <!-- End Grid -->
                    </div>
                    <!-- Col -->
                </div>
                <!-- End Grid -->
                <div class="flex items-center justify-center mt-6">
                    <div class="w-full md:w-2/5">
                        <div class="flex flex-col border justify-center bg-white rounded-xl items-center mb-4">
                            <div class="rounded-lg bg-white p-2 shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-4">
                                <div class="space-y-2 flex items-center justify-between gap-6 md:space-y-0">
                                    <a href="#" class="shrink-0 m-4">
                                        <img class="w-32" src="{{ url('/') }}/assets/img/lttq/tla.png">
                                    </a>
                                </div>
                                <p class="text-center font-semibold text-lg pt-2">Tahfizh Lil Atfhal</p>
                                <p class="text-center font-semibold text-lg pb-2">Periode 2024</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="mt-0">
                    <div class=" rounded-lg space-y-4 dark:border-neutral-700">
                        <div class="rounded-lg bg-white p-2 md:p-4">

                        </div>
                        <div class="mt-5">
                            <ul class="mt-3 flex flex-col">
                                <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                                    <div class="flex items-center justify-between w-full">
                                        <span>Pendaftaran</span>
                                        <span>RP 150.000</span>
                                    </div>
                                </li>
                                <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                                    <div class="flex items-center justify-between w-full">
                                        <span>SPP</span>
                                        <span>RP 200.000</span>
                                    </div>
                                </li>
                                <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                                    <div class="flex items-center justify-between w-full">
                                        <span>Modul & Prestasi</span>
                                        <span>RP 75.000</span>
                                    </div>
                                </li>
                                <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                                    <div class="flex items-center justify-between w-full">
                                        <span>Komite (1 Tahun)</span>
                                        <span>RP 120.000</span>
                                    </div>
                                </li>
                                <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-semibold bg-gray-50 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                    <div class="flex items-center justify-between w-full">
                                        <span>sub Total</span>
                                        <span>Rp 545.000</span>
                                    </div>
                                </li>
                                <li class="inline-flex items-center gap-x-2 py-3 px-4 text-sm font-semibold bg-gray-50 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                    <div class="flex items-center justify-between w-full">
                                        <span>Biaya Transaksi</span>
                                        <span>Rp 3.500</span>
                                    </div>
                                </li>
                                <li class="inline-flex items-center gap-x-2 py-3 px-4 text-lg font-semibold bg-gray-50 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                    <div class="flex items-center justify-between w-full">
                                        <span>Total</span>
                                        <span>Rp 548.500</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Table -->
                <div class=" flex items-center justify-center">
                    <div class="mt-6 w-full md:w-2/5">
                        <div class=" rounded-lg space-y-4 dark:border-neutral-700">
                            <div class="rounded-lg bg-white p-2 md:p-4">
                                <div class="space-y-2 flex items-center justify-between gap-6 md:space-y-0">
                                    <div class="w-full min-w-0 flex-1 md:max-w-md">
                                        <h5 class="text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            Metode Pembayaran
                                        </h5>
                                        <div class="flex items-center justify-between mb-4">
                                            <h1 class="text-xl mt-0 font-semibold text-gray-900 hover:underline dark:text-white">
                                                Bank BSI
                                            </h1>
                                            <img src="{{ url('/') }}/assets/pembayaran/bsi.png" alt="bsi" class="h-6 mr-2">
                                        </div>
                                            <h5 class="text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                                Nomor Virtual Akun
                                            </h5>
                                            <div class="flex items-center justify-between mb-4">
                                                <h1 class="text-xl mt-0 font-semibold text-gray-900 hover:underline dark:text-white">
                                                    0000123456789
                                                </h1>
                                                <button id="copyButton" class="ml-2 border border-gray-200 px-2 py-1 rounded text-sm">Copy</button>
                                                <x-splade-script>
                                                    document.addEventListener("DOMContentLoaded", function() {
                                                        document.getElementById('copyButton').addEventListener('click', function() {
                                                            var tempInput = document.createElement('input');
                                                            tempInput.value = '0000123456789';
                                                            document.body.appendChild(tempInput);
                                                            tempInput.select();
                                                            document.execCommand('copy');
                                                            document.body.removeChild(tempInput);
                                                            alert('Nomor Virtual Akun berhasil disalin');
                                                        });
                                                    });
                                                </x-splade-script>
                                            </div>
                                        <h5 class="text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                            Total Pembayaran
                                        </h5>
                                        <div class="flex items-center justify-between">
                                            <h1 class="text-xl mt-0 font-semibold text-gray-900 hover:underline dark:text-white">
                                                Rp 548.500
                                            </h1>
                                            <button id="copyButtonTotal" class="ml-2 border border-gray-200 px-2 py-1 rounded text-sm">Copy</button>
                                            <x-splade-script>
                                                document.addEventListener("DOMContentLoaded", function() {
                                                    document.getElementById('copyButtonTotal').addEventListener('click', function() {
                                                        var tempInput = document.createElement('input');
                                                        tempInput.value = '548500';
                                                        document.body.appendChild(tempInput);
                                                        tempInput.select();
                                                        document.execCommand('copy');
                                                        document.body.removeChild(tempInput);
                                                        alert('Total Nominal berhasil disalin');
                                                    });
                                                });
                                            </x-splade-script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mt-8 sm:mt-12">
                    <h4 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">SYukron!</h4>
                    {{-- <p class="text-gray-500 text-sm dark:text-neutral-500">
                        Semoga produk kami dapat membantu dalam kehidupan bisnis Anda.
                    </p> --}}
                    <div class="">
                        <p class="block text-sm  text-gray-500 dark:text-neutral-200">arrahmahbalikpapan.or.id</p>
                        {{-- <p class="block text-sm  text-gray-800 dark:text-neutral-200">+1 (062) 109-9222</p> --}}
                    </div>
                </div>

            </div>
            <!-- End Card -->

        </div>
    </div>
    <!-- End Invoice -->

    <div class="text-center py-8 bg-gray-100">
        <div class="flex items-center justify-center">
            <img src="{{ url('/') }}/assets/pembayaran/SSL-Secured.svg" alt="ssl" class="h-16 pt-3">
            <img class="h-12 mt-5 rounded-md" src="https://ipaymu.com/wp-content/themes/ipaymu_v2/assets/new-assets/image/iPaymu-PCIDSS.jpeg" alt="ipaymu">
        </div>
        <p class="text-sm pt-4 text-gray-600">
            &copy; {{ date('Y') }} arrahmahbalikpapan.or.id
        </p>
    </div>
</div>

