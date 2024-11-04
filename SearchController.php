<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Impor DB facade

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Validasi input
        $request->validate([
            'category' => 'nullable|string',
            'brand' => 'nullable|string',
            'keyword' => 'nullable|string',
            'price_min' => 'nullable|numeric',
            'price_max' => 'nullable|numeric',
        ]);

        // Ambil parameter dari request
        $category = $request->input('category');
        $brand = $request->input('brand');
        $keyword = $request->input('keyword'); 
        $priceMin = $request->input('price_min');
        $priceMax = $request->input('price_max');

        // Query produk berdasarkan parameter yang ada
        $query = DB::table('products'); // Sesuaikan nama tabel jika berbeda

        if ($category) {
            $query->where('category', $category);
        }

        if ($brand) {
            $query->where('brand', $brand);
        }

        if ($keyword) {
            $query->where('name', 'like', '%' . $keyword . '%');
        }

        if ($priceMin) {
            $query->where('price', '>=', $priceMin);
        }

        if ($priceMax) {
            $query->where('price', '<=', $priceMax);
        }

        $results = $query->get();

        return view('search.results', compact('results'));
    }
}
