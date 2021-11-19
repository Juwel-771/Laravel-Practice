<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>
<body>
    @foreach ($stu as $item)
        {{$item->id}}
        {{$item->name}}
        {{$item->email}}
        {{$item->city}}
        {{$item->city}}
        <br>
        <br>
    @endforeach
</body>
</html>