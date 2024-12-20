@extends('layouts.main')

@section('contents')

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

@endsection