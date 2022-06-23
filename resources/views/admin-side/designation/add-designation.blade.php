@extends('admin-side.forms-layout')
<title>Add New Course</title>
@section('form')

    <h2>Add Designation</h2>
    <p class="card-description">
                      Designation info
                    </p>
                    <div class = "col-md-12 alert-message" id="alert-message">
                    {{-- @include('admin.layouts.message') --}}
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Designation Name</label>
                          <div class="col-sm-9">
                          <input type="text" class="form-control" name="name"  value="{{ old('name') }}" id="name" placeholder="eg. Assosciate Software Engineer">
                          <span style="color: red;"> @error('name'){{$message}} @enderror </span>
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