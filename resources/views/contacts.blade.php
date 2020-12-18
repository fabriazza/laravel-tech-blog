@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Section Titile -->
        <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
            <h1 class="section-title">Vuoi metterti in contatto con noi?</h1>
        </div>
    </div>
    <div class="row">
        <!-- Section Titile -->
        <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
          <p>Compila il nostro modulo online per inviare un’e-mail al nostro team del Servizio clienti.
            Ci impegniamo a rispondere entro 2 giorni lavorativi dalla ricezione dell’e-mail.</p>

          <div class="find-widget">
           Azienda:  <a href="#">Techblog Srl</a>
          </div>
          <div class="find-widget">
           Indirizzo: <a href="#">Via dei Serragli, Milano</a>
          </div>
          <div class="find-widget">
            Tel:  <a href="#">+39 021 862399</a>
          </div>

          <div class="find-widget">
            Website:  <a href="#">www.techblog.it</a>
          </div>
          <div class="find-widget">
             Orari: Lun - Sab: 09:30 - 18.30
          </div>
        </div>
        <!-- contact form -->
        <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
            <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                <!-- Name -->
                <div class="form-group label-floating">
                  <label class="control-label" for="name">Nome</label>
                  <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                  <div class="help-block with-errors"></div>
                </div>
                <!-- email -->
                <div class="form-group label-floating">
                  <label class="control-label" for="email">Email</label>
                  <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                  <div class="help-block with-errors"></div>
                </div>
                <!-- Subject -->
                <div class="form-group label-floating">
                  <label class="control-label">Oggetto</label>
                  <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                  <div class="help-block with-errors"></div>
                </div>
                <!-- Message -->
                <div class="form-group label-floating">
                    <label for="message" class="control-label">Messaggio</label>
                    <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <!-- Form Submit -->
                <div class="form-submit mt-5">
                    <button class="btn btn-primary" type="submit" id="form-submit">Invia messaggio</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
