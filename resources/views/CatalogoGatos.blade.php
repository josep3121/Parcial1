@extends('welcome')
@section('content')
<div class="alert alert-danger" role="alert"  align="center">
      Bienvenidos Seccion Gatos
</div>

<<div class="card" style="width: 150px;" >
  <img src="{{url('/assets/bootstrap/img/cama.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Cama </p>
  </div>
</div>

<div class="card" style="width: 150px;" >
  <img src="{{url('/assets/bootstrap/img/pelota.png')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">pelota</p>
  </div>
</div>
    
    @stop