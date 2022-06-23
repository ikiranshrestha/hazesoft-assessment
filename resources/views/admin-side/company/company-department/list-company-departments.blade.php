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
                          <th>Department Name</th>
                          <th>Departments Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($companyDepartmentList as $cdDatum):
                        <tr>
                          <td>{{$cdDatum->name}}</td>
                          <td><a href="{{ route('add-company-dept', ['id'=>$cdDatum->id]) }}" class="btn btn-sm btn-success" title="Add Employee">Add</a><a href="{{ route('add-company-dept', ['id'=>$cdDatum->id]) }}" class="btn btn-sm btn-warning" title="Manage Employee">Manage</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                </div>
                </div>


@endsection