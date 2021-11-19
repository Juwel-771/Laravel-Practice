<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies Name</title>
</head>
<body>
    @foreach ($mov as $item)
        {{$item->id}}
        {{$item->name}}
        {{$item->time}}
        {{$item->status}}
        <br>
    @endforeach
</body>
</html>