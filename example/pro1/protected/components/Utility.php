<?php
/**
 * Utility Component
 * Contains some utility functions for commonly using
 *
 * @package 
 * @category Component
 * @author Nguyen Nhu Tuan <tuanquynh0508@gmail.com>
 * @copyright
 * @version 1.0.0
 * @link 
 */
class Utility extends CComponent {
    
	public $name = 'xxxx';
	
	public function init() {}
	
	/*
	* @description: Send Email
	* @since : 14/07/2014
	* @author Nguyen Nhu Tuan <tuanquynh0508@gmail.com>
	*/
    public function slugify($str) {
		$tmp = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
		$tmp = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $tmp);
		$tmp = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $tmp);
		$tmp = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $tmp);
		$tmp = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $tmp);
		$tmp = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $tmp);
		$tmp = preg_replace("/(đ)/", 'd', $tmp);
		$tmp = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $tmp);
		$tmp = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $tmp);
		$tmp = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $tmp);
		$tmp = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $tmp);
		$tmp = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $tmp);
		$tmp = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $tmp);
		$tmp = preg_replace("/(Đ)/", 'D', $tmp);				
		$tmp = strtolower(trim($tmp));		
		//$tmp = str_replace('-','',$tmp);
		$tmp = str_replace(' ','-',$tmp);
		$tmp = str_replace('_','-',$tmp);
		$tmp = str_replace('.','',$tmp);
		$tmp = str_replace("'",'',$tmp);
		$tmp = str_replace('"','',$tmp);		
		$tmp = str_replace('"','',$tmp);
		$tmp = str_replace('"','',$tmp);
		$tmp = str_replace("'",'',$tmp);
		$tmp = str_replace('̀','',$tmp);		
		$tmp = str_replace('&','',$tmp);
		$tmp = str_replace('@','',$tmp);
		$tmp = str_replace('^','',$tmp);
		$tmp = str_replace('=','',$tmp);
		$tmp = str_replace('+','',$tmp);
		$tmp = str_replace(':','',$tmp);
		$tmp = str_replace(',','',$tmp);
		$tmp = str_replace('{','',$tmp);
		$tmp = str_replace('}','',$tmp);
		$tmp = str_replace('?','',$tmp);
		$tmp = str_replace('\\','',$tmp);
		$tmp = str_replace('/','',$tmp);
		$tmp = str_replace('quot;','',$tmp);
		return $tmp;
	}
    
	/*
	* @description: Send Email
	* @since : 14/07/2014
	* @author Nguyen Nhu Tuan <tuanquynh0508@gmail.com>
	*/
	public function formatCurrency($number) {
		$tmp = number_format($number, 0, '.', ',');
		if(Yii::app()->params['currency']['position']=='prefix') {
			return Yii::app()->params['currency']['symbol'].$tmp;
		} else {
			return $tmp.Yii::app()->params['currency']['symbol'];
		}
	}
	
	/*
	* @description: Send Email
	* @since : 14/07/2014
	* @author Nguyen Nhu Tuan <tuanquynh0508@gmail.com>
	*/
	public function sendEmail($name, $from, $to, $subject, $message, $html=false) {		
		mb_language(Yii::app()->language);
        mb_internal_encoding('UTF-8');
        $headers = 'From: ' . mb_encode_mimeheader($name) . '<' . $from . '>'."\n";		
		$headers .= 'Reply-To: ' . $from;
		if($html===true) {
			$headers .= 'Content-Type: text/html; charset="utf-8"' . "\n";
		}
		$headers .= 'Content-Transfer-Encoding: quoted-printable' . "\n";
		$parameters = '-f  '. $from;
        return @mb_send_mail($to, $subject, $message, $headers, $parameters);
	}

}