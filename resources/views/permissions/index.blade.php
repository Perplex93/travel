@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row align-items-center justify-content-start">
            <h1 class="text-left col">Permissions</h1><a  href="{{route('permissions.create')}}" class="btn btn-primary">Hinzufügen</a>
        </div>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($permissions as $permission)
                    <th scope="row">{{$permission->id}}</th>
                    <td>{{$permission->name}}</td>
                    <td>{{$permission->slug}}</td>
                    <td>{{$permission->description}}</td>
                    <td class="row justify-content-center">
                        <a href="{{route('permissions.edit', '$permission->id')}}" class="btn btn-primary">EDIT</a>

                        <form action="{{route('permissions.destroy', '$permission->id')}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger ml-3" type="submit" onclick="return confirm('Wollen Sie es wirklich löschen ?')" style="-webkit-appearance:none;">DELETE</button>
                        </form>
                    </td>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection