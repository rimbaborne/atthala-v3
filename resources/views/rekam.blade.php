<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Record Voice</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    .recording {
      animation: blink 1s infinite;
    }

    @keyframes blink {
      0% { opacity: 1; }
      50% { opacity: 0.5; }
      100% { opacity: 1; }
    }
  </style>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-lg mx-auto bg-white p-4 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Record Voice</h1>
    <div class="mb-4 text-center">
      <a href="#" id="startRecord" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 cursor-pointer">Record</a>
      <a href="#" id="stopRecord" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 cursor-pointer hidden">Stop</a>
    </div>
    <div class="text-center mb-4">
      <i id="micIcon" class="fas fa-microphone text-4xl"></i>
    </div>
    <audio id="audioPlayback" controls class="w-full mb-4 hidden"></audio>
    <form id="uploadForm" class="flex flex-col hidden">
      <input type="hidden" id="audioData">
      <a href="#" id="uploadAudio" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 cursor-pointer">Upload</a>
    </form>
    <div id="successMessage" class="text-center mb-4 hidden">
      <i class="fas fa-check-circle text-green-500 text-4xl"></i>
      <p class="text-green-500 text-xl mt-2">Success!</p>
    </div>
  </div>
  <script src="/js/recorder.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script>
    let recorder;
    let audioBlob;

    document.getElementById('startRecord').addEventListener('click', function (e) {
      e.preventDefault();
      startRecording();
    });

    document.getElementById('stopRecord').addEventListener('click', function (e) {
      e.preventDefault();
      stopRecording();
    });

    document.getElementById('uploadAudio').addEventListener('click', function (e) {
      e.preventDefault();
      uploadAudio();
    });

    async function startRecording() {
      const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
      const audioContext = new (window.AudioContext || window.webkitAudioContext)();
      const input = audioContext.createMediaStreamSource(stream);
      recorder = new Recorder(input);

      recorder.record();
      document.getElementById('startRecord').classList.add('hidden');
      document.getElementById('stopRecord').classList.remove('hidden');
      document.getElementById('micIcon').classList.add('recording');
    }

    function stopRecording() {
      recorder.stop();
      recorder.exportWAV(function (blob) {
        audioBlob = blob;
        const url = URL.createObjectURL(blob);
        document.getElementById('audioPlayback').src = url;
        document.getElementById('audioPlayback').classList.remove('hidden');
        document.getElementById('uploadForm').classList.remove('hidden');
      });

      document.getElementById('startRecord').textContent = 'Record Again';
      document.getElementById('startRecord').classList.remove('hidden');
      document.getElementById('stopRecord').classList.add('hidden');
      document.getElementById('micIcon').classList.remove('recording');
    }

    async function uploadAudio() {
      const formData = new FormData();
      formData.append('audio', audioBlob, 'recording.wav');

      try {
        const response = await axios.post('/upload-audio', formData, {
          headers: {
            'Content-Type': 'multipart/form-data'
          }
        });
        console.log(response.data);
        document.getElementById('successMessage').classList.remove('hidden');
        document.querySelector('.max-w-lg').classList.add('hidden');
      } catch (error) {
        console.error('Error uploading audio:', error);
      }
    }
  </script>
</body>
</html>
