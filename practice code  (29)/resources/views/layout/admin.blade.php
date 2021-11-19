<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @yield('page-name')
    @yield('page-data')
    @yield('page-footer')

    @section('default-content')
       <h3>This is defaoult Content...!!!</h3>
       <h3>This is form admin layout which is declared by section</h3> 
    @show
</body>
</html>