<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <label for="name">Name: </label><br>
        <input type="text" name="name" id="name" value="{{old('name')}}"><br><br>
        <label for="email">E-mail: </label><br>
        <input type="email" name="email" id="email" value="{{old('email')}}"><br><br>
        <label for="address">Address: </label><br>
        <input type="text" name="address" id="address" value="{{old('address')}}"><br><br>
        <label for="age">Age: </label><br>
        <input type="text" name="age" id="age" value="{{old('age')}}"><br><br>
        <label for="password">Password: </label><br>
        <input type="password" name="password" id="password" value="{{old('password')}}"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>