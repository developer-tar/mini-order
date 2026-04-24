<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'name' => 'Laptop',
            'price' => 10.00,
        ]);
        Item::create([
            'name' => 'Mobile',
            'price' => 20.00,
        ]);
         Item::create([ 
            'name' => 'Item 3',
            'price' => 30.00,
        ]);
         Item::create([ 
            'name' => 'Item 4',
            'price' => 40.00,
         ]);
    }
}
