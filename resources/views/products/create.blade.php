@extends('layouts.plantilla')

@section('contenido')
  <div class="container">
    <form action="{{ route('products') }}" method="post">
      @csrf
    <div class="form-group">
      <label for="title">Titulo</label>
      <input type="text" class="form-control" id="title" name="title" >
    </div>

    <div class="form-group">
    <label for="description">Descripcion</label>
    <textarea name="description" class="form-control" id="description" rows="8" cols="80"></textarea>
    </div>

    <div class="form-group form-check">
    <label for="price">Precio</label>
    <input type="number" class="form-control" name="price" id="price">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
@endsection
