<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Popula o banco de dados com dados iniciais.
     */
    public function run(): void
    {
        $this->call([
            TurbinaSeeder::class,
        ]);
    }
}
