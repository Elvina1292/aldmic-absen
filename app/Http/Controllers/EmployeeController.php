<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function view_employee()
    {
        if (Auth::user()->role == 'admin') {
            $employee = User::select('*')
                    ->paginate(2);
                    
            return view('viewemployee', ['employee' => $employee]);
        } else {
            return redirect()->route('home');
        }
    }

    public function search_employee(Request $request)
    {
         if (Auth::user()->role == 'admin') {
            $employee = User::select('*')
                    ->where('nik', 'like', "%".$request->search."%")
                    ->orwhere('full_name', 'like', "%".$request->search."%")
                    ->orwhere('address', 'like', "%".$request->search."%")
                    ->orwhere('email', 'like', "%".$request->search."%")
                    ->get();
                    
            return view('viewemployee', ['employee' => $employee]);
        } else {
            return redirect()->route('home');
        }
    }

    public function add_employee()
    {
        if (Auth::user()->role == 'admin') 
            return view('addemployee');
        else
            return redirect()->route('home');
    }

    public function store_employee(Request $request)
    {


        $this->validate($request,[
            'nik' => 'required',
            'full_name' => 'required',
            'email' => 'required'
        ]);

        if (Auth::user()->role == 'admin') {
            $employee = User::create([
                'nik' => $request->nik,
                'full_name' => $request->full_name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'address' => $request->address,
                'role' => 'employee',
                'password' => Hash::make('password')
            ]);
            return redirect()->route('view_employee');
        } else {
            return redirect()->route('home');
        }
    }

    public function edit_employee($id)
    {
        if (Auth::user()->role == 'admin') {
           $employee = User::select('*')
                     ->where('id', $id)
                     ->get();
       } else {
            
           $employee = User::select('*')
                     ->where('id',Auth::user()->id)
                     ->get();
        }

           return view('editemployee', ['employee' => $employee]);
    }

    public function update_employee(Request $request)
    {


        $this->validate($request,[
            'nik' => 'required',
            'full_name' => 'required',
            'email' => 'required'
        ]);

        if (Auth::user()->role == 'admin') {
           $password = ($request->password == '') ? 'password' : $request->password;

           $employee = User::where('id', $request->id_employee)
                     ->update([
                            'nik' => $request->nik,
                            'full_name' => $request->full_name,
                            'email' => $request->email,
                            'mobile' => $request->mobile,
                            'address' => $request->address,
                            'role' => 'employee',
                            'password' => Hash::make($password)
                     ]);

           return redirect()->route('view_employee');
        } else {
           $password = ($request->password == '') ? 'password' : $request->password;

           $employee = User::where('id', $request->id_employee)
                     ->update([
                            'nik' => $request->nik,
                            'full_name' => $request->full_name,
                            'email' => $request->email,
                            'mobile' => $request->mobile,
                            'address' => $request->address,
                            'role' => 'employee',
                            'password' => Hash::make($password)
                     ]);
            return redirect()->route('home');
        }
    }

    public function delete_employee($id)
    {
        if (Auth::user()->role == 'admin') {
           $employee = User::select('*')
                     ->where('id', $id)
                     ->delete();

           return redirect()->route('view_employee');
       } else {
            return redirect()->route('home');
        }
    }
}
