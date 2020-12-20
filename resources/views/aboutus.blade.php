@extends('layouts.app')

@section('content')
<div class="container marketing mt-5 pt-5">
  <h1 class="text-accent font-weight-bold pt-3">Chi Siamo</h1>

    <!-- riga iniziale -->
    <div class="row featurette pt-3 pb-5" data-aos="fade-left" data-aos-duration="700">
      <div class="col-md-7">
        <h2 class="featurette-heading text-main">Techcube srl <span class="text-muted ">è un blog in ambito tecnologico</span></h2>
        <p class="lead">Nato nel lontano 1997, Techcube è sicuramente uno dei portali più conosciuti in Italia. Grazie alla presenza di migliaia di guide dettagliate, fornisce al lettore una panoramica completa sul mondo tech e sviluppo. Attraverso il loro sito, inoltre, organizzano corsi per apprendere l'arte della programmazione, sia da remoto che dal vivo.

            Riconosciuta come una delle voci più autorevoli in ambito ICT, Techcube, nel corso degli anni, ha sempre saputo rimanere sulla cresta dell'onda e, ancora oggi, è fonte di ispirazione costante per gli addetti ai lavori del settore informatico. Gli argomenti presenti sul sito sono diversi, si va da guide complete con esercizi, a notizie di attualità riguardanti il mondo tech. Uno dei siti migliori per rimanere costantemente aggiornati su ciò che accade in questo settore.</p>
      </div>
      <div class="col-md-5">
        <img src="/img/compagnia.svg" class="card-img-top " alt="...">
      </div>
    </div>

        <!-- riga iniziale -->
        <div class="row featurette py-5" data-aos="fade-right" data-aos-duration="700" data-aos-offset="100">
          <div class="col-md-5">
                <img src="/img/Work-challenges.svg" class="card-img-top " alt="...">
          </div>
          <div class="col-md-7">
            <h2 class="featurette-heading py-5 text-main font-weight-bold">Perché sceglierci
                 
            </h2>
                 <p class="lead">Siamo una società dinamica, fortemente orientata al  risultato, composta di persone giovani e mature.

                Siamo appassionati e riflessivi.
                
                Ci facciamo influenzare dall’innovazione ed abbiamo chiari i nostri obiettivi. La nostra è una realtà digitale, una realtà virtuale, una realtà aumentata… ma anche una realtà molto solida!</p>
          </div>        
        </div>
        
        <div class="row text-center pt-5" data-aos="fade-in" data-aos-duration="500" data-aos-offset="200">
            <div class="col">
                <h3 class="text-main font-weight-bold">Il Nostro Team</h3>
            </div>
        </div>
      
    <!-- Riga dello staff -->
    <div class="row row-cols-1 row-cols-md-3 g-4 py-5" data-aos="fade-in" data-aos-duration="700" data-aos-offset="100">
        
        <div class="col">
            
          <div class="card h-100">
            <img src="/img/avatar1.jpg" class="card-img-top p-5 rounded-circle" alt="...">
                <div class="card-body">
                <h2 class="card-title text-accent">Azzarri Fabrizio</h2>
                <p class="card-text"> <span class="font-weight-bold text-main">Esperto PHP e Responsabile del Blog.</span> </p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium maxime eaque asperiores nisi sit quod harum omnis tempora suscipit quaerat. Harum quos in doloremque odit molestiae enim a omnis adipisci?</p>
                </div>
            <div class="card-footer">
              <small class="text-muted"><i class="fab fa-facebook-f pr-2"></i> <i class="fab fa-twitter pr-2"></i> <i class="fab fa-instagram pr-2"></i> <i class="fab fa-linkedin-in pr-2"></i> <i class="fab fa-github"></i></small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="/img/avatar1.jpg" class="card-img-top p-5 rounded-circle" alt="...">
            <div class="card-body">
              <h2 class="card-title text-accent">Di Gennaro Vittorio</h2>
              <p class="card-text"> <span class="font-weight-bold text-main">Web Designer e Addello Stampa.</span></p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium maxime eaque asperiores nisi sit quod harum omnis tempora suscipit quaerat. Harum quos in doloremque odit molestiae enim a omnis adipisci?</p>
            </div>
            <div class="card-footer">
              <small class="text-muted"><i class="fab fa-facebook-f pr-2"></i> <i class="fab fa-twitter pr-2"></i> <i class="fab fa-instagram pr-2"></i> <i class="fab fa-linkedin-in pr-2"></i> <i class="fab fa-github"></i></small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="/img/avatar1.jpg" class="card-img-top p-5 rounded-circle" alt="...">
            <div class="card-body">
              <h2 class="card-title text-accent">De Marco Simone</h2>
              <p class="card-text"><span class="font-weight-bold text-main"> Web Marketing e Graphic Designer</span>.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium maxime eaque asperiores nisi sit quod harum omnis tempora suscipit quaerat. Harum quos in doloremque odit molestiae enim a omnis adipisci?</p>
            </div>
            <div class="card-footer">
              <small class="text-muted"><i class="fab fa-facebook-f pr-2"></i> <i class="fab fa-twitter pr-2"></i> <i class="fab fa-instagram pr-2"></i> <i class="fab fa-linkedin-in pr-2"></i> <i class="fab fa-github"></i></small>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="container-fluid work-w-us">
  <div class="row border py-5">
    <div class="container">
      <div class="col-12 p-5">
        <h5 class="text-main text-1-5 font-weight-bold" data-aos="fade-left" data-aos-duration="500">Siamo sempre in cerca di persone interessate al settore dell’innovazione digitale.</h5>
        <h5 class="pb-3 text-white text-1-5" data-aos="fade-left" data-aos-duration="500" data-aos-offset="100">Se sei appassionato del tuo lavoro, se hai un progetto da sviluppare o una competenza da condividere, se stai aspettando l’occasione giusta… allora potremo fare grandi cose insieme!</h5>
        <button type="button" class="btn btn-accent secondary" data-aos="fade-right" data-aos-duration="500" data-aos-offset="50">Lavora con noi</button>
      </div>
    </div>
  </div>
</div>

@endsection
