@extends('dogs.layout')

@section('title')
    {{__('Edit Dog')}}
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Dog</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('dogs.index') }}">Back</a>
            </div>
        </div>
    </div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your fields <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('dogs.update', $dog->id) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" value="{{ $dog->name }}" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" class="form-control" value="{{ $dog->gender }}" placeholder="Enter Gender" name="gender">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" class="form-control" value="{{ $dog->age }}" placeholder="Enter Age" name="age">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
