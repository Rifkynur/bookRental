@extends('layouts.mainLayout')

@section('title','Categories')

@section('content')
    <h1>Categories List</h1>
    @if (session('status'))
    <div class="alert alert-success">
      {{session('status')}}
    </div>
    @endif
    <div>
        <div class="my-4 d-flex justify-content-end">
            <a href="/categories-deleted" class="btn btn-secondary me-2">Deleted Data</a>
            <a href="/categories-add" class="btn btn-primary">Add Data</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="text-capitalize">{{ $category->name }}</td>
                    <td>
                        <a href="/categories-edit/{{ $category->slug }}" class="btn btn-warning">Edit</a>
                        <a href="/categories-delete/{{ $category->slug }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
    