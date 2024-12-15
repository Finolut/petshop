<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BuktiController extends Controller
{
    /**
     * Display a listing of products on the admin dashboard.
     */
    public function index()
    {
        $products = Product::all(); // Mengambil semua data dari tabel products
        return view('products.bukti', compact('products'));
    }
}
