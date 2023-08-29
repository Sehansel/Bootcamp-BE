<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
            </li>
            @can('is_admin')
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('addBarang')}}">Add Barang</a>
                </li>
            @endcan
            </ul>
            <a href="{{route('cartList')}}" class="flex items-center">
            <svg style="width: 3em; height: 3em;" class="text-purple-600" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg> 
            </a>
        <div class="d-flex">
            @auth
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <button class="btn btn-outline-danger" type="submit">logout</button>
            </form>
            @else
                <a href="{{route('login')}}" class="btn btn-outline-success" type="submit">login</a>
            @endauth
        </div>
      </div>
    </div>
  </nav>
    <div class = "d-flex m-5">
        @foreach ($barang as $barang)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <img src="{{asset('/storage/kategori/'.$barang->image)}}" class="img-fluid" alt="...">
                <h5 class="card-title">{{$barang->namaBarang}}</h5>
                <a href="{{route('barangDetail', ['id'=> $barang->id])}}" class="btn btn-primary">See Detail</a>
                @can('is_admin')
                <div class="mt-3">
                    <a href="{{route('editBarang', ['id'=> $barang->id])}}" class="btn btn-success">Update</a>
                    <form method="POST" action="{{route('deleteBarang', ['id'=> $barang->id])}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
                @endcan
                <form action="{{ route('cartStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $barang->id }}" name="id">
                    <input type="hidden" value="{{ $barang->namaBarang }}" name="namaBarang">
                    <input type="hidden" value="{{ $barang->price }}" name="price">
                    <input type="hidden" value="{{ $barang->image }}"  name="image">
                    <input type="hidden" value="1" name="stock">
                    <button class="btn btn-primary">Add To Cart</button>
                </form>
                </div>
            </div> 
        @endforeach
    </div>      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>