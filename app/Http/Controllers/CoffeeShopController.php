<?php

namespace App\Http\Controllers;

use App\Models\CoffeeShop;  
use Illuminate\Http\Request;

class CoffeeShopController extends Controller
{
    // Menampilkan detail coffee shop berdasarkan slug
    public function show($slug)
    {
        // Ambil data coffee shop berdasarkan slug
        $coffeeShop = CoffeeShop::where('slug', $slug)->first();

        // Cek jika coffee shop tidak ditemukan
        if (!$coffeeShop) {
            abort(404); 
        }

        // Mengembalikan tampilan dengan data coffee shop
        return view('coffee_shops.' . $slug, compact('coffeeShop'));
    }
}
