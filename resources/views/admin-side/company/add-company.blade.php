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
                        <label for="name" class="col-sm-3 col-form-label">Company Name</label>
                          <div class="col-sm-9">
                          <input type="name" class="form-control" name="name"  value="{{ old('name') }}" id="name" placeholder="eg. Hazesoft">
                          <span style="color: red;"> @error('name'){{$message}} @enderror </span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label for="course" class="col-sm-3 col-form-label">Location</label>
                          <div class="col-sm-9">
                            <input type="location" class="form-control" name = "location"  value="{{ old('location') }}" id="location" placeholder="eg. Sankhamul, Lalitpur">
                            <span style="color: red;"> @error('location'){{$message}} @enderror </span>
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

@endsection