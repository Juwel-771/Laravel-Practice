<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>From Validation</title>
</head>
<body>
    @if ($errors->any())
        {{$errors}}
    @endif
    <form action="" method="POST">
        @csrf
        Name: <input type="text" id="name" name="name"><br><br>
        Email: <input type="email" id="email" name="email"><br><br>
        Password: <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Submit">
    </form>
    @if (isset($data))
        @foreach ($data as $item)
            <ul>
                <li>{{$item}}</li>
            </ul>
        @endforeach
    @endif
</body>
</html>