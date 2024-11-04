<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function add(Request $request)
    {
        $productId = $request->input('id');
        // Logic to add product to wishlist
        return response()->json(['success' => 'Product added to wishlist']);
    }

    public function remove(Request $request)
    {
        $productId = $request->input('id');
        // Logic to remove product from wishlist
        return response()->json(['success' => 'Product removed from wishlist']);
    }
}
