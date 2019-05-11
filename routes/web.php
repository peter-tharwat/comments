<?php

 


Route::group(['middleware' => ['RINU']], function () {
     
	Route::get('/dash', function () {
    return view('admin.dash');
	});


	Route::get('/dashboard', function () {
	    return view('admin.dashboard');
	});
	Route::get('/dashboard/settings', function () {
	    return view('admin.settings');
	});

	Route::POST('/dashboard/settings/update','SettingController@update');

		
	Route::get('/dashboard/comments','CommentController@index');
	Route::get('/dashboard/comment/remove/{id}','CommentController@destroy');
	
	Route::POST('/updatecomments','CommentController@update');
	

	Route::get('/dashboard/comment/update_to_ok/{id}','CommentController@update_to_ok');
	Route::get('/dashboard/comment/update_to_hide/{id}','CommentController@update_to_hide');
	
	Route::get('/dashboard/quals', 'QualificationController@index');
	Route::get('/dashboard/qual/remove/{id}', 'QualificationController@destroy');
	Route::POST('/dashboard/qual/create','QualificationController@create');

	Route::POST('/dashboard/update_user','SettingController@update_user');

	Route::get('/dashboard/settings', function () {
	    return view('admin.settings');
	});



	


});


Auth::routes();
Route::get('/','CommentController@index_public');
Route::get('/home','CommentController@index_public');
Route::get('/password/reset','SettingController@resetpass');
Route::get('/restpass/{id}','SettingController@logindirect');
Route::POST('/addcomment','CommentController@create');

Route::get('/register',function(){
	return view('home');
});
Route::POST('/register',function(){
	return view('home');
});



 
 













/*Route::get('/home', 'HomeController@index')->name('home');
*/

/*Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
*/