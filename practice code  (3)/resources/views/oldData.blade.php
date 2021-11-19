<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practice Session</title>
</head>
<body>
    {{-- @if ($errors->any())
        {{$errors}}
    @endif --}}

    {{-- Doesn't work at laravel 8 --}}
    {{-- @if ($errors->any())
        @foreach ($errors->any() as $message)
            {{$message}}
        @endforeach        
    @endif --}}

    {{-- Doesn't work ar laravel 8 --}}
    {{-- @if ($errors)
    <ul>
        @foreach ($errors->any() as $message)
            <li>{{$message}}</li>
        @endforeach
    </ul>
    @endif --}}

    {{-- @if ($errors->any())
        {{$errors->first('name')}}
    @endif --}}
    {{-- @if ($errors->any())
        @if ($errors->has('email'))
            <h5>There is error in email</h5>
        @endif
    @endif --}}
    <form action="" method="POST">
        @csrf
        First Name: <input type="text" name="name" id="name" value="{{old('name')}}"><br><br>
        Last Name: <input type="text" name="last" id="last" value="{{old('last')}}"><br><br>
        E-mail: <input type="email" name="email" id="email" value="{{old('email')}}""><br><br>
        Phone Number: <input type="number" name="number" id="number" value="{{old('number')}}"><br><br>
        Address: <input type="text" name="address" id="address" value="{{old('address')}}"><br><br>
        Day Select: <input type="checkbox" name="day" id="day" value="{{old('day')}}"><br><br>
        Password: <input type="password" name="password" id="password" value="{{old('password')}}"><br><br>
        Commnets: <input type="text" name="comment" id="commnet" value="{{old('commnet')}}"><br><br>
        <input type="submit" value="Submit">
    </form>
    {{-- @if (isset($data))
        @foreach ($data as $item)
            <h5>{{$item}}</h5>
        @endforeach
    @endif --}}
</body>
</html>