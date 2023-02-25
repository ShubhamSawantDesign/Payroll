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
  <p>You can use any of the contextual classes to only add a color to the table header:</p>
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
      </tr>
    </thead>
    <tbody>
        @foreach($employee_data as $data)
      <tr>
        <td>HLAB 10{{ $data->emp_id }}</td>
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
      </tr>
      
      @endforeach
    </tbody>
  </table>
</div>

</div>
@endsection