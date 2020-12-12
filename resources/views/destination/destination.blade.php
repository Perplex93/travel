@extends('welcome')

@section('title', 'Destination')

@section('content')
    <h1>Destination</h1>
    @foreach($data as $destination)
        <h1>{{$destination->title}}</h1>
        <p>{{$destination->description}}</p>
    @endforeach
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
    </div>
@endsection
