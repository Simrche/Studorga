<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stages')->insert([
            'entreprise' => 'Ecaste',
            'poste' => "Développeur Mobile",
            'ville' => 'Valbonne',
            'pays' => 'France',
            'description' => 'Alternance web et mobile, Vue.js/Laravel/Swift/Android Natif',
            'status' => 'Accepté',
            'user_id' => 1
        ]);

        DB::table('stages')->insert([
            'entreprise' => 'Skilder',
            'poste' => "Développeur Fullstack",
            'ville' => 'Lyon',
            'pays' => 'France',
            'description' => 'Stage vue.js avec le Skilder et le CNRS',
            'status' => 'En attente',
            'user_id' => 1
        ]);

        DB::table('stages')->insert([
            'entreprise' => 'Hors Cadre',
            'poste' => "Développeur Front",
            'ville' => 'Courbevoie',
            'pays' => 'France',
            'description' => 'Refonte du site web de Hors Cadres en laravue',
            'status' => 'Entretien',
            'user_id' => 1
        ]);

        DB::table('stages')->insert([
            'entreprise' => 'Google',
            'poste' => "CEO",
            'ville' => 'Silicon Valley',
            'pays' => 'États-Unis',
            'description' => 'Dirigé la plus grande entreprise du monde',
            'status' => 'Refusé',
            'user_id' => 1
        ]);
    }
}
