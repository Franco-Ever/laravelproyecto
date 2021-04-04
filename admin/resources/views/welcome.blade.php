@extends('adminlte::page')

@section('title', 'Admin - Blog')


@section('content_header')
    <script type="text/javascript" src="{{asset('js/reloj.js')}}"></script>
    <h1>Admin - Blog</h1>
@stop

@section ( 'content' )
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Hola administrador, Bienvenido</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Hora</h1>
                        <div id="mostrarHora" style="font-weight:800; font-size:5rem;"><script type="text/javascript">mostrarHora();</script></div>
                    <h1>Fecha</h1>
                        <div id="mostrarHora2" style="font-weight:800; font-size:5rem;"><script type="text/javascript">mostrarTiempo();</script></div>
                </div>
            </div>
        </div>
    </div>
</div>
 @stop
