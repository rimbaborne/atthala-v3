<template>
    <div>
      <div v-for="(photo, index) in photos" :key="index" @click="enlargePhoto(index)">
        <img :src="photo.thumbnail" alt="Thumbnail" />
      </div>

      <div v-if="enlargedPhoto !== null" class="enlarged-photo-overlay" @click="closeEnlargedPhoto">
        <div class="enlarged-photo-container">
          <img :src="photos[enlargedPhoto].fullSize" alt="Enlarged Photo" />
        </div>
      </div>
    </div>
  </template>

  <script>
  export default {
    props: ['photos'],
    data() {
      return {
        enlargedPhoto: null,
      };
    },
    methods: {
      enlargePhoto(index) {
        this.enlargedPhoto = index;
      },
      closeEnlargedPhoto() {
        this.enlargedPhoto = null;
      },
    },
  };
  </script>

  <style scoped>
  /* Add your styling for thumbnails and enlarged photo overlay here */
  </style>
