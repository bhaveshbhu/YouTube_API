	
	1) Register your Application : https://code.google.com/apis/console
	2) Enable YouTube API under services menu on the left Panel
	3) Open Config.php and set $client_id ,$client_secret and $redirect_uri.Then Just Browse to index.php and get started.
	4) function get_user_data() : Used to send post and header request via CURL
	5) function printJson($result_array) : It is an recursive function to Parse Json Data.
	
	THis used YouTube API v2 to fetch following data :

	SAMPLE DATA FETCHED
	/*
		term <----> People
		label <----> People & Blogs
		$t <----> SADDEST VIDEO EVER MADE (So Sad u will cry until u have no more tears) - YouTube
		type <----> text
		$t <----> 
		type <----> text
		rel <----> alternate
		type <----> text/html
		href <----> http://www.youtube.com/watch?v=nrRbATcfZaM&feature=youtube_gdata
		rel <----> http://gdata.youtube.com/schemas/2007#video.responses
		type <----> application/atom+xml
		href <----> http://gdata.youtube.com/feeds/api/videos/nrRbATcfZaM/responses
		rel <----> http://gdata.youtube.com/schemas/2007#video.related
		type <----> application/atom+xml
		href <----> http://gdata.youtube.com/feeds/api/videos/nrRbATcfZaM/related
		rel <----> http://gdata.youtube.com/schemas/2007#mobile
		type <----> text/html
		href <----> http://m.youtube.com/details?v=nrRbATcfZaM
		rel <----> self
		type <----> application/atom+xml
		href <----> http://gdata.youtube.com/feeds/api/users/CwIo7Uwb1eh3Gd2JnzjjvA/uploads/nrRbATcfZaM
		$t <----> Bhavesh Sharma
		$t <----> http://gdata.youtube.com/feeds/api/users/CwIo7Uwb1eh3Gd2JnzjjvA
		rel <----> http://gdata.youtube.com/schemas/2007#comments
		href <----> http://gdata.youtube.com/feeds/api/videos/nrRbATcfZaM/comments
		countHint <----> 0
		$t <----> People
		label <----> People & Blogs
		scheme <----> http://gdata.youtube.com/schemas/2007/categories.cat
		url <----> http://www.youtube.com/v/nrRbATcfZaM?version=3&f=user_uploads&app=youtube_gdata
		type <----> application/x-shockwave-flash
		medium <----> video
		isDefault <----> true
		expression <----> full
		duration <----> 127
		yt$format <----> 5
		url <----> rtsp://r8---sn-o097zuez.c.youtube.com/CigLENy73wIaHwmjZR83AVu0nhMYDSANFEgGUgx1c2VyX3VwbG9hZHMM/0/0/0/video.3gp
		type <----> video/3gpp
		medium <----> video
		expression <----> full
		duration <----> 127
		yt$format <----> 1
		url <----> rtsp://r8---sn-o097zuez.c.youtube.com/CigLENy73wIaHwmjZR83AVu0nhMYESARFEgGUgx1c2VyX3VwbG9hZHMM/0/0/0/video.3gp
		type <----> video/3gpp
		medium <----> video
		expression <----> full
		duration <----> 127
		yt$format <----> 6
		$t <----> 
		type <----> plain
		url <----> http://www.youtube.com/watch?v=nrRbATcfZaM&feature=youtube_gdata_player
		url <----> http://i.ytimg.com/vi/nrRbATcfZaM/0.jpg
		height <----> 360
		width <----> 480
		time <----> 00:01:03.500
		url <----> http://i.ytimg.com/vi/nrRbATcfZaM/1.jpg
		height <----> 90
		width <----> 120
		time <----> 00:00:31.750
		url <----> http://i.ytimg.com/vi/nrRbATcfZaM/2.jpg
		height <----> 90
		width <----> 120
		time <----> 00:01:03.500
		url <----> http://i.ytimg.com/vi/nrRbATcfZaM/3.jpg
		height <----> 90
		width <----> 120
		time <----> 00:01:35.250
		$t <----> SADDEST VIDEO EVER MADE (So Sad u will cry until u have no more tears) - YouTube
		type <----> plain
		seconds <----> 127
		favoriteCount <----> 0
		viewCount <----> 7
	*/
	//SAMPLE END
