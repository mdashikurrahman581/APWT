<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function contact(){
       return view('pages.contact');

    }
    public function home(){
      return view('pages.home');

   }


   
    public function myProfile(){
      $name="<span style ='color:red'>MD. ASHIKUR RAHMAN</span>";
      $id="18-37852-2";
      $dob="18-05-99";
      $names = array ("ASHIK","YUSUF", "SHAKIL","SULTAN");
      return view('pages.myProfile')
      ->with('name',$name)
      ->with('id',$id)
      ->with('dob',$dob)
      ->with('names',$names);



   }




}
