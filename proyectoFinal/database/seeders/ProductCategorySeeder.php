<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'title' => 'Bebidas',
                'slug' => "Bebidas",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, temporibus!',
                'icon' => "fa-mug-hot"
            ],
            [
                'title' => 'Alimentación Sana',
                'slug' => "Sana",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, temporibus!',
                'icon' => "fa-utensils"
            ],
            [
                'title' => 'Comida Organica',
                'slug' => "Organica",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, temporibus!',
                'icon' => "fa-mortar-pestle"
            ],
            [
                'title' => 'Carne Blanca',
                'slug' => "Carne",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, temporibus!',
                'icon' => "fa-drumstick-bite"
            ],
            [
                'title' => 'Comida de Mar',
                'slug' => "Mar",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, temporibus!',
                'icon' => "fa-fish"
            ],
            [
                'title' => 'Picante',
                'slug' => "Picante",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, temporibus!',
                'icon' => "fa-pepper-hot"
            ]
        ];

        foreach ($categories as $category) {
            DB::table('product_categories')->updateOrInsert(
                ['slug' => $category['slug']],
                [
                    'title' => $category['title'],
                    'description' => $category['description'],
                    'icon' => $category['icon'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
