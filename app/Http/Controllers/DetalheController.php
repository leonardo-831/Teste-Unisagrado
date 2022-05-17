<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunoCursoModel;
use App\Models\CursoModel;
use App\Models\User;

class DetalheController extends Controller
{
    public function index(Request $request){
        $curso = CursoModel::where('id', $request->id)->first();
        
        return view('detalhe', ['cursos' => $curso]);
    
    }
}
