<?php
session_start();
if (!isset($_SESSION['nama'])) {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>For My Lovely Girl</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="muti.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />



</head>

<body class="bg-gradient-to-b from-pink-100 to-white font-poppins overflow-x-hidden">

    <nav class="bg-pink-100 shadow-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-pink-600 rounded-lg md:hidden hover:bg-pink-200 focus:outline-none focus:ring-2 focus:ring-pink-300"
                aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col md:flex-row md:space-x-8 p-4 md:p-0 text-lg font-medium">
                    <li><a href="../login.php"
                            class="block py-2 px-3 text-pink-700 hover:text-white hover:bg-pink-500 rounded transition">LogOut</a>
                    </li>
                    <li><a href="photobooth.php"
                            class="block py-2 px-3 text-pink-700 hover:text-white hover:bg-pink-500 rounded transition">PhotoBooth</a>
                    </li>
                    <li><a href="#"
                            class="block py-2 px-3 text-pink-700 hover:text-white hover:bg-pink-500 rounded transition"
                            onclick="openModal()">Messages</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" style="text-align: center; padding: 80px 20px;">
        <h1 style="font-size: 2.5rem; color: #be185d;">
            <!-- Hai, Cantik Ku -->
        </h1>
        <p style="font-size: 1.2rem; max-width: 700px; margin: 20px auto; color: #444;">

        </p>
        <p style="font-size: 1.2rem; max-width: 700px; margin: 20px auto; color: #444;">
            <!-- Dari semua hal indah yang pernah aku lihat di dunia ini, senyummu tetap jadi pemandangan favoritku. Kamu
            bukan hanya cantik di luar, tapi juga luar biasa di dalam. Terima kasih sudah hadir dan membuat hariku
            selalu terasa lebih berarti. Semoga halaman kecil ini bisa mengingatkanmu betapa kamu begitu spesial buatku. -->
        </p>
        <p style="font-size: 1.2rem; max-width: 700px; margin: 20px auto; color: #444;">

        </p>
        <p style="font-size: 1.2rem; max-width: 700px; margin: 20px auto; color: #444;">

        </p>



        <audio autoplay loop>
            <source src="../musik/musik.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>


        <section id="gallery" class="mt-10">
            <div class="container mx-auto py-10 text-center relative z-10">
                <!-- <h2 class="text-xl font-semibold text-pink-500 mb-4">Manusia Favorit ku</h2> -->
                <div class="flex flex-wrap justify-center gap-6">

                    <!-- Gambar -->
                    <div class="flex justify-center items-center gap-6 flex-wrap">
                        <figure
                            class="animate__animated animate__fadeIn animate__delay-1s w-64 h-64 shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                            <img class="w-full h-full object-cover" src="foto/muti6.jpg" alt="muti2">
                            <figcaption class="mt-2 text-sm text-center text-gray-500">Our Fun Moment</figcaption>
                        </figure>

                        <figure
                            class="animate__animated animate__fadeIn animate__delay-2s w-64 h-64 shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                            <img class="w-full h-full object-cover" src="foto/muti1.jpg" alt="muti3">
                            <figcaption class="mt-2 text-sm text-center text-gray-500">Always Together</figcaption>
                        </figure>

                        <figure
                            class="animate__animated animate__fadeIn animate__delay-3s w-64 h-64 shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                            <img class="w-full h-full object-cover" src="foto/muti7.jpg" alt="muti">
                            <figcaption class="mt-2 text-sm text-center text-gray-500">Always Together</figcaption>
                        </figure>

                        <figure
                            class="animate__animated animate__fadeIn animate__delay-3s w-64 h-64 shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                            <img class="w-full h-full object-cover" src="foto/muti9.jpg" alt="muti">
                            <figcaption class="mt-2 text-sm text-center text-gray-500">Always Together</figcaption>
                        </figure>
                    </div>

                    <!-- Video -->
                    <div class="flex justify-center items-center gap-6 flex-wrap mt-6">
                        <figure
                            class="animate__animated animate__fadeIn animate__delay-4s w-64 h-64 shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                            <video class="w-full h-full object-cover" controls autoplay loop>
                                <source src="muti3.mp4" type="video/mp4">
                            </video>
                        </figure>

                        <figure
                            class="animate__animated animate__fadeIn animate__delay-5s w-64 h-64 shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                            <video class="w-full h-full object-cover" controls autoplay loop>
                                <source src="mutia.mp4" type="video/mp4">
                            </video>
                        </figure>
                    </div>
                    <br>
                    <div class="flex justify-center items-center gap-6 flex-wrap mt-6">
                        <figure
                            class="animate__animated animate__fadeIn animate__delay-4s w-64 h-64 shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                            <video class="w-full h-full object-cover" controls autoplay loop>
                                <source src="muti1.mp4" type="video/mp4">
                            </video>
                        </figure>

                        <figure
                            class="animate__animated animate__fadeIn animate__delay-5s w-64 h-64 shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition duration-300">
                            <video class="w-full h-full object-cover" controls autoplay loop>
                                <source src="" type="video/mp4">
                            </video>
                        </figure>
                    </div>
                </div>




                <p class="text-gray-600 mb-10">A little gallery of our memories together.</p>

                <section id="gallery" class="mt-10"></section>

                <!-- Tombol -->

                <br />

            </div>
            </div>
        </section>

        <!-- Modal Popup -->
        <div id="loveModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2 class="text-xl font-semibold text-pink-500 mb-2">Cie buka pesan</h2>
                <p class="text-gray-700 text-base leading-relaxed">
                    <!-- Aku bikin halaman kecil ini buat kamu, maaf ga terlalu wah ya, tapi semuanya dari hati niel, ini aja
                    ga tidur tadi wlee<br><br>
                    Makasih ya udah selalu ada, dengan senyum kamu yang selalu bikin tenang, tawa kamu yang selalu buat
                    hari jadi lebih seru, dan cara kamu care ke aku yang selalu buat aku sayang ke kamu. <br><br>
                    Aku bersyukur banget bisa kenal dan deket sama kamu, semoga kita terus sama sama ya??, ini website
                    aku buat untuk nyimpan momen momen kita berdua nantinya hehehe<br><br> -->

                </p>

            </div>
        </div>

        <!-- Modal Gallery -->
        <div id="galleryModal" class="modall">
            <div class="modall-content overflow-y-auto max-h-screen p-6">
                <span class="close" onclick="closeGalleryModal()">&times;</span>





                <!-- Animasi Hati -->
                <div class="heart-container">
                    <div class="heart">💖</div>
                    <div class="heart">💖</div>
                    <div class="heart">💖</div>
                    <div class="heart">💖</div>
                    <div class="heart">💖</div>
                    <div class="heart">💖</div>
                    <div class="heart">💖</div>
                    <div class="heart">💖</div>
                    <div class="heart">💖</div>
                    <div class="heart">💖</div>
                    <div class="heart">💖</div>
                </div>

                <script>
                function openModal() {
                    document.getElementById("loveModal").style.display = "block";
                }

                function closeModal() {
                    document.getElementById("loveModal").style.display = "none";
                }
                window.onclick = function(event) {
                    const modal = document.getElementById("loveModal");
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
                </script>

                <script>
                function openModal() {
                    document.getElementById("loveModal").style.display = "block";
                }

                function closeModal() {
                    document.getElementById("loveModal").style.display = "none";
                }

                function openGalleryModal() {
                    document.getElementById("galleryModal").style.display = "block";
                }

                function closeGalleryModal() {
                    document.getElementById("galleryModal").style.display = "none";
                }

                window.onclick = function(event) {
                    const loveModal = document.getElementById("loveModal");
                    const galleryModal = document.getElementById("galleryModal");
                    if (event.target == loveModal) loveModal.style.display = "none";
                    if (event.target == galleryModal) galleryModal.style.display = "none";
                }
                </script>


                <script src="animate.js"></script>



</body>

</html>