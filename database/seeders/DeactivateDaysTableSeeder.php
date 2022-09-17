<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DeactivateDays;

class DeactivateDaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeactivateDays::truncate();
        DeactivateDays::create([
            'status' => 'enabled',
            'days' => 30
        ]);
    }
}
