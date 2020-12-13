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
            <input type="submit" value="Füge Reiseziel hinzu">
        </form>
    </div>

@endsection