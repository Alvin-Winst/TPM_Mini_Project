<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <!-- <h1>HOME</h1>
    <h2>Home</h2>
    <h3>HomE</h3>
    <h4>hOMe</h4>
    <h5>hoMe</h5>
    <h6>homE</h6>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, quasi pariatur, minima commodi ipsum consectetur adipisci quod est consequatur tempora sunt molestiae ducimus laboriosam quia dignissimos saepe qui vitae? Voluptates.</p>
    <a href="https://www.google.com/" target="blank">Google</a>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores in cumque ut obcaecati assumenda rerum suscipit est deleniti tenetur atque <br>consequuntur quod, ipsum autem omnis! Dignissimos aut harum ipsa assumenda! <hr></p>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
        </tr>
        <tr>
            <td>Yeremia</td>
            <td>20</td>
        </tr>
    </table>
    <div style="background-color:blue">
        Halo World
    </div>
    <ul>
        <li>hola</li>
        <li>halo</li>
    </ul>
    <ol>
        <li>hola</li>
        <li>halo</li>
    </ol>

    <form action="">
        <input type="text">
        <input type="password">
        <input type="number">
        <button>submit</button>
    </form> -->
    @extends('template')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  @section('title','Welcome')
  @section('body')

  @foreach ($laundromat as $laundry)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$laundry->No_Bon}}</h5>
                <h5 class="card-title">{{$laundry->Nama}}</h5>
                <p class="card-text">Berat: {{$laundry->Berat}}</p>
                <p class="card-text">Harga per Kg: {{$laundry->Harga_Satuan}}</p>
                <p class="card-text">Harga Total: {{$laundry->Harga_Total}}</p>
                <p class="card-text">Tanggal Masuk: {{$laundry->Tgl_Masuk}}</p>
                <p class="card-text">Tanggal Keluar: {{$laundry->Tgl_Keluar}}</p>
                <p class="card-text">Sudah Membayar: {{$laundry->DP}}</p>
                <p class="card-text">Tanggal Ambil: {{$laundry->Tgl_Ambil}}</p>
                <a href="#" class="btn btn-primary">Detail Laundry</a>
                <a href="{{route('edit',$laundry->No_Bon)}}" class="btn btn-warning">Edit</a>
                <form action="/delete-laundry/{{$laundry->No_Bon}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @endforeach

    <div>
        <a href="{{route('create')}}" class="btn btn-success">Buat Data Baru</a>
        <a href="{{route('create-list')}}" class="btn btn-success">Buat Detail Laundry</a>
    </div>
  
{{-- {{$i =1}}
@if($i>0)
{{$i}}
@endif

@for($i=0;$i<2;$i++)
{{$i}}
@endfor --}}

  @endsection
</body>
</html>