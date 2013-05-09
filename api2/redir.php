
<?php    
 
	include_once('config.php');
  
	$author_code = $_GET["code"];

    echo 'Author code: <br>' .$author_code . '<br>';
	echo '<\br>';

    $oauth2token_url = 'https://accounts.google.com/o/oauth2/token';
	 $fields_string = '';
        //url-ify the data for the POST
		$clienttoken_post = array(
                            'code'=>urlencode($author_code),
                            'client_id'=>urlencode($client_id),
                            'client_secret'=>urlencode($client_secret),
                            'redirect_uri'=>urlencode($redirect_uri),
                            'grant_type'=>'authorization_code'
                        );
       foreach($clienttoken_post as $key=>$value) {
            $fields_string .= $key.'='.$value.'&';
        }
      rtrim($fields_string,'&');

	  
    $json_response = get_user_data($oauth2token_url,array(),$fields_string);  
	
	echo 'RESULT code: <br>' ;
    echo '<br>';    
	$results = json_decode($json_response,true);
	echo $results['access_token'];
	echo '<br>'; 
	echo '<br>'; 

	
	$url='gdata.youtube.com/feeds/api/users/default/uploads?alt=json';
	//$url='gdata.youtube.com/feeds/api/users/default/uploads?alt=json';
	$header = array(
		//"Content-Type: application/atom+xml",
		"Content-Type: application/json",
		"type:feed",
		"Host: gdata.youtube.com",
		"Authorization: Bearer ".$results['access_token']
		);
	
	
	$result = get_user_data($url,$header);
	//echo $result;
	$result_array = json_decode($result,true);
	echo '</br>';
	//print $result_array->{'title'};
	//echo $result_array['feed'];
	//$result_array = $results[0];
	//echo $result_array;
	//$resu = json_decode(,true);
	//echo $resu;
	echo '<br>'; 
	echo '<br>'; 
	printJson($result_array);
	
	
	function get_user_data($url,array $header,$fields=null){
	 
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HTTPHEADER,$header); 
		
		if(strlen($fields)){
		curl_setopt($curl, CURLOPT_POST,true);
		curl_setopt($curl, CURLOPT_POSTFIELDS,$fields);
		}
		
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		
		$json_response = curl_exec($curl);
		return $json_response; 
	
		curl_close($curl);
	}
	
	function printJson($result_array){
		//if(is_array($value)){
		foreach ($result_array as $key => $value)
		{
			if(is_array($value)){
				printJson($value);
			}
			else{
				print $key;
				print "      <---->       ";
				print $value;
				print "<br />";
			}
		}
		
	}
 ?>

