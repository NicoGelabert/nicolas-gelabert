<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Nikon',
            'slug' => 'nikon',
            'icon' => 'storage/iconos/nikon.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Olympus',
            'slug' => 'olympus',
            'icon' => 'storage/iconos/olympus.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Pentax',
            'slug' => 'pentax',
            'icon' => 'storage/iconos/pentax.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Canon',
            'slug' => 'canon',
            'icon' => 'storage/iconos/canon.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Fujifilm',
            'slug' => 'fujifilm',
            'icon' => 'storage/iconos/fujifilm.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Leica',
            'slug' => 'leica',
            'icon' => 'storage/iconos/leica.svg'
        ]);
    }
}
