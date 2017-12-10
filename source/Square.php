<?php
namespace Sakthi;

  class Square {
    static function area($target_url){
    

	include('simple_html_dom.php');

	$context = stream_context_create(array(
	    'http' => array(
	        'header' => array('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'),
	    ),
	));

	$html = file_get_html($target_url, false, $context);?>

		<table><th> Crawl Results</th><tr style="width:20%"><?php
				foreach($html->find('a') as $e) {
		?>
				    
				    <td ><?php echo $e->href . '<br>';?></td></tr>

		<?php 
				} ?>

		<th> Image Url</th><tr style="width:20%"><?php
				foreach($html->find('img') as $e) {
		?>
				    
				    <td ><?php echo $e->src . '<br>';?></td></tr>

		<?php 

		}
		

// 		function Emailforscrap($url){
// 	 
// 	      $words = preg_split('/\s+/', $url, -1, PREG_SPLIT_NO_EMPTY);
// 				$first_name = $words[0];
// 				$first = $first_name[0];
// 				$fname = substr($first_name, 0, -1);
// 				if(count($words) == 3) {
// 						$last_name = $words[1].$words[2];
// 					}else{ 
// 						$last_name = $words[1];
// 					}
// 				$last = $last_name[0];
// 				$string1 = array(strtolower($first_name.$last_name),$first_name.$last,$first_name.'_'.$last_name,$first_name.'.'.$last_name,$last_name.$first);
				
				
// 				$headers[] = 'Accept: text/xml, application/xml, application/html, application/xhtml+xml, text/html;q=0.9, text/plain;q=0.8, image/gif, image/x-bitmap, image/jpeg, image/pjpeg';
// 				$headers[] = 'Connection: Keep-Alive';
// 				$headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';
// 				$headers[] = 'REMOTE_ADDR:192.168.1.116';
// 				$headers[] = 'HTTP_X_FORWARDED_FOR:192.168.1.116';

// //$cookie_file_path = "C:/xampp/htdocs/moneycheaper/httpdocs/wellsfargo.txt"; 

// 				$useragent_detail=array('Firefox (WindowsXP)'=>'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SIMBAR={409E5115-4C09-4A0F-BDDE-4E9F115F3954}; GTB7.4; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C)', 
// 				'IE 7'=>'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30)',
// 				'IE 6'=>'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)',
// 				'Safari'=>'Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit/522.11 (KHTML, like Gecko) Safari/3.0.2',
// 				'Opera'=>'Opera/9.00 (Windows NT 5.1; U; en)',
// 				'Chrome'=>'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13');


// 				 for($l=0;$l<count($string1);$l++) {
// 						$domain = str_ireplace('www.', '', parse_url($urlresult, PHP_URL_HOST));
// 						$email = $string1[$l].'@'.$domain;
// 					     $url = $global_config["SiteServer"].'emailvalidation.php?fname='.$first_name.'&lname='.$last_name.'&email='.$email;
// 						$ch		=	curl_init();	
// 						curl_setopt($ch, CURLOPT_URL, $url);   						 			
// 						curl_setopt($ch, CURLOPT_REFERER, $global_config["SiteServer"]);
// 						curl_setopt($ch, CURLOPT_USERAGENT, $useragent_detail[$rand_useragent]);	
// 						curl_setopt($ch, CURLOPT_HTTPHEADER,$headers); 
// 						curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true); 
// 						curl_setopt($ch, CURLOPT_HEADER, 0);	
// 						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);		
// 						curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
// 						curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// 						curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
// 						curl_setopt($ch, CURLOPT_VERBOSE, true); // some output will go to stderr / error_log
// 						curl_setopt($ch, CURLOPT_TIMEOUT, 10);
// 						curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
// 						$output = curl_exec($ch);
// 						curl_close ($ch);
// 						preg_match_all("/<div id='message'>(.*)<\/div>/im", $output, $result);
// 						if($result[1][0]!=''){
// 						   return $result[1][0];
// 						}else{
// 						   return 'No email Match';
// 						}
// 				 }
				

// 	}

  		}
 	}
?>