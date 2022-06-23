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
                    @include('admin-side.message')
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Employee</label>
                              <div class="col-sm-9">
                              <select class="form-control selectpicker" name="employee" value="{{ old('employee') }}" id="employee">
                                <option selected disabled>Select Employee</option>
                                @foreach($employee as $employeeDatum):
                                  <option value="{{$employeeDatum->id}}">{{$employeeDatum->name}} [Emp. No.: {{$employeeDatum->employee_number}}] </option>
                                @endforeach
                              </select>
                              </select>
                              <span style="color: red;"> @error('department'){{$message}} @enderror </span>
                              </div>
                            </div>
                          </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Department</label>
                              <div class="col-sm-9">
                              <select class="form-control selectpicker" multiple name="department[]" value="{{ old('department') }}" id="department" placeholder="eg. 01-5555555">
                                <option disabled>Select Department</option>
                                @foreach($department as $departmentDatum):
                                  <option value="{{$departmentDatum->id}}">{{$departmentDatum->name}}</option>
                                @endforeach
                              </select>
                              </select>
                              <span style="color: red;"> @error('department'){{$message}} @enderror </span>
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