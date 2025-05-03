<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>For My Lovely Girl</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="photobooth.css">


</head>

<body>

    <div class="container">
        <div class="camera-area">
            <video id="video" autoplay playsinline></video>
            <canvas id="canvas" hidden></canvas>
            <canvas id="frameCanvas" hidden></canvas>
        </div>

        <div class="controls">
            <button id="captureBtn"> Capture Image</button>
            <button id="autoBtn"> Auto Capture</button>
            <button id="downloadBtn" disabled> Download Strip</button>
            <button id="resetBtn">Reset</button>
            <br>
            <a href="muti.php" class="back">Back</a>
        </div>

        <div class="settings" id="settingsPanel" style="display: none;">
            <h3>Settings</h3>
            <label>Select photo type:</label>
            <select id="photoType">
                <option value="photobooth">Photobooth</option>
                <option value="filmstrip">Film Strip</option>
            </select>
            <br>
            <label>Select background color:</label>
            <select id="bgColor">
                <option value="#ffe4e1">Misty Rose</option>
                <option value="#e6e6fa">Lavender</option>
                <option value="#f0f8ff">White Smoke</option>
                <option value="#fffacd">Light Goldenrod</option>
            </select>
        </div>

        <div class="preview">
            <h3>Captured Images (0/4)</h3>
        </div>
    </div>

    <div class="resultCaptures">
        <div id="captures"></div>
    </div>

    <script src="scriptpb.js"></script>
</body>

</html>