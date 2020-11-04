@extends('cats.layout')

@section('title')
{{__('Cats of Cat County')}}
@endsection

@section('content')

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
        <tr>
            <th scope="row">{{ $cat->id }}</th>
            <td>{{ $cat->name }}</td>
            <td>{{ $cat->gender }}</td>
            <td>{{ $cat->age }}</td>
            <td>
                <form action="{{ route('cats.destroy', $cat->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('cats.edit', $cat->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>

@endsection
