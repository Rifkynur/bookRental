@extends('layouts.mainLayout')

@section('title','Categories-Deleted')

@section('content')
    <h2>Deleted Category List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deletedCategories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td class="text-capitalize">{{ $category->name }}</td>
                <td>
                    <a href="/categories-restore/{{ $category->slug }}" class="btn btn-warning">Restore</a>
                    {{-- <a href="/categories-delete/{{ $category->slug }}" class="btn btn-danger">Delete</a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
    