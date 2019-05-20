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
    
<form action="{{url('update')}}" id="loginform" method="post">
 
  <div class="row">
     <div class="col-sm-1" >id</div>
    <div class="col-sm-5" >First name</div>
    <div class="col-sm-6" >Last name</div>
    
  </div>
<div class="row">
    <div class="col-sm-1" >  <input type="textbox" name="id" class="form-control" value="{{$data->id}}" readonly ></div>
    <div class="col-sm-5" >  <input type="textbox" name="firstname" class="form-control" placeholder="Enter first name" value="{{$data->firstname}}" >
</div>


    <div class="col-sm-6" >  <input type="textbox" name="lastname" class="form-control"placeholder="Enter last name" value="{{$data->lastname}}"  ></div>
   </div>
   <div class="row">
    <div class="col-sm-6" >Mobile</div>
    <div class="col-sm-6" >Alternet Mobile</div>
  </div>
  <div class="row">
    <div class="col-sm-6" ><input type="textbox" name="mobile" class="form-control"placeholder="Teliphone/Mobile" value="{{$data->mobile}}" ></div>
    <div class="col-sm-6" ><input type="textbox" name="amobile" class="form-control"placeholder="Blood group" value="{{$data->amobile}}"value="{{$data->email}}"  ></div>
  </div>
  <div class="row">
    <div class="col-sm-6" >Email Id</div>
    <div class="col-sm-6" >Collage name</div>
  </div>
 
  <div class="row">
    <div class="col-sm-6" ><input type="text" name="email" value="{{$data->email}}" class="form-control" placeholder="Enter Email Id" readonly ></div>
    <div class="col-sm-6" ><input type="textbox" name="cname" class="form-control" placeholder="Enter Height" value="{{$data->cname}}" ></div>
  </div>
  <div class="row">
    <div class="col-sm-6" >Address(Present)</div>
    <div class="col-sm-6" >Address(Permanent)</div>
  <div class="col-sm-6" ><textarea class="form-control" name="Addressper" rows="5"placeholder="enter"  >{{$data->Addressper}}</textarea></div>
    <div class="col-sm-6" ><textarea class="form-control" name="Addressp" rows="5"placeholder="enter"  >{{$data->Addressp}}</textarea></div>
  </div>
     <div class="row">
    <div class="col-sm-6" >Branch</div> <div class="col-sm-6" ><select name="branch"  ><option>CSE</option><option>IT</option><option>EC</option><option>ME</option></select></div></div>
   <div class="row">
    <div class="col-sm-6" >Known Technology</div>
    <div class="col-sm-6" >
      <label>
        <input type="checkbox" name="technology[]" 
      {{in_array("css", $tech) ? 'checked':''}}   
     value="css">css</label>
     
    
     
      <label><input type="checkbox" name="technology[]"   
       {{in_array("laravel", $tech) ? 'checked':''}}
        value="laravel">laravel</label>
      <label><input type="checkbox" name="technology[]"   
       {{in_array("php", $tech) ? 'checked':''}}
        value="php">PHP</label>
         <label><input type="checkbox" name="technology[]"   
       {{in_array("html", $tech) ? 'checked':''}}
        value="html">HTML</label>
         <label><input type="checkbox" name="technology[]"   
       {{in_array("java", $tech) ? 'checked':''}}
        value="java">JAVA</label>
   </div>
 </div>
     <div class="row">
    <div class="col-sm-6" >Resume</div> 
    <div class="col-sm-6" >
      <a href="{{asset('storage')}}/{{$data->file}}">View Resume</a>
    </div></div>
  <div class="row">
    <div class="col-sm-6" >Resume</div> <div class="col-sm-6" ><input type="file" name="file" value="{{$data->file}}" ></div></div>
    <div class="row"> <div class="col-sm-12" > <button type="submit" class="btn btn-primary">Submit</button> </div></div></div>
    </div>
    </div>
   
 



 
</div>
 </div>
      
 </form>



</body>
</html>