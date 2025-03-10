<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <title>Rental Buku | Register</title>
  </head>
  <body class="container bg-black">
    @if (session('status'))
        <div class="alert alert-success mt-4">
            {{ session('status') }}
        </div>
    @endif
    <div class="main d-flex justify-content-center align-items-center">
        <form action="" method="POST" class="login-form p-4">
            @csrf
            <h1>Register Form</h1>
            <div class="">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="masukan username" required>
                @error('username')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>
            <div class="">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="masukan password" required>
                @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>
            <div class="">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="masukan phone" >
                @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="address" class="form-label">Address</label>
                <textarea name="address" id="address" cols="10" rows="3" class="form-control" placeholder="masukan address" required></textarea>
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button class="btn btn-primary">Register</button>
            <div>
                <p class="text-center fw-bold">Have an account? <a href="/login">Login</a></p>
            </div>
        </form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>