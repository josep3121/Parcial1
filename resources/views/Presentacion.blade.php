@extends('welcome')
@section('content')
<div class="alert alert-danger" role="alert"  align="center">
      Bienvenidos a Quiero a mi Mascota
</div>

<div class="card" style="width: 580px;" >
  <img src="{{url('/assets/bootstrap/img/tienda.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">La mejor tienda de la ciudad dedicada a consentir a tu mascota en todos los ambitos </p>
  </div>
</div>
    
    @stop