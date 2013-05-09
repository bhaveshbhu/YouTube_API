<?php   

	
	include_once('config.php');
	
	$scope='https://gdata.youtube.com';
	$response_type='code';
	$access_type = 'offline';
    $Access_token='https://accounts.google.com/o/oauth2/auth?client_id='.$client_id.'&redirect_uri='.$redirect_uri.'&scope='.$scope.'&response_type='.$response_type.'&access_type='.$access_type;               

    echo '<a href="' . $Access_token . '"><button type="button">Click here to obtain a token2</button></a>';
?> 