<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input</title>
</head>
<body>
    {{-- @if ($errors->any())
        {{$errors}}
    @endif --}}
    <form action="" method="POST">
            @csrf
            @error('name')
                {{$message}}
            @enderror
            <br>
            Name: <input type="text" name="name" id="name"><br><br>
            @error('number')
                {{$message}}
            @enderror
            <br>
            Id: <input type="text" name="number" id="number"><br><br>
            @error('email')
                {{$message}}
            @enderror
            <br>
            E-mail: <input type="text" name="email" id="email"><br><br>
            @error('password')
                {{$message}}
            @enderror
            <br>
            Password: <input type="password" name="password" id="password"><br><br>
            <input type="submit" value="Submit">
    </form>
    @if (isset($data))
        @foreach ($data as $item)
            <h3>{{$item}}</h3>
        @endforeach
    @endif
</body>
</html>