<?php
/**
 * HttpRequest Component
 *
 * @package 
 * @category Component
 * @author Nguyen Nhu Tuan <tuanquynh0508@gmail.com>
 * @copyright
 * @version 1.0.0
 * @link 
 */
class HttpRequest extends CHttpRequest {
		
	/*
	* @description: Returns real the user IP address.
	* @return string user IP address
	* @since : 14/07/2014
	* @author Nguyen Nhu Tuan <tuanquynh0508@gmail.com>
	*/
	public function getUserHostAddress() {
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			$ip = $_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}
	
}