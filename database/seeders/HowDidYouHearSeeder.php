<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HowDidYouHearSeeder extends Seeder
{
    public function run()
    {
        $options = [
            ['name' => 'Facebook'],
            ['name' => 'Instagram'],
            ['name' => 'TikTok'],
            ['name' => 'LinkedIn'],
            ['name' => 'Google'],
            ['name' => 'YouTube'],
            ['name' => 'Anuncio en redes sociales'],
            ['name' => 'Anuncio en Google'],
            ['name' => 'Amigo o familiar'],
            ['name' => 'Evento o feria'],
            ['name' => 'Publicidad en la calle'],
            ['name' => 'Correo electrónico'],
            ['name' => 'Radio o TV'],
            ['name' => 'Otro'],
            ['name' => 'No Aplica'],
        ];

        DB::table('how_did_you_hear')->insert($options);
    }
}
