<!DOCTYPE html>
<html>
<head>
    <title>form in laravel</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">

</head>
<body>


    <div class="container">
<div class="jumbotron text-center">

 <div class="row"><div class="col-md-12"> <a href="report"  class="btn btn-success" style="float:right">Add New Record</a> </div></div>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">s.no.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Resume</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($data as $key => $value)

    <tr>
        <td>{{$key+1}}</td>
      <td>{{$value->firstname}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->mobile}}</td>
       <td><a href="{{asset('storage')}}/{{$value->file}}"> view resume</a></td>
    <td><a href="{{url('view')}}/{{$value->id}}"><button type="submit" class="btn btn-primary">view</button></a>
        <a href="edit/{{$value->id}}"> <button type="submit" class="btn btn-success">Edit</button></a>
        <a href="delete/{{$value->id}}"> <button type="submit" class="btn btn-danger">Delete</button></td>
    </tr>
    @endforeach
  </tbody>
    
      
</table>

   
    
  </tbody>
</table>
        
    </div>
 </div>
 </div> 
</table> 

</div>
</body>
</html>