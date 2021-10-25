<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;
use App\Models\AttendanceUser;
use Illuminate\Support\Facades\Auth;


class AttendanceController extends Controller
{
    public function view_attendance()
    {

        if (Auth::user()->role == 'admin') {
            
            $attendance = AttendanceUser::leftjoin('users', 'users.id', '=', 'attendance_user.user_id')
                ->leftjoin('attendance', 'attendance.id', '=', 'attendance_user.attendance_id')
                ->orderBy('attendance_user.created_at','desc')
               // ->where('user_id', Auth::user()->id)
                ->paginate(10);

                    
        } else {
             $attendance = AttendanceUser::leftjoin('users', 'users.id', '=', 'attendance_user.user_id')
                ->leftjoin('attendance', 'attendance.id', '=', 'attendance_user.attendance_id')
                ->where('attendance_user.user_id', Auth::user()->id)
                ->orderBy('attendance_user.created_at','desc')
                ->paginate(10);
        }

         return view('home', ['attendance' => $attendance]);
        
                
    }

    public function store_attendance(Request $request)
    {
        $cek = Attendance::select('*')
                ->where('user_id',$request->id_employee)
                ->whereDate('created_at',now())
                ->get()->count();

        if($cek>0 && $cek%2 == 1)
        {
             $attendance = Attendance::create([
                'user_id' => $request->id_employee,
                'in_out' => 'Out'
            ]);

            $caridata = Attendance::where('user_id',$request->id_employee)
            ->whereDate('created_at',now())
            ->orderBy('updated_at','desc')
            ->skip(0)
            ->take(1)
            ->select('attendance.id as id')
            ->get();

            foreach ($caridata as $cd) {
                AttendanceUser::create([
                'user_id' => $request->id_employee , 
                'attendance_id' => $cd->id
            ]);
            }
        }
        else
        {

            $attendance = Attendance::create([
                'user_id' => $request->id_employee,
                'in_out' => 'In'
            ]);

            $caridata = Attendance::where('user_id',$request->id_employee)
            ->whereDate('created_at',now())
            ->orderBy('updated_at','desc')
            ->skip(0)
            ->take(1)
            ->select('attendance.id as id')
            ->get();

            foreach ($caridata as $cd) {
                AttendanceUser::create([
                'user_id' => $request->id_employee , 
                'attendance_id' => $cd->id
            ]);
            }
        }

        return redirect()->route('home');
    }

}
