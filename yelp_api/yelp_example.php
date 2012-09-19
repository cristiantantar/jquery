<?php


$url = "http://api.yelp.com/business_review_search?term=yelp&tl_lat=37.9&tl_long=-122.5&br_lat=37.788022&br_long=-122.399797&limit=3&ywsid=XXXXXXXXXXXXXXXXXX";
// $url = "http://api.yelp.com/business_review_search?category=bars&lat=".$latitude."&long=".$longitude."&radius=25&num_biz_requested=100&ywsid=<your yelp account id>";


$yelpstring = file_get_contents($url, true); 
print_r($yelpstring);
$obj = json_decode($yelpstring);// Convert JSON from yelp return string



$ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch); // Yelp response
    curl_close($ch);
	//echo '<pre>'; print_r(json_decode($data));
    // Handle Yelp response data
    $response = json_decode($data);
    print_r($response);

foreach($obj->businesses as $business):
    echo "<img border=0 src='".$business->photo_url."'><br/>";
    echo $business->name."<br/>";
    echo $business->address1."<br/>";
    
    if( $business->address2 ){
    	 echo $business->address2."<br/>";
    };
    
    echo $business->city ."<br/>";
    echo $business->state ."<br/>";
    echo $business->zip ."<br/>";
    echo $business->latitude ."<br/>";
    echo $business->longitude ."<br/>";

    echo "<hr>";
endforeach;
	
	?>