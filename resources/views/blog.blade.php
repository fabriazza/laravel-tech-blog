@extends('layouts.app')

@section('content')
<x-masthead />

<div class="container py-5 mt-2 mb-2">
    <div class="row justify-content-center">
        <div class="card-group">
            @foreach ($articles as $el)
                <x-card
                title="{{ $el['title'] }}"
                description="{{ $el['description'] }}"
                img="{{ $el['img'] }}"
                />
            @endforeach
        </div>
    </div>
</div>
@endsection
