@extends('layouts.app')
@section('content')
    <div id="app"> 
            <home :cursos="{{ $cursos }}" :user="{{ Auth::user() }}"></home>
        </div>
    </div>
@endsection