@extends('layouts.main')

@section('contents')

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

@endsection