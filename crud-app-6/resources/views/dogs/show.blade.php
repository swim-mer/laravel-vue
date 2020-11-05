@extends('dogs.layout')

@section('title')
    {{__('Edit Dog')}}
@endsection

@section('content')

    <div row="class">
        <div class="pull right">
            <a class="btn btn-info" href="{{ route('dogs.index') }}">Back</a>
        </div>
    </div>

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
                <th scope="row">{{ $dog->id }}</th>
                <td>{{ $dog->name }}</td>
                <td>{{ $dog->gender }}</td>
                <td>{{ $dog->age }}</td>
                <td>
                    <form action="{{ route('dogs.destroy', $dog->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('dogs.edit', $dog->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

@endsection
