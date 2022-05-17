@extends('layouts.app')

@section('content')
    <div class="container" style="border: solid 1px gray">
        <table class="table table-striped" style="">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Horas</th>
                    <th scope="col">Professor</th>
                    <th scope="col">Descrição</th>
                </tr>
            </thead>
            <tbody class=".table-striped">
                @foreach ($cursos as $curso)
                    <tr>
                        <th>{{$curso['nome']}}</th>
                        <td>{{$curso['horas']}}</td>
                        <td>{{$curso['professor']}}</td>
                        <td>{{$curso['descricao']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
