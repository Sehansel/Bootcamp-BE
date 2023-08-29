<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Add book</title>
</head>
<body>
<h1>Add Book</h1>
    <form class="m-5" method="POST" action="{{route('storeBarang')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nama-barang" class="form-label">Nama Barang</label>
          <input type="text" class="form-control" id="nama-barang" name="namaBarang">
        </div>
        @error('namaBarang')
          <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="mb-3">
          <label for="publisher" class="form-label">Kategori Barang</label>
          <select class="form-select" aria-label="publisher" name="namaKategori">
          <option selected>Open this select menu</option>
          @foreach ($kategori as $kategori)
            <option value="{{$kategori->id}}">{{$kategori->namaKategori}}</option>
          @endforeach
          </select>
        </div>
        @error('namaKategori')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="mb-3">
          <label for="price" class="form-label">Price</label>
          <input type="number" class="form-control" id="price" name="price">
        </div>
        @error('price')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="mb-3">
          <label for="stock" class="form-label">Stock</label>
          <input type="number" class="form-control" id="stock" name="stock">
        </div>
        @error('stock')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <input type="file" class="form-control" id="image" name="image">
        </div>
        @error('image')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>