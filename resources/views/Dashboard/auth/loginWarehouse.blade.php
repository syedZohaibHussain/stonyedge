<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
     <style type="text/css">
.error{
  color: red;
  font-size: 12px;
  border-color:red;
} 

</style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Maqaami Warehouse Panel</a>
  
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      @if (session('error'))
                        <div class="alert alert-danger text-2" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

      <form method="POST" action="{{ route('login') }}"id="form">
                        @csrf

        <div class="form-group row">
          <!-- <input type="email" class="form-control" placeholder="Email"> -->
              <input id="email" type="email"placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <!-- <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div> -->
        </div>
        <div class="form-group row">
          <!-- <input type="password" class="form-control" placeholder="Password"> -->
              <input id="password" type="password"placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
         <!--  <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div> -->
        </div>
        <!-- <div class="row"> -->
         <div class="form-group row">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        </div>
          <!-- /.col -->
          <div class="form-group row">
            <button type="submit" class="btn btn-primary ">Sign In</button>
          </div>
            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
          <!-- /.col -->
        <!-- </div> -->
      </form>

  
      <!-- /.social-auth-links -->

   <!--    <p class="mb-1">
       
        @if (Route::has('password.request'))
         <a href="{{ route('password.request') }}">I forgot my password</a>
                                  
                                @endif
      </p> -->
    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>



$(document).ready(function () {



$('#form').validate({ // initialize the plugin

    rules: {

         email: {

            required: true,
            noHTMLtags: true, 
            email:true,
           regex:/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/, 
          
        },

     
         password: {

            required: true,
              minlength: 8,
             maxlength: 15,
              noHTMLtags: true,
              onlyChar:true,
            
        },
        
    
    }
    

});
$.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        "Please enter a valid email address."
);


  $.validator.addMethod("noHTML", function(value, element) {
        return this.optional(element) || /^([a-z0-9]+)$/.test(value);
    }, "No HTML tags are allowed!");

$.validator.addMethod("onlyChar", function(value, element) {
        return this.optional(element) || /^\s*[a-zA-Z0-9,\s]+\s*$/.test(value);
    }, "No special characters are allowed");

jQuery.validator.addMethod("noHTMLtags", function(value, element){
    if(this.optional(element) || /<\/?[^>]+(>|$)/g.test(value)){
        return false;
    } else {
        return true;
    }
}, "HTML tags are Not allowed.");

});

</script>
</body>
</html>
