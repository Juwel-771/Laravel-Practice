<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <h2></h2><br><br>
        Name: <input type="text" name="name" id="name"><br><br>
        E-mail: <input type="email" name="email" id="email"><br><br>
        Password: <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="submitl">
    </form>
</body>
</html>