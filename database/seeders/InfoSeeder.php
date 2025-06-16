<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('infos')->insert([
            'company_name' => 'DGK',
            'logo' => 'logo.png',
            'slogan' => 'Slogan de dgk',
            'description' => 'Descripcion dgk',
            'address' => 'Santa Cruz Plan 3000 av Che Guevara',
            'code' => '591',
            'phone' => '65007894',
        ]);
    }
}
