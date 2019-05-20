<!DOCTYPE html>
<html>
<head>

  <title>Home Url Registration from</title>
  <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <style type="text/css">
        .error
        {
            color: red;
        }
    </style>

</head>
<body>


  <div class="container">
<div class="jumbotron text-center">
    @if ($errors->any())
     @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        <ul>
           
                <li>{{ $error }}</li>
           
        </ul>
    </div>
     @endforeach
@endif
<form action="add" id="loginform" method="post" enctype="multipart/form-data">
  <a href="{{url('logout')}}" class="btn btn-primary">logout</a>
  <div class="row">
    <div class="col-sm-6" >First name</div>
    <div class="col-sm-6" >Last name</div>
    
  </div>
<div class="row">
    <div class="col-sm-6" >  <input type="textbox" name="firstname" class="form-control" placeholder="Enter first name" >
</div>
<span></span>

    <div class="col-sm-6" >  <input type="textbox" name="lastname" class="form-control"placeholder="Enter last name" ></div>
   </div>
   <div class="row">
    <div class="col-sm-6" >Mobile</div>
    <div class="col-sm-6" >Alternet Mobile</div>
  </div>
  <div class="row">
    <div class="col-sm-6" ><input type="textbox" name="mobile" class="form-control"placeholder="Teliphone/Mobile"></div>
    <div class="col-sm-6" ><input type="textbox" name="amobile" class="form-control"placeholder="Blood group" ></div>
  </div>
  <div class="row">
    <div class="col-sm-6" >Email Id</div>
    <div class="col-sm-6" >Collage name</div>
  </div>
 
  <div class="row">
    <div class="col-sm-6" ><input type="text" name="email" value="" class="form-control" placeholder="Enter Email Id" ></div>
    <div class="col-sm-6" ><input type="textbox" name="cname" class="form-control" placeholder="Enter Height"></div>
  </div>
  <div class="row">
    <div class="col-sm-6" >Address(Present)</div>
    <div class="col-sm-6" >Address(Permanent)</div>
  <div class="col-sm-6" ><textarea class="form-control" name="Addressper" rows="5"placeholder="enter" ></textarea></div>
    <div class="col-sm-6" ><textarea class="form-control" name="Addressp" rows="5"placeholder="enter" ></textarea></div>
  </div>
     <div class="row">
    <div class="col-sm-6" >Branch</div> <div class="col-sm-6" ><select name="branch"><option>CSE</option><option>IT</option><option>EC</option><option>ME</option></select></div></div>
   <div class="row">
    <div class="col-sm-6" >Known Technology</div>
    <div class="col-sm-6" ><div class="checkbox">
     <input type="checkbox" name="technology[]" value="java">JAVA<input type="checkbox" name="technology[]" value="php">PHP<input type="checkbox" name="technology[]" value="html">HTML<input type="checkbox" name="technology[]" value="css">CSS<input type="checkbox" name="technology[]" value="laravel">LARAVEL </div></div></div>

     <div class="row">
    <div class="col-sm-6" ><label for="file">Upload Resume:</label></div> <div class="col-sm-6" ><div class="form-group">
     
     <input type="file"  id="file" name="file">
   </div></div></div>
    <div class="row"> <div class="col-sm-12" > <button type="submit" class="btn btn-primary">Submit</button> </div></div>
      </div>
    </div>
    </div>
   
 



 
</div>
 </div>
      
 </form>

<script type="text/javascript">

    $(document).ready(function(){
        $( "#loginform" ).validate({
     
  rules: {

   firstname: {
      required: true
     },
             lastname: {
      required: true
    },
             mobile: {
      required: true,
       number: true
             },
              amobile: {
      required: true,
       number: true
             },
   Addressper: {
      required: true,
      maxlength: 50
      
             },
  Addressp: {
      required: true,
     maxlength: 50
             },
email: {
      required: true,
      email: true
             },
             cname: {
      required: true
     },
             branch: {
      required: true
      },
             file: {
      required: false,
     extension: "doc|docx"
             },
             technology: {
      required: true

     }
          
              
}
           
     });
    });
</script>
</body>
</html>