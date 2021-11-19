<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Old Data</h3>
    <form action="" method="POST">
        @csrf
        Name: <input type="text" id="name" name="name" value="{{old('name')}}"><br><br>
        E-mail: <input type="email" id="email" name="email" value="{{old('email')}}"><br><br>
        Password: <input type="password" id="password" name="password" value="{{old('password')}}"><br><br>
        Address: <input type="text" name="area" id="area" value="{{old('area')}}"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>