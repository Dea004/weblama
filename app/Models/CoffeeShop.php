<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoffeeShop extends Model
{
    use HasFactory;

    // Nama tabel (jika tabel tidak menggunakan plural dari nama model)
    protected $table = 'coffee_shops';

    // Kolom yang dapat diisi mass-assignable
    protected $fillable = [
        'slug',
        'name',
        'description',
        'details',
        'image',
        'opening_hours'
    ];

    // Jika Anda tidak menggunakan timestamps (created_at, updated_at)
    public $timestamps = true;

    // Jika nama tabel di database berbeda, Anda bisa menetapkannya dengan properti $table
}
