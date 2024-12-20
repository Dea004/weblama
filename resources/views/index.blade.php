<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/js/forgot-password.js"></script>


    <style>
        :root {
            --primary: #814e2b; 
            --secondary: #593b1f; 
            --bg-light: #fff8f0; 
            --text-light: #fff; 
            --text-dark: #593b1f; 
            --border: #e0e0e0; 
            /* Add more colors as needed */
        }
    </style>

</head>
<body style="background-color: #fff8f0" x-data="{ openLogin: false, openRegister: false, openForgotPassword: false }">
    
    <!-- Navbar -->
    <nav class="bg-transparent">
        <div class="container mx-auto flex justify-between items-center p-4">
            <a class="navbar-brand" href="#">
            <img src="{{ asset('img/Logo nobg.png') }}" alt="logo2" class="w-24" />
            </a>
            <div class="flex items-center md:hidden">
                <button id="mobile-menu-button" class="text-[var(--primary)] focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <a class="text-[var(--primary)] font-medium" href="#">Home</a>
                <a class="text-[var(--primary)] font-medium" href="{{ url('/coffee_shop') }}">CoffeeShop</a>
                <a class="text-[var(--primary)] font-medium" href="{{ url('/booking') }}">Booking</a>
                <a class="text-[var(--primary)] font-medium" href="{{ url('/search') }}">Search</a>
                <a @click="openLogin = true" class="text-[var(--primary)] font-medium cursor-pointer">Login</a>
                <a class="text-[var(--primary)] font-medium" href="{{ url('/LamanPengguna') }}">Profil</a>
            </div>
        </div>
    </nav>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden" style="display: none;">
        <a class="block px-4 py-2 text-[var(--primary)] hover:bg-gray-100" href="#">Home</a>
        <a class="block px-4 py-2 text-[var(--primary)] hover:bg-gray-100" href="../CoffeeShop.html">CoffeeShop</a>
        <a class="text-[var(--primary)] font-medium" href="{{ url('/booking') }}">Booking</a>
        <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="block w-full text-left px-4 py-2 text-[var(--primary)] hover:bg-gray-100">
                Filter
                <svg xmlns="http://www.w3.org/2000/svg" class="inline h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
            <ul x-show="open" @click.away="open = false" class="mt-2 w-full bg-white border border-[var(--border)] rounded-lg shadow-lg">
                <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Fasilitas</a></li>
                <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Rating</a></li>
                <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Harga</a></li>
                <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Menu</a></li>
                <li><a class="block px-4 py-2 text-gray-700 hover:bg-gray-100" href="#">Daftar Favorite</a></li>
            </ul>
        </div>
        <a @click="openLogin = true" class="block px-4 py-2 text-[var(--primary)] hover:bg-gray-100">Login</a>
        <a class="block px-4 py-2 text-[var(--primary)] hover:bg-gray-100" href="../search.html">Search</a>
    </div>

    <!-- Main content -->
    <div class="container mx-auto mt-5">
        <div class="flex flex-wrap">
            <div class="w-1/2 flex items-center">
                <div>
                <h1 class="text-4xl font-bold font-poppins">Setiap cangkir kopi merupakan sebuah petualangan baru</h1>
                    <p class="font-poppins" style="color: #593b1f; margin-top: 20px; text-align: justify; max-width: 600px;">
                        Cari cafe yang pas untuk bekerja, bersantai, atau sekadar menikmati kopi? Kami menyediakan rekomendasi cafe terbaik dengan berbagai pilihan, mulai dari tempat tenang untuk bekerja hingga spot unik untuk konten sosial media. Temukan cafe yang sesuai dengan kebutuhan Anda sekarang!
                    </p>
                    <button class="btn btn-primary rounded-md px-4 py-2 text-white mt-5 sm:block md:block lg:block" style="background-color: #814e2b;">
                        View Coffee Shop
                    </button>
                </div>
            </div>
            <div class="w-1/2">
                <img src="../img/landingPage.png" alt="Coffee shop" />
            </div>
        </div>
    </div>
    <!-- Main content end -->

    <!-- Login Modal -->
    <div x-show="openLogin" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center" x-cloak>
        <div class="bg-white p-6 rounded-lg shadow-lg w-80 relative">
            <h2 class="text-xl font-semibold text-center mb-4" style="color: #814e2b;">Login</h2>
            <form method="POST" action="{{ route('login.submit') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium" style="color: #814e2b;">Email address</label>
                    <input class="w-full px-4 py-2 border border-[#814e2b] rounded focus:outline-none focus:ring-2 focus:ring-[#814e2b]" 
                        type="email" name="email" placeholder="Email" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium" style="color: #814e2b;">Password</label>
                    <input class="w-full px-4 py-2 border border-[#814e2b] rounded focus:outline-none focus:ring-2 focus:ring-[#814e2b]" 
                        type="password" name="password" placeholder="Password" required>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="rememberMe" name="rememberMe" type="checkbox" class="form-checkbox text-[#814e2b]">
                        <label for="rememberMe" class="ml-2 text-sm font-medium" style="color: #814e2b;">Remember me</label>
                    </div>
                    <button type="button" @click="openLogin = false; openForgotPassword = true" 
                            class="text-sm hover:underline" style="color: #814e2b;">Forgot Password?</button>
                </div>
                <div class="mt-4">
                    <button type="submit" style="background-color: #814e2b;" class="w-full px-4 py-2 bg-[#814e2b] text-white font-semibold rounded hover:bg-[#663d21]">Login</button>
                </div>
            </form>
            <button @click="openLogin = false" class="absolute top-2 right-2 text-gray-600 hover:text-gray-900">&times;</button>
            <p class="mt-10 text-center text-sm text-gray-500">
                Don't have an account?
                <a href="#" @click="openLogin = false; openRegister = true" class="font-semibold" style="color: #814e2b;">Register</a>
            </p>
        </div>
    </div> 

    <!-- Modal Forgot Password-->
    <div x-show="openForgotPassword" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center" x-cloak>
        <div class="bg-white p-6 rounded-lg shadow-lg w-80 relative">
            <h2 class="text-xl font-semibold text-center mb-4">Forgot Password</h2>
            <form id="forgotPasswordForm" method="POST" action="{{ route('check.email') }}">
            @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-900">Email address</label>
                    <input class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#814e2b]" 
                        type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="mt-4">
                    <button type="submit" style="background-color: #814e2b;" class="w-full px-4 py-2 text-white font-semibold rounded hover:bg-custom-light-brown">Send Verification Code</button>
                </div>
            </form>
            <button @click="openForgotPassword = false" class="absolute top-2 right-2 text-gray-600 hover:text-gray-900">&times;</button>
        </div>
    </div>

    <!-- Modal Verification Code-->
    <div x-show="openVerificationCode" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center" x-cloak>
        <div class="bg-white p-6 rounded-lg shadow-lg w-80 relative">
            <h2 class="text-xl font-semibold text-center mb-4">Enter Verification Code</h2>
            <form method="POST" action="{{ route('check.reset.otp') }}">
                @csrf
                <div class="mb-4">
                    <label for="verificationCode" class="block text-sm font-medium text-gray-900">Verification Code</label>
                    <input class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#814e2b]" 
                        type="text" name="verificationCode" placeholder="Enter the code sent to your email" required>
                </div>
                <div class="mt-4">
                    <button type="submit" style="background-color: #814e2b;" class="w-full px-4 py-2 text-white font-semibold rounded hover:bg-custom-light-brown">Verify Code</button>
                </div>
            </form>
            <button @click="openVerificationCode = false" class="absolute top-2 right-2 text-gray-600 hover:text-gray-900">&times;</button>
            <p class="mt-10 text-center text-sm text-gray-500">
                Didn't receive the code?
                <button type="button" @click="resendVerificationCode()" class="hover:underline" style="color: #814e2b;">Resend</button>
            </p>
        </div>
    </div>

    <!-- Modal untuk Mengubah Password Baru -->
    <div x-show="openNewPassword" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center" x-cloak>
        <div class="bg-white p-6 rounded-lg shadow-lg w-80 relative">
            <h2 class="text-xl font-semibold text-center mb-4">Enter New Password</h2>
            <form method="POST" action="{{ route('change.password') }}">
                @csrf
                <div class="mb-4">
                    <label for="newPassword" class="block text-sm font-medium text-gray-900">New Password</label>
                    <input class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#814e2b]" 
                        type="password" name="newPassword" placeholder="Enter your new password" required>
                </div>
                <div class="mb-4">
                    <label for="confirmPassword" class="block text-sm font-medium text-gray-900">Confirm New Password</label>
                    <input class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#814e2b]" 
                        type="password" name="confirmPassword" placeholder="Confirm your new password" required>
                </div>
                <div class="mt-4">
                    <button type="submit" style="background-color: #814e2b;" class="w-full px-4 py-2 text-white font-semibold rounded hover:bg-custom-light-brown">Update Password</button>
                </div>
            </form>
            <button @click="openNewPassword = false" class="absolute top-2 right-2 text-gray-600 hover:text-gray-900">&times;</button>
        </div>
    </div>

    <!-- Register Modal -->
    <div x-show="openRegister" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center" x-cloak>
        <div class="bg-white p-6 rounded-lg shadow-lg w-80 relative">
            <h2 class="text-xl font-semibold text-center mb-4">Register</h2>
            <form id="registerForm" action="{{ route('register.submit') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-900">Username</label>
                    <input class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#814e2b]" 
                        type="text" name="username" id="username" placeholder="Enter your username" required>
                </div>
                <div class="mb-4">
                    <label for="fullname" class="block text-sm font-medium text-gray-900">Full Name</label>
                    <input class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#814e2b]" 
                        type="text" name="fullname" id="fullname" placeholder="Enter your full name" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-900">Email Address</label>
                    <input class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#814e2b]" 
                        type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-900">Phone Number</label>
                    <input class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#814e2b]" 
                        type="text" name="phone" id="phone" placeholder="Enter your phone number" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-900">Password</label>
                    <input class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#814e2b]" 
                        type="password" name="password" id="password" placeholder="Enter your password" required>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-900">Confirm Password</label>
                    <input class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-[#814e2b]" 
                        type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password" required>
                </div>
                <div class="mt-4">
                    <button type="submit" class="w-full px-4 py-2 text-white font-semibold rounded" style="background-color: #814e2b;">Register</button>
                </div>
            </form>
            <p class="mt-10 text-center text-sm text-gray-500">
                Already have an account? <a href="#" @click="openRegister = false; openLogin = true" class="font-semibold" style="color: #814e2b;">Login</a>
            </p>
            <button @click="openRegister = false" class="absolute top-2 right-2 text-gray-600 hover:text-gray-900">&times;</button>
        </div>
    </div>
    
    <script>
    function resendVerificationCode() {
        // pengiriman ulang kode verifikasi
        alert("Verification code has been resent to your email.");
    }

    // menampilkan modal perubahan password baru setelah kode verifikasi benar
    function showNewPasswordForm() {
        // modal untuk input password baru
        this.openNewPassword = true;
        this.openVerificationCode = false; 
    }

    // modal untuk mengganti password baru
    function handleVerificationResponse(response) {
        if (response.status === 'success') {
            this.openNewPassword = true; 
        }
    }

    function sendVerificationCode() {
        // Show SweetAlert before sending the form
        Swal.fire({
            title: 'Verification Code Sent!',
            text: 'A verification code has been sent to your email address.',
            icon: 'success',
            confirmButtonText: 'Proceed to Verification',
        }).then((result) => {
            if (result.isConfirmed) {
                // Close the Forgot Password modal and open the Verification Code modal
                document.querySelector('[x-data]').__x.$data.openForgotPassword = false;
                document.querySelector('[x-data]').__x.$data.openVerificationCode = true;
            }
        });
    }

    //  memverifikasi kode
    function verifyCode(code) {
        fetch('/verify-code', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ verificationCode: code })
        })
        .then(response => response.json())
        .then(data => handleVerificationResponse(data));
    }

    // Script Pop up Register
    function openModals() {
        return {
            openLogin: false,
            openForgotPassword: false,
            openNewPassword: false,
            openVerificationCode: false,
            openRegister: false, 
            openRegisterModal() {
                this.openRegister = true;
            },
            closeAllModals() {
                this.openLogin = false;
                this.openForgotPassword = false;
                this.openNewPassword = false;
                this.openVerificationCode = false;
                this.openRegister = false;
            }
        };
    }

    //Register validation
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        
        // Pastikan data form berhasil diambil
        let formData = new FormData(this);
        console.log(formData); // Debugging, untuk memastikan form data diambil dengan benar
        
        fetch("{{ route('register.submit') }}", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            console.log(data); // Debugging response data
            if (data.errors) {
                if (data.errors.username) {
                    Swal.fire('Error', data.errors.username[0], 'error');
                }
                if (data.errors.email) {
                    Swal.fire('Error', data.errors.email[0], 'error');
                }
                if (data.errors.password) {
                    Swal.fire('Error', data.errors.password[0], 'error');
                }
            } else {
                Swal.fire('Success', data.message, 'success').then(() => {
                    // Menutup modal atau melakukan tindakan setelah berhasil
                    document.querySelector('[x-data]').__x.$data.openRegister = false;
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
    </script>

</body>
</html>