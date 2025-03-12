@extends('layouts.mainLayout')

@section('title','Categories-Add')

@section('content')
    <h1>Add Categories</h1>
    <div class="mt-5">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="" method="POST" class="w-50 mx-auto border p-4">
            @csrf
            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="masukan category">
            </div>
            <button class="btn btn-success mt-3" type="submit">Save</button>
        </form>
    </div>
@endsection
    