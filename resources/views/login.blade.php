@extends('layout')

 @section('content')
<h1>Welcome to Login page</h1>

<br>


<form action="/loginsubmit" method="POST">
    @csrf
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


