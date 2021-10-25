@extends('master')

@section('konten')
  <div class="row">
    <h4>Selamat Datang <b>{{Auth::user()->full_name}}</b>, Anda Login sebagai <b>{{Auth::user()->role}}</b>.</h4>

    <div class = "row">
      <div class = "col-md-10">
        <form method="post" action="{{route('store_attendance')}}">
          @csrf
          <input type="hidden" name="id_employee" value="{{Auth::user()->id}}">
          <input type="hidden" name="in_out" value="In">
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> In/Out</button>
        </form>
      </div> 


    </div>
        @if(Auth::user()->role=='admin')
        <table class="table table-bordered table-hover" style="margin-top: 2%;">
          <tr>
            <th>Employee</th>
            <th>Time</th>
            <th>In out</th>
          </tr>

         @foreach($attendance as $a) 
          <tr>
            <td>{{$a->full_name}}</td>
            <td>{{$a->created_at}}</td>
            <td>{{$a->in_out}}</td>
          </tr>
          @endforeach
        </table>

        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item">{{ $attendance->links() }}</a></li>
        </ul>
          @else
        <table class="table table-bordered table-hover" style="margin-top: 2%;">
          <tr>
            <th>Time</th>
            <th>In out</th>
          </tr>

         @foreach($attendance as $a) 
          <tr>
            <td>{{$a->created_at}}</td>
            <td>{{$a->in_out}}</td>
          </tr>
          @endforeach
        </table>
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item">{{ $attendance->links() }}</a></li>
        </ul>


        @endif
  </div>

@endsection