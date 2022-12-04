@extends('template.main')
@section('container')
    
<h1>Ini About Aku</h1>
<h3>{{$name}}</h3>
<h3><?= $email; ?></h3>
<img src="{{$img}}" alt="toby" width="200px">
@endsection
