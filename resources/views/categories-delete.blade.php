@extends('layouts.mainLayout')

@section('title','Categories-Delete')

@section('content')
    <h2>Are You Sure To Delete {{ $category->name }} ?</h2>

    <div>
        <form action="/categories-delete/{{ $category->slug }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Yes</button>
            <a href="/categories" class="btn btn-primary">No</a>
        </form>
    </div>

@endsection
    