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
        First Name: <input type="text" name="name" id="name" ><br><br>
        {{-- @error('name')
            {{$message}}
            <br><br>
        @enderror --}}

        @if ($errors->any())
            @foreach ($errors->get('name') as $message)
                {{$message}}
                <br><br>
            @endforeach
        @endif
        Last Name: <input type="text" name="last" id="last"><br><br>
        {{-- @error('last')
            {{$message}}
            <br><br>
        @enderror --}}
        @if ($errors->any())
            @foreach ($errors->get('last') as $message)
                {{$message}}
                <br><br>
            @endforeach
        @endif
        E-mail: <input type="email" name="email" id="email"><br><br>
        {{-- @error('email')
            {{$message}}
            <br><br>
        @enderror --}}
        @if ($errors->any())
            @foreach ($errors->get('email') as $message)
                {{$message}}
                <br><br>
            @endforeach
        @endif
        Phone Number: <input type="number" name="number" id="number"><br><br>
        {{-- @error('number')
            {{$message}}
            <br><br>
        @enderror --}}
        @if ($errors->any())
            @foreach ($errors->get('number') as $message)
                {{$message}}
                <br><br>
            @endforeach
        @endif
        Address: <input type="text" name="address" id="address"><br><br>
        {{-- @error('address')
            {{$message}}
            <br><br>
        @enderror --}}
        @if ($errors->any())
            @foreach ($errors->get('address') as $message)
                {{$message}}
                <br><br>
            @endforeach
        @endif
        Day Select: <input type="checkbox" name="day" id="day"><br><br>
        {{-- @error('day')
            {{$message}}
            <br><br>
        @enderror --}}
        @if ($errors->any())
            @foreach ($errors->get('day') as $message)
                {{$message}}
                <br><br>
            @endforeach
        @endif
        Password: <input type="password" name="password" id="password"><br><br>
        {{-- @error('password')
            {{$message}}
            <br><br>
        @enderror --}}
        @if ($errors->any())
            @foreach ($errors->get('password') as $message)
                {{$message}}
                <br><br>
            @endforeach
        @endif
        Commnets: <input type="text" name="comment" id="commnet"><br><br>
        {{-- @error('commnet')
            {{$message}}
        @enderror --}}

        @if ($errors->any())
            @foreach ($errors->get('comment') as $message)
                {{$message}}
                <br><br>
            @endforeach
        @endif
        <input type="submit" value="Submit">
    </form>
    @if (isset($data))
        @foreach ($data as $item)
            <h5>{{$item}}</h5>
        @endforeach
    @endif
</body>
</html>