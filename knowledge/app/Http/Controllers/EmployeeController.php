<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Charity;
use App\User;
use Auth;
use Validator;
use Mail;
use App\Mail\sendmail;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class EmployeeController extends Controller
{
    public function form()
    {
    	return view('form');
    }
    public function forgotpassword()
    {
        return view('forgotpassword');
    }
    public function rab()
    {
        return view('rab');
    }
    public function home()
    {
        return view('home');
    }
    public function demo()
    {
        return view('demo');
    }
     public function try()
    {
        return view('try');
    }
     public function loginform()
    {
        return view('loginform');
    }
        public function registrationform()

    {
        return view('registrationform');
    }

     public function insert(Request $request)
    {
        $data= $request->all();
        //print_r($data); die('ok');
$data['password']=bcrypt($data['password']);
    	$d=Employee::create($data);
      $d=User::create($data);
  return view('loginform');
        //print_r($d); die('ok');
	  } 


     public function login(Request $request)
    {   
        $data=$request->all();
         
             //print_r($data); die();
        $validator = Validator::make($data, [
                              'email'    => 'sometimes|email|exists:users',
                              'password' => 'required',
                              
                              ]);

                //print_r($data); 
            if ($validator->fails()) {
                //print_r($data); die('okii');
                return redirect('loginform')->withErrors($validator);
                
                  }
                    
            else{ 
              $userdata=array("email" => $data['email'],
                        "password"=> $data['password'],
                    );
                // print_r($userdata); die('ok1');
                 if (Auth::attempt($userdata)) {
                  
                  $users=Auth::user();
                 // print_r($users); die();
                   return redirect('registrationform');
                //print_r($data); die('ok');
                   
            // print_r($user); die();               
    
                }  
                else
                {
                  return "wrong password";
                }  
  }


       
}
public function charityform(Request $request)
{

$data= $request->all();
//print_r($data);die();
// print_r($data['notificationemail']);die();
$validator=Validator::make($data,['name'=>'required','email'=>'required','mobile'=>'required|numeric','cname'=>'required',
'relative'=>'required|max:50',
'occasion'=>'required',
'date'=>'required',
'notification'=>'required|max:50',
'notificatio'=>'required',
]);
  if($validator->fails())
{
  return redirect('registrationform')->withErrors($validator);
}
else
{
 $w=Charity::create($data);
 if($data['notificationemail'])
 {
  Mail::send(new sendmail($w));
  return redirect('home');
 }
  else
  {
  return redirect('home');
//print_r($w);die();

}
}
}
public function logout(Request $request) {

  Auth::logout();
  return redirect('loginform');
}


}
