<!DOCTYPE html>
<html>
<head>

	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <style type="text/css">
       
    </style>

</head>
<body>
    <form action="insertform"  method="post">
 <input type="hidden" name="_token" value="{{ csrf_token()}}">
 
 	<div class="container">
<div class="jumbotron text-center">
	<h1 style="color: gray">SignUp Form</h1>
	 <div class="row">
    <div class="col-sm-6" >name</div> <div class="col-sm-6" ><input type="text" name="Name" class="form-control" placeholder="Enter Full Name"></div></div>
     <div class="row">
    <div class="col-sm-6" >Role</div> <div class="col-sm-6" ><select name="role"><option>role</option><option>admin</option><option>supper admin</option><option>user</option></select></div></div>
 <div class="row">
    <div class="col-sm-6" >Email Id</div> <div class="col-sm-6" ><input type="text" name="email" class="form-control" placeholder="Enter Email Id"></div></div>
    <div class="row">
    <div class="col-sm-6" >Password</div> <div class="col-sm-6" ><input type="text" name="password" class="form-control" placeholder="Enter Password"></div></div>
    
    
 <div class="row"> <div class="col-sm-11" > <button type="submit" class="btn btn-primary">login</button> </div></div>
 </div></div>
   
 </form>
</body>
</html>