<?php
/** This AuthenticationController class will controll all the autheitication related calls for login and logout */
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Admin;
use App\Employee;
use RealRashid\SweetAlert\Facades\Alert;

class AuthenticationController extends Controller
{
    
    public function login(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
            if(Auth::guard('admin')->attempt(['admin'=>$data['admin'],'password'=>$data['password']])){
                Alert::success('Success', 'Log-In Successful');
                return redirect('/dashboard');
            } else {
                echo "Authentication Unsuccessful....!";
            }
        }else{
        }
    }

    public function logout(Request $request){
        Auth::guard('admin')->logout();
        Alert::success('Success', 'Log-Out Successful');
        return redirect('/');
    }


    
}
