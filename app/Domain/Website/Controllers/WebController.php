<?php

namespace App\Domain\Website\Controllers;

use App\Http\Controllers\Controller;
use ProtoneMedia\Splade\Facades\SEO;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Http\Requests\PendaftaranTahsinRequest;
use ProtoneMedia\Splade\Facades\Toast;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Spatie\Image\Image;
use App\Models\Periode;

class WebController extends Controller
{
    public $description, $keywords, $sitename;
    public function __construct()
    {
        $this->description = 'Yayasan Arrahmah Balikpapan. Pusat Belajar Tahsin Tahfizh Di Kota Balikpapan. Belajar Mengaji Al-Quran Secara Terstruktur.';
        $this->keywords = 'Belajar Ngaji, Tahsin, Tahfizh, Balikpapan';
        $this->sitename = 'Pendidikan Al-quran Kota Balikpapan';
    }
    public function home()
    {
        $page_title = 'Yayasan Arrahmah | Pendidikan Al-quran Kota Balikpapan';
        SEO::title($page_title)
            ->description($this->description)
            ->keywords($this->keywords)
            ->openGraphType('WebPage')
            ->openGraphSiteName($page_title)
            ->openGraphTitle($page_title)
            ->openGraphUrl('arrahmahbalikpapan.or.id')
            ->openGraphImage(asset('/assets/img/logo-arrahmah.png'))
            ;

        return view('website.pages.home');
    }

    public function yayasan()
    {
        $page_title = 'Yayasan Arrahmah Balikpapan';
        SEO::title($page_title)
            ->description($this->description)
            ->keywords($this->keywords)
            ->openGraphType('WebPage')
            ->openGraphSiteName($page_title)
            ->openGraphTitle($page_title)
            ->openGraphUrl('arrahmahbalikpapan.or.id')
            ->openGraphImage(asset('/assets/img/logo-arrahmah.png'))
            ;

        return view('website.pages.yayasan');
    }

    public function lttq()
    {
        $page_title = 'LTTQ Arrahmah Balikpapan';
        SEO::title($page_title)
            ->description($this->description)
            ->keywords($this->keywords)
            ->openGraphType('WebPage')
            ->openGraphSiteName($page_title)
            ->openGraphTitle($page_title)
            ->openGraphUrl('arrahmahbalikpapan.or.id')
            ->openGraphImage(asset('/assets/img/logo-arrahmah.png'))
            ;

        return view('website.pages.lttq.index');
    }

    public function lttq_tahsin()
    {
        return view('website.pages.lttq.tahsin.index');
    }

    public function lttq_tahsin_pendaftaran()
    {
        $page_title = 'LTTQ Arrahmah Balikpapan';
        SEO::title($page_title)
            ->description($this->description)
            ->keywords($this->keywords)
            ->openGraphType('WebPage')
            ->openGraphSiteName($page_title)
            ->openGraphTitle($page_title)
            ->openGraphUrl('arrahmahbalikpapan.or.id')
            ->openGraphImage(asset('/assets/img/logo-arrahmah.png'))
            ;


        // Buat session baru untuk pendaftaran tahsin
        $uuid = Str::uuid();
        session()->put('pendaftaran.tahsin.uuid', $uuid);

        $json = Storage::disk('public')->get('/data/daerah-indonesia.json');
        $dataindo = json_decode($json, true);

        // $chapterNumber = 41;
        // $startAyat = 44;
        // $endAyat = 48;

        // // Request API untuk mendapatkan ayat dari 44 sampai 48
        // $response = Http::get("https://api.quran.com/api/v4/verses/by_chapter/$chapterNumber", [
        //     'language' => 'ar',
        //     'verse_key' => "$chapterNumber:$startAyat-$chapterNumber:$endAyat"
        // ]);

        // $dataayat = $response->json();

        // $ayat = Cache::remember('ayat', 60, function () {
        //     $ayat = [];
        //     for ($i = 44; $i <= 48; $i++) {
        //         $dataayat = Http::get("http://api.alquran.cloud/v1/ayah/41:{$i}/editions/quran-uthmani");
        //         $data = $dataayat->json();
        //         foreach ($data['data'] as $ayat_) {
        //             $ayat[] = $ayat_['text'];
        //         }
        //     }
        //     return $ayat;
        // });
        // dd($ayat);
        $ayat = [
            "وَلَوْ جَعَلْنَٰهُ قُرْءَانًا أَعْجَمِيًّۭا لَّقَالُوا۟ لَوْلَا فُصِّلَتْ ءَايَٰتُهُۥٓ ۖ ءَا۬عْجَمِىٌّۭ وَعَرَبِىٌّۭ ۗ قُلْ هُوَ لِلَّذِينَ ءَامَنُوا۟ هُدًۭى وَشِفَآءٌۭ ۖ وَٱلَّذِينَ لَا يُؤْمِنُونَ فِىٓ ءَاذَانِهِمْ وَقْرٌۭ وَهُوَ عَلَيْهِمْ عَمًى ۚ أُو۟لَٰٓئِكَ يُنَادَوْنَ مِن مَّكَانٍۭ بَعِيدٍۢ",
            "وَلَقَدْ ءَاتَيْنَا مُوسَى ٱلْكِتَٰبَ فَٱخْتُلِفَ فِيهِ ۗ وَلَوْلَا كَلِمَةٌۭ سَبَقَتْ مِن رَّبِّكَ لَقُضِىَ بَيْنَهُمْ ۚ وَإِنَّهُمْ لَفِى شَكٍّۢ مِّنْهُ مُرِيبٍۢ",
            "مَّنْ عَمِلَ صَٰلِحًۭا فَلِنَفْسِهِۦ ۖ وَمَنْ أَسَآءَ فَعَلَيْهَا ۗ وَمَا رَبُّكَ بِظَلَّٰمٍۢ لِّلْعَبِيدِ",
            "۞ إِلَيْهِ يُرَدُّ عِلْمُ ٱلسَّاعَةِ ۚ وَمَا تَخْرُجُ مِن ثَمَرَٰتٍۢ مِّنْ أَكْمَامِهَا وَمَا تَحْمِلُ مِنْ أُنثَىٰ وَلَا تَضَعُ إِلَّا بِعِلْمِهِۦ ۚ وَيَوْمَ يُنَادِيهِمْ أَيْنَ شُرَكَآءِى قَالُوٓا۟ ءَاذَنَّٰكَ مَا مِنَّا مِن شَهِيدٍۢ",
            "وَضَلَّ عَنْهُم مَّا كَانُوا۟ يَدْعُونَ مِن قَبْلُ ۖ وَظَنُّوا۟ مَا لَهُم مِّن مَّحِيصٍۢ"
        ];

        $periode = Periode::where('aktifkan_pendaftaran',1)->first();
        if ($periode) {
            return view('website.pages.lttq.tahsin.pendaftaran', compact('dataindo', 'ayat', 'periode'));
        } else {
            return view('website.pages.lttq.tahsin.pendaftaran-tutup');
        }
    }

