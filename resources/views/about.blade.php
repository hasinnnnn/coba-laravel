@extends('layouts.main')
@section('container')
    <h1>ini about</h1>

    <h2>{{ $name }}</h2>
    <h3>{{ $email }}</h3>
    <h4>{{ $phone }}</h4>

    <img src="img/{{ $image }}" alt="nama" width="100">
@endsection
