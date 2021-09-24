<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('email_subjects')->insert([
           ['subject'=>'Besoin de conseils'],
           ['subject'=>"Demande d'information supplémentaires"],
           ['subject'=>'Devis']
        ]);
    }
}
