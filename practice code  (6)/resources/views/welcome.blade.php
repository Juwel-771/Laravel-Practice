<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custome Rule</title>
</head>

<body>
    <form action="" method="POST">
        @csrf
        @error('first')
        {{$message}}
        @enderror
        <br>
        First Name: <input type="text" name="first" id="first"><br><br>

        @error('last')
        {{$message}}
        @enderror
        <br>
        Last Name: <input type="text" name="last" id="last"><br><br>

        @error('nick')
        {{$message}}
        @enderror
        <br>
        Nick Name: <input type="text" name="nick" id="nick"><br><br>

        @error('age')
        {{$message}}
        @enderror
        <br>
        Age: <input type="number" name="age" id="age"><br><br>

        @error('address')
        {{$message}}
        @enderror
        <br>
        Address: <input type="text" name="address" id="address"><br><br>
        
        @error('school')
            {{$message}}
        @enderror
        <br>
        School Name: <input type="text" name="school" id="school"><br><br>
        
        {{-- Collge Name: <input type="text" name="collge" id="collge"><br><br>
        @error('collge')
        {{$message}}
        @enderror
        <br>
        Versity Name: <input type="text" name="versity" id="versity"><br><br>
        @error('versity')
        {{$message}}
        @enderror
        <br> --}}
        E-mail: <input type="email" name="email" id="email"><br><br>
        @error('email')
        {{$message}}
        @enderror
        <br>
        @error('password')
            {{$message}}
        @enderror
        <br>
        Password: <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="Submit">

        @if (isset($data))
            @foreach ($data as $item)
                <h4>{{$item}}</h4>
            @endforeach
        @endif
    </form>
</body>

</html>
