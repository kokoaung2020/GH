@extends('layouts.master')

@section('title','about')

@section('css')
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
@endsection

@section('content')

<h2>Hello</h2>

<p class="text">Thiss is about page</p>

@endsection

@section('js')
    <script src="js/about.js"></script>
@endsection