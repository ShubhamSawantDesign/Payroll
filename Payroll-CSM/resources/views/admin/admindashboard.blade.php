@extends('admin/dashboard')
@section('content')
<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Payroll Dashboard</h1>
  </div>
</div>

<div class="container mt-3">
  <h2>List Of Employee</h2>
  <button type="button" class="btn btn-outline-primary" onclick="document.getElementById('modaladdEmp').style.display='block'" style="width:auto;">Add Employee</button>
  <button type="button" class="btn btn-outline-primary" onclick="document.getElementById('modaladdSlip').style.display='block'" style="width:auto;">Create Pay Slip</button>
  
  <!-- Model to add New Employee -->
<div id="modaladdEmp" class="modal">

    <form class="modal-content animate" action="{{ url('addEmployee') }}" method="post">@csrf
        <div class="imgcontainer">
          <span onclick="document.getElementById('modaladdEmp').style.display='none'" class="close" title="Close Modal">&times;</span>
        </div>
        <div class="container">
          <label for="uname"><b>First Name</b></label><br>
          <input type="text" placeholder="First Name" name="firt_name" required>
          </br>
          <label for="psw"><b>Middle Name</b></label><br>
          <input type="text" placeholder="Middle Name" name="middle_name" required>
          </br>
          <label for="psw"><b>Last Name</b></label><br>
          <input type="text" placeholder="Last Name" name="last_name" required>
          </br>
          <label for="psw"><b>Primary Number</b></label><br>
          <input type="text" placeholder="Primary Mobile Number" name="primary_number" required>
          </br>
          <label for="psw"><b>Secondary Number</b></label><br>
          <input type="text" placeholder="Secondary Number" name="secondary_number">
          </br>
          <label for="psw"><b>E-Mail</b></label><br>
          <input type="text" placeholder="E-Mail" name="email" required>
          </br>
          <label for="psw"><b>Designation</b></label><br>
          <input type="text" placeholder="Designation" name="designation" required>
          </br>
          <label for="psw"><b>Joining Date</b></label><br>
          <input type="date" placeholder="Enter Password" name="joindate" required>
          </br>
          <label for="psw"><b>Account Number</b></label><br>
          <input type="text" placeholder="Enter Password" name="account_number" required>
          </br>
          <label for="psw"><b>PF Number</b></label><br>
          <input type="text" placeholder="Enter Password" name="pf_number" required>
          </br>
          <button id='button' style="width:45%" type="submit">Add Employee</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('modaladdEmp').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
      </form>
</div>
<!--Model End -->


<!-- Model To Create Payslip -->

<div id="modaladdSlip" class="modal">

<form class="modal-content animate" action="{{ url('createPaySlip') }}" method="post">@csrf
    <div class="imgcontainer">
      <span onclick="document.getElementById('modaladdSlip').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
      <label for="uname"><b>First Name</b></label><br>
      
      <select class="form-select mt-3" style="width:50%" name="emp_id">
          <option>Select Employee</option>
          @foreach($employee_data as $data)
          <option value="{{ $data->emp_id }}">{{ $data->first_name }} {{ $data->last_name }}</option>
          @endforeach
      </select>
      </br>
      <label for="psw"><b>Enter Months</b></label><br>
      <input type="text" placeholder="Enter Month" name="months" required>
      </br>
      <label for="psw"><b>Total Working Days</b></label><br>
      <input type="text" placeholder="Enter Total Working Days" name="working_days" required>
      </br>
      <label for="psw"><b>Total Leaves</b></label><br>
      <input type="text" placeholder="Enter Total Leaves" name="leaves" required>
      </br>
      <label for="psw"><b>Gross Salary</b></label><br>
      <input type="text" placeholder="Enter Gross Salary" name="gross_salary">
      <br>

      <button id='button' style="width:45%" type="submit">Create PaySlip</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('modaladdSlip').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>


</div>

<!-- Payslip Modal End-->





  
  <br><br/>
  <table class="table">
    <thead class="table-success">
      <tr>
        <th>Employee ID</th>
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Contact Number</th>
        <th>Email</th>
        <th>Designation</th>
        <th>Update Employee Details</th>
        <th>Delete Employee</th>
        <th>View Details</th>
      </tr>
    </thead>
    <tbody>
        @foreach($employee_data as $data)
      <tr>
        <td>HL 10{{ $data->emp_id }}</td>
        <td>{{ $data->first_name }}</td>
        <td>{{ $data->middle_name }}</td>
        <td>{{ $data->last_name }}</td>
        <td>@if($data->secondary_phone == '') {{ $data->primary_phone }} @else {{$data->primary_phone }}, {{$data->secondary_phone }} @endif</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->designation }}</td>
        <td> <a href="#">
           <i class="fas fa-edit" style="font-size:28px;"></i>
        </a></td>
        <td><a href="#"><i class="fa fa-trash-o" style="font-size:28px;color:red"></i></a></td>
        <td><a href="/viewProfile/{{ $data->emp_id }}">View Profile</a></td>
      </tr>
      
      @endforeach
    </tbody>
  </table>
</div>

</div>
@endsection