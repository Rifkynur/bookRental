@extends('layouts.mainLayout')

@section('title','Dashboard')

@section('content')
    <h1>Wellcome, Admin</h1>
    <div class="row mt-5">
        <div class="col-6 col-lg-4 ">
            <div class="card-data px-3 card books">
                <i class="bi bi-book-half icon"></i>
                <div class="card-desc">
                    <h2 class="fs-5">Books</h2>
                    <p class="">{{ $book_count }}</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 ">
            <div class="card-data px-3 card categories ">
                <i class="bi bi-list-task icon"></i>
                <div class="card-desc">
                    <h2 class="fs-5">Categories</h2>
                    <p class="">{{ $category_count }}</p>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 ">
            <div class="card-data px-3 card users ">
                <i class="bi bi-people-fill icon"></i>
                <div class="card-desc">
                    <h2 class="fs-5">Users</h2>
                    <p class="">{{ $user_count }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <h3>#Rent Log</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>User</th>
                    <th>Book Title</th>
                    <th>Rent Date</th>
                    <th>Return Date</th>
                    <th>Actual Return Date</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>No data yet</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
    