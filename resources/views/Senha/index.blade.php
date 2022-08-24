@extends('layouts.app')

@section('content')
    <div class="sidebar gil-background-color">
        <table class="table table-borderless gil-bold-white ">
            <thead class="gil-bold-white gil-mid-text">
                <tr>
                    <th colspan="2">Histório de Senhas</th>
                </tr>
            </thead>
            <thead class="gil-bold-white gil-mid-text">
                <tr>
                    <th>Senha</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['passwordHistory'] as $item)
                    <tr>
                        <td>{{$item->password}}</td>
                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="">
        <div class="row justify-content-center">
            <div class="col-5 mx-auto">
                <div class="card center-card">
                    <div class="card-header gil-background-color gil-bold-white gil-mid-text ">
                        SENHA DO DIA
                    </div>
                </div>
               <div class="card-body gil-form-body ">
                        <div class="alert gil-mid-text  gil-number" role="alert">
                            {{ $data['dayPassword']->password }}
                        </div>
                    </div>
            </div>
        </div>    
    </div>
@endsection
