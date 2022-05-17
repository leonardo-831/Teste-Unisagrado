<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoCursoModel extends Model
{
    use HasFactory;
    protected $table = "aluno_curso_models";
    protected $fillable=[
        'user_id',
        'curso_id'
    ];

    public $timestamps = false;

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
