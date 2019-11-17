<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
   

        <h2>@yield('title')</h2>
        @if (Session::has('message'))
        {{Session::get('message')}}
    @endif
        @if ($errors->any())
        <ul>
        @foreach ($errors->all() as $error)
            
        <li>{{$error}}</li>
            
        @endforeach
    </ul>
        @endif



        @yield('content')
    </div>
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>