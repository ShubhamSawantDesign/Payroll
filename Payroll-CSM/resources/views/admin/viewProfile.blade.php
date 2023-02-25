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
  <h2>Employee Details</h2>

  <section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="...">
                            </div>
                            <div class="col-lg-6 px-xl-10">
                                <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class="h2 text-white mb-0">{{ $employee_data->first_name }} {{ $employee_data->middle_name }} {{ $employee_data->last_name }}</h3>
                                    <span class="text-primary">{{ $employee_data->designation }}</span>
                                </div>
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> {{ $employee_data->email }}</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Mobile Number: @if($employee_data->secondary_phone == '') {{ $employee_data->primary_phone }} @else {{ $employee_data->primary_phone }}, {{ $employee_data->secondary_phone }} @endif</span></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Bank Account Number: {{ $employee_data->account_number }}</span></li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">PF Account Number: {{ $employee_data->pf_number }}</span></li>
                                </ul>
                                <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                    <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#!"><i class="ti-pinterest"></i></a></li>
                                    <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-4 mb-sm-5">
                <p>List of Salary slips</p>
                        <table class="table">
                            <thead class="table-success">
                            <tr>
                                <th>Employee ID</th>
                                <th>Month</th>
                                <th>Year</th>
                                <th>view Slip</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- Table with slips will display -->
                            @foreach($payroll_data as $data)
                               <tr>
                                <td>HL10{{ $data->emp_id }}</td>
                                <td>{{ $data->month }}</td>
                                <td>{{ $data->year }}</td>
                                <td><a href="/viewSalarySlip">View Slip</a></td>
                               <tr>
                            @endforeach
                            </tbody>
                        </table>
              </div>
            </div>
        </div>
    </div>
</section>


</div>
@endsection