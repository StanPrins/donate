<?php
class myTools
{
	protected function generate_random_key ($len = 20)
    {
		$string = '';
		$pool   = 'abcdefghijklmnopqrstuvwzyzABCDEFGHIJKLMNOPQRSTUVWZYZ0123456789';
		for ($i = 1; $i <= $len; $i++) {
			$string .= substr($pool, rand(0,61), 1);
		}
	
	  	return md5($string);
    }	
}