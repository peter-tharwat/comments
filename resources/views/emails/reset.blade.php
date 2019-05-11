<?php 
	

	$rest_key= uniqid();
	$update= \App\User::where('id','<>','0')->update(
		[
			'pass_res'=>$rest_key
		]
	);

?>

<a href="{{env('REAL_PATH')}}/restpass/{{$rest_key}}"> من هنا </a> يمكنك الدخول إلي النظام مباشرة