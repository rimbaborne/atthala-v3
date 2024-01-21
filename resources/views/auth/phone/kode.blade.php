<x-guest-layout>

    <x-splade-script>
        document.addEventListener('DOMContentLoaded', function() {
            // Nomor handphone yang disematkan
            {{-- var phoneNumber = '08123456789'; // Ganti dengan nomor handphone sesuai kebutuhan --}}

            // Fungsi untuk mengirim OTP
            function sendOTP() {
                // Simulasi pengiriman OTP (gantilah dengan logika pengiriman sesungguhnya)
                {{-- console.log('Mengirim kode OTP ke nomor handphone:', phoneNumber); --}}

                // Ganti URL berikut dengan URL sesuai kebutuhan, menggunakan nomor handphone
                var apiUrl = '{!! route('akses.nomor.kirim-otp', ['nomor' => $user->phone_number]) !!}';

                // Kirim permintaan ke URL tertentu dengan nomor handphone
                // Contoh menggunakan Fetch API
                fetch(apiUrl)
                    .then(response => {
                        if (response.ok) {
                            console.log('OTP berhasil dikirim');
                        } else {
                            console.error('Gagal mengirim OTP');
                        }
                    })
                    .catch(error => console.error('Terjadi kesalahan:', error));

                // Memulai waktu mundur 2 menit (120 detik)
                startCountdown(120);

                // Menyembunyikan tombol saat waktu mundur berjalan
                document.getElementById('generateOTP').style.display = 'none';
            }

            // Fungsi untuk memulai waktu mundur
            function startCountdown(seconds) {
                var countdownElement = document.getElementById('countdown');

                // Menyimpan waktu awal di localStorage
                var startTime = new Date().getTime();
                localStorage.setItem('startTime', startTime);

                // Update countdown setiap detik
                var countdownInterval = setInterval(function() {
                    // Menghitung waktu yang telah berlalu sejak dimulainya waktu mundur
                    var elapsedTime = new Date().getTime() - startTime;

                    // Menghitung sisa waktu mundur berdasarkan waktu yang telah berlalu
                    var remainingSeconds = Math.max(0, seconds - Math.floor(elapsedTime / 1000));

                    // Menampilkan waktu mundur
                    countdownElement.textContent = 'Dapat mengirim kode lagi dalam waktu '+formatTime(remainingSeconds);

                    // Menghentikan waktu mundur jika sudah mencapai 0
                    if (remainingSeconds === 0) {
                        clearInterval(countdownInterval);
                        {{-- countdownElement.textContent = 'Waktu mundur habis!'; --}}

                        // Menampilkan kembali tombol setelah waktu habis
                        document.getElementById('generateOTP').style.display = 'block';
                        document.getElementById('countdown').style.display = 'node';
                        localStorage.removeItem('startTime');
                    }
                }, 1000);
            }

            // Fungsi untuk format waktu (menit:detik)
            function formatTime(seconds) {
                var minutes = Math.floor(seconds / 60);
                var remainingSeconds = seconds % 60;
                return minutes + ' menit ' + remainingSeconds + ' detik';
            }

            // Menambahkan event listener untuk tombol link
            document.getElementById('generateOTP').addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah aksi default dari link

                // Memanggil fungsi untuk mengirim OTP
                sendOTP();
            });

            // Mengecek apakah ada waktu mundur yang sedang berjalan di localStorage
            var storedStartTime = localStorage.getItem('startTime');
            if (storedStartTime) {
                var elapsedTime = new Date().getTime() - parseInt(storedStartTime);
                var remainingSeconds = Math.max(0, 120 - Math.floor(elapsedTime / 1000));

                if (remainingSeconds > 0) {
                    startCountdown(remainingSeconds);

                    // Menyembunyikan tombol saat waktu mundur berjalan
                    document.getElementById('generateOTP').style.display = 'none';
                } else {
                    localStorage.removeItem('startTime');
                }
            }
        });

    </x-splade-script>

    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" />

        <x-splade-form action="{{ route('akses.login') }}" :default="['phone_number' => $nomor]" >

            <label class="mb-2 flex items-center justify-center text-l font-bold text-gray-500 pt-5">
                Konfirmasi
            </label>
            <div class="flex items-center">
                <div class="relative w-full">
                    <x-splade-input name="phone_number" type="text" class="text-3xl text-center border-0" v-model="form.phone_number" required readonly/>
                </div>
            </div>
            <div class="text-center uppercase text-regular mt-2">
                Masukkan Kode 4 Digit :
            </div>
            <div class="text-center text-sm">
                <a id="generateOTP" href="#" class="block text-primary-700 hover:text-primary-500 py-2">
                Klik Disini Untuk Mengirim Kode
                </a>
                <div class="text-xs text-gray-500" id="countdown"></div>
            </div>
            <div class="flex items-center">
                <div class="relative w-full">
                    <x-splade-input name="password" type="tel" class="text-3xl text-center border-0" placeholder="_ _ _ _" required autocomplete="current-password"/>
                </div>
            </div>


            <div class="flex items-center justify-center py-5">
                <x-splade-submit class="ml-3" label="Klik Untuk Konfirmasi" />
            </div>
        </x-splade-form>
    </x-auth-card>
</x-guest-layout>

