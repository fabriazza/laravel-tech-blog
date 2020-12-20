<div class="col-12 col-md-4 py-3">
    <div class="card shadow" data-aos="zoom-in" data-aos-duration="500">
        <img class="card-img-top" src="{{$img}}" alt="">
        <div class="card-body">
          <h5 class="card-title">{{$title}}</h5>
          <p class="card-text">{{$description}}</p>
          <a href="{{ route('article.show', ['title' => urlencode($title)]) }}" class="btn btn-accent">Leggi di più</a>
        </div>
      </div>
</div>
