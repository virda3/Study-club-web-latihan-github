<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
@extends('layout.app')
@section('title')
<h1>halaman latihan layout: home</h1>
@section('content')
<p>ini adalah halaman home</p>
<p>selamat datang</p>
@endsection

@include('layout.componen')
</body>
</html>