@extends('layouts.app')

@section('content')
  <x-boot-carousel />

  <div class="container-fluid bg-accent mb-3">
    <div class="row text-center p-4">
        <div class="col-12">
          <h1 class="pt-4 pb-1 mt-5 text-white font-weight-bold">Le ultime news!</h1>
          <p class="text-light text-1">Gli notizie tech più incredibili le trovi solo su <strong>Techcube</strong>.</p>
        </div>
        @foreach ($articles as $el)
          <x-home-card
            title="{{ $el['title'] }}"
            description="{{ $el['description'] }}"
            img="{{ $el['img'] }}"
            date="{{ $el['date'] }}"
          />
        @endforeach
    </div>
  </div>
  
  <x-accordion />

  <x-form />
@endsection
