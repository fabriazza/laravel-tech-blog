@extends('layouts.app')

@section('content')
{{-- Carosello --}}
<div id="caroselloHome" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators d-none d-md-flex">
      <li data-target="#caroselloHome" data-slide-to="0" class="active"></li>
      <li data-target="#caroselloHome" data-slide-to="1"></li>
      <li data-target="#caroselloHome" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="/img/slider1.jpg"  alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/img/slider2.jpg"  alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/img/slider3.jpg"  alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#caroselloHome" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#caroselloHome" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
@endsection
