@extends('dogs.layout')

@section('title')
    {{__('Welcome to Dog Derby')}}
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('dogs.create') }}">Add a Dog</a>
        </div>
    </div>
</div>

@if ( $message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Age</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $dogs as $dog )
            <tr>
                <th scope="row">{{ $dog->id }}</th>
                <td>{{ $dog->name }}</td>
                <td>{{ $dog->gender }}</td>
                <td>{{ $dog->age }}</td>
                <td>
                    <form action="{{ route('dogs.destroy', $dog->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('dogs.show', $dog->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('dogs.edit', $dog->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')
                            <button type"submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
