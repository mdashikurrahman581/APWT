<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class studentController extends Controller
{
    //
    public function create(){

        return view('Pages.students.create');

    }

    public function createSubmit(Request $request){
      //Using request validate method
       /* 
      $validate = $request->validate(
        [


         'name'=>'required|min:5|max:10',
         'id'=>'required',
         'dob'=>'required',
         'email'=>'required',

        ],

        [

        'name.required'=>'Please enter your name',
        'name.min'=>'Name must be greater than 5 characters ',

        ]
    
      );
      //Using class validate method
      */
      $this->validate(

        $request,

        [


            'name'=>'required|min:5|max:10|regex:/^[A-Za-z]+$/',
            's_id'=>'required',
            'dob'=>'required',
            'email'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
                       
        ],
   
        [
   
           'name.required'=>'Please enter your name',
           'name.min'=>'Name must be greater than 5 characters ',
   
        ]




      );
         
      $var = new Student();
      $var->name=$request->name;
      $var->s_id=$request->s_id;
      $var->email=$request->email;
      $var->phone=$request->phone;
      $var->dob=$request->dob;
      $var->save();
    
      return "OK";
      //return view('pages.students.list');
      
    }

    public function list(){
     /* $students = array();
      for($i=0;$i<10;$i++){
           $student=array(

           "name"=>"Student" .($i+1),
           "id"=>($i+1),
           "dob"=>"12.12.12"

            );     
            $students[]=(object)$student;
             
      }*/
      $students = Student::all();
      return view('pages.students.list')->with('students',$students);  

  }

public function edit(Request $request){

     $id = $request->id;
     $student = Student::where('id','=',$id)->first();
     //return $student;
    return view('pages.students.edit')->with('student',$student);
    //$student->id;
}

public function editSubmit(Request $request){
  $id = $request->id;
  $var= Student::where('id',$id)->first();
  
  $var->name=$request->name;
  $var->s_id=$request->s_id;
  $var->email=$request->email;
  $var->phone=$request->phone;
  $var->dob=$request->dob;
  $var->save();
  return redirect()->route('student.list');


}




}
