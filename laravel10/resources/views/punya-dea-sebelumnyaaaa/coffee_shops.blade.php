<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Coffee Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #fff8f0; 
        }
    </style>
</head>

<body class="bg-[#FFF8F0] text-center p-5 font-sans">
    <h1 class="font-semibold text-center w-full text-4xl text-gray-800 mb-12">Rekomendasi Coffee Shop</h1>
    <div class="max-w-screen-lg mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mx-auto max-w-screen-lg">
            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105 w-80 h-120">
                <img src="img/RutuKopi/rutukopi1.jpg" alt="Rutu Kopi Denpasar" class="w-full h-48 object-cover rounded-lg">
                <h2 class="font-semibold text-xl text-gray-700 mt-2">Rutu Kopi Denpasar</h2>
                <p class="text-gray-600 text-sm min-h-12 overflow-hidden">Rumah Kami Siap Menyambut Kalian</p>
                <p class="text-gray-600">Setiap Hari: 09:00 - 23:00 WITA</p>
                <a href="{{ route('coffee_shop.show', 'rutukopi') }}" style="background-color: #6B8E23;" class="text-white py-2 px-4 rounded mt-4 inline-block">Lihat Detail</a>
            </div>

            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105 w-80 h-120">
                <img src="img/Jayagiri/jayagiri1.jpg" alt="Jayagiri Coffee" class="w-full h-48 object-cover rounded-lg">
                <h2 class="font-semibold text-xl text-gray-700 mt-2">Jayagiri Coffee</h2>
                <p class="text-gray-600 text-sm min-h-12 overflow-hidden">Menyajikan Kualitas, Menyentuh Hati</p>
                <p class="text-gray-600">Setiap Hari: 09:00 - 21:00 WITA</p>
                <a href="{{ route('coffee_shop.show', 'jayagiri') }}" style="background-color: #6B8E23;" class="text-white py-2 px-4 rounded mt-4 inline-block">Lihat Detail</a>
            </div>

            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105 w-80 h-120">
                <img src="img/AlasCoffee/AlasCoffee7.jpg" alt="Alas Coffee and Space" class="w-full h-48 object-cover rounded-lg">
                <h2 class="font-semibold text-xl text-gray-700 mt-2">Alas Coffee and Space</h2>
                <p class="text-gray-600 text-sm min-h-12 overflow-hidden">Nugas, Ngumpul, Mabar, Nongkrong</p>
                <p class="text-gray-600">Setiap Hari: 17:00 - 05:00 WITA</p>
                <a href="{{ route('coffee_shop.show', ['slug' => 'alascoffe']) }}" style="background-color: #6B8E23;" class="text-white py-2 px-4 rounded mt-4 inline-block">Lihat Detail</a>
            </div>

            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105 w-80 h-120">
                <img src="img/Kaja/kaja6.jpg" alt="Kaja Bali" class="w-full h-48 object-cover rounded-lg">
                <h2 class="font-semibold text-xl text-gray-700 mt-2">Kaja Bali</h2>
                <p class="text-gray-600 text-sm min-h-12 overflow-hidden">Penuhi Hari Anda dengan Kekuatan Kopi</p>
                <p class="text-gray-600">Senin - Sabtu: 09:00 - 23:00 WITA</p>
                <p class="text-gray-600">Minggu: 06.00 - 23.00 WITA</p>
                <a href="{{ route('coffee_shop.show', ['slug' => 'kajabali']) }}" style="background-color: #6B8E23;" class="text-white py-2 px-4 rounded mt-4 inline-block">Lihat Detail</a>
            </div>

            
            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105 w-80 h-120">
                <img src="img/Etu/Etu11.jpg" alt="Etu Coffee" class="w-full h-48 object-cover rounded-lg">
                <h2 class="font-semibold text-xl text-gray-700 mt-2">Etu Coffee</h2>
                <p class="text-gray-600 text-sm min-h-12 overflow-hidden">Seduh Kisah, Nikmati Kelezatan</p>
                <p class="text-gray-600">Setiap Hari: 07:30 - 22:00 WITA</p>
                <a href="{{ route('coffee_shop.show', ['slug' => 'etucoffee']) }}" style="background-color: #6B8E23;" class="text-white py-2 px-4 rounded mt-4 inline-block">Lihat Detail</a>
            </div>

            
            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105 w-80 h-120">
                <img src="img/Sekopi/sekopi1.jpg" alt="Sekopi Renon" class="w-full h-48 object-cover rounded-lg">
                <h2 class="font-semibold text-xl text-gray-700 mt-2">Sekopi Renon</h2>
                <p class="text-gray-600 text-sm min-h-12 overflow-hidden">Kedai Kopi Sekolah</p>
                <p class="text-gray-600">Setiap Hari: 11:00 - 01:00 WITA</p>
                <a href="{{ route('coffee_shop.show', ['slug' => 'sekopirenon']) }}" style="background-color: #6B8E23;" class="text-white py-2 px-4 rounded mt-4 inline-block">Lihat Detail</a>
            </div>

            
            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105 w-80 h-120">
                <img src="img/Selesa/selesa2.jpg" alt="Selesa Coffee" class="w-full h-48 object-cover rounded-lg">
                <h2 class="font-semibold text-xl text-gray-700 mt-2">Selesa Coffee & Eatery</h2>
                <p class="text-gray-600 text-sm min-h-12 overflow-hidden">Lunch, Dinner, Event</p>
                <p class="text-gray-600">Minggu - Kamis: 11:00 - 23:00 WITA</p>
                <p class="text-gray-600">Jumat - Sabtu: 11.00 - 00.00 WITA</p>
                <a href="{{ route('coffee_shop.show', ['slug' => 'selesacoffee']) }}" style="background-color: #6B8E23;" class="text-white py-2 px-4 rounded mt-4 inline-block">Lihat Detail</a>
            </div>

            
            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105 w-80 h-120">
                <img src="img/TujuhDua/tujuh1.jpg" alt="Tujuh Dua COffee" class="w-full h-48 object-cover rounded-lg">
                <h2 class="font-semibold text-xl text-gray-700 mt-2">Tujuh Dua Coffee</h2>
                <p class="text-gray-600 text-sm min-h-12 overflow-hidden">Coffee in Denpasar</p>
                <p class="text-gray-600">Senin - Sabtu: 11:00 - 00:00 WITA</p>
                <p class="text-gray-600">Minggu: 16.00 - 00.00 WITA</p>
                <a href="{{ route('coffee_shop.show', ['slug' => 'tujuhduacoffee']) }}" style="background-color: #6B8E23;" class="text-white py-2 px-4 rounded mt-4 inline-block">Lihat Detail</a>
            </div>

            
            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105 w-80 h-120">
                <img src="img/Atera/atera6.jpg" alt="Atera Coffee" class="w-full h-48 object-cover rounded-lg">
                <h2 class="font-semibold text-xl text-gray-700 mt-2">Atera Coffee</h2>
                <p class="text-gray-600 text-sm min-h-12 overflow-hidden">Kopi yang Menginspirasi, Setiap Saat</p>
                <p class="text-gray-600">Setiap Hari: 07:30 - 22:30 WITA</p>
                <a href="{{ route('coffee_shop.show', ['slug' => 'ateracoffee']) }}" style="background-color: #6B8E23;" class="text-white py-2 px-4 rounded mt-4 inline-block">Lihat Detail</a>
            </div>

            
            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105 w-80 h-120">
                <img src="img/Tahoma/tahoma3.jpg" alt="Tahoma Coffee" class="w-full h-48 object-cover rounded-lg">
                <h2 class="font-semibold text-xl text-gray-700 mt-2">Tahoma Coffee</h2>
                <p class="text-gray-600 text-sm min-h-12 overflow-hidden">Dari Alam, Untuk Kopi yang Sempurna</p>
                <p class="text-gray-600">Setiap Hari: 00:00 - 00:00 WITA</p>
                <a href="{{ route('coffee_shop.show', ['slug' => 'tahomacoffee']) }}" style="background-color: #6B8E23;" class="text-white py-2 px-4 rounded mt-4 inline-block">Lihat Detail</a>
            </div>

            
            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105 w-80 h-120">
                <img src="img/Sakara/sakara4.jpg" alt="Sakara Kopi" class="w-full h-48 object-cover rounded-lg">
                <h2 class="font-semibold text-xl text-gray-700 mt-2">Sakara Kopi Bali</h2>
                <p class="text-gray-600 text-sm min-h-12 overflow-hidden">Nikmati Kopi Bersama Kesayangan</p>
                <p class="text-gray-600">Setiap Hari: 08:00 - 23:00 WITA</p>
                <a href="{{ route('coffee_shop.show', ['slug' => 'sakarakopi']) }}" style="background-color: #6B8E23;" class="text-white py-2 px-4 rounded mt-4 inline-block">Lihat Detail</a>
            </div>

            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105 w-80 h-120">
                <img src="img/Sai/sai8.jpg" alt="Sai Coffee" class="w-full h-48 object-cover rounded-lg">
                <h2 class="font-semibold text-xl text-gray-700 mt-2">SAI Coffee & Creative Space</h2>
                <p class="text-gray-600 text-sm min-h-12 overflow-hidden">Tempatmu tertawa melepas penat, Dimana Semua Cerita Berawal Dari Secangkir Kopi</p>
                <p class="text-gray-600">Setiap Hari: 08:00 - 23:00 WITA</p>
                <a href="{{ route('coffee_shop.show', ['slug' => 'saicoffee']) }}" style="background-color: #6B8E23;" class="text-white py-2 px-4 rounded mt-4 inline-block">Lihat Detail</a>
            </div>

            
            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105 w-80 h-120">
                <img src="img/Goory/goory1.jpg" alt="Goory Coffee" class="w-full h-48 object-cover rounded-lg">
                <h2 class="font-semibold text-xl text-gray-700 mt-2">Goory Coffee & Eatery</h2>
                <p class="text-gray-600 text-sm min-h-12 overflow-hidden">Tempat Baru Bertemu Kehangatan</p>
                <p class="text-gray-600">Senin - Jumat: 09.00 - 23:00 WITA</p>
                <p class="text-gray-600">Sabtu - Minggu: 09.00 - 00:00 WITA</p>
                <a href="{{ route('coffee_shop.show', ['slug' => 'gooryCoffee']) }}" style="background-color: #6B8E23;" class="text-white py-2 px-4 rounded mt-4 inline-block">Lihat Detail</a>
            </div>

            
            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105 w-80 h-120">
                <img src="img/Pisto/pisto6.jpg" alt="Alas Coffee and Space" class="w-full h-48 object-cover rounded-lg">
                <h2 class="font-semibold text-xl text-gray-700 mt-2">Pisto Coffee & Eatery</h2>
                <p class="text-gray-600 text-sm min-h-12 overflow-hidden">Working - Hangout - Meeting - Creative</p>
                <p class="text-gray-600">Setiap Hari: 09:00 - 00:00 WITA</p>
                <a href="{{ route('coffee_shop.show', ['slug' => 'pistoCoffee']) }}" style="background-color: #6B8E23;" class="text-white py-2 px-4 rounded mt-4 inline-block">Lihat Detail</a>
            </div>

            
            <div class="bg-white border border-gray-300 rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105 w-80 h-120">
                <img src="img/RumaRasa/ruma1.jpg" alt="Alas Coffee and Space" class="w-full h-48 object-cover rounded-lg">
                <h2 class="font-semibold text-xl text-gray-700 mt-2">RUmaRasa Bali</h2>
                <p class="text-gray-600 text-sm min-h-12 overflow-hidden">Taste Like Home, Feels Like Home</p>
                <p class="text-gray-600">Senin - Jumat: 08:30 - 22:30 WITA</p>
                <p class="text-gray-600">Sabtu - Minggu: 12.00 - 21:00 WITA</p>
                <a href="{{ route('coffee_shop.show', 'rumaRasa') }}" style="background-color: #6B8E23;" class="text-white py-2 px-4 rounded mt-4 inline-block">Lihat Detail</a>
            </div>


        </div>
    </div>
</body>
</html>
