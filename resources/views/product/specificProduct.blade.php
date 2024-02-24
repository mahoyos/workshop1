@extends('layouts.header')
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
           {{ $viewData["product"]["name"] }}
        </h5>
        <p class="card-text"> Descripción : {{ $viewData["product"]["description"] }}</p>
        <p class="card-text"> Imagen : {{ $viewData["product"]["image"] }}</p>
        <p class="card-text"> Marca : {{ $viewData["product"]["brand"] }}</p>
        <p class="card-text"> Palabras Clave : {{ $viewData["product"]["keywords"] }}</p>
        <p class="card-text"> Precio : {{ $viewData["product"]["price"] }}</p>
        <p class="card-text"> Stock : {{ $viewData["product"]["stock"] }}</p>
      </div>
    </div>
  </div>
</div>
<div class="card">
      <div class="card-body text-center">
      <a href="{{ route('product.deleteProduct', ['id'=> $viewData["product"]["id"]]) }}"
          class="btn btn-danger">Borrar Producto</a>
      </div>
</div>
@endsection
        