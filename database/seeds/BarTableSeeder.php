<?php

use App\Back\Models\Bar;
use Illuminate\Database\Seeder;

class BarTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('bars')->delete();

        for ($i = 0; $i < 100; $i++) {
            $bar = factory(App\Back\Models\Bar::class)->make();

            Bar::create($bar->toArray());
        }
    }

}