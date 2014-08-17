<?php
namespace Atiker\LaravelBootstrap\Seeds;
use Illuminate\Database\Seeder;
use Eloquent;

class DatabaseSeeder extends Seeder {

    public function run()
    {
        Eloquent::unguard();
        $this->call('Atiker\LaravelBootstrap\Seeds\UserTable');
        $this->call('Atiker\LaravelBootstrap\Seeds\ExampleSettingsSeeder');
        $this->command->info('All Tables Seeded');
    }

}