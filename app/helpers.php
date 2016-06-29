<?php 

function flashthis($title = null, $message = null) {
	$flash = app('App\Http\Flashthis');

	if(func_num_args()==0){
		return $flash;
	}

	return $flash->message($title, $message);
}