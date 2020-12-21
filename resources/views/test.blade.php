@extends('layouts.app')

@section('content')
<style>
    body {
        margin: 0;
    }

    #map {
        height: 100vh;
        width: 50vw;
    }
</style>

<div id='map'></div>
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