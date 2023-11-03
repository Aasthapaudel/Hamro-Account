<html>
    <head>
        <!-- <script src="{{asset('js/app.js')}}"> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->


     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="{{asset('css/custom1.css')}}">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

    <body>
        <div class="header">
            @section('header')

            <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hamro ACCOUNT</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="list">Users List</a></li>

      <li><a href="login">Login</a></li>
      <li><a href="create">Create Account</a></li>
    </ul>
  </div>
</nav>
 @show
        </div>
<div class="content">
    @section('content')
<h1>Content part</h1>
@show
</div>

<div class="footer">
@section('footer')
    <h1> Footer part</h1>
    @show
</div>

    </body>
</html>
