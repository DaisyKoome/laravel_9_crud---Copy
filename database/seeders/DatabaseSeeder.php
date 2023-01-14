<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Tradein::factory(3)->create();

        \App\Models\Tradein::factory()->create([
            'tv_brand' => 'Sony',
            'tv_model' => '55" TV Smart LG',
            'tv_condition' => 'Broken -55"',
            'packaging' => 'good',
            'tv_age' => 2,
            'tv_accessories' => 'good',
            'tv_value' => 8750,
            'tv_upgrade' => '40" TV Sony Smart',
            'topup_amount' => 3000,
        ]); 

        \App\Models\Student::factory(3)->create();
    }
}
