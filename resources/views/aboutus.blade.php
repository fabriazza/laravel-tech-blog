@extends('layouts.app')

@section('content')



<div class="container marketing">
<h1>Chi Siamo</h1>

    <!-- riga iniziale -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo deleniti magni vel enim. Numquam iure officiis distinctio eligendi! Optio at facere odio inventore tempora quia nulla mollitia autem beatae harum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quas, adipisci soluta non architecto quam, voluptatem dignissimos exercitationem, consectetur id praesentium. Adipisci esse temporibus pariatur error soluta! Molestiae, sed harum?</p>
      </div>
      <div class="col-md-5">
        <img src="/img/compagnia.svg" class="card-img-top " alt="...">
      </div>
    </div>

 <!-- Riga dello staff -->
    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
        <div class="col">
          <div class="card h-100">
            <img src="/img/staff-2.svg" class="card-img-top p-5" alt="...">
            <div class="card-body">
              <h2 class="card-title">Azzarri Fabrizio</h2>
              <p class="card-text"> <span class="font-weight-bold">Esperto PHP e responsabile del blog.</span> Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="/img/staff-2.svg" class="card-img-top p-5" alt="...">
            <div class="card-body">
              <h2 class="card-title">Di Gennaro Vittorio</h2>
              <p class="card-text"> <span class="font-weight-bold">Web Designer e addello alla home page</span>, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="/img/staff-2.svg" class="card-img-top p-5" alt="...">
            <div class="card-body">
              <h2 class="card-title">De Marco Simone</h2>
              <p class="card-text"><span class="font-weight-bold"> Web Marketing e addetto alla pagina dei collaboratori</span>  . Cras justo odio, dapibus ac facilisis in, egestas eget quam..</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>    

</div>
@endsection
