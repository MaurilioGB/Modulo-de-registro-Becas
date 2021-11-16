@extends('layouts.App')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-success text-white">
                <div class="card-body">coordinación nacional de becas para el bienestar “Benito Juárez”</div>
              </div>
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <b>Bienvenido administrador:</b> {{Auth::user()->name}}
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>¿Que desea hacer hoy?</p>
                        <footer class="blockquote-footer">Fecha de hoy: <cite
                                title="Source Title">{{date('d-m-Y')}}</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
