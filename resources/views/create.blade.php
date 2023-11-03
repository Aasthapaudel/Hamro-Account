@extends('layout')

 @section('content')
<h1> Hamro ACCOUNT </h1>
<form action="/createsubmit" method="POST">
    @csrf
   <div class="form-group">
   <label for="name">Name:</label>
    <input type="name" class="form-control" id="name">
  </div>
   <div class="form-group">
   <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>

@endsection

