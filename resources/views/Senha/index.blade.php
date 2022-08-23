@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="sidenav gil-password-layout-left navbar-brand navbar-expand-md navbar-light">
                    <table class="table table-sm " >
                        <thead class="gil-background-color ">
                            <th colspan="2" style="text-align: center"> Historico de Senhas</th>
                        </thead>
                        <thead >
                            <tr>
                                <th scope="col">Senha</th>
                                <th scope="col">Data</th>
                            </tr>
                        </thead>
                        @foreach ($data['passwordHistory'] as $key => $item)
                            <tbody>
                                <tr scope="row">
                                    <td> {{ $item->password }} </td>
                                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card gil-password-layout">
                    <div class="card-header gil-nav-bar gil-your-password gil-mid-text">Senha Do Dia</div>
                    <div class="card-body gil-form-body ">
                        <div class="alert gil-mid-text  gil-number" role="alert">
                            {{ $data['dayPassword']->password }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
@endsection

    {{-- @php
 dd($data);   

@endphp --}}
