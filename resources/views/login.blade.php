<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <title>Rental Buku | Login</title>
  </head>
 
  <body class="container bg-black">
      @if (session('inactive'))
            <div class="alert alert-warning mt-4">
                {{ session('inactive') }}
            </div>
      @endif
      @error('failed')
      <div class="alert alert-danger mt-4">
        {{ $message }}
    </div>
      @enderror
    <div class="main d-flex justify-content-center align-items-center">
        <form action="" method="POST" class="login-form p-4">
            @csrf
            <h1>Login Form</h1>
            <div class="">
                <label for="" class="form-label">Username</label>
                <input type="text" name="username" id="" class="form-control" placeholder="masukan username" >
                @error('username')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" id="" class="form-control" placeholder="masukan password" required>
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button class="btn btn-primary">Login</button>
            <div>
                <p class="text-center fw-bold">Don't have an account ? <a href="/register">Register</a></p>
            </div>
        </form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>