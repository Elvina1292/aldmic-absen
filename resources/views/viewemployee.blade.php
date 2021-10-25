@extends('master')

@section('konten')
<h3>Employee Data</h3>
<div class = "row">
<div class = "col-md-9">
  <a class="btn btn-success" href="{{route('add_employee')}}"><i class="fa fa-plus"></i> Add New Employee</a><br><br>
</div>
<div class = "col-md-3">
  <form method="get" action="{{route('search_employee')}}">

    <div class = "col-md-9">
        <input type="text" name="search" class="form-control" placeholder="Search">
    </div>
    <div class = "col-md-2">
        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
    </div>
  </form>
</div>  
<table class="table table-bordered table-hover">
  <tr>
    <th>#ID</th>
    <th>Nik</th>
    <th>Full Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Address</th>
    <th>Aksi</th>
  </tr>
  @foreach($employee as $s) 
  <tr>
    <td>{{$s->id}}</td>
    <td>{{$s->nik}}</td>
    <td>{{$s->full_name}}</td>
    <td>{{$s->email}}</td>
    <td>{{$s->mobile}}</td>
    <td>{{$s->address}}</td>
    <td>
      <a href="/employee/edit/{{$s->id}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
      <a href="/employee/delete/{{$s->id}}" onclick="return confirm('Are you sure want to delete this data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
    </td>
  </tr>
  @endforeach
</table>
<ul class="pagination pagination-sm m-0 float-right">
  <li class="page-item">{{ $employee->links() }}</a></li>
</ul>
@endsection
</div>