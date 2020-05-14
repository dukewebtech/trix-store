<?php

use Illuminate\Database\Seeder;
use App\Stock;
class Stockseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Stock::class,30)->create();
    }
}
