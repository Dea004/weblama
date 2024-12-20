<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coffee Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="/css/app.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <style>
        body {
            background-color: #fff8f0; 
        }
    </style>
</head>
<body class="bg-[#FFF8F0] font-sans text-gray-800 p-6 flex items-center justify-center min-h-screen">
<div class="w-full max-w-3xl mx-auto">
        <!-- Carousel Section -->
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <div class="relative w-full h-96 overflow-hidden rounded-lg">
                <div class="duration-700 ease-in-out" data-carousel-item="active">
                    <img src="/img/Etu/Etu1.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/Etu/Etu2.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/Etu/Etu3.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/Etu/Etu4.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/Etu/Etu5.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/Etu/Etu6.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="duration-700 ease-in-out" data-carousel-item="active">
                    <img src="/img/Etu/Etu7.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/Etu/Etu8.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/Etu/Etu9.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/Etu/Etu10.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/Etu/Etu11.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>

            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <div class="container mx-auto mt-8 px-4">
            <!-- Flex container untuk menyusun elemen dalam satu baris -->
            <div class="flex gap-6">
                <!-- Jam Operasional -->
                <div class="bg-white p-6 shadow-md rounded-md w-1/3">
                    <h3 class="text-xl font-semibold mb-4"><i class="fas fa-clock"></i> Jam Operasional</h3>
                    <p><strong>Setiap Hari:</strong> 07.30 - 22.00 WITA</p>
                    <p id="pesanOperasional" class="text-sm mt-2"></p>
                </div>

                <!-- Fasilitas (di tengah) -->
                <div class="bg-white p-6 shadow-md rounded-md w-1/3">
                    <h3 class="text-xl font-semibold mb-4"><i class="fas fa-globe"></i> Fasilitas</h3>
                    <ul>
                        <li class="flex items-center"><i class="fas fa-wifi mr-2"></i> WiFi Gratis</li>
                        <li class="flex items-center"><i class="fas fa-toilet mr-2"></i> Toilet yang Nyaman</li>
                        <li class="flex items-center"><i class="fas fa-parking mr-2"></i> Parkir Luas</li>
                        <li class="flex items-center"><i class="fa-solid fa-calendar-days"></i>Bisa Reservasi</li>
                        <li class="flex items-center"><i class="fa-solid fa-bench-tree"></i>Tempat duduk area terbuka</li>
                    </ul>
                </div>

                <!-- Menu -->
                <div class="bg-white p-6 shadow-md rounded-md w-1/3">
                    <h3 class="text-xl font-semibold mb-4"><i class="fas fa-mug-hot"></i> Menu</h3>
                    <p>Nikmati Hidangan Mulai dari <strong>Rp25.000</strong></p>
                </div>
            </div>
        </div>

        <!-- Peta -->
        <div class="mb-4 w-full">
            <h3><i class="fas fa-map-marker-alt"></i> Peta Lokasi</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1808908089974!2d115.20700339999998!3d-8.674341199999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
                1!3m3!1m2!1s0x2dd241a66e15e2cf%3A0x6a2f547007b61a89!2sEtu%20Coffee!5e0!3m2!1sid!2sid!4v1732679712799!5m2!1sid!2sid" 
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


        <div class="mb-4">
            <h3 class="text-xl font-semibold mb-2"><i class="fas fa-star"></i> Beri Rating</h3>
            <div class="flex space-x-1 star-rating">
                <span class="star" data-value="1"><i class="fas fa-star"></i></span>
                <span class="star" data-value="2"><i class="fas fa-star"></i></span>
                <span class="star" data-value="3"><i class="fas fa-star"></i></span>
                <span class="star" data-value="4"><i class="fas fa-star"></i></span>
                <span class="star" data-value="5"><i class="fas fa-star"></i></span>
            </div>
            <button type="button" class="mt-2 px-4 py-2 bg-blue-500 text-white font-semibold rounded-md" onclick="submitRating()">Submit Rating</button>
            <p id="currentRating" class="mt-3 text-gray-600"></p>
        </div>

        <!-- Reviews Section -->
        <div class="mt-10">
        <h3 class="text-xl font-semibold mb-4"><i class="fas fa-pen"></i> Ulasan</h3>
        <!-- Example Review -->
        <div class="flex items-start mb-4">
            <img src="/img/logo1.png" alt="User 1" class="w-12 h-12 rounded-full mr-4">
            <div>
            <p><strong>Budi:</strong> "Tempatnya nyaman dan kopinya enak!"</p>
            </div>
        </div>
        </div>

        <!-- Button Section -->
        <div class="flex justify-between items-center mt-10">
        <button id="favorite-btn" class="bg-green-500 text-white px-4 py-2 rounded" onclick="addToFavorites()">Tambah ke Favorite</button>
        <a href="booking_form.html?nama=Jayagiri%20Coffee" class="bg-blue-500 text-white px-4 py-2 rounded">Booking Now</a>
        <button class="bg-gray-500 text-white px-4 py-2 rounded" onclick="history.back()">Previous</button>
        </div>
    </div>

    <script>
    let totalRatings = 0;
    let numberOfRatings = 0;
    let ratingValue;

    // Load previous ratings from localStorage
    function loadRatings() {
        const averageRating = localStorage.getItem('averageRating');
        const count = localStorage.getItem('numberOfRatings');

        if (averageRating && count) {
        // Mengembalikan totalRatings dari averageRating dan count
        numberOfRatings = parseInt(count);
        totalRatings = parseFloat(averageRating) * numberOfRatings;

        document.getElementById('currentRating').textContent = `Rata-rata rating: ${averageRating}/5 (${numberOfRatings} ulasan)`;
        }
    }

    // Highlight stars based on rating clicked
    const stars = document.querySelectorAll('.star');
    stars.forEach(star => {
        star.addEventListener('click', () => {
        ratingValue = star.getAttribute('data-value');
        highlightStars(ratingValue);
        });
    });

    function highlightStars(rating) {
        stars.forEach(star => {
        star.classList.remove('highlight');
        if (star.getAttribute('data-value') <= rating) {
            star.classList.add('highlight');
        }
        });
    }

    // Submit the rating
    function submitRating() {
        if (ratingValue) {
        totalRatings += parseInt(ratingValue);
        numberOfRatings++;
        const averageRating = (totalRatings / numberOfRatings).toFixed(1);

        // Tampilkan rata-rata rating
        document.getElementById('currentRating').textContent = `Rata-rata rating: ${averageRating}/5 (${numberOfRatings} ulasan)`;
        
        // Simpan rating ke localStorage
        saveRating(averageRating, numberOfRatings);

        // Tampilkan pesan berhasil menggunakan SweetAlert
        Swal.fire("Rating ditambahkan!");
        } else {
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Silakan pilih rating sebelum mengirim.',
        });
        }
    }

    // Save the average rating and count in localStorage
    function saveRating(averageRating, count) {
        localStorage.setItem('averageRating', averageRating);
        localStorage.setItem('numberOfRatings', count);
    }

    // Load ratings on page load
    window.onload = loadRatings;

    // Fungsi cek jam operasional
    function cekJamOperasional() {
    const sekarang = new Date();
    const jamSekarang = sekarang.getHours();
    const menitSekarang = sekarang.getMinutes();

    // Tentukan waktu buka dan tutup
    const jamBuka = 7; // Jam buka (07:30)
    const menitBuka = 30;
    const jamTutup = 22; // Jam tutup (22:00)

    const pesanOperasional = document.getElementById('pesanOperasional');

    // Logika untuk memeriksa waktu buka
    if (
        (jamSekarang > jamBuka || (jamSekarang === jamBuka && menitSekarang >= menitBuka)) &&
        jamSekarang < jamTutup
    ) {
        pesanOperasional.textContent = "Etu Coffee sedang BUKA";
        pesanOperasional.classList.add('text-green-500');
        pesanOperasional.classList.remove('text-red-500');
    } else {
        pesanOperasional.textContent = "Etu Coffee sedang TUTUP";
        pesanOperasional.classList.add('text-red-500');
        pesanOperasional.classList.remove('text-green-500');
    }
    }

    // Jalankan fungsi saat halaman dimuat
    window.onload = cekJamOperasional;


        function addToFavorites() {
        Swal.fire({
        title: "Berhasil!",
        text: "Etu Coffee telah ditambahkan ke daftar favorite!",
        icon: "success"
        });
    }
    </script>

    <!-- Styles -->
    <style>
    .star {
        font-size: 30px;
        cursor: pointer;
        color: gray; /* Saat tidak di klik */
    }

    .star.highlight {
        color: gold; /* Saat di klik */
    }
    </style>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>
</html>
