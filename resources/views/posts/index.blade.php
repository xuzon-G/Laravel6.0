@extends('layouts.posts')
@yield('title','View all the datas')
@component('components.message')
This is a warning and danger zone
    
@endcomponent
@section('content')  
<ul>

<li>{{$data[0]['name']}}</li>

</ul>  
@endsection
