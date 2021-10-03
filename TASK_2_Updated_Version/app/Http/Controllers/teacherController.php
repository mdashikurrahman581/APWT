<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;


class teacherController extends Controller
{
    //
    public function create(){
        return view('pages.teachers.create');
    }
 public function createSubmit(Request $request){

    $var = new Teacher();
    $var->name=$request->name;
    $var->phone=$request->phone;
    
    $var->save();

     return "submitted";

 }

 public function list(){
return view('pages.teachers.list');

 }


}
