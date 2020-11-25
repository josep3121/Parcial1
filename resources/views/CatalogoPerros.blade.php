@extends('welcome')
@section('content')
<div class="alert alert-danger" role="alert"  align="center">
      Bienvenidos Seccion Perros
</div>

<<div class="card" style="width: 150px;" >
  <img src="{{url('/assets/bootstrap/img/concen.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Concentrado </p>
  </div>
</div>

<div class="card" style="width: 150px;" >
  <img src="{{url('/assets/bootstrap/img/cepillo.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Cepillo </p>
  </div>
</div>
<div class="card" style="width: 150px;" >
  <img src="{{url('/assets/bootstrap/img/collar.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">collar </p>
  </div>
</div>

    @stop