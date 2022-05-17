<?php

namespace App\Http\Controllers;

use App\Models\AlunoCursoModel;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CursoModel;

class InscreverController extends Controller
{
    public function index(Request $request)
    {
        $curso = CursoModel::where('id', $request->curso_id)->first();
        $id_user = auth()->id();
        $user = User::where('id', $id_user)->first();


        $alunoCursoModel = AlunoCursoModel::create([
            'user_id' => $user['id'],
            'curso_id' => $curso['id'],
        ]);
    }
}
