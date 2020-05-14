<?php

use Illuminate\Database\Seeder;
use App\Measurement;
class MeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Measurement::class,40)->create();
    }
}
