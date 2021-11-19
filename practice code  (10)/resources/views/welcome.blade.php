<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
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
        <br>
        Password: <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="Submit">
    </form>
    @if (isset($data))
        <ul>
            @foreach ($data as $item)
                <li>{{$item}}</li>        
            @endforeach
        </ul>
    @endif
</body>
</html>