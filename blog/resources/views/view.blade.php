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
  <h1>View Data</h1>

<form action="{{url('update')}}" id="loginform" method="post">

  <div class="row">
         <div class="col-sm-1" >id</div>
    <div class="col-sm-5" >First name</div>
    <div class="col-sm-6" >Last name</div>
    
  </div>
<div class="row">
   <div class="col-sm-1" >  <input type="textbox" name="id" class="form-control" value="{{$data->id}}" readonly ></div>
    <div class="col-sm-5" >  <input type="textbox" name="firstname" class="form-control" placeholder="Enter first name" value="{{$data->firstname}}" readonly>
</div>
<span></span>

    <div class="col-sm-6" >  <input type="textbox" name="lastname" class="form-control"placeholder="Enter last name" value="{{$data->lastname}}" readonly ></div>
   </div>
   <div class="row">
    <div class="col-sm-6" >Mobile</div>
    <div class="col-sm-6" >Alternet Mobile</div>
  </div>
  <div class="row">
    <div class="col-sm-6" ><input type="textbox" name="mobile" class="form-control"placeholder="Teliphone/Mobile" value="{{$data->mobile}}" readonly></div>
    <div class="col-sm-6" ><input type="textbox" name="amobile" class="form-control"placeholder="Blood group" value="{{$data->amobile}}"value="{{$data->email}}" readonly ></div>
  </div>
  <div class="row">
    <div class="col-sm-6" >Email Id</div>
    <div class="col-sm-6" >Collage name</div>
  </div>
 
  <div class="row">
    <div class="col-sm-6" ><input type="text" name="email" value="{{$data->email}}" class="form-control" placeholder="Enter Email Id" readonly ></div>
    <div class="col-sm-6" ><input type="textbox" name="cname" class="form-control" placeholder="Enter Height" value="{{$data->cname}}" readonly></div>
  </div>
  <div class="row">
    <div class="col-sm-6" >Address(Present)</div>
    <div class="col-sm-6" >Address(Permanent)</div>
  <div class="col-sm-6" ><textarea class="form-control" name="Addressper" rows="5"placeholder="enter" readonly >{{$data->Addressper}}</textarea></div>
    <div class="col-sm-6" ><textarea class="form-control" name="Addressp" rows="5"placeholder="enter" readonly >{{$data->Addressp}}</textarea></div>
  </div>
     <div class="row">
    <div class="col-sm-6" >Branch</div> 
    <div class="col-sm-6" >
      <select name="branch"> 
        @if($data->branch=="CSE")
        <option value="1" selected="select">CSE</option>
        @else
        <option value="1">CSE</option>
        @endif
         @if($data->branch=="EC")
        <option value="2" selected="select">EC</option>
        @else
        <option value="2">EC</option>
        @endif
         @if($data->branch=="IT")
        <option value="3" selected="select">IT</option>
        @else
        <option value="3">IT</option>
        @endif @if($data->branch=="ME")
        <option value="4" selected="select">ME</option>
        @else
        <option value="4">ME</option>
        @endif</select>
    
     </div></div>
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
      <a href="{{asset('storage')}}/{{$data->file}}">{{$data->file}}</a>
    </div></div></div>
    
    
   
 



 
</div>
 </div>
      
 </form>



</body>
</html>