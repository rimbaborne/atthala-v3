@extends('website.layouts.web')

@section('content')
<section class="bg-white py-24 bg-[url('/assets/bg/aqc-bg-1.png')]">
    <div class="relative">
        <div aria-hidden="true" class="absolute inset-0 float grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
            <div class="blur-[106px] h-26 bg-gradient-to-br from-primary to-green-400"></div>
            <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300"></div>
        </div>
    </div>
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
        <img src="{{ url('/') }}/assets/logo/logo-aqc.png" class="h-40 w-auto mx-auto mb-8" alt="Quranic Camp Logo" />
        <h1
        class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl ">
        Arrahmah Quranic Family Camp #2
    </h1>
    <p class="mb-8 text-lg font-normal text-white lg:text-xl sm:px-16 xl:px-48  p-2 rounded">
        Kegiatan seru bareng teman dan keluarga berkemah dan murojaah 30 Juz Al-Quran
    </p>
    <p class="text-white font-bold">
        إِنْ شَاءَ اللَّهُ
    </p>
    <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
        <a href="/akses" class="inline-flex justify-center items-center py-3 px-5 text-base font-bold text-center text-white rounded-lg bg-[#844c34]">
            28 - 29 Desember 2024
        </a>
    </div>
</div>
</section>
<section class="bg-white dark:bg-gray-900">
    <div class="py-32 px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="max-w-screen-md mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                Yuk, Ikut Arrahmah Quranic Family Camp</h2>
                <p class="text-gray-500 sm:text-xl ">
                    Taddabur Alam, Berkemah bersama keluarga sambil sholat malam dan mengkhatamkan Al-quran di salah satu pantai di balikpapan.
                </p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-[#844c34] lg:h-12 lg:w-12 ">
                        <x-carbon-education class="w-6 h-6 text-white" />
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Khatam 30 Juz Al-quran</h3>
                    <p class="text-gray-500 ">
                        Bersama-sama mengkhatamkan 30 Juz Al-quran yang dibagi masing-masing kelompok.
                    </p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-[#844c34] lg:h-12 lg:w-12 ">
                        <x-carbon-worship-muslim class="w-6 h-6 text-white" />
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Qiyamul Lail</h3>
                    <p class="text-gray-500 ">
                        Bangun tengah malam dan sholat bersama yang di imami oleh Ustad Syaiful Anwar Al-hafizh.
                    </p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-[#844c34] lg:h-12 lg:w-12 ">
                        <x-carbon-events class="w-6 h-6 text-white" />
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Refleksi & Tausiyah</h3>
                    <p class="text-gray-500 ">
                        Refleksi diri dan Tausiyah dengan Ustad Agus Khoirul Huda.
                    </p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-[#844c34] lg:h-12 lg:w-12 ">
                        <x-carbon-rss class="w-6 h-6 text-white" />
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Talaqqi Surah Al-fatiha</h3>
                    <p class="text-gray-500 ">
                        Insya Allah akan dibimbing oleh Ustad Syaiful Anwar Pemilik 2 Sanad Asyaroh Riwayat Hafsh.
                    </p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-[#844c34] lg:h-12 lg:w-12 ">
                        <x-carbon-soccer class="w-6 h-6 text-white" />
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Kegiatan Outdoor</h3>
                    <p class="text-gray-500 ">
                        Banyak games seru yang disiapkan untuk kemeriahan acara.
                    </p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-[#844c34] lg:h-12 lg:w-12 ">
                        <x-carbon-cookie class="w-6 h-6 text-white" />
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Lomba Masak</h3>
                    <p class="text-gray-500 ">
                        Peserta akan mempersiapkan hidangan yang ter-wenak dan kreatif dari kelurga atau kelompok.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-[url('/assets/bg/bg-dots-1.png')] bg-repeat bg-[#844c34]">

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg shadow-lg" src="{{ url('/') }}/assets/img/aqc/1.jpg"
                alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg shadow-lg" src="{{ url('/') }}/assets/img/aqc/2.jpg"
                alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg shadow-lg" src="{{ url('/') }}/assets/img/aqc/3.jpg"
                alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg shadow-lg" src="{{ url('/') }}/assets/img/aqc/4.jpg"
                alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg shadow-lg" src="{{ url('/') }}/assets/img/aqc/5.jpg"
                alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg shadow-lg" src="{{ url('/') }}/assets/img/aqc/6.jpg"
                alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg shadow-lg" src="{{ url('/') }}/assets/img/aqc/7.jpg"
                alt="">
            </div>
        </div>
    </section>
    <section class="bg-white bg-[url('/assets/bg/bg-dots-1.png')] bg-repeat antialiased">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-4xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">
                    Agenda
                </h2>
            </div>

            <div class="flow-root max-w-3xl mx-auto mt-8 sm:mt-12 lg:mt-16">
                <div class="-my-4 divide-y divide-gray-200 dark:divide-gray-700">
                    <h3 class="text-2xl font-bold text-[#5c2a15] dark:text-white pt-6 pb-2">
                        Hari Ke-1
                    </h3>
                    @php
                    $hari1 = [
                    ['time' => '07:30 - 08:00', 'activity' => 'Kedatangan Peserta'],
                    ['time' => '08:00 - 08:30', 'activity' => 'Pengkondisian dan Persiapan Apel'],
                    ['time' => '08:30 - 09:15', 'activity' => 'Apel Pembukaan'],
                    ['time' => '09:15 - 09:45', 'activity' => 'Shalat Dhuha Berjamaah'],
                    ['time' => '09:45 - 10:45', 'activity' => 'Pendirian Tenda'],
                    ['time' => '10:45 - 11:30', 'activity' => 'Halaqah Qur’an'],
                    ['time' => '11:30 - 12:00', 'activity' => 'Makan Siang'],
                    ['time' => '12:00 - 12:30', 'activity' => 'Persiapan & Shalat Dzuhur'],
                    ['time' => '12:30 - 13:30', 'activity' => 'Istirahat'],
                    ['time' => '13:30 - 15:20', 'activity' => 'Outbound'],
                    ['time' => '15:20 - 16:00', 'activity' => 'Persiapan & Sholat Ashar'],
                    ['time' => '16:00 - 16:45', 'activity' => 'Refleksi diri & Tausiyah (ust Agus)'],
                    ['time' => '16:45 - 18:00', 'activity' => 'Masak, Makan, & Bebersih diri'],
                    ['time' => '18:00 - 18:30', 'activity' => 'Dzikir Petang bersama, Persiapan, & Sholat Maghrib'],
                    ['time' => '18:30 - 19:00', 'activity' => 'Halaqah Qur’an sesi 2'],
                    ['time' => '19:00 - 20:00', 'activity' => 'Persiapan & Sholat Isya'],
                    ['time' => '20:00 - 21:30', 'activity' => 'Talkshow Motivasi Qur’an'],
                    ['time' => '21:30 - 21:45', 'activity' => 'Laporan Tadarus'],
                    ['time' => '21:45 - 03:30', 'activity' => 'Persiapan Tidur & Istirahat'],
                    ];
                    @endphp
                    @foreach($hari1 as $event)
                    <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                        <p class="w-32 text-lg font-normal text-gray-500 sm:text-right shrink-0">
                            {{ $event['time'] }}
                        </p>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            {{ $event['activity'] }}
                        </h3>
                    </div>
                    @endforeach
                </div>
                <div class="py-10"></div>
                <div class="-my-4 divide-y divide-gray-200 dark:divide-gray-700">
                    <h3 class="text-2xl font-bold text-[#5c2a15] dark:text-white pt-6 pb-2">
                        Hari Ke-2
                    </h3>
                    @php
                    $hari2 = [
                    ['time' => '03:30 - 04:00', 'activity' => 'Persiapan Qiyamul Lail'],
                    ['time' => '04:00 - 04:30', 'activity' => 'Sholat Qiyamul Lail'],
                    ['time' => '04:30 - 05:00', 'activity' => 'Persiapan & Sholat Shubuh'],
                    ['time' => '05:00 - 06:00', 'activity' => 'Talaqqi Surah Al-Fatihah'],
                    ['time' => '06:00 - 06:15', 'activity' => 'Dzikir Pagi'],
                    ['time' => '06:15 - 07:00', 'activity' => 'Senam Pagi'],
                    ['time' => '07:00 - 09:00', 'activity' => 'Masak, Sarapan, dan Lomba Masak'],
                    ['time' => '09:00 - 10:00', 'activity' => 'Pengumuman Pemenang dan Pembagian Hadiah'],
                    ['time' => '10:00 - 10:30', 'activity' => 'Pembongkaran Tenda & Operasi Semut'],
                    ['time' => '10:30 - 11:15', 'activity' => 'Apel Penutupan'],
                    ['time' => '11:15 - Selesai', 'activity' => 'Sayonara'],
                    ];
                    @endphp
                    @foreach($hari2 as $event)
                    <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
                        <p class="w-32 text-lg font-normal text-gray-500 sm:text-right shrink-0">
                            {{ $event['time'] }}
                        </p>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            {{ $event['activity'] }}
                        </h3>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 bg-[url('/assets/bg/bg-dots-1.png')] bg-repeat bg-[#3D949F]">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 max-w-3xl mx-4 sm:mx-auto">
            <div class="col-span-2  p-8 rounded-lg">
                <h2 class="text-3xl font-bold text-white">Pantau Info Terbaru</h2>
            </div>
            <div class="col-span-1 flex justify-center items-center">
                <a href="https://www.instagram.com/arrahmahcamp.bpn" target="_blank" class="text-white bg-[#844c34] hover:bg-[#844c34] font-medium rounded-lg text-sm px-5 py-2.5 flex justify-center items-center text-center">
                    <x-carbon-logo-instagram class="w-6 h-6 text-white mr-4" /> @arrahmahcamp.bpn
                </a>
            </div>
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900 py-32">
        <div class="gap-16 items-center  md:p-16 p-4 mx-auto max-w-screen-xl ">
            <div class="font-light text-gray-500 sm:text-lg ">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                    Pemateri Acara
                </h2>
            </div>
            <div class="">
                <img class="mb-4 h-full" src="/assets/img/pemateri-aqc-1.png" alt="pemateri-aqc-1" />
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900 py-32">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pilihan Paket Harga Peserta</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl ">Ayo Segera Daftar.</p>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Paket Santri Arrahmah</h3>
                    <p class="font-light text-gray-500 sm:text-lg ">Harga Khusus Santri Arrahmah Usia Dibawah 17 Tahun (2024).</p>
                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-4xl font-extrabold">Rp 100.000</span>
                        <span class="text-gray-500 ">/peserta</span>
                    </div>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <x-carbon-checkmark-outline class="w-6 h-6 text-[#3D949F]" />
                            <span>Tenda Bersama</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-carbon-checkmark-outline class="w-6 h-6 text-[#3D949F]" />
                            <span>Atribut Acara</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-carbon-checkmark-outline class="w-6 h-6 text-[#3D949F]" />
                            <span>Games</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-carbon-checkmark-outline class="w-6 h-6 text-[#3D949F]" />
                            <span>Kelompok Khatam Quran</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-carbon-checkmark-outline class="w-6 h-6 text-[#3D949F]" />
                            <span>Hadiah*</span>
                        </li>
                    </ul>
                    <a href="s.id/ArrahmahCamp-2" target="_blank" class="bg-white border-2 border-[#844c34] text-[#844c34] font-bold rounded-lg text-sm px-5 py-2.5 text-center">Daftar</a>
                </div>
                <!-- Pricing Card -->
                <div class="flex flex-col p-10 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border-2 border-[#844c34] shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Paket Keluarga</h3>
                    <p class="font-light text-gray-500 sm:text-lg ">Maksimal 3 Peserta.</p>
                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-4xl font-extrabold">Rp 350.000</span>
                        <span class="text-gray-500 ">/keluarga</span>
                    </div>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <x-carbon-checkmark-outline class="w-6 h-6 text-[#3D949F]" />
                            <span>Tenda Sendiri*</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-carbon-checkmark-outline class="w-6 h-6 text-[#3D949F]" />
                            <span>Atribut Acara</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-carbon-checkmark-outline class="w-6 h-6 text-[#3D949F]" />
                            <span>Games</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-carbon-checkmark-outline class="w-6 h-6 text-[#3D949F]" />
                            <span>Lomba Khusus Keluarga</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-carbon-checkmark-outline class="w-6 h-6 text-[#3D949F]" />
                            <span>Kelompok Khatam Quran</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-carbon-checkmark-outline class="w-6 h-6 text-[#3D949F]" />
                            <span>Hadiah*</span>
                        </li>
                    </ul>
                    <a href="s.id/ArrahmahCamp-2" target="_blank" class="text-white bg-[#844c34] font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Daftar</a>
                </div>
                <!-- Pricing Card -->
                <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Paket Individu</h3>
                    <p class="font-light text-gray-500 sm:text-lg ">Peserta Umum Dari Semua Kalangan</p>
                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-4xl font-extrabold">Rp 200.000</span>
                        <span class="text-gray-500 ">/peserta</span>
                    </div>
                    <!-- List -->
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <x-carbon-checkmark-outline class="w-6 h-6 text-[#3D949F]" />
                            <span>Tenda Bersama</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-carbon-checkmark-outline class="w-6 h-6 text-[#3D949F]" />
                            <span>Atribut Acara</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-carbon-checkmark-outline class="w-6 h-6 text-[#3D949F]" />
                            <span>Games</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-carbon-checkmark-outline class="w-6 h-6 text-[#3D949F]" />
                            <span>Kelompok Khatam Quran</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-carbon-checkmark-outline class="w-6 h-6 text-[#3D949F]" />
                            <span>Hadiah*</span>
                        </li>
                    </ul>
                    <a href="https://s.id/ArrahmahCamp-2" target="_blank" class="bg-white border-2 border-[#844c34] text-[#844c34] font-bold rounded-lg text-sm px-5 py-2.5 text-center">Daftar</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-10 bg-[url('/assets/bg/bg-dots-1.png')] bg-repeat bg-[#844c34]">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-3xl mx-4 sm:mx-auto">
            <div class="bg-white p-8 rounded-lg">
                <ul role="list" class="space-y-2">
                    <li class="flex justify-between items-center space-x-3">
                        <span>Pak Indra</span>
                        <span class="font-bold"><a href="https://wa.me/6285651070917" target="_blank">0856-5107-0917</a></span>
                    </li>
                </ul>
            </div>
            <div class="bg-white p-8 rounded-lg">
                <ul role="list" class="space-y-2">
                    <li class="flex justify-between items-center space-x-3">
                        <span>Bu Lintang</span>
                        <span class="font-bold"><a href="https://wa.me/6281215524280" target="_blank">0812-1552-4280</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
            <h2 class="mb-8 text-xl font-extrabold tracking-tight leading-tight text-center text-gray-900">
                Organized By
            </h2>
            <div class="flex items-center justify-center gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 ">
                <a href="#" class="flex justify-center items-center">
                    <img src="{{ asset('assets/img/logo-arrahmah.png') }}" alt="about" class="w-64">
                </a>
            </div>
        </div>
        <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
            <h2 class="mb-8 text-xl font-extrabold tracking-tight leading-tight text-center text-gray-900">
                Sponsorship
            </h2>
            <div class="flex items-center justify-center gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 ">
                <a href="https://izi.or.id/" target="_blank" class="flex justify-center items-center">
                    <img src="https://izi.or.id/wp-content/uploads/2022/03/logo.png" alt="about" class="w-64">
                </a>
            </div>
        </div>

        <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
            <h2 class="mb-8 text-xl font-extrabold tracking-tight leading-tight text-center text-gray-900">
                Partnership
            </h2>
            <div class="flex items-center justify-center gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 ">
                <a href="#" class="flex justify-center items-center">
                    <img src="{{ asset('assets/logo/logo-mini-outdoor.png') }}" alt="about" class="w-32">
                </a>
            </div>
        </div>
        <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
            <h2 class="mb-8 text-xl font-extrabold tracking-tight leading-tight text-center text-gray-900">
                Supported By
            </h2>
            <div class="flex items-center justify-center gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 ">
                <a href="#" class="flex justify-center items-center">
                    <img src="{{ asset('assets/img/lttq/lttq.png') }}" alt="about" class="w-32">
                </a>
            </div>
        </div>
    </section>
    @endsection
