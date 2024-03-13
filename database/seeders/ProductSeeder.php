<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Chocolate cake',
            'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,',
            'image' => 'chocolate.jpg',
            // 'tags' => 'no tag',
            'price' => '1000',
            'category_id' => '1',
            'availibility' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Vanila cake',
            'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,',
            'image' => 'wedding1.jpg',
            // 'tags' => 'no tag',
            'price' => '900',
            'category_id' => '2',
            'availibility' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'Red Velbet cake',
            'description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,',
            'image' => 'redvelbet.jpg',
            // 'tags' => 'no tag',
            'price' => '800',
            'category_id' => '3',
            'availibility' => '1'
        ]);

    }
}
