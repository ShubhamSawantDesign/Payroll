<?php
/**
 * This is employee controller have all the functions related to the employee class
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Employee;
use App\Payroll;

class EmployeeController extends Controller
{
    public function dashboard(Request $request){
        $employee_data = Employee::orderBy('emp_id','ASC')->get(); 
        return view('admin.adminDashboard')->with(compact('employee_data'));
    }

    public function addEmployee(Request $request){
        if($request->isMethod('post')){
           $data = $request->all();
           $employee = new Employee;
           $employee->first_name = $data['firt_name'];
           $employee->middle_name = $data['middle_name'];
           $employee->last_name = $data['last_name'];
           $employee->primary_phone = $data['primary_number'];
           $employee->secondary_phone = $data['secondary_number'];
           $employee->email = $data['email'];
           $employee->designation = $data['designation'];
           $employee->join_date = date($data['joindate']);
           $employee->account_number = $data['account_number'];
           $employee->pf_number = $data['pf_number'];
           $employee->save();
           Alert::success('Operation Successful','Employee Added Successfully');
           return redirect()->back();
        }
    }

    public function createPaySlip(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $payrolldata = new Payroll;
            $payrolldata->emp_id = $data['emp_id'];
            $payrolldata->month = $data['months']; 
            $payrolldata->no_working_days = $data['working_days']; 
            $payrolldata->no_leaves = $data['leaves']; 
            $payrolldata->gross_salary = $data['gross_salary']; 
            $payrolldata->save();

            Alert::success('Operation Successful','Slip Created Successfully');
            return redirect()->back();
        }
    }

    




}
