<template>
  <div>
    <file-pond
      ref="pond"
      name="buktitransfer"
      label-idle="<span class='filepond--label-action'> Klik untuk upload file Bukti Transfer</span>"
      allow-multiple="false"
      :server="{
        url: uploadUrl,
        process: {
            headers: {
            'X-CSRF-TOKEN': csrfToken
            }
        }
      }"
      image-resize-target-width="700"
      image-resize-mode="cover"
      @init="handleFilePondInit"
      @processfile="handleFileUpload"
    />
  </div>
</template>

<script>
import FilePondPluginFileEncode from "filepond-plugin-file-encode";
import FilePondPluginImagePreview from "filepond-plugin-image-preview";
import FilePondPluginImageResize from 'filepond-plugin-image-resize';
import "filepond/dist/filepond.min.css";
import vueFilePond from "vue-filepond";

const FilePond = vueFilePond(
  FilePondPluginFileEncode,
  FilePondPluginImagePreview,
  FilePondPluginImageResize
);

export default {
  props: {
    uploadUrl: {
      type: String,
      required: true
    }
  },
  components: {
    FilePond
  },
  data() {
    return {
      csrfToken: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    }
  },
  methods: {
    handleFilePondInit() {
      console.log("FilePond has initialized");
    },
    handleFileUpload(error, file) {
      if (error) {
        console.error("Error during file upload:", error);
      } else {
        console.log("File uploaded successfully:", file.serverId);
      }
    }
  }
};
</script>

<style>
@import "filepond/dist/filepond.min.css";

.filepond--media-preview-wrapper {
  position: absolute;
}

.filepond--media-preview {
    padding-top: 30px;
  }
</style>
