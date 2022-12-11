<?php

namespace Database\Seeders;

use App\Models\bahanAjar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BahanAjarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         BahanAjar::factory()->count(3)->create();
    }
}
