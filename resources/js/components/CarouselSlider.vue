<template>
    <div class="carousel rounded-lg relative h-56 overflow-hidden md:h-96">
      <div class="carousel-inner" :style="{ transform: `translateX(-${currentIndex * 100}%)` }">
        <div class="carousel-item" v-for="(slide, index) in slides" :key="index">
          <a :href="slide.link">
            <img :src="slide.url" :alt="'Slide ' + (index + 1)" class="rounded-lg w-full" />
          </a>
        </div>
        <div class="carousel-indicators absolute inset-x-0 bottom-0 z-10">
          <span v-for="(slide, index) in slides" :key="index" :class="{ 'active': currentIndex === index }"></span>
        </div>
      </div>
      <button class="carousel-control-prev" @click="prevSlide">
        <span class="bg-black bg-opacity-20 rounded-full pb-2 pr-1 w-10 h-10 flex items-center justify-center">‹</span>
      </button>
      <button class="carousel-control-next" @click="nextSlide">
        <span class="bg-black bg-opacity-20 rounded-full pb-2 pl-1 w-10 h-10 flex items-center justify-center">›</span>
      </button>
    </div>
  </template>

  <script>
  export default {
    name: 'CarouselSlider',
    props: {
      initialSlides: {
        type: Array,
        required: true
      }
    },
    data() {
      return {
        slides: this.initialSlides,
        currentIndex: 0,
        autoplayInterval: null
      }
    },
    mounted() {
      this.autoplayInterval = setInterval(this.nextSlide, 5000)
    },
    beforeDestroy() {
      clearInterval(this.autoplayInterval)
    },
    methods: {
      prevSlide() {
        this.currentIndex = (this.currentIndex - 1 + this.slides.length) % this.slides.length;
      },
      nextSlide() {
        this.currentIndex = (this.currentIndex + 1) % this.slides.length;
      }
    }
  }
  </script>

  <style scoped>
  .carousel {
    position: relative;
    width: 100%;
    overflow: hidden;
  }

  .carousel-inner {
    display: flex;
    transition: transform 0.5s ease;
  }

  .carousel-item {
    min-width: 100%;
    box-sizing: border-box;
  }

  .carousel-indicators {
    position: absolute;
    bottom: 1rem;
    left: 50%;
    transform: translateX(-50%);
  }

  .carousel-indicators span {
    width: 0.5rem;
    height: 0.5rem;
    background-color: #d1d1d1;
    border-radius: 50%;
    margin: 0 0.25rem;
    cursor: pointer;
  }

  .carousel-indicators .active {
    background-color: #000;
  }

  .carousel-control-prev,
  .carousel-control-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    color: white;
    border: none;
    font-size: 2rem;
    padding: 1rem;
    cursor: pointer;
    z-index: 1;
  }

  .carousel-control-prev span,
  .carousel-control-next span {
    width: 2rem;
    height: 2rem;
    line-height: 2rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .carousel-control-prev {
    left: 0.5rem;
  }

  .carousel-control-next {
    right: 0.5rem;
  }
  </style>

