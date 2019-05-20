<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Auth;
use Illuminate\Support\Facades\Input;
use App\Mail\sendmail;
use App\Mail\SendEmail;

use Validator;
use App\User;
class TestController extends Controller
{
public function reg()
{
	return view('registerationform');
}
public function report()
{
	return view('report');
}

public function loginview()
{
	
   return view('loginview');
}
public function index()
    {
    	 $data=DB::table('candidates')->get();
	 //print_r($data);die();
   return view('home')->with('data',$data);
            }


public function insertform(Request $request)
{

$data= $request->except('_token');
// print_r($data);die();
$data['password']=bcrypt($data['password']);
$v=DB::table('users')->insert($data);
//print_r($data);die();
return redirect('loginview');

}
public function login(Request $request)
    {	
		$data=$request->all();
    	 
    	   
    $validator = Validator::make($data, [
                              'email'    => 'sometimes|email|exists:users',
                              'password' => 'required',
                              //'uid'      => 'sometimes|exists:users',
                              //'role'     => 'required|exists:users',
                              ]);

            if ($validator->fails()) {

                        return 'validator-fail';
                }


            else{
       	   $user = array("email" => $data['email'],
       	   				"password"=> $data['password'],
       	   			);
       	  	//print_r($user); die();
           
            if (Auth::attempt($user)) {
            	return redirect('home');
            	  }
            	            else
            {
 return 'fail';
               
            }
            	
    
 }
}
public function add(Request $request)
{
  $data= $request->all();
  $validator=Validator::make($data,['firstname'=>'required','lastname'=>'required','mobile'=>'required|numeric','Addressper'=>'required|max:50',
'Addressp'=>'required|max:50',
'amobile'=>'required|numeric',
'cname'=>'required',
'email'=>'required',
'branch'=>'required',
'file'=>'required|max:1000|mimes:doc,docx',
'technology'=>'required']);
  if($validator->fails())
{
  return redirect('registrationform')->withErrors($validator);
}
else
{
   // $request->merge([
   //      'technology' => implode(',', (array) $request->get('technology'))
   //  ]);
  $data['technology']=implode(',',$data['technology']);
  
  if($request->hasfile('file')){

                   $filename=$request->file->getClientOriginalName();
                   $request->file->storeAs('public',$filename);
                    $data['file'] = $filename;
               }




$v=DB::table('candidates')->insert($data);
//print_r($data);die();

if ($v) {
	$b=DB::table('candidates')->orderBy('updated_at', 'desc')->get();
	//print_r($b); die();
	Mail::send(new sendmail($v));
	return redirect('home');
}
else{
	return "fail data is not inserted";
}

 }}
 public function delete($id)
 {
 	//print_r($id);die();
 	DB::table('candidates')->where('id',$id)->delete();
 	return redirect('home');
 }
 public function update(Request $request)
 {
 	$data=$request->all();
 	// print_r($data);die();
   
 $data['technology']=implode(',',$data['technology']);
  if($request->hasfile('file')){

                   $filename=$request->file->getClientOriginalName();
//print_r($filename);die('ok');
                    $request->file->storeAs('public',$filename);
                    $data['file'] = $filename;
               }
 	DB::table('candidates')->where('id',$data['id'])->update($data);
  
 	return redirect('home');
 }
 public function edit($id)
{
	//print_r($id);die();
	$data= DB::table('candidates')->where('id',$id)->first();
   $a=$data->technology;
  $b=explode(",", $a);
	//print_r($data);die() ;
   return view('edit')->with('data',$data)->with('tech',$b);

}
public function view($id) 
{
  //$request->merge([
 //      'technology' => explode('', (array) $request->get('technology'))
 //  ]);
	//print_r($id);die();
	$data= DB::table('candidates')->where('id',$id)->first();
  $a=$data->technology;
  $b=explode(",", $a);
  //print_r($b); die('ok');
  //$data->technology=$b;
	//print_r($b);die('ok1');

   return view('view')->with('data',$data)->with('tech',$b);

}
   public function send()
{
	//Mail::send(new sendmail());
  Mail::to('ruchipandeyruchipandey@gmail.com')->send(new SendEmail());
  

}

public function getdetails()
{
	
	$result=DB::table("sizes as s")->join("colors as c","c.id","=","s.color_id")->get();
	print_r($result);
}


}

