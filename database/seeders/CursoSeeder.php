<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 


class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curso_models')->insert([
            'nome' => 'Java 2022 COMPLETO: Do Zero ao Profissional',
            'descricao' => 'Java, Orientação a Objeto, Programação Funcional, MySQL',
            'horas' => '51',
            'professor' => 'Airton'
        ]);
        DB::table('curso_models')->insert([
            'nome' => 'Curso Completo de PHP 7',
            'descricao' => 'Torne-se um Desenvolvedor PHP, do básico ao avançado',
            'horas' => '87',
            'professor' => 'Nelio Alves'
        ]);
        DB::table('curso_models')->insert([
            'nome' => 'JavaScript - Curso COMPLETO',
            'descricao' => 'JavaScript do 0 ao Avançado',
            'horas' => '91',
            'professor' => 'Mateus'
        ]);
    }
}
