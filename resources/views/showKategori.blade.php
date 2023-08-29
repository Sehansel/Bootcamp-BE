<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Show Kategori</title>
</head>
<body>
    <div class = "d-flex m-5">
        @foreach ($kategori as $kategori)
            <div class="card ms-5" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">{{$kategori->namaKategori}}</h5>
                <a href="{{route('kategoriDetail', ['id'=> $kategori->id])}}" class="btn btn-primary">See Detail</a>
                    <div class="mt-2">
                        <a href="{{route('editKategori', ['id'=> $kategori->id])}}" class="btn btn-success">Update</a>
                        <form method="POST" action="{{route('deleteKategori', ['id'=> $kategori->id])}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div> 
        @endforeach
    </div>      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>