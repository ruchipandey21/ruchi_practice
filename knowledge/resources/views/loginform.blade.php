<!DOCTYPE html>
<html>
<head>

	
    <title>loginform</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
     <link rel="stylesheet" href="{{url('css/styles.css')}}">
    
  </style>

</head>
<body>
   

   
<div class="login-page">
  <div class="form">
       @if ($errors->any())
     @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        
           
                <p>{{ $error }}</p>
           
       
    </div>
     @endforeach
@endif
    <form class="login-form" action="{{url('login1')}}" id="loginform" method="post">
     <input type="text" name="email" class="form-control" placeholder="Enter Email Id">
     <input type="password" name="password" class="form-control" placeholder="Enter Password">
      <button>login</button>
      <p class="message">Not registered? <a href="form" style="color: blue;">Create</a>  <a href="reset_password">forget password</a></p>
    </form>
  </div>
</div>
</body>
<script type="text/javascript"> 
 $(document).ready(function(){
        $( "#loginform" ).validate({
     
  rules: {

   password: {
     // required: true
     },
       
email: {
     // required: true,
    //  email: true
             }
  }
           
     });
    });
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});</script>
</html>