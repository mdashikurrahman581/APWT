<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Crud;
use Session;

class crudController extends Controller
{
    //
    public function showData(){
         //$showData = Crud::all();
         //$showData = Crud::paginate(3);
         $showData = Crud::simplePaginate(3);
        return view('show_data',compact('showData'));


    }

    public function addData(){
     
        return view('add_data');
      
    }

    public function storeData(Request $request){
       
    
                $var=[
                'name'=>'required | min:5|max:10|regex:/^[A-Za-z]+$/',
                'p_id'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'price'=>'required',
                'quantity'=>'required',
                'description'=>'required'
             
                           
                ];

                $var2=[
                    'name.required'=>'Please enter the product name',
                    'name.min'=>'Product name must be greater than 5 characters ',
                    'p_id.required'=>'Please enter the product id',
                    'price.required'=>'Please enter the product price',
                    'quantity.required'=>'Please enter the product quantity',
                    'description.required'=>'Please enter the product description',
                ];
                $this->validate($request, $var,$var2);
                $crud=new crud();
                $crud->name=$request->name;
                $crud->p_id=$request->p_id;
                $crud->price=$request->price;
                $crud->quantity=$request->quantity;
                $crud->description=$request->description;
                $crud->save();
                Session::flash('msg','Product Successfully added');
       
        return redirect('/show');


    }

    public function editData($id=null){
        $edit=Crud::find($id);
        return view('edit_data',compact('edit'));
    }

    public function updateData(Request $request, $id){
       
    
        $var=[
        'name'=>'required | min:5|max:10|regex:/^[A-Za-z]+$/',
        'p_id'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
        'price'=>'required',
        'quantity'=>'required',
        'description'=>'required'
     
                   
        ];

        $var2=[
            'name.required'=>'Please enter the product name',
            'name.min'=>'Product name must be greater than 5 characters ',
            'p_id.required'=>'Please enter the product id',
            'price.required'=>'Please enter the product price',
            'quantity.required'=>'Please enter the product quantity',
            'description.required'=>'Please enter the product description',
        ];
        $this->validate($request, $var,$var2);
        $crud= Crud::find($id);
        $crud->name=$request->name;
        $crud->p_id=$request->p_id;
        $crud->price=$request->price;
        $crud->quantity=$request->quantity;
        $crud->description=$request->description;
        $crud->save();
        Session::flash('msg','Product Successfully Updated');

return redirect('/show');


}

public function deleteData($id=null){

$delete=Crud::find($id);
$delete->delete();
Session::flash('msg','Product Successfully Deleted');

return redirect('/show');


}


}
