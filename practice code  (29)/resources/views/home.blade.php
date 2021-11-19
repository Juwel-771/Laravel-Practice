@extends('layout.user')
{{-- @extends('layout.admin') --}}

@section('title','Home')

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
@section('page-name')
    <h3>Non-Profit Charity Management System</h3>
@endsection

@section('page-data')
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus, enim nesciunt. Cumque, et non?</p>
@endsection

@section('page-footer')
    <span>All Rights Reserved to @2018</span>
@endsection
@section('form')
    <h3>Here is your login form: </h3>
    <x-include.form/>
@endsection

@section('register')
    <h3>Register To your Login Form</h3>
    <x-include.register />
@endsection


