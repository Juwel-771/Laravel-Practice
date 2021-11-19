@extends('layout.user')

@section('navbar')
<div class="topnav">
    <a class="active" href="#home">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
  
  <div style="padding-left:16px">
    <h2>Top Navigation Example</h2>
    <p>Some content..</p>
  </div>
@endsection

@section('register')
<x-include.register />    
@endsection
