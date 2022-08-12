@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card gil-mid-card">
                    <div class="card-header gil-nav-bar gil-your-password gil-mid-text">Senha Do Dia</div>
                    <div class="card-body gil-form-body ">
                        <div class="alert gil-mid-text  gil-number" role="alert">
                         {{$data->password}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @php
 dd($data);   

@endphp --}}
