<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory(2)
            ->sequence(
                [
                    'name' => 'Offre basique',
                    'stripe_product_id' => 'price_1LePlGBy39DOXZlGI7pJ1qCX',
                    'price' => 9.99,
                ],
                [
                    'name' => 'Offre premium',
                    'stripe_product_id' => 'price_1OjPIqBy39DOXZlGrIXSTpYp',
                    'price' => 19.99,
                ]
            )
            ->create();
    }
}
