<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('persons')->insert([
            ['name' => 'John Doe'],
            ['name' => 'Jane Smith'],
            ['name' => 'Alice Johnson'],
            ['name' => 'Bob Brown'],
            // Adaugă mai multe persoane după cum este necesar
        ]);
    }
}
