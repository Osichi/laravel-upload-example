<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >
</head>
  <body>
    <style>
        body {
    background-color: black;
}
nav, footer {
    background-color: green;
}

    </style>
    <nav>
        <img src="https://www.monsterenergy.com/img/home/monster-logo.png" alt="">
    <button class="btn btn-warning"><a  href="/add">Feltöltés</a></button>
    </nav>
    <div class="container">
  <div class="row">
  @foreach($products as $p)
  <div class="col-md-4">
  <div class="card" >
    <img src='{{$p->kep}}' height="150px" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">{{$p->name}}</h5>
      <ul>
        <li>{{$p->leiras}}</li>
        <li>{{$p->ar}}</li>
      </ul>
      <a href="{{url('/deleteP/'.$p->id) }}" onclick="return confirm('Biztos törölni akarod?')" class="btn btn-danger">Törlés</a>
    </div>
  </div>
  </div>
  @endforeach
  </div>
  </div>
  <footer>
    <p>@Valami</p>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>