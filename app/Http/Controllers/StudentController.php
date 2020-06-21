<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Contact;

class StudentController extends Controller
{

  public function index() {
    $students = Student::all();
    return view('student', ['students'=>$students]);
  }

  public function create(Request $request) {
    $students = Student::all();
    return view('create', ['students'=>$students]);
  }

  public function store(Request $request) {
    $student = new Student();
    $student->firstName = $request->input('firstName');
    $student->secondName = $request->input('secondName');
    $student->age = $request->input('age');
    $student->major = $request->input('major');
    $student->save();
    return redirect('/'); 
  }

  public function edit($id) {
    $student = Student::find($id);
    $students = Student::all();
    return view('edit', ['student'=>$student, 'students'=>$students]);
  }


  public function update($id, Request $request) {
    $student = Student::find($id);
    $student->firstName = $request->input('firstName');
    $student->secondName = $request->input('secondName');
    $student->age = $request->input('age');
    $student->major = $request->input('major');
    $student->save();
    return redirect('/');
  }
 

  public function delete($id) {
    $student = Student::find($id);
    $student->delete();
    return redirect('/');
  }


  public function contact(Request $request) {
    $contacts = Contact::all();
    return view('contact', ['contacts'=>$contacts]);
  }

  public function save(Request $request) {
    $contact = new Contact();
    $contact->name = $request->input('name');
    $contact->mailaddress = $request->input('mailaddress');
    $contact->phonenumber = $request->input('phonenumber');
    $contact->content = $request->input('content');
    $contact->save();
    return redirect('/');
  }
  

 
    
}








