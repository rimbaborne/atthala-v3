<template>
    <div class="text-center">
      <!-- Tombol link untuk mengirim OTP -->
      <div class="my-4">
        <a class="rounded-lg text-sm px-4 py-2 mt-5 outline outline-offset-2 outline-1 outline-primary-800 text-primary-700 hover:text-primary-900" href="#" @click.prevent="sendOTP" v-if="!countdownStarted">
            Kirim Kode OTP
        </a>
      </div>


      <!-- Penampil waktu mundur -->
      <div id="countdown" class="block">
        <div class="text-xs text-gray-500" v-if="countdownStarted" >{{ countdownText }}</div>
      </div>
    </div>
  </template>

<script>
export default {
  data() {
    return {
      phoneNumber: null,
      countdownSeconds: null,
      countdownInterval: null,
      countdownStarted: false,
    };
  },
  computed: {
    countdownText() {
      var minutes = Math.floor(this.countdownSeconds / 60);
      var remainingSeconds = this.countdownSeconds % 60;
      return 'Dapat mengirim lagi dalam waktu: ' + minutes + ' menit ' + remainingSeconds + ' detik';
    }
  },
  methods: {
    sendOTP() {
      console.log('Mengirim kode OTP ke nomor handphone:', this.phoneNumber);

      var apiUrl = 'https://atthala-v3.test/akses/kirim-otp/' + encodeURIComponent(this.phoneNumber);

      fetch(apiUrl)
        .then(response => {
          if (response.ok) {
            return response.json();
          } else {
            throw new Error('Gagal mengirim OTP');
          }
        })
        .then(data => {
          console.log('Respons dari server:', data);

          this.getRemainingTimeFromServer();
          this.startCountdown();
        })
        .catch(error => {
          console.error('Terjadi kesalahan:', error);
        });
    },
    startCountdown() {
        this.requestTimeStart();
      this.countdownStarted = true;

      this.countdownInterval = setInterval(() => {
        if (this.countdownSeconds > 0) {
          this.countdownSeconds--;
        } else {
          clearInterval(this.countdownInterval);
          this.countdownStarted = false;
        }
      }, 1000);
    },
    getRemainingTimeFromServer() {
      var apiUrl = 'https://atthala-v3.test/akses/kirim-otp/' + encodeURIComponent(this.phoneNumber) + '/sesi-waktu-batas';

      fetch(apiUrl)
        .then(response => {
          if (response.ok) {
            return response.json();
          } else {
            throw new Error('Gagal mendapatkan sisa waktu dari server');
          }
        })
        .then(data => {
          console.log('Sisa waktu dari server:', data.remainingTime);

          // Update countdownSeconds with the remaining time from the server
          this.countdownSeconds = data.remainingTime;

          // Start the countdown
          if (this.countdownSeconds > 0) {
            this.startCountdown();
          }
        })
        .catch(error => {
          console.error('Terjadi kesalahan:', error);
        });
    },
    requestTimeStart() {
        var apiUrl = 'https://atthala-v3.test/akses/kirim-otp/' + encodeURIComponent(this.phoneNumber) + '/sesi-waktu-mulai';

        fetch(apiUrl)
        .then(response => {
            if (response.ok) {
                return response.json();
            } else {
                throw new Error('Gagal membuat sesi waktu mulai ke server');
            }
        })
        .catch(error => {
            console.error('Terjadi kesalahan:', error);
        });
    }
  },
  created() {
    const pathSegments = window.location.pathname.split('/');
    const phoneIndex = pathSegments.indexOf('akses');

    if (phoneIndex !== -1 && pathSegments[phoneIndex + 1] && /^\d+$/.test(pathSegments[phoneIndex + 1])) {
      this.phoneNumber = pathSegments[phoneIndex + 1];
    } else {
      console.error('Nomor handphone tidak valid atau tidak ditemukan dalam path URL.');
    }

    // Mengambil sisa waktu dari server setelah komponen dibuat
    this.getRemainingTimeFromServer();
  }
};
</script>

<style>
/* Gaya CSS komponen di sini */
</style>
