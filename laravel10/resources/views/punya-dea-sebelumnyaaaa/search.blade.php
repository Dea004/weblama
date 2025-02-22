<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Search Coffee Shop</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>

</head>
<body style="background-color: #fff8f0">
    <!-- Navbar -->
    <nav class="bg-transparent">
        <div class="container mx-auto flex justify-between items-center p-4">
            <a class="navbar-brand" href="#">
                <img src="../img/Logo nobg.png" alt="logo2" class="w-24" />
            </a>
            <div class="hidden md:flex items-center space-x-8">
                <a class="text-[var(--primary)] font-medium" href="../views/index-Copy-3.blade.php">Home</a>
                <a class="text-[var(--primary)] font-medium" href="../CoffeeShop.html">CoffeeShop</a>
                <a class="text-[var(--primary)] font-medium" href="../views/booking_form.blade.php">Booking</a>
                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="text-[var(--primary)] font-medium focus:outline-none">
                        Filter
                        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                    <ul x-show="open" @click.away="open = false" class="absolute left-0 mt-2 w-48 bg-white border border-[var(--border)] rounded-lg shadow-lg z-20" x-cloak>
                        <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Fasilitas</a></li>
                        <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Rating</a></li>
                        <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Harga</a></li>
                        <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Menu</a></li>
                        <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Daftar Favorite</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Search Form -->
    <div class="container mx-auto mt-12">
        <h1 class="text-center text-3xl font-poppins mb-4">Cari Coffee Shop</h1>
        <form class="mt-4" action="booking.html" method="POST">
            <div class="flex justify-center">
                <input
                    type="text"
                    class="form-control w-1/2 border border-gray-300 rounded-l-md py-2 px-4"
                    placeholder="Cari Coffee Shop..."
                    id="searchQuery"
                    name="searchQuery"
                />
                <button type="submit" class="bg-blue-500 text-white rounded-r-md px-4 py-2 flex items-center">
                    <i class="bx bx-search search-icon"></i>
                </button>
            </div>
        </form>

        <!-- Recommended Cafe Section -->
    </div>
</body>
</html>
