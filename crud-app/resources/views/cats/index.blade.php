@extends('cats.layout')
@section('content')

@section('title')
{{__('Welcome to Cat County')}}
@endsection

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('cats.create')  }}">Add a Cat</a>
        </div>
    </div>
</div>

<br>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
<br>
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
    @foreach ($cats as $cat)
    <tr>
        <th scope="row">{{ $cat->id }}</th>
        <td>{{ $cat->name }}</td>
        <td>{{ $cat->gender }}</td>
        <td>{{ $cat->age }}</td>
        <td>
        <form action="{{ route('cats.destroy', $cat->id) }}" method="POST">

            <a class="btn btn-info" href="{{ route('cats.show', $cat->id) }}">Show</a>

            <a class="btn btn-primary" href="{{ route('cats.edit', $cat->id) }}">Edit</a>

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>


@endsection
