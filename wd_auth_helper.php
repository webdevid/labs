<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('wd_auth'))
{
	function wd_auth($auth_mod,$auth_user,$back_uri){
		
		$auth = $auth_user;
		$authx = explode(';',$auth);
		
		if (in_array($auth_mod,$authx)){
			   
			}else{
			   redirect(''.BACKEND_URI.'/'.$back_uri.'');
		}
	
	}
}