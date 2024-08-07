<template>
    <div class="max-w-lg mx-auto bg-white p-4 rounded shadow">
        <h1 class="text-lg font-medium mb-4">Rekaman Tilawah Quran Surah Fussilat Ayat 44-48</h1>
        <div v-if="!isUploadSuccessful" class="mb-6 text-center">
            <a v-if="!isRecording" href="#" @click.prevent="startRecording" class="text-red-700 border border-red-700 px-4 py-4 font-semibold rounded-full hover:bg-red-700 hover:text-white cursor-pointer">
                REKAM <i class="fas fa-microphone"></i>
            </a>
            <a v-if="isRecording" href="#" @click.prevent="stopRecording" class="bg-red-500 text-white px-4 py-4 rounded-full hover:bg-red-600 cursor-pointer">STOP</a>
        </div>
        <div v-else class="text-center mb-4">
            <i class="fas fa-check-circle text-green-500 text-4xl"></i>
            <p class="text-green-500 text-xl mt-2">Rekaman Berhasil</p>
        </div>
        <div v-if="isRecording" class="text-center mb-4">
            <i class="fas fa-microphone recording text-4xl"></i>
        </div>
        <div v-if="!beforeRecording">
            <audio v-if="!isUploadSuccessful && !isRecording" ref="audioPlayback" controls class="w-full mb-4"></audio>
            <form v-if="!isUploadSuccessful && !isRecording" @submit.prevent="uploadAudio" class="flex flex-col">
                <input type="hidden" v-model="audioData">
                <a href="#" @click.prevent="uploadAudio" class="border border-green-500 text-green-500 px-4 py-2 rounded-xl hover:bg-green-600 hover:text-white cursor-pointer flex justify-between">
                    <span>Rekaman Selesai</span> <i class="fas fa-upload pt-1"></i>
                </a>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            beforeRecording: true,
            isRecording: false,
            isUploadSuccessful: false,
            mediaRecorder: null,
            audioChunks: [],
            audioData: '',
        };
    },
    methods: {
        async startRecording() {
            const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
            this.mediaRecorder = new MediaRecorder(stream);

            this.mediaRecorder.ondataavailable = (event) => {
                this.audioChunks.push(event.data);
            };

            this.mediaRecorder.onstop = async () => {
                const audioBlob = new Blob(this.audioChunks, { type: 'audio/wav' });
                const audioUrl = URL.createObjectURL(audioBlob);
                this.$refs.audioPlayback.src = audioUrl;

                const arrayBuffer = await audioBlob.arrayBuffer();
                const audioContext = new (window.AudioContext || window.webkitAudioContext)();
                const audioBuffer = await audioContext.decodeAudioData(arrayBuffer);

                const reader = new FileReader();
                reader.readAsDataURL(audioBlob);
                reader.onloadend = () => {
                    this.audioData = reader.result;
                };
                this.audioChunks = [];
            };

            this.mediaRecorder.start();
            this.isRecording = true;
        },
        stopRecording() {
            this.mediaRecorder.stop();
            this.isRecording = false;
            this.beforeRecording = false;
        },
        async uploadAudio() {
            try {
                const response = await axios.post('/upload-audio', {
                    audio: this.audioData,
                });
                console.log(response.data);
                this.isUploadSuccessful = true;
                this.isRecording = false;
            } catch (error) {
                console.error('Error uploading audio:', error);
            }
        },
    },
};
</script>

<style scoped>
.recording {
    animation: blink 1s infinite;
}

@keyframes blink {
    0% { opacity: 1; }
    50% { opacity: 0.5; }
    100% { opacity: 1; }
}
</style>
