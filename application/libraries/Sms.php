<?php  
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sms{	
function __constructor()
	{
	}
	    function sendsms($mobile, $message)	{
			/* $url = "http://smslogin.mobi/spanelv2/api.php?username=docni&password=Doc@ni.in&to=".$mobile."&from=DOCNIN&message=".urlencode($message); */
			$url = "http://sms.scubedigi.com/api.php?username=EDMOTE&password=810781&to=".$mobile."&from=EDMOTE&message=".urlencode($message);
			$ret = file($url);
			return $ret;
		}
}
?>