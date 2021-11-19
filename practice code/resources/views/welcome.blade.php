<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
</head>
<body>
    @if ($errors->any())
        {{$errors}}
    @endif
    <form action="" method="POST">
        @csrf
        First Name: <input type="text" name="name" id="name"><br><br>
        Last Name: <input type="text" name="last" id="last"><br><br>
        E-mail <input type="email" name="email" id="email"><br><br>
        Address: <input type="text" name="address" id="address"><br><br>
        Password: <input type="password" name="password" id="pssword"><br><br>
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