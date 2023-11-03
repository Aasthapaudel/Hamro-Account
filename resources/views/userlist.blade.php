@extends('layout')

 @section('content')
<h1> Users page</h1>
<!-- <?php print_r($user) ?> -->
<div>
    <ul>
       @foreach($user as $u)
       <li><span>{{$u->id}}</span><span>{{$u->name}}</span><span>{{$u->email}}</span></li>
       @endforeach
    </ul>
</div>
@endsection



