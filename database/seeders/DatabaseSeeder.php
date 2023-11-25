<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Product;

use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\This;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

            $this->call([UserTableSeeder::class]);

    }
}
