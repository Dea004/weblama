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
                    <img src="/img/Sakara/sakara1.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/Sakara/sakara2.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/Sakara/sakara3.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/Sakara/sakara4.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/Sakara/sakara5.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/img/Sakara/sakara6.jpg" class="absolute block w-full h-auto object-contain -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>

            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 
                group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 
                group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <div class="container mx-auto mt-8 px-4">
            <div class="flex gap-6">
                <!-- Jam Operasional -->
                <div class="bg-white p-6 shadow-md rounded-md w-1/3">
                    <h3 class="text-xl font-semibold mb-4"><i class="fas fa-clock"></i> Jam Operasional</h3>
                    <p><strong>Setiap Hari:</strong> 08.00 - 23.00 WITA</p>
                    <p id="pesanOperasional" class="text-sm mt-2"></p>
                </div>

                <!-- Fasilitas -->
                <div class="bg-white p-6 shadow-md rounded-md w-1/3">
                    <h3 class="text-xl font-semibold mb-4"><i class="fas fa-globe"></i> Fasilitas</h3>
                    <ul>
                        <li class="flex items-center"><i class="fas fa-wifi mr-2"></i> WiFi Gratis</li>
                        <li class="flex items-center"><i class="fas fa-toilet mr-2"></i> Toilet yang Nyaman</li>
                        <li class="flex items-center"><i class="fas fa-parking mr-2"></i> Parkir Luas dan Gratis</li>
                        <li class="flex items-center"><i class="fa-solid fa-calendar-days"></i>Bisa Reservasi</li>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.711817916083!2d115.22469720000001!3d-8.623640699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
                1!3m3!1m2!1s0x2dd23f8b30556cc3%3A0xf21afd983a859ffa!2sSakara%20Kopi%20Bali!5e0!3m2!1sid!2sid!4v1732682761300!5m2!1sid!2sid"
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

        <!-- Ulasan -->
        <div class="mt-10">
        <h3 class="text-xl font-semibold mb-4"><i class="fas fa-pen"></i> Ulasan</h3>
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
        numberOfRatings = parseInt(count);
        totalRatings = parseFloat(averageRating) * numberOfRatings;

        document.getElementById('currentRating').textContent = `Rata-rata rating: ${averageRating}/5 (${numberOfRatings} ulasan)`;
        }
    }

    // bintang di klik
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

    // Submit rating
    function submitRating() {
        if (ratingValue) {
        totalRatings += parseInt(ratingValue);
        numberOfRatings++;
        const averageRating = (totalRatings / numberOfRatings).toFixed(1);

        //  rata-rata rating
        document.getElementById('currentRating').textContent = `Rata-rata rating: ${averageRating}/5 (${numberOfRatings} ulasan)`;
        
        // Simpan rating ke localStorage
        saveRating(averageRating, numberOfRatings);

        // sweet alert
        Swal.fire("Rating ditambahkan!");
        } else {
        Swal.fire({
            icon: 'warning',
            title: 'Oops...',
            text: 'Silakan pilih rating sebelum mengirim.',
        });
        }
    }


    function saveRating(averageRating, count) {
        localStorage.setItem('averageRating', averageRating);
        localStorage.setItem('numberOfRatings', count);
    }

    window.onload = loadRatings;

    //  cek jam operasional
    function cekJamOperasional() {
        const sekarang = new Date();
        const jamSekarang = sekarang.getHours();
        const jamBuka = 8;
        const jamTutup = 23;

        const pesanOperasional = document.getElementById('pesanOperasional');
        if (jamSekarang >= jamBuka && jamSekarang < jamTutup) {
        pesanOperasional.textContent = "Sakara Kopi Bali sedang BUKA";
        pesanOperasional.classList.add('text-green-500');
        } else {
        pesanOperasional.textContent = "Sakara Kopi Bali sedang TUTUP";
        pesanOperasional.classList.add('text-red-500');
        }
    }

    window.onload = cekJamOperasional;

        function addToFavorites() {
        Swal.fire({
        title: "Berhasil!",
        text: "Sakara Kopi Bali telah ditambahkan ke daftar favorite!",
        icon: "success"
        });
    }
    </script>

    <!-- Styles -->
    <style>
    .star {
        font-size: 30px;
        cursor: pointer;
        color: gray; 
    }

    .star.highlight {
        color: gold; 
    }
    </style>
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>
</html>
