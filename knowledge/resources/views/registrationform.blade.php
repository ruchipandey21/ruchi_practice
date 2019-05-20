<!DOCTYPE html>
<html>
<head>

    
    <title>loginform</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>

<link href="https://fonts.googleapis.com/css?family=Arvo|Open+Sans" rel="stylesheet">
    <style type="text/css">
    html,body {
        background-image: url("image/shutterstock_112875952.jpeg");
        color: gray;
    } 
    .error
        {
            color: red;
        }
        .main
        {
          margin: 0 auto;
          height: 55%;
          width: 55%;
         font-family: 'Domine', serif;
         color: #800080;
         
        }
    </style>

</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   <a class="navbar-brand" href="#">
    <img src="image/images.jpg" alt="Logo" style="width:40px;">

<a href="logout" class="btn btn-primary">
   Logout</a>

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
  
       <div class="container">

   <center> <h1 style="color: #809980;   font-family: 'Domine', serif;"><u> Charity Form</u></h1></center>
   <div class="main">
   <form action="charityform" method="post" id="charity">
<div class="row"><div class="col-sm-5">Name</div><div class="col-sm-6"><input type="text" name="name" class="form-control" placeholder="Enter name"></div></div><br/>


<div class="row"><div class="col-sm-5">Email</div><div class="col-sm-6"><input type="text" class="form-control" id="email"placeholder="Enter email" name="email"></div></div><br/>


<div class="row"><div class="col-sm-5">Mobile</div><div class="col-sm-6"><input type="text" name="mobile" class="form-control" placeholder="Enter mobile"></div></div><br/>


<div class="row"><div class="col-sm-5">Name Of Donator</div><div class="col-sm-6"><input type="text" name="cname" class="form-control" placeholder="Enter Donator name"></div></div><br/>
<div class="row">
    <div class="col-sm-5" >Choose whom relative</div>
    <div class="col-sm-6" >
        <select name="relative" id="relative" class="form-control"> 
     <option value="" selected="select">Relation</option>
       <option value="Father">Father</option>
        <option value="Mother">Mother</option>
       <option value="Brother">Brother</option>
        <option value="Sister">Sister</option>
         <option value="Others" id="other" name="" >Other</option>
        </select>
        <br/>
         <div class="otherrelative" style="display:none">
       Other relative:<input type="text" name="relative" id="otherrelative" class="form-control"> 
    </div>
    </div>
</div><br/>

 <div class="row">
<div class="col-sm-5" >Types of Occasion</div>
<div class="col-sm-6"> 
  <select name="occasion" id="occasion" class="form-control"> 
     <option value="" selected="select">Occasion</option>
       <option value="Birthday">Birthday</option>
        <option value="Anniversary">Anniversary</option>
       <option value="Independence Day">Independence Day</option>
        <option value="National Celebration Day">National Celebration Day</option>
         <option value="International Workers' Day">International Workers' Day</option>
         <option value="Other">Other</option>
        </select>
        <br/>
       <div class="otheroccasion" style="display:none">
       Other occasion:<input type="text" id="otheroccasion" name="occasion" class="form-control"> 
    </div>
  </div>
     </div><br/>


    <div class="row">
    <div class="col-md-5">
      <label>Occasion Date</label> 
    </div>
    <div class="col-md-6" >
      <input type="text" name="date" class="form-control" id="date" placeholder="Enter date" autocomplete="off">
</div></div><br/>

        
<div class="row">
    <div class="col-sm-5" >Subscribe Notification</div><div class="col-sm-6"> <div class="form-group">
     <label for="notification"></label>
     <input type="radio" id="on" value="on" name="notification">ON
           <input type="radio" id="off" value="off" name="notification">OFF 
           <br/>
            </div>
   <div class="form-group notify" id="notify" style="display:none">
    <div class="row">
    <div class="col-sm-5" >
     SMS:</div><div class="col-sm-6" >
      <input type="text" name="sms" id="sms" value="sms"></div></div><br/>
     <div class="row">
    <div class="col-sm-5" >
      Email:</div><div class="col-sm-6" >
        <input type="text" name="notificationemail" id="notificationemail"></div></div><br/>
      <div class="row">
    <div class="col-sm-5" >
     Report:</div><div class="col-sm-6" >
      <input type="text" name="newslatter"  id="newslatter"></div></div><br/>
    <div class="row">
    <div class="col-sm-5" >
       Post:</div><div class="col-sm-6" ><input type="text" name="post"  id="post"></div></div>
   </div>
