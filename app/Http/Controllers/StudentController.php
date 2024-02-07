<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //index function
    public function index(){
        $students = Student::all();
        return view('students.index', ['students' => $students]);
        
    }

    //register function
    public function register(){
        return view('students.register');
    }

    //save function
    public function save(Request $request){
         $studentData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
         ]);
         //register student through model
         $newStudent = Student::query()->create($studentData);
         return redirect()->route('student.index');
    }

    //edit function
    public function edit(Student $student){
       return view('students.edit', ['student' => $student]);
    } 
    public function update(Request $request, Student $student){
        $studentData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
         ]);
         //update student info 
         $student->update($studentData);
         return redirect()->route('student.index')->with('success', 'Student updated successfully');
    }
    //delete function
    public function delete(Student $student){
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Student deleted successfully');
    }
}
