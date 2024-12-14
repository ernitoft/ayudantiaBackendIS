<?php

namespace Database\Seeders;

use App\Models\Product as ModelsProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsProduct::create([
            'title' => 'The Lord of the Rings',
            'creator' => 'J.R.R. Tolkien',
            'price' => 20.00,
            'year' => 1954,
            'isEnable' => false,
            'type' => 'book',
            'ISBN' => '9780261102385'
        ]);

        ModelsProduct::create([
            'title' => 'The Hobbit',
            'creator' => 'J.R.R. Tolkien',
            'price' => 15.00,
            'year' => 1937,
            'isEnable' => true,
            'type' => 'book',
            'ISBN' => '9780261102217'
        ]);

        ModelsProduct::create([
            'title' => 'The Silmarillion',
            'creator' => 'J.R.R. Tolkien',
            'price' => 25.00,
            'year' => 1977,
            'isEnable' => true,
            'type' => 'book',
            'ISBN' => '9780261102736'
        ]);

        ModelsProduct::create([
            'title' => 'The Fellowship of the Ring',
            'creator' => 'J.R.R. Tolkien',
            'price' => 20.00,
            'year' => 1954,
            'isEnable' => true,
            'type' => 'book',
            'ISBN' => '9780261102354'
        ]);

        ModelsProduct::create([
            'title' => 'The Two Towers',
            'creator' => 'J.R.R. Tolkien',
            'price' => 20.00,
            'year' => 1954,
            'isEnable' => true,
            'type' => 'book',
            'ISBN' => '9780261102361'
        ]);

        ModelsProduct::create([
            'title' => 'The Return of the King',
            'creator' => 'J.R.R. Tolkien',
            'price' => 20.00,
            'year' => 1955,
            'isEnable' => true,
            'type' => 'book',
            'ISBN' => '9780261102378'
        ]);

        ModelsProduct::create([
            'title' => 'The Children of Hurin',
            'creator' => 'J.R.R. Tolkien',
            'price' => 25.00,
            'year' => 2007,
            'isEnable' => true,
            'type' => 'book',
            'ISBN' => '9780007246229'
        ]);

        ModelsProduct::create([
            'title' => 'Unfinished Tales',
            'creator' => 'J.R.R. Tolkien',
            'price' => 25.00,
            'year' => 1980,
            'isEnable' => true,
            'type' => 'book',
            'ISBN' => '9780261102163'
        ]);

        ModelsProduct::create([
            'title' => 'The History of Middle-earth',
            'creator' => 'J.R.R. Tolkien',
            'price' => 25.00,
            'year' => 1983,
            'isEnable' => true,
            'type' => 'book',
            'ISBN' => '9780261102224'
        ]);

        ModelsProduct::create([
            'title' => 'The Adventures of Tom Bombadil',
            'creator' => 'J.R.R. Tolkien',
            'price' => 15.00,
            'year' => 1962,
            'isEnable' => true,
            'type' => 'book',
            'ISBN' => '9780261102651'
        ]);

        ModelsProduct::create([
            'title' => 'The Road Goes Ever On',
            'creator' => 'J.R.R. Tolkien',
            'price' => 15.00,
            'year' => 1967,
            'isEnable' => true,
            'type' => 'book',
            'ISBN' => '9780261102293'
        ]);

        ModelsProduct::create([
            'title' => 'The Letters of J.R.R. Tolkien',
            'creator' => 'J.R.R. Tolkien',
            'price' => 25.00,
            'year' => 1981,
            'isEnable' => true,
            'type' => 'book',
            'ISBN' => '9780261102651'
        ]);

        ModelsProduct::create([
            'title' => 'The Art of The Lord of the Rings',
            'creator' => 'J.R.R. Tolkien',
            'price' => 25.00,
            'year' => 2015,
            'isEnable' => true,
            'type' => 'book',
            'ISBN' => '9780008105754'
        ]);

        ModelsProduct::create([
            'title' => 'The Art of The Hobbit',
            'creator' => 'J.R.R. Tolkien',
            'price' => 25.00,
            'year' => 2012,
            'isEnable' => true,
            'type' => 'book',
            'ISBN' => '9780007440818'
        ]);

        ModelsProduct::create([
            'title' => 'The Fall of Gondolin',
            'creator' => 'J.R.R. Tolkien',
            'price' => 25.00,
            'year' => 2018,
            'isEnable' => true,
            'type' => 'book',
            'ISBN' => '9780008302757'
        ]);

    }
}
