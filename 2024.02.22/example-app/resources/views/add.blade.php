<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
  <body>
    <style>
        body{
            background-color: green;
        }
    </style>
    <form action="{{route('AddProduct')}}" method="post">
    @csrf
    <div class="input-group mb-3">
        <input class="form-control form-control-lg fs-6" type="text" placeholder="Név" id="nev" name="nev" required>
</div>
        <div class="input-group mb-3">
        <input class="form-control form-control-lg fs-6" type="text" placeholder="Kép linkje" id="kep" name="kep">
</div>
        <div class="input-group mb-3">
        <textarea class="form-control form-control-lg fs-6" name="leiras" id="leiras" cols="30" rows="10"></textarea>
</div>
        <div class="input-group mb-3">
        <input class="form-control form-control-lg fs-6" type="number" placeholder="Ár" id="ar" name="ar" required>
</div>
        <button class="btn btn-lg w-100 mb-3">Hozzáadás</button>
    </form>
    <a href="/">Vissza a főoldalra</a>
  </body>
</html>