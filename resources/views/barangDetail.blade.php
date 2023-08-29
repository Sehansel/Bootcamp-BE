<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Book Detail</title>
</head>
<body>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
        <img src="{{asset('/storage/kategori/'.$barang->image)}}" class="img-fluid" alt="...">
        <h5 class="card-title">{{$barang->namaBarang}}</h5>
        <a href="{{route('kategoriDetail', ['id'=>$barang->kategori->id])}}" class="card-text">{{$barang->kategori->namaKategori}}</a>
        <p class="card-text">Rp {{$barang->price}}</p>
        <p class="card-text">{{$barang->stock}}</p>
        </div>
    </div>      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>