<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class CommentController extends Controller
{



     public function index(){
     	$comment = \App\Comment::orderBy('id','DESC')->paginate(50);
     	$arrayName = array('comment' => $comment  );
     	return view('admin.comments',$arrayName);
     }


     public function index_public(){
     	$comment = \App\Comment::orderBy('id','DESC')->where('status' ,'ok')->paginate(5);
     	$arrayName = array('comment' => $comment  );
     	return view('home',$arrayName);
     }




     public function create(Request $request){


        $request->validate(
            [
                'name'=>'required|string|min:2|max:15',
                'email'=>'nullable|email|max:50|min:10',
                'content'=>'required|string|min:2|max:400' 
            ]
        );

     	$comment = new  \App\Comment;
     	$comment->name =  $request->name;
     	$comment->email =  $request->email;
     	$comment->content =  $request->content;
     	$comment->status ='hide';
     	$comment->save();


        $sets = \App\Setting::get()->first();
        $email=  $sets['email'];


        Mail::send('emails.not', ['content' => ''], function ($m) use ($email) {
            $m->from(env('MAIL_USERNAME'), 'لديك رسالة جديدة');
            $m->to($email, 'عميلنا العزيز')->subject('لديك رسالة جديدة');
         });



     	return redirect()->back()->with('data', ['alert'=>'تم ارسال تعليقك بنجاح وبإنتظار المراجعة ','alert-type'=>'success']);

 
     }



    public function destroy($id){
     	$comment = \App\Comment::where('id', $id)->delete();
     	return redirect()->back()->with('data', ['alert'=>'تم الحذف بنجاح ','alert-type'=>'success']);
    }



    

    public function update(Request $request)
    {
        $comment =   \App\Comment::where('id',$request->id)->update(
                [
                     
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'content'=>$request->content, 
 

                ]
            );


        return redirect()->back()->with('data', ['alert'=>' تم التحديث بنجاح ','alert-type'=>'success']);


    }


    public function update_to_ok($id){

     	$comment =   \App\Comment::where('id',$id)->update(
     		[
     			'status'=>'ok'
     		]);

     	return redirect()->back()->with('data', ['alert'=>' تم التحديث بنجاح ','alert-type'=>'success']);
     }





    public function update_to_hide($id){

     	$comment =   \App\Comment::where('id',$id)->update(
     		[
     			'status'=>'hide'
     		]);

     	return redirect()->back()->with('data', ['alert'=>' تم التحديث بنجاح ','alert-type'=>'success']);
    }




      




}
