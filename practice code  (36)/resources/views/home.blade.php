<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-green-700">
    <form action="" method="POST" class="bg-purple-300">
        @csrf
        Name: <input type="text" name="name" id="name"><br><br>
        Email: <input type="email" name="email" id="email"><br><br>
        Password: <input type="password" name="password" id="password"><br><br>
        Address: <input type="text" name="area" id="area"><br><br>
        <input type="submit" value="Submit">
    </form>
    <div class="bg-purple-400">
        <h1 class="text-red-700">Juwel Ahmed</h1>
    </div>
</body>
</html>