@extends('dogs.layout')

@section('title')
    {{__('Add a Dog')}}
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Cat</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('dogs.index') }}">Back</a>
        </div>
    </div>
</div>

@if ( $errors->any() )
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your fields<br><br>
        <ul>
            @foreach ( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('dogs.store') }}" method="POST">
    @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" class="form-control" placeholder="Enter Gender" name="gender">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" class="form-control" placeholder="Enter Age" name="age">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
</form>

@endsection
