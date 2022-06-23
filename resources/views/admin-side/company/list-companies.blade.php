@extends('admin-side.table-layout')
@section('table')
@push('admin-uname')
{{-- {{ $username = $LoggedInUserData['LoggedInUserInfo']['uname'] }} --}}
@endpush
@push('table-name')
<h4 class="card-title">Listed Companies</h4>
@endpush

<thead>
                        <tr>
                          <th>Company Name</th>
                          <th>Location</th>
                          <th>Contact</th>
                          <th>Company Actions</th>
                          <th>Departments Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($companyList as $companyDatum):
                        <tr>
                          <td>{{$companyDatum->name}}</td>
                          <td>{{$companyDatum->location}}</td>
                          <td>{{$companyDatum->contact}}</td>
                          <td><a href="" class="btn btn-sm btn-warning" title="Edit Company">Edit</a><a href="" class="btn btn-sm btn-danger" title="Delete Company">Delete</a></td>
                          <td><a href="{{ route('add-company-dept', ['id'=>$companyDatum->id]) }}" class="btn btn-sm btn-success" title="Add Department">Add</a><a href="{{ route('list-company-dept') }}" class="btn btn-sm btn-warning" title="Manage Department">Manage</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                </div>
                </div>


@endsection