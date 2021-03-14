<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TovarSeeder extends Seeder
{
    public function run()
    {
        for($i=1; $i<11; $i++){
            DB::table('tovars')->insert([
                'name' => 'tovar ' .$i
            ]);
        }
    }
}
