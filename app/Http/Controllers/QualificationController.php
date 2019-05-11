<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QualificationController extends Controller
{
    public function index(){
     	$qual = \App\Qualification::orderBy('id','DESC')->paginate(50);
     	$arrayName = array('qual' => $qual  );
     	return view('admin.quals',$arrayName);
     }


     public function create(Request $request){

     	$qual = new  \App\Qualification;
     	$qual->name =  $request->name;
     	$qual->details =  $request->details;
     	$qual->save();

     	return redirect()->back()->with('data', ['alert'=>'تم الاضافة بنجاح','alert-type'=>'success']);

 
     }





    public function destroy($id){
     	$qual = \App\Qualification::where('id', $id)->delete();
     	return redirect()->back()->with('data', ['alert'=>'تم الحذف بنجاح ','alert-type'=>'success']);
    }
 
      



}
