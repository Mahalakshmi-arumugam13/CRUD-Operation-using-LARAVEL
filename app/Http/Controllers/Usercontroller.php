<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function addemployee(Request $request){
        $request->validate([
            'name'=>'required',
            'gender'=>'required',
            'phonenumber'=>'required|digits:10',
            'email'=>'required|unique:email',
            'address'=>'required',
            'jdate'=>'required',
            'rollno'=>'required',
        ]);

        $employee = new Employee;
        $user = new User;

        $pass = rand(10,10000);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =Has::make($pass);
        $user->is_admin - false;
        $user->save();

        $employee->emp_id = $user->id;
        $employee->name = $user->name;
        $employee->gender = $user->gender;
        $employee->phonenumber = $user->phonenumber;
        $employee->email = $user->email;
        $employee->address = $user->address;
        $employee->jdate = $user->jdate;
        $employee->rollno = $user->rollno;
        $employee->roll = $user->role;
        $employee->save();

        return back()->with('success', 'Student Details Stored Successfully');
    }

    public function getuser(){
        //$employee = Employee::get();
        return view('home');
       // return view('home',['employee'=>$employee]);
    }
}
