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
                          <th>Company Name</th>
                          <th>Location</th>
                          <th>Contact</th>
                        </tr>
                      </thead>
                      <tbody>
                          {{-- @foreach($courseInfo as $course):
                        <tr>
                          <td>{{$course->vehicle_category}}</td>
                          <td>{{$course->course_type}}</td>
                        </tr>
                        @endforeach --}}
                      </tbody>
                </div>
                </div>


@endsection