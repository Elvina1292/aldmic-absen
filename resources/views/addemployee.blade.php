@extends('master')

@section('konten')
<h3>Form Input Pegawai</h3>
<form method="post" action="{{route('store_employee')}}">
  @csrf
  <div class="form-group">
    <label>Nik Pegawai</label>
    <input type="text" name="nik" class="form-control" placeholder="NIK" required="">
  </div>

  @if($errors->has('nik'))
    <div class="text-danger">
      {{ $errors->first('nik')}}
     </div>
  @endif

  <div class="form-group">
    <label>Full Name</label>
    <input type="text" name="full_name" class="form-control" placeholder="Full Name" required="">
  </div>

  @if($errors->has('full_name'))
    <div class="text-danger">
      {{ $errors->first('full_name')}}
     </div>
  @endif

  <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control" placeholder="Email" required="">
  </div>

  @if($errors->has('email'))
    <div class="text-danger">
      {{ $errors->first('email')}}
     </div>
  @endif

  <div class="form-group">
    <label>Mobile</label>
    <input type="text" name="mobile" class="form-control" placeholder="mobile" required="">
  </div>

  <div class="form-group">
    <label>Address</label>
    <textarea name="address" rows="3" class="form-control" placeholder="address" required=""></textarea>
  </div>

  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
  </div>
</form>
@endsection