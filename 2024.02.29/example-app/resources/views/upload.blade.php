<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<form action="{{route('upload')}}" method="post">
        @csrf
        <div class="mb-3">
        <input class="form-control" type="text" id="name" name="name">
        </div>
        <div class="mb-3">
        <input class="form-control" type="email" id="email" name="email">
</div>
        <div class="mb-3">
        <input class="form-control" type="password" name="password" id="password">
</div>
        <button>Submit</button>
    </form>
    </body>
</html>