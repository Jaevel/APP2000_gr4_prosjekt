<!DOCTYPE html>
<html>
<head>
<title>Login Form - Tutsmake.com</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">

</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Samkjøring AS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/test">Hjem</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/varslinger">Varslinger</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#logginn">Logg inn</a>
            <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/omoss">Om oss</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Welcome back!</h3>
               <form action="{{url('post-login')}}" method="POST" id="logForm">

                 {{ csrf_field() }}

                <div class="form-label-group">
                  <input type="email" name="epost" id="inputEmail" class="form-control" placeholder="Epost addresse" >
                  <label for="inputEmail">Epost adresse</label>

                  @if ($errors->has('epost'))
                  <span class="error">{{ $errors->first('epost') }}</span>
                  @endif
                </div>

                <div class="form-label-group">
                  <input type="password" name="passord" id="inputPassword" class="form-control" placeholder="Passord">
                  <label for="inputPassword">Passord</label>

                  @if ($errors->has('passord'))
                  <span class="error">{{ $errors->first('passord') }}</span>
                  @endif
                </div>

                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign In</button>
                <div class="text-center">If you have an account?
                  <a class="small" href="{{url('registration')}}">Sign Up</a></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
