@extends('base')

@section('title', 'Hello City ' . env("APP_NAME"))

@section('content')
<h1>Hello from Galsen</h1>

<p>It's currently {{ date('h:i A') }} </p>
@endsection