import "@protonemedia/laravel-splade/dist/jodit.css";
import "@protonemedia/laravel-splade/dist/style.css";
import 'flowbite';
import "../css/app.css";
import "./bootstrap";

import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";
import { createApp } from "vue/dist/vue.esm-bundler.js";
import AudioUpload from "./components/AudioUpload.vue";
import BuktiTransferUpload from "./components/BuktiTransferUpload.vue";
import CarouselSlider from "./components/CarouselSlider.vue";
import KtpUpload from "./components/KtpUpload.vue";
import ListBiayaPendaftaran from "./components/ListBiayaPendaftaran.vue";
import Photo from "./components/Photo.vue";
import RecordVoice from "./components/RecordVoice.vue";
import SendOTP from "./components/SendOTP.vue";
import SliderDashboard from "./components/SliderDashboard.vue";

const el = document.getElementById("app");

createApp({
    render: renderSpladeApp({ el })
})
    .use(SpladePlugin, {
        "max_keep_alive": 10,
        "transform_anchors": false,
        "progress_bar": true,
        'suppress_compile_errors': true,
        "components": {
            SendOTP,
            Photo,
            SliderDashboard,
            CarouselSlider,
            RecordVoice,
            AudioUpload,
            KtpUpload,
            BuktiTransferUpload,
            ListBiayaPendaftaran
        },
    })

    .mount(el);
