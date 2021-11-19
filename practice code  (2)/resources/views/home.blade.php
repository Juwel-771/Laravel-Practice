<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Blade</title>
</head>
<body>

    {{-- @if ($errors->any())
        {{$errors}}
    @endif --}}

    {{-- @if ($errors)
    <ul>
        @foreach ($errors->any() as $message)
            <li>{{$message}}</li>
        @endforeach
    </ul>
    @endif --}}

    {{-- @if ($errors->any())
        {{$errors->first('email')}}
    @endif --}}

    {{-- @if ($errors->any())
        @if ($errors->has('email'))
            <h3>There is Error in Email.</h3>
        @endif
    @endif --}}
    
    <form action="" method="POST">
        @csrf
        Name: <input type="text" name="name" id="name"><br><br>
        {{-- @if ($errors)
        <ul>
            @foreach ($errors->get('name') as $message)
            <li>{{$message}}</li>
            @endforeach
        </ul>
        @endif --}}
        E-mail: <input type="email" name="email" id="email"><br><br>
        @error('email')
            {{$message}}
            <br>
        @enderror
        Password: <input type="password" name="password" id="password"><br><br>
        @error('password')
            {{$message}}
            <br>
        @enderror
        <input type="submit" value="Submit">
    </form>
    @if (isset($data))
        @foreach ($data as $item)
            <h2>{{$item}}</h2>
        @endforeach
    @endif
</body>
</html>