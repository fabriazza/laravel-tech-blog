<div class="col-12 col-md-4 py-4">
  <div class="card border-0 shadow rounded">
    <img class="card-img-top" src="{{$img}}" alt="{{$title}}">
    <div class="card-body">
      <h5 class="card-title">{{$title}}</h5>
      <p class="card-text text-truncate">{{$description}}</p>
      <p class="card-text"><small class="text-muted">Pubblicato il {{$date}}</small></p>
      <a href="{{ route('article.show', ['title' => urlencode($title)]) }}" class="btn btn-primary">Leggi di più</a>
    </div>
  </div>
</div>