<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime Data</title>
</head>

<body>

    @foreach ($ch as $chr)
        {{$chr->id}}
        {{$chr->name}}
        {{$chr->power}}
        {{$chr->city}}
        <br>
        <br>
    @endforeach 

    {{ $ch->links() }}
    {{-- {{$charac->id}}
    {{$charac->name}}
    {{$charac->power}}
    {{$charac->city}} --}}
    <br>
    <br>
</body>

</html>
