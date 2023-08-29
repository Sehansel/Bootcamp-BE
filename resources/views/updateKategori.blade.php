<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Update Kategori</title>
</head>
<body>
<h1>Update Kategori</h1>
    <form class="m-5" method="POST" action="{{route('updateKategori', ['id'=> $kategori->id])}}">
        @csrf
        @method('PATCH')
        <div class="mb-3">
          <label for="nama-kategori" class="form-label">Nama Kategori</label>
          <input type="text" class="form-control" id="nama-kategori" name="namaKategori" value="{{$kategori->namaKategori}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>