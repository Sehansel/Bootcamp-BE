<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form class="m-5" method="POST" action="{{route('register')}}">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        @error('name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="mb-3">
          <label for="email" class="form-label">email</label>
          <input type="text" class="form-control" id="email" name="email">
        </div>
        @error('email')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="mb-3">
            <label for="phone-number" class="form-label">phone number</label>
            <input type="text" class="form-control" id="phone-number" name="phoneNumber">
          </div>
        @error('phoneNumber')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="mb-3">
          <label for="password" class="form-label">password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        @error('password')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>   
</body>
</html>