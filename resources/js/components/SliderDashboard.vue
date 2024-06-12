<template>
    <swiper
      :slidesPerView="'auto'"
      :spaceBetween="30"
      :pagination="{
        clickable: true,
      }"
      :navigation="true"
      :modules="modules"
      class="mySwiper"
    >
      <swiper-slide class="bg-white py-24 rounded-xl">Slide 1</swiper-slide>
      <swiper-slide class="bg-white py-24 rounded-xl">Slide 2</swiper-slide><swiper-slide class="bg-white py-24 rounded-xl">Slide 3</swiper-slide>
      <swiper-slide class="bg-white py-24 rounded-xl">Slide 4</swiper-slide><swiper-slide class="bg-white py-24 rounded-xl">Slide 5</swiper-slide>
      <swiper-slide class="bg-white py-24 rounded-xl">Slide 6</swiper-slide><swiper-slide class="bg-white py-24 rounded-xl">Slide 7</swiper-slide>
      <swiper-slide class="bg-white py-24 rounded-xl">Slide 8</swiper-slide><swiper-slide class="bg-white py-24 rounded-xl">Slide 9</swiper-slide>
    </swiper>
  </template>
  <script>
    // Import Swiper Vue.js components
    import { Swiper, SwiperSlide } from 'swiper/vue';

    // Import Swiper styles
    import 'swiper/css';

    import 'swiper/css/navigation';
import 'swiper/css/pagination';


    // import required modules
    import { Navigation, Pagination } from 'swiper/modules';

    export default {
      components: {
        Swiper,
        SwiperSlide,
      },
      setup() {
        return {
          modules: [Pagination, Navigation],
        };
      },
    };
  </script>

<style>
.swiper {
  width: 100%;
  height: 100%;
}
.swiper-button-prev:after, .swiper-button-next:after {
   --swiper-navigation-size: 15px;
 }
</style>
