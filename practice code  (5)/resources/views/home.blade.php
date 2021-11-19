<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custome Blade</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        Name: <input type="text" name="name" id="name"><br><br>
        @error('name')
            {{$message}}
        @enderror
        <br>
        E-mail: <input type="email" name="email" id="email"><br><br>
        @error('email')
            {{$message}}
        @enderror
        <br>
        Address: <input type="text" name="address" id="address"><br><br>
        @error('address')
            {{$message}}
        @enderror
        <br>
        Password: <input type="password" name="password" id="password"><br><br>
        @error('password')
            {{$message}}
        @enderror
        <br>
        <input type="submit" value="Submit">
        @if (isset($data))
            @foreach ($data as $item)
                <h3>{{$item}}</h3>
            @endforeach
        @endif
    </form>
</body>
</html>