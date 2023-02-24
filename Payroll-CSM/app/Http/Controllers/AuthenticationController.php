<?php
/** This AuthenticationController class will controll all the autheitication related calls for login and logout */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Admin;


class AuthenticationController extends Controller
{
    
    public function login(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            
            if(Auth::guard('admin')->attempt(['admin'=>$data['admin'],'password'=>$data['password']])){
                echo "Authentication Successful....!"; 
            } else {
                echo "Authentication Unsuccessful....!";
            }
 

        }else{

        }


    }


    
}
