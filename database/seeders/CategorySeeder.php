<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => '0 - 3 Bulan', 'min_age' => 0, 'max_age' => 3],
            ['name' => '3 - 6 Bulan', 'min_age' => 3, 'max_age' => 6],
            ['name' => '6 - 9 Bulan', 'min_age' => 6, 'max_age' => 9],
            ['name' => '9 - 12 Bulan', 'min_age' => 9, 'max_age' => 12],
            ['name' => '12 - 15 Bulan', 'min_age' => 12, 'max_age' => 15],
            ['name' => '15 - 18 Bulan', 'min_age' => 15, 'max_age' => 18],
            ['name' => '18 - 21 Bulan', 'min_age' => 18, 'max_age' => 21],
            ['name' => '21 - 24 Bulan', 'min_age' => 21, 'max_age' => 24],
            ['name' => '24 - 30 Bulan', 'min_age' => 24, 'max_age' => 30],
            ['name' => '30 - 36 Bulan', 'min_age' => 30, 'max_age' => 36],
            ['name' => '36 - 42 Bulan', 'min_age' => 36, 'max_age' => 42],
            ['name' => '42 - 48 Bulan', 'min_age' => 42, 'max_age' => 48],
            ['name' => '48 - 54 Bulan', 'min_age' => 48, 'max_age' => 54],
            ['name' => '54 - 60 Bulan', 'min_age' => 54, 'max_age' => 60],
            ['name' => '60 - 66 Bulan', 'min_age' => 60, 'max_age' => 66],
            ['name' => '66 - 72 Bulan', 'min_age' => 66, 'max_age' => 72],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'min_age' => $category['min_age'],
                'max_age' => $category['max_age'],
                'slug' => Str::slug($category['name']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
    }
}
