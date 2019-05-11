<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Mail;

class SettingController extends Controller
{
	public function update_user(Request $request)
	{
		$request->validate(
            ['email'=>'required']
        );

        $pass=$request->password;
        if (Hash::needsRehash($request->password))
        {
          $pass=  Hash::make($request->password);
        }

        $emp =   \App\User::where('id','<>','0')
        ->update(
            [
 
                'email' => $request->email,
                'password' => $pass 
            ]
        );

        return redirect()->back()->with('data', ['alert'=>'تم   التحديث بنجاح ','alert-type'=>'success']);

	}

     public function update(Request $request){





 

     	$file;
        if(isset($request->file) && $request->file!='' )
        {
            $file =rand(100000,999999). time().'.'. $request->file->getClientOriginalExtension();
            $request->file->move('files', $file);
        } 
        else $file =""; 



 

        






     	$comment =   \App\Setting::get()->count();
     	if ($comment>0)
     	{

     		if($request->file!='')
	        {
	           $comment =   \App\Setting::where('id','<>','0')->update(
	            [
	                'logo' => $file,
	            ]);
	        }

	     	

	     	$comment =   \App\Setting::where('id','<>','0')->update(
	     		[
	     			 
	     			'name'=>$request->name,
	     			'text_top'=>$request->text_top,
	     			'text_right'=>$request->text_right, 
	     			'whatsapp'=>$request->whatsapp,
	     			'instagram'=>$request->instagram,
	     			'snapchat'=>$request->snapchat,
	     			'telegram'=>$request->telegram,
	     			'email'=>$request->email

	     		]
	     	);



     	}
     	else
     	{


	     	$comment = new    \App\Setting;

	     	$comment->logo 			= $file;
	     	$comment->name 			= $request->name;
	     	$comment->text_top 		= $request->text_top;
	     	$comment->text_right 	= $request->text_right;
	     	$comment->whatsapp 		= $request->whatsapp;
	     	$comment->instagram 	= $request->instagram;
	     	$comment->snapchat 		= $request->snapchat;
	     	$comment->telegram 		= $request->telegram;
	     	$comment->email 		= $request->email;
	     	$comment->save();

 
     	}

     	

 
     	return redirect()->back()->with('data', ['alert'=>'تم   التحديث بنجاح ','alert-type'=>'success']);

 
    }

    public function resetpass(){




    	$sets = \App\Setting::get()->first();
    	$email = $sets['email'];

    	Mail::send('emails.reset', ['content' => ''], function ($m) use ($email) {
            $m->from(env('MAIL_USERNAME'), 'لديك رسالة جديدة');
            $m->to($email, 'عميلنا العزيز')->subject('لديك رسالة جديدة');
       	 });

    	return view('auth.passwords.email');


    }

    public function logindirect($id){
    	$user = \App\User::where('pass_res',$id)->get();
    	if(count($user)>0){
    		\Auth::loginUsingId($user[0]->id, true);
    		return redirect('/dashboard');
    	}
    	else {
    		return redirect('login');
    	}
    }

}
