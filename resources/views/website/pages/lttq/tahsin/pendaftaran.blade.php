<div class="min-h-screen bg-gray-100">

    <div class="text-center py-8 bg-gray-100">
        <p class="text-sm text-gray-600">
            <Link href="{{ url('/') }}/dashboard" class="text-md text-gray-600 hover:text-gray-900">
                &larr; Kembali
            </Link>
        </p>
    </div>

    <div class=" flex justify-center items-center p-4 bg-gray-100">
        <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md rounded-lg">
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
                <div class="flex items-center mt-2">
                    <x-splade-select name="phone_code" :label="__('Nomor HP Whatsapp')" value="62" class="py-0 w-60 text-sm block" choices
                        required>
                        <option value="62">🇮🇩 Indonesia</option>
                        <option value="60">🇲🇾 Malaysia</option>
                        <option value="65">🇸🇬 Singapore</option>
                        <option value="852">🇭🇰 Hong Kong</option>
                        <option value="82">🇰🇷 Korea</option>
                        <option value="81">🇯🇵 Japan</option>
                        <option value="93">Afghanistan (+93)</option>
                        <option value="355">Albania (+355)</option>
                        <option value="213">Algeria (+213)</option>
                        <option value="1684">American Samoa (+1684)</option>
                        <option value="376">Andorra (+376)</option>
                        <option value="244">Angola (+244)</option>
                        <option value="1264">Anguilla (+1264)</option>
                        <option value="672">Antarctica (+672)</option>
                        <option value="1268">Antigua and Barbuda (+1268)</option>
                        <option value="54">Argentina (+54)</option>
                        <option value="374">Armenia (+374)</option>
                        <option value="297">Aruba (+297)</option>
                        <option value="61">Australia (+61)</option>
                        <option value="43">Austria (+43)</option>
                        <option value="994">Azerbaijan (+994)</option>
                        <option value="1242">Bahamas (+1242)</option>
                        <option value="973">Bahrain (+973)</option>
                        <option value="880">Bangladesh (+880)</option>
                        <option value="1246">Barbados (+1246)</option>
                        <option value="375">Belarus (+375)</option>
                        <option value="32">Belgium (+32)</option>
                        <option value="501">Belize (+501)</option>
                        <option value="229">Benin (+229)</option>
                        <option value="1441">Bermuda (+1441)</option>
                        <option value="975">Bhutan (+975)</option>
                        <option value="591">Bolivia (+591)</option>
                        <option value="387">Bosnia and Herzegovina (+387)</option>
                        <option value="267">Botswana (+267)</option>
                        <option value="55">Brazil (+55)</option>
                        <option value="246">British Indian Ocean Territory (+246)</option>
                        <option value="1284">British Virgin Islands (+1284)</option>
                        <option value="673">Brunei (+673)</option>
                        <option value="359">Bulgaria (+359)</option>
                        <option value="226">Burkina Faso (+226)</option>
                        <option value="257">Burundi (+257)</option>
                        <option value="855">Cambodia (+855)</option>
                        <option value="237">Cameroon (+237)</option>
                        <option value="1">Canada (+1)</option>
                        <option value="238">Cape Verde (+238)</option>
                        <option value="1345">Cayman Islands (+1345)</option>
                        <option value="236">Central African Republic (+236)</option>
                        <option value="235">Chad (+235)</option>
                        <option value="56">Chile (+56)</option>
                        <option value="86">China (+86)</option>
                        <option value="61">Christmas Island (+61)</option>
                        <option value="61">Cocos Islands (+61)</option>
                        <option value="57">Colombia (+57)</option>
                        <option value="269">Comoros (+269)</option>
                        <option value="682">Cook Islands (+682)</option>
                        <option value="506">Costa Rica (+506)</option>
                        <option value="385">Croatia (+385)</option>
                        <option value="53">Cuba (+53)</option>
                        <option value="599">Curacao (+599)</option>
                        <option value="357">Cyprus (+357)</option>
                        <option value="420">Czech Republic (+420)</option>
                        <option value="243">Democratic Republic of the Congo (+243)</option>
                        <option value="45">Denmark (+45)</option>
                        <option value="253">Djibouti (+253)</option>
                        <option value="1767">Dominica (+1767)</option>
                        <option value="1809">Dominican Republic (+1809)</option>
                        <option value="670">East Timor (+670)</option>
                        <option value="593">Ecuador (+593)</option>
                        <option value="20">Egypt (+20)</option>
                        <option value="503">El Salvador (+503)</option>
                        <option value="240">Equatorial Guinea (+240)</option>
                        <option value="291">Eritrea (+291)</option>
                        <option value="372">Estonia (+372)</option>
                        <option value="251">Ethiopia (+251)</option>
                        <option value="500">Falkland Islands (+500)</option>
                        <option value="298">Faroe Islands (+298)</option>
                        <option value="679">Fiji (+679)</option>
                        <option value="358">Finland (+358)</option>
                        <option value="33">France (+33)</option>
                        <option value="689">French Polynesia (+689)</option>
                        <option value="241">Gabon (+241)</option>
                        <option value="220">Gambia (+220)</option>
                        <option value="995">Georgia (+995)</option>
                        <option value="49">Germany (+49)</option>
                        <option value="233">Ghana (+233)</option>
                        <option value="350">Gibraltar (+350)</option>
                        <option value="30">Greece (+30)</option>
                        <option value="299">Greenland (+299)</option>
                        <option value="1473">Grenada (+1473)</option>
                        <option value="1671">Guam (+1671)</option>
                        <option value="502">Guatemala (+502)</option>
                        <option value="44-1481">Guernsey (+44-1481)</option>
                        <option value="224">Guinea (+224)</option>
                        <option value="245">Guinea-Bissau (+245)</option>
                        <option value="592">Guyana (+592)</option>
                        <option value="509">Haiti (+509)</option>
                        <option value="504">Honduras (+504)</option>
                        <option value="852">Hong Kong (+852)</option>
                        <option value="36">Hungary (+36)</option>
                        <option value="354">Iceland (+354)</option>
                        <option value="91">India (+91)</option>
                        <option value="98">Iran (+98)</option>
                        <option value="964">Iraq (+964)</option>
                        <option value="353">Ireland (+353)</option>
                        <option value="44-1624">Isle of Man (+44-1624)</option>
                        <option value="39">Italy (+39)</option>
                        <option value="225">Ivory Coast (+225)</option>
                        <option value="1876">Jamaica (+1876)</option>
                        <option value="81">Japan (+81)</option>
                        <option value="44-1534">Jersey (+44-1534)</option>
                        <option value="962">Jordan (+962)</option>
                        <option value="7">Kazakhstan (+7)</option>
                        <option value="254">Kenya (+254)</option>
                        <option value="686">Kiribati (+686)</option>
                        <option value="383">Kosovo (+383)</option>
                        <option value="965">Kuwait (+965)</option>
                        <option value="996">Kyrgyzstan (+996)</option>
                        <option value="856">Laos (+856)</option>
                        <option value="371">Latvia (+371)</option>
                        <option value="961">Lebanon (+961)</option>
                        <option value="266">Lesotho (+266)</option>
                        <option value="231">Liberia (+231)</option>
                        <option value="218">Libya (+218)</option>
                        <option value="423">Liechtenstein (+423)</option>
                        <option value="370">Lithuania (+370)</option>
                        <option value="352">Luxembourg (+352)</option>
                        <option value="853">Macau (+853)</option>
                        <option value="389">Macedonia (+389)</option>
                        <option value="261">Madagascar (+261)</option>
                        <option value="265">Malawi (+265)</option>
                        <option value="960">Maldives (+960)</option>
                        <option value="223">Mali (+223)</option>
                        <option value="356">Malta (+356)</option>
                        <option value="692">Marshall Islands (+692)</option>
                        <option value="222">Mauritania (+222)</option>
                        <option value="230">Mauritius (+230)</option>
                        <option value="262">Mayotte (+262)</option>
                        <option value="52">Mexico (+52)</option>
                        <option value="691">Micronesia (+691)</option>
                        <option value="373">Moldova (+373)</option>
                        <option value="377">Monaco (+377)</option>
                        <option value="976">Mongolia (+976)</option>
                        <option value="382">Montenegro (+382)</option>
                        <option value="1664">Montserrat (+1664)</option>
                        <option value="212">Morocco (+212)</option>
                        <option value="258">Mozambique (+258)</option>
                        <option value="95">Myanmar (+95)</option>
                        <option value="264">Namibia (+264)</option>
                        <option value="674">Nauru (+674)</option>
                        <option value="977">Nepal (+977)</option>
                        <option value="31">Netherlands (+31)</option>
                        <option value="599">Netherlands Antilles (+599)</option>
                        <option value="687">New Caledonia (+687)</option>
                        <option value="64">New Zealand (+64)</option>
                        <option value="505">Nicaragua (+505)</option>
                        <option value="227">Niger (+227)</option>
                        <option value="234">Nigeria (+234)</option>
                        <option value="683">Niue (+683)</option>
                        <option value="850">North Korea (+850)</option>
                        <option value="1670">Northern Mariana Islands (+1670)</option>
                        <option value="47">Norway (+47)</option>
                        <option value="968">Oman (+968)</option>
                        <option value="92">Pakistan (+92)</option>
                        <option value="680">Palau (+680)</option>
                        <option value="970">Palestine (+970)</option>
                        <option value="507">Panama (+507)</option>
                        <option value="675">Papua New Guinea (+675)</option>
                        <option value="595">Paraguay (+595)</option>
                        <option value="51">Peru (+51)</option>
                        <option value="63">Philippines (+63)</option>
                        <option value="64">Pitcairn (+64)</option>
                        <option value="48">Poland (+48)</option>
                        <option value="351">Portugal (+351)</option>
                        <option value="1787">Puerto Rico (+1787)</option>
                        <option value="974">Qatar (+974)</option>
                        <option value="242">Republic of the Congo (+242)</option>
                        <option value="262">Reunion (+262)</option>
                        <option value="40">Romania (+40)</option>
                        <option value="7">Russia (+7)</option>
                        <option value="250">Rwanda (+250)</option>
                        <option value="590">Saint Barthelemy (+590)</option>
                        <option value="290">Saint Helena (+290)</option>
                        <option value="1869">Saint Kitts and Nevis (+1869)</option>
                        <option value="1758">Saint Lucia (+1758)</option>
                        <option value="590">Saint Martin (+590)</option>
                        <option value="508">Saint Pierre and Miquelon (+508)</option>
                        <option value="1784">Saint Vincent and the Grenadines (+1784)</option>
                        <option value="685">Samoa (+685)</option>
                        <option value="378">San Marino (+378)</option>
                        <option value="239">Sao Tome and Principe (+239)</option>
                        <option value="966">Saudi Arabia (+966)</option>
                        <option value="221">Senegal (+221)</option>
                        <option value="381">Serbia (+381)</option>
                        <option value="248">Seychelles (+248)</option>
                        <option value="232">Sierra Leone (+232)</option>
                        <option value="1721">Sint Maarten (+1721)</option>
                        <option value="421">Slovakia (+421)</option>
                        <option value="386">Slovenia (+386)</option>
                        <option value="677">Solomon Islands (+677)</option>
                        <option value="252">Somalia (+252)</option>
                        <option value="27">South Africa (+27)</option>
                        <option value="82">South Korea (+82)</option>
                        <option value="211">South Sudan (+211)</option>
                        <option value="34">Spain (+34)</option>
                        <option value="94">Sri Lanka (+94)</option>
                        <option value="249">Sudan (+249)</option>
                        <option value="597">Suriname (+597)</option>
                        <option value="47">Svalbard and Jan Mayen (+47)</option>
                        <option value="268">Swaziland (+268)</option>
                        <option value="46">Sweden (+46)</option>
                        <option value="41">Switzerland (+41)</option>
                        <option value="963">Syria (+963)</option>
                        <option value="886">Taiwan (+886)</option>
                        <option value="992">Tajikistan (+992)</option>
                        <option value="255">Tanzania (+255)</option>
                        <option value="66">Thailand (+66)</option>
                        <option value="228">Togo (+228)</option>
                        <option value="690">Tokelau (+690)</option>
                        <option value="676">Tonga (+676)</option>
                        <option value="1868">Trinidad and Tobago (+1868)</option>
                        <option value="216">Tunisia (+216)</option>
                        <option value="90">Turkey (+90)</option>
                        <option value="993">Turkmenistan (+993)</option>
                        <option value="1649">Turks and Caicos Islands (+1649)</option>
                        <option value="688">Tuvalu (+688)</option>
                        <option value="1340">U.S. Virgin Islands (+1340)</option>
                        <option value="256">Uganda (+256)</option>
                        <option value="380">Ukraine (+380)</option>
                        <option value="971">United Arab Emirates (+971)</option>
                        <option value="44">United Kingdom (+44)</option>
                        <option value="1">United States (+1)</option>
                        <option value="598">Uruguay (+598)</option>
                        <option value="998">Uzbekistan (+998)</option>
                        <option value="678">Vanuatu (+678)</option>
                        <option value="379">Vatican (+379)</option>
                        <option value="58">Venezuela (+58)</option>
                        <option value="84">Vietnam (+84)</option>
                        <option value="681">Wallis and Futuna (+681)</option>
                        <option value="212">Western Sahara (+212)</option>
                        <option value="967">Yemen (+967)</option>
                        <option value="260">Zambia (+260)</option>
                        <option value="263">Zimbabwe (+263)</option>
                    </x-splade-select>
                </div>
                <div class="flex items-center">
                    <div class="relative w-full">
                        <x-splade-input type="tel" name="phone_number" size="20" minlength="8" maxlength="15"
                            class="block text-gray-900 bg-transparent appearance-none peer"
                            placeholder="Masukkan Nomor : 08123456xxxx" required />
                    </div>
                </div>
                <div class="flex items-center justify-end ">
                    <div class="text-sm text-gray-500">
                        Contoh : 08123456789
                    </div>
                </div>
                <x-splade-input id="name" type="text" name="name" :label="__('Nama Peserta')" required autofocus />
                <x-splade-select name="jenis_peserta" :label="__('Jenis Peserta')" required value="ikhwan" >
                    <option value="ikhwan">Ikhwan / Laki-laki</option>
                    <option value="akhwat">Akhwat / Perempuan</option>
                </x-splade-select>

                <div class="border border-gray-300 rounded-md p-4 my-4">
                    <span class="block mb-1 text-gray-700 font-sans"> Tanggal Lahir </span>
                    <div class="grid grid-cols-3 gap-0">
                        <x-splade-select name="tanggal" :label="__('Tanggal')" required >
                            <option value="" disabled selected>-- Pilih Tanggal</option>
                            @foreach (range(1, 31) as $tanggal)
                                <option value="{{ $tanggal }}">{{ $tanggal }}</option>
                            @endforeach
                        </x-splade-select>
                        <x-splade-select name="bulan" :label="__('Bulan')" required >
                            <option value="" disabled selected>-- Pilih Bulan</option>
                            @foreach ([
                                ['name' => 'Januari', 'value' => '1'],
                                ['name' => 'Februari', 'value' => '2'],
                                ['name' => 'Maret', 'value' => '3'],
                                ['name' => 'April', 'value' => '4'],
                                ['name' => 'Mei', 'value' => '5'],
                                ['name' => 'Juni', 'value' => '6'],
                                ['name' => 'Juli', 'value' => '7'],
                                ['name' => 'Agustus', 'value' => '8'],
                                ['name' => 'September', 'value' => '9'],
                                ['name' => 'Oktober', 'value' => '10'],
                                ['name' => 'November', 'value' => '11'],
                                ['name' => 'Desember', 'value' => '12'],
                            ] as $bulan)
                                <option value="{{ $bulan['value'] }}">{{ $bulan['name'] }}</option>
                            @endforeach
                        </x-splade-select>
                        <x-splade-select name="tahun" :label="__('Tahun')" required >
                            <option value="" disabled selected>-- Pilih Tahun</option>
                            @php
                                $tahun_terakhir = date('Y', strtotime('-12 years'));
                                $tahun_pertama = 1950;
                            @endphp
                            @for ($i = $tahun_terakhir; $i >= $tahun_pertama; $i--)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </x-splade-select>
                    </div>
                </div>
                {{-- <input type="text" class="border border-gray-300 shadow-sm block w-full focus:border-sky-300 focus:ring focus:ring-sky-200 focus:ring-opacity-50 disabled:cursor-not-allowed rounded-md"> --}}
                <x-splade-select name="kota_domisili" :label="__('Kota Domisili')" required choices>
                    <option value="" selected>Balikpapan</option>
                    <option value="1">-- Luar Kota Balikpapan --</option>
                    @foreach($dataindo as $provinsi)
                        @foreach($provinsi['kota'] as $kota)
                            <option value="{{ $kota }}">{{ $kota }}</option>
                        @endforeach
                    @endforeach
                </x-splade-select>
                <x-splade-input id="alamat" type="text" name="alamat" :label="__('Alamat Tinggal')" required />
                <x-splade-select id="pekerjaan" name="pekerjaan" :label="__('Pekerjaan')" required >
                    <option value="" disabled selected>-- Pilih Pekerjaan</option>
                    <option value="Pelajar">Pelajar</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="Wirausaha">Wirausaha</option>
                    <option value="TNI">TNI</option>
                    <option value="Polri">Polri</option>
                    <option value="PNS">PNS</option>
                    <option value="Dosen">Dosen</option>
                    <option value="Guru">Guru</option>
                    <option value="Pengajar">Pengajar</option>
                    <option value="Tenaga Kesehatan">Tenaga Kesehatan</option>
                    <option value="Lainnya">Lainnya</option>
                </x-splade-select>

                <x-splade-file class="my-4" name="ktp" :label="__('Upload KTP Peserta')" :js-filepond-options="'labelIdle:`OKe`'" filepond preview required />

                <x-splade-select name="pembelajaran" :label="__('Pembelajaran')" required >
                    <option value="1">Offline / Hadir di lokasi</option>
                    <option value="2">Online / Zoom Meeting</option>
                    <option value="3">Offline dan Online</option>
                </x-splade-select>

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                <div class="max-w-lg my-8 mx-auto bg-white p-4 rounded shadow">
                    <h1 class="text-lg font-medium mb-4">Rekaman Tilawah Quran Surah Fussilat Ayat 44-48</h1>
                    <div class="grid md:flex justify-center gap-2 mb-4">
                        <a class="bg-gray-200 px-4 py-2 rounded-lg hover:bg-white"
                            onclick="document.getElementById('file-upload').style.display = 'none'; document.getElementById('record-tab').style.display = 'block';">
                            Rekam Sekarang <i class="fa-solid fa-microphone"></i>
                        </a>
                        <span class="text-center md:pt-2">atau</span>
                        <a class="bg-gray-200 px-4 py-2 rounded-lg hover:bg-white"
                            onclick="document.getElementById('file-upload').style.display = 'block'; document.getElementById('record-tab').style.display = 'none';">
                            Upload File Rekaman <i class="fa-solid fa-file-upload"></i>
                        </a>
                    </div>
                    <div id="record-tab" style="display: none;">
                        <div class="py-4">
                            <RecordVoice></RecordVoice>
                        </div>
                    </div>
                    <div id="file-upload" style="display: none;">
                        <x-splade-file class="my-4" name="bukti-tf" :label="__('Upload Bukti Transfer')" filepond preview required />
                    </div>
                </div>


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

                {{-- <x-splade-file class="my-4" name="bukti-tf" :label="__('Upload Bukti Transfer')" filepond preview required /> --}}

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
                    <button type="submit" class="bg-primary-700 text-white py-2.5 px-5 rounded-lg">Proses Pendaftaran <i class="pl-2 fas fa-chevron-right"></i></button>
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