</div></div>

<div class="row">
     
      <div class="col-sm-5"> Remembar of occasion Notificatin</div> 
     
   <div class="col-sm-3"> <label for="notificatio" name="notificatio"></label>
    <input type="radio" id="reminder" value="on" name="notificatio">ON
    <input type="radio" id="noReminder" value="off" name="notificatio">OFF
  </div></div>

   <div class="row">
     <div class="col-sm-5"></div>
  <div class="col-sm-3 remember" id="remember" style="display:none">
      <select  class="form-control" id="reminderType" name="">
        <option value="Select">Select</option>
        <option value="Daily" id="daily">Daily</option>
        <option value="Monthly" id="Monthly">Monthly</option>
      </select>
</div>


   <div class="col-sm-3 days"  style="display:none">
   <select name="days" id="days"
           class="form-control" style="height:35px" >
           </select>
    </div>


 <div class="col-sm-4 months"  style="display:none">
   <select name="months"id="months"
           class="form-control" style="height:35px" >
           </select>
 </div></div>

<div class="row"><div class="col-sm-5 "></div><div class="col-sm-6 "> <button type="submit" class="btn btn-success">Submit</button></div></div>
 
   </div>
</form>
</div>
</body>

<script type="text/javascript">
  $('#on').on('change',function () {
    $('.notify').show();
    var mobile=$('#mobile').val();
    $('#sms').val(mobile);
     var email=$('#email').val();
    $('#notificationemail').val(email);
    // alert(mobile)
  });

  $('#off').on('change',function () {
    $('.notify').hide();
  })
  $('#reminder').on('change',function () {
    $('.remember').show();
    // var mobile=$('#mobile').val();
    // $('#sms').val(mobile);
    // alert(mobile)
  })
   

  $('#noReminder').on('change',function () {
    $('.remember').hide();
    $('.days').hide();
    $('.months').hide();
    $('select option[value="Select"]').attr("selected",true);
  })
   $('#reminderType').change(function() {
   if($(this).val() == "Daily"){
     $('.days').show();
     $('.months').hide();
     $('#days').empty();
   for (var i=1; i <=31; i++)
   {
   // $('.months').hide();


   $('select[name="days"]').append('<option value="'+ i +'">'+ i +'</option>');
   }
   }else if($(this).val() == "Monthly"){
       $('.days').hide();
      $('.months').show();
      $('#months').empty();
     var month = new Array("January","February","March","April","May","June",
             "July","August","September","October","November","December");

     for (var i=0; i <month.length; i++)
     {
     $('select[name="months"]').append('<option value="'+ month[i] +'">'+month[i]  +'</option>');
     }

   }
   else{
     $('.days').hide();
     $('.months').hide();
   }

});
   $('#relative').on('change', function(){
       // alert($(this).val())
      if($(this).val() == "Others"){
        $('.otherrelative').show();

         }
      else{
        $('.otherrelative').hide();
        $('#otherrelative').val('');

      }
    })
    $('#occasion').on('change', function(){
       // alert($(this).val())
      if($(this).val() == "Other")
      {
       // alert('ok')
        $('.otheroccasion').show();
         } 
      else{

        $('.otheroccasion').hide();
        $('#otheroccasion').val('');
         }
    })
    

   
      $(function () {
    $("#date").datepicker({

        minDate: 0,
        dateFormat: 'dd-mm-yy'

    })
    });
    
</script>
<script type="text/javascript">

    $(document).ready(function(){
      $(function () {
    $("#date").datepicker({

        minDate: 0,
        dateFormat: 'dd-mm-yy'

    });
     
    });
        $("#charity").validate({
  rules: {

   name: {
      required: true
     },
             email: {
      required: true,
      email: true
    },
             mobile: {
      required: true,
       number: true
             },
              cname: {
      required: true
       
             },
   relative: {
      required: true,
      maxlength: 50
      
             },
 occasion: {
      required: true,
     maxlength: 50
             },
             notification: {
      required: true
     },
            notificatio: {
      required: true
      },
     
       
date: {
      required: true
     }
  
     }
          
           
     });
    });
</script>
</html>