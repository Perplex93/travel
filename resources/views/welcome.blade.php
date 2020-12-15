<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>


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

      div#headerImg{
      background-image: url('../img/photo-1503220317375-aaad61436b1b.jpg'); 
      background-repeat:no-repeat; 
      background-size:100% 100%;
      }

      div#searchbar{
      background-color:rgba(255, 255, 255, 0);
      }

     
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    </head>
    <body>

    @include('nav')

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
                    <select class="selectpicker rounded-pill mr-3 h-100" title="Categories" data-style="btn-form-control"><option class="bs-title-option" value="">Kategorie</option>
                      <option value="small">Hotels</option>
                      <option value="medium">Restaurants</option>
                      <option value="large">Sehenswürdigkeiten</option>
                      <option value="x-large">Personen</option>
                    </select>
                    </div>
                    <div class="col-lg-2">
                    <button class="btn btn-success rounded-pill w-100" type="submit">Suchen </button>
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
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

          <h2>Finde die Perfekte Reise</h2>
          <p>Gestallte dir einen Reisetrip ganz nach deinem Geschmack.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

          <h2>Lerne neue Leute kennen</h2>
          <p>Verlinke dich mit Freunden oder Leuten die du gerne kennenlernen möchtest und teile mit wen du kennen gelernt hast.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

          <h2>Geniesse deinen Trip</h2>
          <p>Mit der unkomplizierten suche findest du mit ein paar klicks alles was du für deinen Trip brauchst.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
    </div>

<hr class="featurette-divider">

<h1>Neueste Einträge unseres Blogs</h1>

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
  <div class="col-md-5">
    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
  <div class="col-md-5 order-md-1">
    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
  </div>
  <div class="col-md-5">
    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

  </div>
</div>

<hr class="featurette-divider">
    </section>
    
    <div class="container">
        @yield('content')
    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="col-12 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
            <li><a class="link-secondary" href="#">Cool stuff</a></li>
            <li><a class="link-secondary" href="#">Random feature</a></li>
            <li><a class="link-secondary" href="#">Team feature</a></li>
            <li><a class="link-secondary" href="#">Stuff for developers</a></li>
            <li><a class="link-secondary" href="#">Another one</a></li>
            <li><a class="link-secondary" href="#">Last time</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
