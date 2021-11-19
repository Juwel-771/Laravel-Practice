<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        Name: <input type="text" id="name" name="name"><br><br>
        E-mail: <input type="email" id="email" name="email"><br><br>
        Password: <input type="password" id="password" name="password"><br><br>
        Address: <input type="text" name="area" id="area"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>