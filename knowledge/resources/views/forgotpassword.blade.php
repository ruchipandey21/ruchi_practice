
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
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   <a class="navbar-brand" href="#">
    <img src="image/images.jpg" alt="Logo" style="width:40px;">
<li><a href="loginform">login</a></li>
  <li><a href="form">Create</a></li></ul>
</nav>
   @if ($errors->any())
     @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        <ul>
           
                <li>{{ $error }}</li>
           
        </ul>
    </div>
     @endforeach
@endif
   
<div class="login-page">
  <div class="form">
    <form action="sendForgotPasswordLink" id="loginform" method="post">
     <input type="text" name="email" class="form-control" placeholder="Enter Email Id">
    
      <button>Send</button>
      
    </form>
  </div>
</div>
</body>
<script type="text/javascript"> 
 $(document).ready(function(){
        $( "#loginform" ).validate({
     
  rules: {

   password: {
      required: true
     },
       

  }
           
     });
    });
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});</script>
</html>
