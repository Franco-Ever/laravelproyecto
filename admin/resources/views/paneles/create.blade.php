
@extends('adminlte::page')

@section('title', 'Admin - create')


@section('content_header')
    <h1>Admin - Create</h1>
@stop

@section ( 'content' )
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Registro de productos</h1></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Ingrese un nuevo producto</p>

                    <form  action="{{route('paneles.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Nombre del producto:</label>
                          <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
                          @error('nombre')
                            <small style="color: red">* {{$message}}</small>
                            <br>
                          @enderror
                        </div>
                        <div class="col-md-5">
                          <label class="form-label">Precio:</label>
                          <input type="text" name="precio" class="form-control" value="{{old('precio')}}">
                          @error('precio')
                            <small style="color: red">* {{$message}}</small>
                            <br>
                          @enderror
                        </div>
                        <br>
                        <div class="col-md-5">
                          <label for="inputState" class="form-label">Valor monetario:</label>
                          <select id="inputState" class="form-select" name="valor">
                            <option selected></option>
                            <option>$u$</option>
                            <option>Bs</option>
                          </select>
                          @error('valor')
                            <small style="color: red">* {{$message}}</small>
                            <br>
                          @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Categoria:</label>
                            <input type="text" name="categoria" class="form-control" value="{{old('categoria')}}" >
                            @error('categoria')
                            <small style="color: red">* {{$message}}</small>
                            <br>
                            @enderror
                          </div>
                          <div class="col-md-5">
                            <label class="form-label">Cantidad:</label>
                            <input type="text" name="cantidad" class="form-control" value="{{old('cantidad')}}">
                            @error('cantidad')
                            <small style="color: red">* {{$message}}</small>
                            <br>
                          @enderror
                          </div>
                          <br>
                          <div class="col-md-5">
                            <label for="inputState" class="form-label">Unidad de Peso:</label>
                            <select id="inputState" class="form-select" name="peso">
                              <option selected></option>
                              <option>Kilogramos</option>
                              <option>Toneladas</option>
                            </select>
                            @error('peso')
                            <small style="color: red">* {{$message}}</small>
                            <br>
                          @enderror
                          </div>
                        <button type="submit"  class="btn btn-primary">Registrar</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
 @stop 