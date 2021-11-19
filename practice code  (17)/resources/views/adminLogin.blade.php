<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
</head>
<body>
    @if ($errors->any())
    {{$errors}}        
    @endif
    <form action="" method="POST">
        @csrf
        Name: <input type="text" name="name" id="name"><br><br>
        E-mail: <input type="email" name="email" id="email"><br><br>
        Password: <input type="password" name="password1" id="password1"><br><br>
        <input type="submit" value="Submit">
    </form>
    @if(isset($data))
    @foreach ($data as $item)
        {{$item}}
    @endforeach
    @endif
</body>
</html>