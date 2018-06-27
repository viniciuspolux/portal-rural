<BODY style='background:black;color:green;'>
<?php

	echo "<pre>";
	echo "<p>[AUTHOR]	REASHY LEARNING</p>";
	echo "<p>[DATE]		05/05/2017</p>";
	echo "<p>[ACTION]	Posting FB</p><br>";
	
	$user_access_token 	= "";
	$id_page			= "";

	// /* 1] You need an access_token for your page 

	$endpoint 	= $id_page."?fields=access_token,id,name&access_token=".$user_access_token;
	$url 		= "https://graph.facebook.com/".$endpoint;
	$data 		= array();
	$method 	= "GET";
	
	// You are asking => (id, name, access_token) of the page referred to id_page
	// N.B : Fields (id, name) are useless for what we are doing 
	$result = curl($url, $data, $method);
	echo "<p>[PAGE INFO] </p>";
	print_r($result);	
	// */
	
	//What we receive is  JSON, let's decode it 
	$tab 				= json_decode($result, true);
	$page_access_token 	= $tab["access_token"];
	
	/* 2] Now we can post a msg
	
	$endpoint 				= "feed";
	$url 					= "https://graph.facebook.com/".$id_page."/".$endpoint;
	$data["message"]		= "I'm learning ! Be kind ! ".date("H:i:s");
	$data["access_token"]	= $page_access_token;
	$method 				= "POST";
	
	$result = curl($url, $data, $method);
	echo "<p>[POST INFO] </p>";
	print_r($result);		
	// */
	
	/* 3] Let's post a picture
	
	$endpoint 				= "photos";
	$url 					= "https://graph.facebook.com/".$id_page."/".$endpoint;
	$data["caption"]		= "I'm learning ! Be kind ! ".date("H:i:s");
	$data["url"]			= "https://yt3.ggpht.com/-enBAbmP5fwo/AAAAAAAAAAI/AAAAAAAAAAA/Iy__cahL8UU/s100-c-k-no-mo-rj-c0xffffff/photo.jpg";
	$data["access_token"]	= $page_access_token;
	$method 				= "POST";
	
	$result = curl($url, $data, $method);
	echo "<p>[POST INFO] </p>";
	print_r($result);
	// */
	
	function curl($url, $data, $method)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER , true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , false);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
		
		$query = http_build_query($data);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
		
		$result = curl_exec($ch);
		return $result;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	echo "<br><br><p>[QUOTE]		My code is simple, your code is simple, our code is simple.</p>";
	echo "<a target='_blank' style='text-decoration:none'href='https://www.youtube.com/channel/UCNfHtKh0XKFvqS2MP9Jm71w'><p>[FIND_ME]	Let's learn something.</p></a>";
	
?>
</BODY>