@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($articles as $el)
            <x-singlearticle
            title="{{ $el['title'] }}"
            description="{{ $el['description'] }}"
            img="{{ $el['img'] }}"
            />
        @endforeach
    </div>
</div>
@endsection