<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Department From</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        Name: <input type="text" name="name" id="name" value="{{old('name')}}"><br><br>
        E-mail: <input type="email" name="email" id="email" value="{{old('email')}}"><br><br>
        Address: <input type="text" name="address" id="address" value="{{old('address')}}"><br><br>
        Password: <input type="password" name="password" id="password" value="{{old('password')}}"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>