@extends('welcome')

@section('title', 'Create Destination')

@section('content')

    <div class="col-6">
        <form action="/destination" method="post">
            <div class="form-group">
                <label for="title">Titel</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
        </form>
        <form action="/destination" method="post">
            <div class="form-group">
                <label for="description">Beschreibung</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
        </form>
        <form action="/destination" method="post">
            <div class="form-group">
                <label for="destination_image">Reisebild</label>
                <input type="text" class="form-control" id="destination_image" name="destination_image">
            </div>
            <input type="submit" value="Füge Reiseziel hinzu">
        </form>
    </div>

@endsection