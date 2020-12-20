@extends('layouts.app')

@section('content')
<header class="masthead-single-article" style="background-image: url('{{ $articles['img'] }}');" data-aos="fade-down" data-aos-duration="500">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <!-- <h1 class="text-main font-weight-bold">Blog</h1>
        <p class="lead text-white text-1-5">Le tech news più interessanti da tutto il mondo.</p> -->
      </div>
    </div>
  </div>
</header>

<div class="container-fluid my-5">
    <div class="row justify-content-center">
            @component('components.single-article', [
                'title' => $articles['title'],
                'description' => $articles['description'],
                'img' => $articles['img'],
                'date' => $articles['date'],
                'carouselimg' => $articles['carouselimg']
            ])

            @endcomponent
    </div>
</div>
@endsection
