<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\InvesticijaSeeder;
use Database\Seeders\InvestitorSeeder;
use Database\Seeders\StartupSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ProjekatSeeder = new StartupSeeder;
        $ProjekatSeeder->run();
        
        $InvestitorSeeder = new InvestitorSeeder;
        $InvestitorSeeder->run();

        $InvesticijaSeeder = new InvesticijaSeeder;
        $InvesticijaSeeder->run();
    }
}
