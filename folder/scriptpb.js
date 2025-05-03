const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const frameCanvas = document.getElementById('frameCanvas');
const captureBtn = document.getElementById('captureBtn');
const autoBtn = document.getElementById('autoBtn');
const downloadBtn = document.getElementById('downloadBtn');
const resetBtn = document.getElementById('resetBtn');
const settingsPanel = document.getElementById('settingsPanel');
const capturesContainer = document.getElementById('captures');
const photoTypeSelect = document.getElementById('photoType');
const bgColorSelect = document.getElementById('bgColor');
const context = canvas.getContext('2d');
const frameContext = frameCanvas.getContext('2d');
let autoCaptureInterval;
let captureCount = 0;
let capturedImages = [];
let currentBgColor = '#d8bfd8'; // Ungu muda default
let currentPhotoType = 'photobooth';

// Mulai kamera
navigator.mediaDevices.getUserMedia({ video: true })
  .then(stream => {
    video.srcObject = stream;
    document.body.style.backgroundColor = currentBgColor;
  })
  .catch(err => {
    alert("Kamera tidak dapat diakses: " + err);
  });

// Perbarui warna background
bgColorSelect.addEventListener('change', () => {
  currentBgColor = bgColorSelect.value;
  document.body.style.backgroundColor = currentBgColor;
});

// Perbarui tipe foto dan render ulang gambar
photoTypeSelect.addEventListener('change', () => {
  currentPhotoType = photoTypeSelect.value;
  updateStrip();
});

// Tambahkan frame strip
function addFrame(imageData) {
  const frameWidth = video.videoWidth + 20;
  const frameHeight = video.videoHeight + 20;
  frameCanvas.width = frameWidth;
  frameCanvas.height = frameHeight;

  // Border tebal putih
  frameContext.fillStyle = '#fff';
  frameContext.fillRect(0, 0, frameWidth, frameHeight);
  frameContext.fillStyle = '#000';
  frameContext.fillRect(10, 10, frameWidth - 20, frameHeight - 20);

  // Area foto
  frameContext.drawImage(imageData, 10, 10, video.videoWidth, video.videoHeight);

  // Tambahkan efek strip jika filmstrip dipilih
  if (currentPhotoType === 'filmstrip') {
    frameContext.fillStyle = '#fff';
    frameContext.fillRect(0, frameHeight / 2 - 5, frameWidth, 10);
  }

  return frameCanvas.toDataURL('image/png');
}

// Ambil gambar
function captureImage() {
  if (captureCount >= 4) return;
  canvas.width = video.videoWidth;
  canvas.height = video.videoHeight;
  context.drawImage(video, 0, 0, canvas.width, canvas.height);

  const imgCanvas = document.createElement('canvas');
  imgCanvas.width = video.videoWidth;
  imgCanvas.height = video.videoHeight;
  imgCanvas.getContext('2d').drawImage(canvas, 0, 0);

  const framedImage = addFrame(imgCanvas);
  const img = document.createElement('img');
  img.src = framedImage;
  capturesContainer.appendChild(img);
  capturedImages.push(imgCanvas);
  captureCount++;
  updateCounter();

  // Tampilkan panel settings dan aktifkan tombol download saat semua gambar diambil
  if (captureCount === 4) {
    settingsPanel.style.display = 'block';
    downloadBtn.disabled = false;
  }
}

function updateCounter() {
  document.querySelector('.preview h3').textContent = `Captured Images (${captureCount}/4)`;
}

// Perbarui tampilan strip berdasarkan tipe frame
function updateStrip() {
  capturesContainer.innerHTML = '';
  capturedImages.forEach(imgCanvas => {
    const framedImage = addFrame(imgCanvas);
    const img = document.createElement('img');
    img.src = framedImage;
    capturesContainer.appendChild(img);
  });
}

// Reset semua gambar
function resetImages() {
  capturesContainer.innerHTML = '';
  capturedImages = [];
  captureCount = 0;
  updateCounter();
  downloadBtn.disabled = true;
  settingsPanel.style.display = 'none';
  if (autoCaptureInterval) {
    clearInterval(autoCaptureInterval);
    autoCaptureInterval = null;
    autoBtn.textContent = '⏱️ Auto Capture';
  }
}

// Event manual capture
captureBtn.addEventListener('click', captureImage);

// Auto capture
autoBtn.addEventListener('click', () => {
  if (autoCaptureInterval) {
    clearInterval(autoCaptureInterval);
    autoCaptureInterval = null;
    autoBtn.textContent = '⏱️ Auto Capture';
  } else {
    autoCaptureInterval = setInterval(() => {
      captureImage();
      if (captureCount >= 4) {
        clearInterval(autoCaptureInterval);
        autoBtn.textContent = '⏱️ Auto Capture';
      }
    }, 2000);
    autoBtn.textContent = '🛑 Stop Auto';
  }
});

// Download strip
downloadBtn.addEventListener('click', () => {
  const stripCanvas = document.createElement('canvas');
  const ctx = stripCanvas.getContext('2d');
  const imgWidth = video.videoWidth + 20;
  const imgHeight = video.videoHeight + 20;

  stripCanvas.width = imgWidth;
  stripCanvas.height = imgHeight * 4;

  const images = capturedImages.map(imgCanvas => {
    const framedImage = addFrame(imgCanvas);
    const img = new Image();
    img.src = framedImage;
    return img;
  });

  let loadedImages = 0;
  images.forEach((img, index) => {
    img.onload = () => {
      loadedImages++;
      if (loadedImages === 4) {
        for (let i = 0; i < 4; i++) {
          ctx.drawImage(images[i], 0, i * imgHeight);
        }

        const link = document.createElement('a');
        link.download = 'photobooth_strip.png';
        link.href = stripCanvas.toDataURL('image/png');
        link.click();
      }
    };
  });
});

// Event reset
resetBtn.addEventListener('click', resetImages);