<!--
*@author : bhavesh sharma
-->

<?php
	/*
		{
		"kind": "youtube#videoListResponse",
		"etag": "\"8TOPSm5ek9Nh6woLJrPMROQl6rM/veLDXMLuVLrR0MTW0UKGDzvNXB4\"",
		"items": [
		{
		"id": "7lCDEYXw3mM",
		"kind": "youtube#video",
		"etag": "\"8TOPSm5ek9Nh6woLJrPMROQl6rM/_IoXwyYfD3KfxHvKyJL4pprTBFs\"",
		"snippet": {
		"publishedAt": "2012-06-20T23:12:38.000Z",
		"channelId": "UC_x5XG1OV2P6uZZ5FSM9Ttw",
		"title": "Google I/O 101: Q&A On Using Google APIs",
		"description": "Antonio Fuentes speaks to us and takes questions on working with Google APIs and OAuth 2.0.",
		"thumbnails": {
		"default": {
		"url": "https://i.ytimg.com/vi/7lCDEYXw3mM/default.jpg"
		},
		"medium": {
		"url": "https://i.ytimg.com/vi/7lCDEYXw3mM/mqdefault.jpg"
		},
		"high": {
		"url": "https://i.ytimg.com/vi/7lCDEYXw3mM/hqdefault.jpg"
		}
		},
		"channelTitle": "GoogleDevelopers",
		"categoryId": "28"
		},
		"contentDetails": {
		"duration": "PT15M51S",
		"dimension": "2d",
		"definition": "hd",
		"caption": "true",
		"licensedContent": false
		},
		"statistics": {
		"viewCount": "3515",
		"likeCount": "27",
		"dislikeCount": "0",
		"favoriteCount": "0",
		"commentCount": "16"
		},
		"status": {
		"uploadStatus": "processed",
		"privacyStatus": "public",
		"license": "youtube",
		"embeddable": true,
		"publicStatsViewable": true
		}
		}
		]
		}
	*/
	//SAMPLE END
?>


<?php
	
	$api_key = 'provide you api key';
	/*
	API  key can be obtained from  "https://code.google.com/apis/console/"
	*/
	$video_id = '7lCDEYXw3mM';
	$fields_string = '';
	
	
	//$oauth2token_url = "https://www.googleapis.com/youtube/v3/videos?";
	$oauth2token_url="https://www.googleapis.com/youtube/v3/videos?";
	
	
	//url-ify the data for the POST
	$clienttoken_post = array(
	'id'=>urlencode($video_id),
	'key'=>urlencode($api_key),
	'part'=>urlencode('snippet,contentDetails,statistics,status')
	);
	
	foreach($clienttoken_post as $key=>$value) {
		$fields_string .= $key.'='.$value.'&';
	}
	
	$json_response = file_get_contents($oauth2token_url.$fields_string);
	
	
	$results = json_decode($json_response,true);
	
	$result_array = $results['items'][0];
	//echo $results['items'][0]['id'];
	
	printJson($result_array);
	
	function printJson($result_array){
		
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