    public function lttq_tahsin_pendaftaran_store(PendaftaranTahsinRequest $request)
    {
        $data = $request->validated();

        $periode = Periode::where('aktifkan_pendaftaran',1)->first();
        if ($periode) {

        }
        return view('website.pages.lttq.tahsin');
    }

    public function lttq_tahsin_pendaftaran_store_ktp(Request $request)
    {
        // FIX SETELAH PROSES MELELAHKAN
        $request->validate([
            'ktp' => 'required|image|mimes:jpeg,png,jpg,svg|max:5012', // maksimal 20MB
        ]);

        // Tentukan folder path dengan hierarki tahun/bulan/tanggal
        $year  = now()->format('Y');
        $month = now()->format('m');
        $day   = now()->format('d');
        $folderPath = "$year/$month/$day";

        // Generate nama file unik
        $fileName = session('pendaftaran.tahsin.uuid') . '.' . $request->file('ktp')->getClientOriginalExtension();

        $filePath = $request->file('ktp')->storeAs($folderPath, $fileName, 'public');

        // Simpan file di storage
        try {

            // Kembalikan response sukses
            return response()->json([
                'success' => true,
                'message' => 'Berhasil di-upload.',
                'file_path' => Storage::url($filePath),
            ]);
        } catch (\Exception $e) {

            // Kembalikan response gagal
            return response()->json([
                'success' => false,
                'message' => 'Gagal Upload',
                'error' => $e->getMessage(),
                'path' => $filePath,
            ], 500);
        }
        // return view('website.pages.lttq.tahsin');
    }
    public function lttq_tahsin_pendaftaran_store_rekaman(Request $request)
    {
        // FIX SETELAH PROSES MELELAHKAN
        $request->validate([
            'audio' => 'required|file|max:20480', // maksimal 20MB
        ]);

        // Decode base64 audio data
        $audioData = $request->input('audio');
        $audioData = str_replace('data:audio/wav;base64,', '', $audioData);
        $audioData = base64_decode($audioData);

        // Tentukan folder path dengan hierarki tahun/bulan/tanggal
        $year  = now()->format('Y');
        $month = now()->format('m');
        $day   = now()->format('d');
        $folderPath = "$year/$month/$day";

        // Generate nama file unik
        $fileName = session('pendaftaran.tahsin.uuid') . '.' . $request->file('audio')->getClientOriginalExtension();

        // Simpan file di storage
        try {
            $filePath = $request->file('audio')->storeAs($folderPath, $fileName, 'public');

            Toast::title('Rekaman Berhasil Tersimpan !')
                    ->autoDismiss(15);
            // Kembalikan response sukses
            return response()->json([
                'success' => true,
                'message' => 'Rekaman berhasil di-upload.',
                'file_path' => Storage::url($filePath),
            ]);
        } catch (\Exception $e) {
            Toast::title('Maaf, Terjadi Kesalahan !')
                    ->message('Rekaman Gagal Terupload. Jika terus berulang. Mohon Kirim Rekaman Ke Admin Via Whatsapp.')
                    ->warning()
                    ->autoDismiss(15);
            // Kembalikan response gagal
            return response()->json([
                'success' => false,
                'message' => 'Gagal meng-upload rekaman.',
                'error' => $e->getMessage(),
            ], 500);
        }
        // return view('website.pages.lttq.tahsin');
    }
    public function lttq_tahsin_pendaftaran_store_rekaman_file(Request $request)
    {
        // FIX SETELAH PROSES MELELAHKAN
        $request->validate([
            'audio' => 'required|file|max:20480', // maksimal 20MB
        ]);

        // Decode base64 audio data
        $audioData = $request->input('audio');
        $audioData = str_replace('data:audio/wav;base64,', '', $audioData);
        $audioData = base64_decode($audioData);

        // Tentukan folder path dengan hierarki tahun/bulan/tanggal
        $year  = now()->format('Y');
        $month = now()->format('m');
        $day   = now()->format('d');
        $folderPath = "$year/$month/$day";

        // Generate nama file unik
        $fileName = session('pendaftaran.tahsin.uuid') . '.' . $request->file('audio')->getClientOriginalExtension();

        // Simpan file di storage
        try {
            $filePath = $request->file('audio')->storeAs($folderPath, $fileName, 'public');

            Toast::title('Rekaman Berhasil Tersimpan !')
                    ->autoDismiss(15);
            // Kembalikan response sukses
            return response()->json([
                'success' => true,
                'message' => 'Rekaman berhasil di-upload.',
                'file_path' => Storage::url($filePath),
            ]);
        } catch (\Exception $e) {
            Toast::title('Maaf, Terjadi Kesalahan !')
                    ->message('Rekaman Gagal Terupload. Jika terus berulang. Mohon Kirim Rekaman Ke Admin Via Whatsapp.')
                    ->warning()
                    ->autoDismiss(15);
            // Kembalikan response gagal
            return response()->json([
                'success' => false,
                'message' => 'Gagal meng-upload rekaman.',
                'error' => $e->getMessage(),
            ], 500);
        }
        // return view('website.pages.lttq.tahsin');
    }
    public function lttq_rq()
    {
        return view('website.pages.lttq.rq');
    }

