<div class="min-h-screen bg-gray-100">

    <div class="text-center py-8 bg-gray-100">
        <p class="text-sm text-gray-600">
            <Link href="{{ url('/') }}/dashboard" class="text-md text-gray-600 hover:text-gray-900">
                &larr; Kembali
            </Link>
        </p>
    </div>

    <div class="min-h-screen flex justify-center items-center p-4 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md rounded-lg">
            <div class="space-y-2 flex items-center justify-center gap-6 md:space-y-0">
                <a href="#" class="shrink-0 m-4">
                    <img class="w-32" src="{{ url('/') }}/assets/img/lttq/tahsin.png">
                </a>
            </div>
            <h1 class="text-2xl font-bold text-center">Pendaftaran Tahsin</h1>
            <p class="text-center font-normal text-md pb-2">Angkatan 25</p>
            <x-splade-form action="#"
                confirm-text="Apakah data yang anda masukkan sudah benar ?"
                confirm="Konfirmasi"
                confirm-button="Benar"
                cancel-button="Belum"
                method="POST">
                <x-splade-input id="name" type="text" name="name" :label="__('Nama Peserta')" required autofocus />
                <x-splade-select name="jenis_peserta" :label="__('Jenis Peserta')" required >
                    <option value="ikhwan" selected>Ikhwan / Laki-laki</option>
                    <option value="akhwat">Akhwat / Perempuan</option>
                </x-splade-select>

                <x-splade-input name="tanggal_lahir" :label="__('Tanggal Lahir')" date required />
                <x-splade-input name="published_at" date />
                <input type="text" class="border border-gray-300 shadow-sm block w-full focus:border-sky-300 focus:ring focus:ring-sky-200 focus:ring-opacity-50 disabled:cursor-not-allowed rounded-md">
                <x-splade-input id="tempat" type="text" name="tempat" :label="__('Kota Domisili')" required />
                <x-splade-input id="alamat" type="text" name="alamat" :label="__('Alamat Tinggal')" required />
                <x-splade-input id="pekerjaan" type="text" name="pekerjaan" :label="__('Pekerjaan')" required />

                <x-splade-select name="pembelajaran" option-value="__('offline')" :label="__('Pembelajaran')" required >
                    <option value="offline">Offline</option>
                    <option value="online">Online</option>
                </x-splade-select>

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                <RecordVoice></RecordVoice>


                <div class="my-8 grow sm:mt-8 lg:mt-0 space-y-4 bg-stone-100 p-4 rounded-lg">
                    @php
                        $total = 0;
                    @endphp
                    @foreach ([
                        ['name' => 'cek-pendaftaran', 'label' => 'Pendaftaran', 'value' => '100000', 'disabled' => false, 'checked' => false, 'required' => true],
                        ['name' => 'cek-spp1', 'label' => 'SPP BULAN I', 'value' => '100000', 'disabled' => false, 'checked' => false, 'required' => true],
                        ['name' => 'cek-spp2', 'label' => 'SPP BULAN II', 'value' => '100000', 'disabled' => false, 'checked' => false, 'required' => true],
                        ['name' => 'cek-spp3', 'label' => 'SPP BULAN III', 'value' => '100000', 'disabled' => false, 'checked' => false, 'required' => false],
                        ['name' => 'cek-spp4', 'label' => 'SPP BULAN IV', 'value' => '100000', 'disabled' => false, 'checked' => false, 'required' => false],
                        // ['name' => 'cek-modul', 'label' => 'Modul Per Level', 'value' => '35000', 'disabled' => false, 'checked' => true, 'required' => false],
                        // ['name' => 'cek-prestasi', 'label' => 'Buku Perstasi', 'value' => '25000', 'disabled' => false, 'checked' => false, 'required' => false],
                        // ['name' => 'cek-mushaf', 'label' => 'Mushaf Rasm Utsmani', 'value' => '115000', 'disabled' => false, 'checked' => false, 'required' => false],
                    ] as $data)
                        <div class="space-y-2">
                            <dl class="flex items-center justify-between gap-4">
                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">
                                    <input type="checkbox" data="checkbox" class="w-5 h-5 {{ $data['disabled'] ? 'text-blue-300' : 'text-blue-600' }}  bg-gray-100 border-gray-300 rounded focus:ring-blue-500 " name="{{ $data['name'] }}"
                                        value="{{ $data['value'] }}"
                                        id="{{ strtolower($data['name']) }}"
                                        {{ $data['checked'] ? 'checked' : '' }}
                                        {{ $data['disabled'] ? 'disabled' : '' }}
                                        {{ $data['required'] ? 'required' : '' }} />
                                    <label for="{{ strtolower($data['name']) }}" class="ms-2 text-sm font-medium text-gray-900 ">{{ $data['label'] }} {!! $data['required'] ? '<span aria-hidden="true" class="text-red-600" title="This field is required">*</span>' : '' !!}</label>
                                </dt>
                                <dd class="text-base font-semibold text-gray-900 flex justify-between">
                                    <div class="mr-2">
                                        Rp
                                    </div>
                                    <div>
                                        {{ number_format($data['value']) }}
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    @endforeach
                    <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                        <dt class="text-base font-bold text-gray-900 dark:text-white">Sub Total</dt>
                        <dd id="sub-total" class="text-base font-bold text-gray-900 dark:text-white">Rp 0</dd>
                    </dl>
                </div>
                <x-splade-script>
                    document.addEventListener("DOMContentLoaded", function() {
                        let total = 0;
                        function calculateTotal() {
                            total = 0;
                            document.querySelectorAll('input[type=checkbox]:checked').forEach((elem) => {
                                total += parseInt(elem.value);
                            });
                            document.getElementById('sub-total').innerText = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0, maximumFractionDigits: 0 }).format(total);
                        }
                        document.querySelectorAll('input[type=checkbox]').forEach((elem) => {
                            elem.addEventListener('change', calculateTotal);
                        });
                        calculateTotal();
                    });
                </x-splade-script>

                <div class="my-8 bg-stone-100 p-4 rounded-lg font-semibold">
                    <p class="text-sm text-gray-500 mb-2">
                        Dengan ini saya menyetujui aturan-aturan yang berlaku untuk mendaftar diri saya sebagai peserta tahsin Ar Rahmah:
                    </p>
                    <table class="w-full text-xs  text-gray-700">
                        <tbody>
                            <tr class="border-b">
                                <td class="px-4">1.</td>
                                <td class="py-2">Tahsin LTTQ Ar Rahmah Balikpapan menggunakan Metode Al Haqq.</td>
                            </tr>
                            <tr class="border-b bg-stone-200">
                                <td class="px-4">2.</td>
                                <td class="py-2">Jumlah pertemuan tahsin adalah sebanyak 16 kali pertemuan dalam 1 level (termasuk kuliah perdana).</td>
                            </tr>
                            <tr class="border-b">
                                <td class="px-4">3.</td>
                                <td class="py-2">Jumlah pertemuan tahsin dalam sepekan diadakan sebanyak 1 kali dengan durasi maksimal 2 jam.</td>
                            </tr>
                            <tr class="border-b bg-stone-200">
                                <td class="px-4">4.</td>
                                <td class="py-2">SPP wajib dibayarkan sebanyak 400.000 dalam 1 level pembelajaran (diluar biaya pendaftaran, modul, buku prestasi, dan mushaf).</td>
                            </tr>
                            <tr class="border-b">
                                <td class="px-4">5.</td>
                                <td class="py-2">Peserta wajib membeli perlengkapan tahsin; Mushaf Rasm Utsmani, Modul dan Buku Prestasi.</td>
                            </tr>
                            <tr class="border-b bg-stone-200">
                                <td class="px-4">6.</td>
                                <td class="py-2">Peserta wajib mengikuti minimal 10 pertemuan agar bisa mengikuti ujian.</td>
                            </tr>
                            <tr>
                                <td class="px-4">7.</td>
                                <td class="py-2">Peserta wajib mengikuti aturan tambahan jika dikeluarkan sewaktu-waktu oleh pihak LTTQ Ar Rahmah Balikpatan.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="flex items-center justify-center">
                    <Link class="bg-primary-700 text-white py-2.5 px-5 rounded-lg">Proses Pendaftaran</Link>
                    {{-- <x-splade-submit class="bg-primary-700 text-white" :label="__('Proses Pendaftaran')" /> --}}
                </div>
            </x-splade-form>



        </div>
    </div>

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
