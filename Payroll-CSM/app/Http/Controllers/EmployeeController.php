<?php
/**
 * This is employee controller have all the functions related to the employee class
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function dashboard(Request $request){
        $employee_data = Employee::orderBy('emp_id','ASC')->get(); 
        return view('admin.adminDashboard')->with(compact('employee_data'));
    }
}
