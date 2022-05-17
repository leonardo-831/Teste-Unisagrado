<?php

namespace App\Http\Controllers;

use App\Models\CursoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        
            //$cursos = CursoModel::all();
            $cursos = CursoModel::with('alunoCurso')->get();
            return view('welcome', ['cursos' => $cursos]);
    }
}