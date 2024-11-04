<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data contoh untuk diisi ke dalam tabel products_tabel
        $products = [
            [
                'name' => 'Patung Batak',
                'description' => 'Patung tradisional yang terbuat dari kayu.',
                'category' => 'Seni',
                'brand' => 'Batak Art',
                'price' => 50.00,
                'image_url' => 'images/products/patung_batak.jpg', // Path gambar
            ],
            [
                'name' => 'Gantungan Kunci',
                'description' => 'Gantungan kunci berbentuk unik.',
                'category' => 'Aksesoris',
                'brand' => 'Keychain Co',
                'price' => 5.00,
                'image_url' => 'images/products/gantungan_kunci.jpg', // Path gambar
            ],
            [
                'name' => 'Buku Lak-lak',
                'description' => 'Buku cerita mengenai budaya Batak.',
                'category' => 'Buku',
                'brand' => 'Batak Books',
                'price' => 15.00,
                'image_url' => 'images/products/buku_laklak.jpg', // Path gambar
            ],
            // Tambahkan produk lain sesuai kebutuhan
        ];

        // Menambahkan data ke dalam tabel
        DB::table('products_tabel')->insert($products);
    }
}
