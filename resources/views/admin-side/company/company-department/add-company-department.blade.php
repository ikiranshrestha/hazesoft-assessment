@extends('admin-side.forms-layout')
<title>Add Department</title>
@section('form')

    <h2>Add Department to <span class="p-1 mb-1 bg-dark text-white">{{ $CompanyName->name }}</span> </h2>
    <p class="card-description">
                      department info
                    </p>
                    <div class = "col-md-12 alert-message" id="alert-message">
                    {{-- @include('admin.layouts.message') --}}
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Department</label>
                              <div class="col-sm-9">
                              <select class="form-control" name="department"  value="{{ old('department') }}" id="department">
                                <option selected disabled>Select department</option>
                                @foreach($departmentList as $departmentDatum):
                                  <option value="{{$departmentDatum->id}}">{{$departmentDatum->name}}</option>
                                @endforeach
                              </select>
                              <input type="hidden" name="company_id" value="{{ $CompanyName->id }}">
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

@endsection