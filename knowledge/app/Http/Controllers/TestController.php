<?php

namespace App\Http\Controllers;
use App\Model\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
    	return view('form');
    }
    public function view(Request $req){
    	$data = $req->all();
    	//print_r($data);die('..ok..');
        Test::create($data);
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
}
