@extends('layouts.posts')
@section('title','Single Record')
@section('container')
        
    @endsection
    <h2>Show Data</h2>
    <ul class="list-group">
    <li class="list-group-item active">{{$data['body']}}</li>
      
    </ul>
    @endsection
