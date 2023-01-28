<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name'          => 'Admin',
            'email'         => 'admin@mail.com',
            'password'      => Hash::make('123456'),
            'phone_number'  => 6285555555555,
            'role'          => 1
        ]);

        User::create([
            'name'          => 'User',
            'email'         => 'user@mail.com',
            'password'      => Hash::make('123456'),
            'phone_number'  => 6285745974148,
            'role'          => 0
        ]);

        Category::create([
            'title' => 'Pupuk',
            'image' => 'https://awsimages.detik.net.id/visual/2019/03/28/28d50690-0363-47eb-b89d-1d3232d52498_169.jpeg?w=650'
        ]);

        Category::create([
            'title' => 'Pestisida',
            'image' => 'https://tabloidsinartani.com/uploads/news/images/770x413/-_200402165514-642.jpg'
        ]);

        Category::create([
            'title' => 'Bibit',
            'image' => 'https://mitalom.com/wp-content/uploads/2015/08/Daftar-Harga-Benih-Sayuran-2015.jpg'
        ]);

        Product::create([
            'title'             => 'Bayam Hijau',
            'description'       => 'test',
            'image'             => 'https://cf.shopee.co.id/file/b9b426ae20d5b0eb92a642b7927b9315',
            'category_id'       => 3,
            'is_best_seller'    => 1,
            'price'    => 12000
        ]);

        Product::create([
            'title'             => 'Bayam Merah',
            'description'       => 'test',
            'image'             => 'https://i0.wp.com/sentratani.com/wp-content/uploads/2015/11/mira.jpg?ssl=1',
            'category_id'       => 3,
            'is_best_seller'    => 1,
            'price'    => 15000
        ]);

        Product::create([
            'title'         => 'Product Test 1',
            'description'   => 'test',
            'image'         => 'https://i0.wp.com/sentratani.com/wp-content/uploads/2015/11/mira.jpg?ssl=1',
            'category_id'   => 1,
            'price'    => 15000
        ]);

        Product::create([
            'title'         => 'Product Test 2',
            'description'   => 'test',
            'image'         => 'https://i0.wp.com/sentratani.com/wp-content/uploads/2015/11/mira.jpg?ssl=1',
            'category_id'   => 1,
            'price'    => 35000
        ]);

        Product::create([
            'title'         => 'Product Test 3',
            'description'   => 'test',
            'image'         => 'https://i0.wp.com/sentratani.com/wp-content/uploads/2015/11/mira.jpg?ssl=1',
            'category_id'   => 2,
            'price'    => 5000
        ]);
    }
}
