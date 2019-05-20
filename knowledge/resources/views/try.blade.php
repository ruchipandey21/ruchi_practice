<!DOCTYPE html>
<html lang="en">
<head>
  <title>Laravel Permission</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <a href="showlogin" class="btn btn-danger">Login</a>
  <h2>Registraion form</h2>
  <form action="registerUser" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" 
             placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="mobile">Mobile:</label>
      <input type="text" class="form-control" id="mobile"
         placeholder="Enter mobile" name="mobile">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
      <div class="form-group">
      <label for="notification">Notification:</label>
      <input type="radio" id="on" value="on" name="notification">
            <input type="radio" id="off" value="off" name="notification">
    </div>
    <div class="form-group notify" id="notify" style="display:none">
      SMS:<input type="text" name="sms" id="sms">
    </div>
    <div class="row">
      {{-- <div class="col-sm-1"></div> --}}
      <div class="col-sm-4">
      Reminder of occasion Notificatin
    <label for="notification"></label>
    <input type="radio" id="reminder" value="on" name="notification">ON
    <input type="radio" id="noReminder" value="off" name="notification">OFF
  </div>
  <div class="col-sm-3 remember" id="remember" style="display:none">
      <select  class="form-control" id="reminderType" name="">
        <option>Select</option>
        <option value="Daily" id="daily">Daily</option>
        <option value="Monthly" id="Monthly">Monthly</option>
      </select>
    </div>
  <div class="col-sm-3 days" id="days" style="display: none">
    
  </div>
  
    
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</body>
<script type="text/javascript">
  $('#on').on('change',function () {
    $('.notify').show();
    var mobile=$('#mobile').val();
    $('#sms').val(mobile);
    // alert(mobile)
  })
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
  })
    $('#reminderType').change(function() {
    if($(this).val() == "Daily")
      
    $('.days').show().html('<select  class="form-control" name=""><option>Select</option><option value="1" >1</option><option value="1" >2</option><option value="1" >3</option><option value="1" >4</option><option value="1" >5</option></select>')
    else
      // $('.days').hide();
      $('.days').html('<select  class="form-control" name=""><option>Select</option><option value="1" >January</option><option value="1" >February</option><option value="1" >March</option><option value="1" >April</option><option value="1" >May</option></select>');
});
</script>
</html>