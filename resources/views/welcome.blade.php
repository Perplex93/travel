<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @section('title', 'Home')


        <script src="{{asset('js/app.js')}}" defer></script>

        <link href="{{'css/app.css'}}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      section#headerSection{
      height: 500px;
      }

      div#headerImg {
        background-image: url('https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
        background-position: 25% 80%;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }

      div#searchbar{
      background-color:rgba(255, 255, 255, 0);
      }

      #searchButton{
        background-color: burlywood;
      }

     
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>

    </head>
    <body>
@extends('layouts.app')
@section('content')
    <section id="headerSection">
      <div class="h-100 d-flex justify-content-center " id="headerImg">
          <div class="col-xl-10 mt-auto mb-auto">
            <div class="text-center">
              <h1 class="display-3 font-weight-bold text-shadow">Erlebe die Welt</h1>
            </div>
            <div class="nav-bar navbar-light pt-5 d-flex justify-content-center" id="searchbar">
              <form action="container-fluid" class="w-75">
                <div class="input-group">
                    <input class="form-control border-0 shadow-0 rounded-pill mr-3" type="text" name="search" placeholder="Was suchst du ? ">
                    <input class="form-control border-0 shadow-0 rounded-pill mr-3" type="text" name="location" placeholder="Ort" id="location">
                    <div class="dropdown">
                    <select class="selectpicker rounded-pill mr-3 h-100 w-100 pl-1" title="Categories" data-style="btn-form-control"><option class="bs-title-option" value="">Kategorie</option>
                      <option value="small">Unterkunft</option>
                      <option value="medium">Arbeit</option>
                      <option value="large">Lernen</option>
                      <option value="x-large">Personen</option>
                    </select>
                    </div>
                    <div class="col-lg-2">
                    <button class="btn rounded-pill w-100" id="searchButton" type="submit">Suchen </button>
                    </div>
                </div>
                  
                </div>
              </form>
            </div>
          </div>
        </div>
    </section>

    <section>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-4">
          <img src="/img/photo-1488646953014-85cb44e25828.jpg" alt="" class="rounded-circle w-75 h-50">
          <h2 class="pt-3">Finde die Perfekte Reise</h2>
          <p>Gestallte dir einen Reisetrip ganz nach deinem Geschmack.</p>
          <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4 ">
          <img src="/img/photo-1503220317375-aaad61436b1b.jpg" alt="" class="rounded-circle w-75 h-50">
          <h2 class="pt-2">Lerne neue Leute kennen</h2>
          <p>Verlinke dich mit Freunden oder Leuten die du gerne kennenlernen möchtest und teile mit wen du kennen gelernt hast.</p>
          <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img src="/img/kroatien.jpg" alt="" class="rounded-circle w-75 h-50">
          <h2 class="pt-4">Geniesse deinen Trip</h2>
          <p>Mit der unkomplizierten suche findest du mit ein paar klicks alles was du für deinen Trip brauchst.</p>
          <p><a class="btn btn-success" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>

<hr class="featurette-divider">

<h1 class="text-center pt-5 pb-5">Neueste Einträge unseres Blogs</h1>

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">Solo, Single und fast 30: Reisende, ist es nicht an der Zeit, sich niederzulassen?</h2>
    <span class="text-muted">Inspiration</span>
    <p></p>
    <p class="lead">Single? Allein reisen? Über 30 zu treffen? WIR AUCH! Und was für ein wunderbares Gefühl das ist, aber warum um alles in der Welt werden uns diese Fragen ständig gestellt?</p>
  </div>
  <div class="col-md-5">
    <img src="/img/photo-1485178575877-1a13bf489dfe.jpg" alt="" class="w-75 h-75">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">12 Erstaunliche Reiseerlebnisse auf der ganzen Welt.</h2>
    <span class="text-muted">Reise verwenden, Inspiration</span>
    <p></p>
    <p class="lead">Wir leben nur einmal, also wählen wir die bedeutungsvollsten Dinge an den phänomenalsten Orten der Welt!</p>
  </div>
  <div class="col-md-5 order-md-1">
    <img src="/img/simeon-tuilagi-MIbMFXBWpFs-unsplash.jpg" alt="" class="w-75 h-75">

  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">Auf zwei Rädern um die Welt - Reisetipps für den Radsportnomaden</h2>
    <span class="text-muted">Reisetipps</span>
    <p></p>
    <p class="lead">Ah, es gibt kein so befreiendes und aufregendes Gefühl, als einen neuen Platz auf Ihrem alten Fahrrad zu entdecken.</p>
  </div>
  <div class="col-md-5">
    <img src="/img/murillo-de-paula-o2FCfhNSjPo-unsplash.jpg" alt="" class="w-75 h-75">
  </div>
</div>

<hr class="featurette-divider">
    </section>
@endsection

    </body>
</html>
