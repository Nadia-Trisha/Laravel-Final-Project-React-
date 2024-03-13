<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Brandseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Samsung Galaxy',
                'description' => 'Samsung Brand',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=Samsung',
                
            ],
            [
                'name' => 'Apple iPhone 12',
                'description' => 'Apple Brand',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=Iphone',
         
            ],
            [
                'name' => 'Google Pixel 2 XL',
                'description' => 'Google Pixel Brand',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=Google',
          
            ],
            [
                'name' => 'LG V10 H800',
                'description' => 'LG Brand',
                'logo' => 'https://dummyimage.com/200x300/000/fff&text=LG',
                
            ]
        ];
  
        foreach ($brands as $key => $value) {
            Brand::create($value);
        }
    }
}
