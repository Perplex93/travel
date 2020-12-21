@extends('layouts.app')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
<br />

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">User Form</h3>
    </div>
    <div class="panel-body">
        <br />
        <form method="post" action="{{ url('people/create') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="row">
                    <label class="col-md-4">Enter Name</label>
                    <div class="col-md-8">
                        <input type="text" name="user_name" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label class="col-md-4">Select Profile Image</label>
                    <div class="col-md-8">
                        <input type="file" name="user_image" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <br />
                <br />
                <input type="submit" name="store_image" class="btn btn-primary" value="Save" />
            </div>
        </form>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">User Data</h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="30%">Image</th>
                    <th width="70%">Name</th>
                </tr>
                @foreach($people as $people)
                <tr>
                    <td>
                        <img src="{{ asset('public/img/'). $people->user_image }}" class="img-thumbnail" width="75" />
                    </td>
                    <td>{{ $people->name }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection('content')