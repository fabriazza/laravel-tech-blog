@extends('layouts.app')

@section('content')
<div class="container py-5 mt-5">
    <div class="row">
        <!-- Section Titile -->
        <div class="col-md-12" data-aos="fade-left" data-aos-duration="700">
            <h1 class="section-title">Vuoi metterti in contatto con noi?</h1>
        </div>
    </div>
    <div class="row">
        <!-- Section Titile -->
        <div class="col-md-6 mt-3 contact-widget-section2" data-aos="fade-right" data-aos-duration="500" data-aos-offset="100">
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
        <div class="col-md-6" data-aos="fade-left" data-aos-duration="500" data-aos-offset="100">
            <form class="shake" role="form" method="post" action="{{ route('contact.send') }}" id="contactForm" name="contact-form" data-toggle="validator">
                @csrf
                <!-- Name -->
                <div class="form-group label-floating">
                  <label for="">Nome</label>
                  <input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}">
                  @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <!-- email -->
                <div class="form-group label-floating">
                  <label for="">Email</label>
                  <input class="form-control" id="email" type="email" name="mail" value="{{ old('mail') }}">
                  @error('mail')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <!-- Subject -->
                <div class="form-group label-floating">
                  <label>Oggetto</label>
                  <input class="form-control" id="msg_subject" type="text" name="subject" value="{{ old('subject') }}">
                  @error('subject')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <!-- Message -->
                <div class="form-group label-floating">
                    <label for="">Messaggio</label>
                    <textarea class="form-control" rows="3" id="message" type="text" name="message">{{ old('message') }}</textarea>
                    @error('message')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Form Submit -->
                <div class="form-submit mt-5">
                    <button class="btn btn-accent" type="submit" id="form-submit">Invia messaggio</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
