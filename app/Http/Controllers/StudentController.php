<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentdetail;

class StudentController extends Controller
{
    public function viewstudents(){
        return view('index');
    }
    public function view($id){
        $studentdetail = studentdetail::where('id',$id)->first();
        return view('viewEmployee', ['studentdetail'=>$studentdetail]);
    }
    public function edit($id){
        $studentdetail = studentdetail::where('id',$id)->first();
        return view('EditEmployee', ['studentdetail'=>$studentdetail]);
    }
    public function deleteemp($id){
        $studdel = studentdetail::where('id',$id)->first();
        $studdel->delete();

        return back()->with('success','Detail deleted successfully');


    }
    public function updateemp(Request $request, $id){
        $request->validate([
            'studentname'=>'required',
            'gender'=>'required',
            'phone'=>'required|digits:10',
            'email'=>'required',
            'grade'=>'required'
        ]);


        $studup = studentdetail::where('id',$id)->first();

        $studup->studentname = $request->studentname;
        $studup->gender = $request->gender;
        $studup->phone = $request->phone;
        $studup->email = $request->email;
        $studup->grade = $request->grade;

        $studup->save();

        return back()->with('success','Employee details updated successfully');
    }
    public function viewdetail(){
        $studentdetail = studentdetail::get();

        return view('home', ['studentdetail'=>$studentdetail]);
    }
    public function addstudents(){
        return view('addstudents');
    }
    public function studentdetail(Request $request){

        $studentname = $request->input('studentname');
        $gender = $request->input('gender');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $grade = $request->input('grade');

        $studentdetail = new studentdetail;

        $studentdetail->studentname = $studentname;
        $studentdetail->gender = $gender;
        $studentdetail->email = $email;
        $studentdetail->phone = $phone;
        $studentdetail->grade = $grade;


        $studentdetail->save();

        return back()->with('success', 'Student Details Inserted');

    }
}
