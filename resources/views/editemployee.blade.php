@extends('master')

@section('konten')
<h3>Edit Employee's Data</h3>
  @foreach($employee as $s)
    <form method="post" action="{{route('update_employee')}}">
      @csrf
      <input type="hidden" name="id_employee" value="{{$s->id}}">
      <div class="form-group">
        <label>NIK</label>
        <input type="text" name="nik" value="{{$s->nik}}" class="form-control" placeholder="NIK" required="">
      </div>
      @if($errors->has('nik'))
        <div class="text-danger">
          {{ $errors->first('nik')}}
         </div>
      @endif
      <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="full_name" value="{{$s->full_name}}" class="form-control" placeholder="Full Name" required="">
      </div>
      @if($errors->has('full_name'))
        <div class="text-danger">
          {{ $errors->first('full_name')}}
         </div>
      @endif
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="{{$s->email}}" class="form-control" placeholder="Email" required="">
      </div>
      @if($errors->has('email'))
        <div class="text-danger">
          {{ $errors->first('email')}}
         </div>
      @endif
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" value="{{$s->mobile}}" class="form-control" placeholder="mobile" required="">
      </div>
      <div class="form-group">
        <label>Address</label>
        <textarea name="address" rows="3" class="form-control" placeholder="address" required="">{{$s->address}}</textarea>
      </div>
      <div class="form-group">
        <label>New Password </label>
        <input type="password" name="password" value="" class="form-control" placeholder="password">
      </div>
      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update Data</button>
      </div>
    </form>
  @endforeach
@endsection