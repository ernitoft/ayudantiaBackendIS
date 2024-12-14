<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'name' => 'The Lord of the Rings',
            'product_id' => 1,
            'rating' => 5,
            'description' => 'The best book ever'
        ]);

        Review::create([
            'name' => 'The Hobbit',
            'product_id' => 2,
            'rating' => 4,
            'description' => 'Good book'
        ]);

        Review::create([
            'name' => 'The Silmarillion',
            'product_id' => 3,
            'rating' => 3,
            'description' => 'Not bad'
        ]);

        Review::create([
            'name' => 'Review 4',
            'product_id' => 4,
            'rating' => 2,
            'description' => 'I do not like it'
        ]);

        Review::create([
            'name' => 'Review 5',
            'product_id' => 5,
            'rating' => 1,
            'description' => 'The worst book ever'
        ]);

        Review::create([
            'name' => 'Review 6',
            'product_id' => 1,
            'rating' => 5,
            'description' => 'The best book ever'
        ]);
    }
}
