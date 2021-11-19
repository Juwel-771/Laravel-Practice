<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
</head>

<body>
    {{-- @if ($errors->any())
    {{$errors}}
    @endif --}}

    {{-- @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $msg)
                <li>{{$msg}}</li>
    @endforeach
    </ul>
    @endif --}}

    {{-- @if ($errors->any())
        {{$errors->first('email')}}
    @endif --}}

    {{-- @if ($errors->any())
    @if ($errors->has('email'))
        <h3>There is error in email.</h3>
    @endif
    @endif  --}}
    <form action="" method="POST">
        @csrf
        Name: <input type="text" name="name" id="name"><br><br>
        {{-- @if ($errors->any())
        <ul>
            @foreach ($errors->get('name') as $msg)
            <li>{{$msg}}</li>
            @endforeach
        </ul>
        @endif --}}
        @error('name')
            <span>{{$message}}</span><br>
        @enderror
        E-mail: <input type="email" name="email" id="email"><br><br>
        {{-- @if ($errors->any())
        <ul>
            @foreach ($errors->get('email') as $msg)
            <li>{{$msg}}</li>
            @endforeach
        </ul>
        @endif --}}
        @error('email')
            <span>{{$message}}</span><br>
        @enderror
        Password: <input type="password" name="password" id="password"><br><br>
        {{-- @if ($errors->any())
        <ul>
            @foreach ($errors->get('password') as $msg)
            <li>{{$msg}}</li>
            @endforeach
        </ul>
        @endif --}}
        @error('password')
            <span>{{$message}}</span><br>
        @enderror
        
        <input type="submit" value="Submit">
    </form>
    @if(isset($data))
    @foreach ($data as $item)
    {{$item}}
    @endforeach
    @endif
</body>

</html>
