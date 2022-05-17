<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunoCursoModel;
use App\Models\CursoModel;
use App\Models\User;



class CursoController extends Controller
{
    public function index(){

        $user_id = auth()->id();
        $user = User::where('id', $user_id)->first();
        
        $cursosUser = $user->cursos;

        return view('curso', ['cursos' =>$cursosUser]);
    }

    
}
