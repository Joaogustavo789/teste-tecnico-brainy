<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobbieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hobbies = [
            ['hobbie' => 'Praticar esportes'],
            ['hobbie' => 'Jogar Video Game'],
            ['hobbie' => 'Passear na praia/açude'],
            ['hobbie' => 'Brincar com o cachorro/gato'],
            ['hobbie' => 'Tirar fotos'],
        ];

        DB::table('hobbies')->insert($hobbies);
    }
}
