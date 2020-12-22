@extends('layouts.app')

@section('content')
<style>
    section#headerSection {
        height: 500px;
    }

    div#headerImg {
        background-image: url('https://images.unsplash.com/photo-1421218108559-eb1ff78357f5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1190&q=80');
        background-position: 25% 80%;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }

    h1 {
        background-color: rgba(255, 255, 255, 0.5);
    }

    h3 {
        background-color: rgba(255, 255, 255, 0.5);
    }

    #destinationImage {
        max-width: 8rem;
        border-radius: 40%;
        border-style: groove;
    }

    #map {
        height: 60vh;
    }
</style>


<section id="headerSection">
    <div class="h-100 d-flex justify-content-center " id="headerImg">
        <div class="col-xl-10 mt-auto mb-auto text-center">
            <h1 class="display-3 font-weight-bold text-shadow">Reiseziele</h1>
            <h3 class="font-weight-bold text-shadow">Trage dein Traumreiseziel auf der Landarte ein und beginne gleich mit deiner Planung </h3>
            <a href="/register" class="btn btn-success">Registrieren</a>
        </div>
    </div>
</section>

<div class="row m-auto justify-content-center">

    <div class='col-sm-8 pt-5 m-auto pt-3 pb-3 bg-white'>
        @foreach($data as $destination)
        <div class="row mb-3">
            <div class="col-3 ml-3 mt-3">
                <img class="" id="destinationImage" src=" {{('/img/' . $destination->destination_image)}}" alt="">
            </div>
            <div class="col-7">
                <a href="#" target="_blank"> <strong> {{$destination->title}}</strong> </a>
                <br>
                <ul>
                    <li>
                        {{$destination->description}}
                    </li>
                </ul>

                <div class="btn-margin">
                    <a href="#" target="_blank" class="btn btn-xs btn-success hidden-xs">Reiseziel ansehen </a>
                    <a href="#" target="_blank" data-contact="" class="btn btn-xs btn-info">Gastgeber suchen </a>
                </div>
            </div>

        </div>
        <hr>
        @endforeach
    </div>
</div>

<div class="row justify-content-center pb-5 m-auto">
    <div id='fullMap' class="mt-5 m-auto col-8 text-center">
            <h2 class="mt-5 pb-5">Sehen Sie sich die Route an</h2>
            <div id='map'></div>
    </div>


</div>

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoicGVycGxleDkzIiwiYSI6ImNraXQzdDZ1dzA5cTMyeG11NnM2enFqaXcifQ.J0jGxDZ7iGOOn25MjDcvmg';

    navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
        enableHighAccuracy: true
    })

    function successLocation(position) {
        setupMap([position.coords.longitude, position.coords.latitude])
    }

    function errorLocation() {
        setupMap([-2.24, 53.48])
    }

    function setupMap(center) {
        const map = new mapboxgl.Map({
            container: "map",
            style: "mapbox://styles/mapbox/streets-v11",
            center: center,
            zoom: 15
        })

        const nav = new mapboxgl.NavigationControl()
        map.addControl(nav)

        var directions = new MapboxDirections({
            accessToken: mapboxgl.accessToken
        })

        map.addControl(directions, "top-left")
    }
</script>


@endsection