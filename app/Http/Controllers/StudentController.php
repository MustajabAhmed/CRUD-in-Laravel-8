<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->get('name');
        $student->email = $request->get('email');
        $student->password = Hash::make($request->get('password'));
        $student->address = $request->get('address');
        $student->save();
        return redirect('/show');
    }

    function show()
    {
        $student = Student::all();
        // dd($student);
        return view('show', compact('student'));
    }

    function delete($id)
    {
        $student = Student::find($id);
        // dd($student);
        $student->delete();
        return redirect('/show');
    }

    function edit($id)
    {
        $student = Student::find($id);
        return view('edit', compact('student'));
    }

    function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->get('name');
        $student->email = $request->get('email');
        $student->password = Hash::make($request->get('password'));
        $student->address = $request->get('address');
        $student->save();
        return redirect('/show');
    }

    function search(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $student = Student::where('name', 'LIKE', "%$search%")->get();
            // dd($student);
        } else {
            $student = Student::all();
        }
        $data = compact('student');
        return view('show')->with($data);
    }
}