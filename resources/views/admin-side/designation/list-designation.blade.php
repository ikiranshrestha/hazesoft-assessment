@extends('admin-side.table-layout')
@section('table')
@push('admin-uname')
{{-- {{ $username = $LoggedInUserData['LoggedInUserInfo']['uname'] }} --}}
@endpush
@push('table-name')
<h4 class="card-title">Listed Departments</h4>
@endpush

<thead>
                        <tr>
                          <th>Company Name</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($departmentList as $departmentDatum):
                        <tr>
                          <td>{{$departmentDatum->name}}</td>
                          <td><a href="" class="btn btn-sm btn-warning" title="Edit">Edit</a><a href="" class="btn btn-sm btn-danger" title="Delete">Delete</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                </div>
                </div>


@endsection