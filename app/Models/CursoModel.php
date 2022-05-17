<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class CursoModel extends Model
{
    use HasFactory;

    protected $table = 'curso_models';

    protected $fillable=[
        'nome',
        'descricao',
        'horas',
        'professor'
    ];

    public function alunoCurso(){
        return $this->hasMany(AlunoCursoModel::class, 'curso_id', 'id')->with('user');
    }
}