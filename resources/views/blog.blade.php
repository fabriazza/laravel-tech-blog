@extends('layouts.app')

@section('content')
<div class="container py-4 mt-5">
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