    public function lttq_tla()
    {
        return view('website.pages.lttq.tla');
    }

    public function lttq_rtq_putra()
    {
        return view('website.pages.lttq.rtq-putra');
    }

    public function lttq_rtq_putri()
    {
        return view('website.pages.lttq.rtq-putri');
    }

    public function kontak()
    {
        $page_title = 'Kontak Yayasan Arrahmah';
        SEO::title($page_title)
            ->description($this->description)
            ->keywords($this->keywords)
            ->openGraphType('WebPage')
            ->openGraphSiteName($page_title)
            ->openGraphTitle($page_title)
            ->openGraphUrl('arrahmahbalikpapan.or.id')
            ->openGraphImage(asset('/assets/img/logo-arrahmah.png'))
            ;

        return view('website.pages.kontak');
    }

    public function informasi()
    {
        $page_title = 'Informasi Yayasan Arrahmah';
        SEO::title($page_title)
            ->description($this->description)
            ->keywords($this->keywords)
            ->openGraphType('WebPage')
            ->openGraphSiteName($page_title)
            ->openGraphTitle($page_title)
            ->openGraphUrl('arrahmahbalikpapan.or.id')
            ->openGraphImage(asset('/assets/img/logo-arrahmah.png'))
            ;

        return view('website.pages.informasi.index');
    }

    public function informasi_slug($slug)
    {
        $page_title = 'Informasi Yayasan Arrahmah';
        SEO::title($page_title)
            ->description($this->description)
            ->keywords($this->keywords)
            ->openGraphType('WebPage')
            ->openGraphSiteName($page_title)
            ->openGraphTitle($page_title)
            ->openGraphUrl('arrahmahbalikpapan.or.id')
            ->openGraphImage(asset('/assets/img/logo-arrahmah.png'))
            ;

        return view('website.pages.informasi.konten');
    }

    public function informasi_tag_slug($slug)
    {
        $page_title = $slug;
        SEO::title($page_title)
            ->description($this->description)
            ->keywords($this->keywords)
            ->openGraphType('WebPage')
            ->openGraphSiteName($page_title)
            ->openGraphTitle($page_title)
            ->openGraphUrl('arrahmahbalikpapan.or.id')
            ->openGraphImage(asset('/assets/img/logo-arrahmah.png'))
            ;

        return view('website.pages.informasi.tag');
    }
}
