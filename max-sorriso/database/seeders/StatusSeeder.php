<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('statuses')->insert(['status' => 'aguardando preenchimento de dados do paciente']);
        \DB::table('statuses')->insert(['status' => 'aguardando envio da tc']);
        \DB::table('statuses')->insert(['status' => 'em andamento']);
        \DB::table('statuses')->insert(['status' => 'finalizado']);
    }
}
