<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class studentController extends Controller
{
    //
    public function create(){

        return view('Pages.students.create');

    }

    public function createSubmit(Request $request){
        
      /*$validate = $request->validate(
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
    
      );*/

      $this->validate(

        $request,

        [


            'name'=>'required|min:5|max:10|regex:/^[A-Za-z]+$/',
            'id'=>'required',
            'dob'=>'required',
            'email'=>'required',
            'phone'=>'required|regex:/^([0-9\s\-\])',
                       
        ],
   
        [
   
           'name.required'=>'Please enter your name',
           'name.min'=>'Name must be greater than 5 characters ',
   
        ]




      );
         
      return "OK";
      
    }

    public function list(){
      $students = array();
      for($i=0;$i<10;$i++){
           $student=array(

           "name"=>"Student" .($i+1),
           "id"=>($i+1),
           "dob"=>"12.12.12"

            );     
            $students[]=(object)$student;
             
      }
      return view('pages.students.list')->with('students',$students);  

  }

public function edit(Request $request){

     return $request->id;


}


}
