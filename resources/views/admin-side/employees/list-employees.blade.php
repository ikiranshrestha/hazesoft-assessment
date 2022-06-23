@extends('admin-side.table-layout')
@section('table')
@push('admin-uname')
{{-- {{ $username = $LoggedInUserData['LoggedInUserInfo']['uname'] }} --}}
@endpush
@push('table-name')
<h4 class="card-title">Listed Employees</h4>
@endpush

<thead>
                        <tr>
                          <th>Employee Name</th>
                          <th>Company</th>
                          <th>Contact</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($employeeList as $employee):
                        <tr>
                          <td>{{$employee->emp_name}}</td>
                          <td>{{$employee->cmp_name}}, {{ $employee->location }}</td>
                          <td>{{$employee->emp_contact}}</td>
                          <td>{{$employee->emp_email}}</td>
                          {{-- <td>{{$course->course_type}}</td> --}}
                        </tr>
                        @endforeach
                      </tbody>
                </div>
                </div>


@endsection