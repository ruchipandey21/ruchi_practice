


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
  </ul>
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
 <p style="text-align: right;">Already have an account? <a href="loginform"><button class="btn btn-primary">Login</button></a></p>
<div class="login-page">
  <center> <h1>Create an Account</h1></center> 
  <center>  <p>Sign up to start editing your Donation Form</p></center> 
  <div class="form">
    <form action="{{url('insert')}}"  method="post" id="registerform">
     <input type="text" name="name" class="form-control" placeholder="Enter Name">
   <input type="text" name="email" class="form-control" placeholder="Enter Email Id">
    <input type="password" name="password" class="form-control" placeholder="Enter Password">
    
      <button>AGREE & Sign Up</button>
      
    </form>
  </div>
</div>
</body>
<script type="text/javascript"> 
 $(document).ready(function(){
        $( "#registerform" ).validate({
     
  rules: {

   password: {
      required: true
     },
     name:{
      required: true
     },
     email:{
      required: true
     },
       

  }
           
     });
    });
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});</script>
</html>
