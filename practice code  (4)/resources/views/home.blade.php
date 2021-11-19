<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation Practice</title>
</head>
<body>
    {{-- @if ($errors->any())
        {{$errors}}
    @endif --}}

    {{-- @if ($errors->any())
        @foreach ($errors->any() as $message)
            {{$message}}
        @endforeach
    @endif --}}

    {{-- @if ($errors->any())
        {{$errors->first('email')}}
    @endif --}}

    {{-- @if ($errors->any())
        @if ($errors->has('email'))
            <h3>You must fill E-mail field</h3>
        @endif
    @endif --}}
    <form action="" method="POST">
        @csrf
        Name: <input type="text" name="name" id="name"><br><br>
        @error('name')
            {{$message}}
            <br><br>
        @enderror
        Password: <input type="password" name="password" id="password"><br><br>
        E-mail: <input type="email" name="email" id="email"><br><br>
        Last: <input type="text" name="last" id="last"><br><br>
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