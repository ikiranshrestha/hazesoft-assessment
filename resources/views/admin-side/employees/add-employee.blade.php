<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@extends('admin-side.forms-layout')
<title>Add Company</title>
@section('form')
{{-- <!-- @push('admin-uname') --> --}}
{{-- {{ $username = $LoggedInUserData['LoggedInUserInfo']['uname'] }} --}}
{{-- @endpush --}}
    <h2>Add Company</h2>
    <p class="card-description">
                      Company Info
                    </p>
                    <div class = "col-md-12 alert-message" id="alert-message">
                    {{-- @include('admin.layouts.message') --}}
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Employee Name</label>
                          <div class="col-sm-9">
                          <input type="name" class="form-control" name="name"  value="{{ old('name') }}" id="name" placeholder="Ram Narayan Jha">
                          <span style="color: red;"> @error('name'){{$message}} @enderror </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label for="course" class="col-sm-3 col-form-label">Employee Number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name = "employee_number"  value="{{ old('employee_number') }}" id="employee_number" placeholder="eg: 112">
                            <span style="color: red;"> @error('employee_number'){{$message}} @enderror </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Contact Number</label>
                          <div class="col-sm-9">
                          <input type="phone" class="form-control" name="contact"  value="{{ old('contact') }}" id="contact" placeholder="eg. 01-5555555">
                          <span style="color: red;"> @error('contact'){{$message}} @enderror </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                          <input type="email" class="form-control" name="email"  value="{{ old('email') }}" id="email" placeholder="eg: rnrjha@example.com">
                          <span style="color: red;"> @error('email'){{$message}} @enderror </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Department</label>
                          <div class="col-sm-9">
                          <select class="form-control selectpicker" multiple name="department[]" value="{{ old('department') }}" id="department" placeholder="eg. 01-5555555">
                            <option disabled>Select Department</option>
                            @foreach($departmentList as $departmentDatum):
                              <option value="{{$departmentDatum->id}}">{{$departmentDatum->name}}</option>
                            @endforeach
                          </select>
                          </select>
                          <span style="color: red;"> @error('department'){{$message}} @enderror </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Designation</label>
                          <div class="col-sm-9">
                          <select class="form-control" name="designation"  value="{{ old('designation') }}" id="designation" placeholder="eg. 01-5555555">
                            <option selected disabled>Select Designation</option>
                            @foreach($designationList as $designationDatum):
                              <option value="{{$designationDatum->id}}">{{$designationDatum->name}}</option>
                            @endforeach
                          </select>
                          <span style="color: red;"> @error('designation'){{$message}} @enderror </span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <div class="col-sm-9">
                            <input type="submit" value="Add" name="add" class="btn btn-success">
                          </div>
                        </div>
                      </div>
                  </div>

          
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
@endsection