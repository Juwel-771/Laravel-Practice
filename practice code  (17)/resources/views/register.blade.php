<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    @if ($errors->any())
    {{$errors}}        
    @endif
    <form action="" method="POST">
        @csrf
        Name: <input type="text" name="name" id="nema" value="{{old('name')}}"><br><br>
        Email: <input type="text" name="email" id="email" value="{{ old('email')}}"><br><br>
        Password: <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="Submit">
    </form>
    @if (isset($data))
        @foreach ($data as $item)
            {{$item}}
        @endforeach
    @endif
</body>
</html>