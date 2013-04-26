	
	1) $api_key = 'provide you api key';
	   API  key can be obtained from  "https://code.google.com/apis/console/"
	2) $video_id = '7lCDEYXw3mM'
	
	THis used YouTube API v3 to fetch following data :

	SAMPLE DATA FETCHED
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