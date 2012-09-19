<?php
require_once ('OAuth.php');
/**
 * For example, request business with id 'the-waterboy-sacramento'
 */ 
$unsigned_url = "http://api.yelp.com/v2/business/latitude-insurance-and-securities-test-prep-phoenix";

/**
 * Set Yelp API Details
 */
$consumer_key = "9gtU-RAQQLzRqgkRAssOgA";
$consumer_secret = "RXD0H13LDkvJ4cIxYylHILgW_Cs";
$token = "p8z4sCY-45FNMu5bR-PQYz8zoH4-rpZf";
$token_secret = "5UD09HUHYOBNVHFWiuXwnwY2RJE";

/**
 * Get Token object using the OAuth
 */ 
$token = new OAuthToken($token, $token_secret);

/**
 * Get Consumer object using the OAuth
 */ 
$consumer = new OAuthConsumer($consumer_key, $consumer_secret);

/**
 * Set SHA1 encoding
 */ 
$signature_method = new OAuthSignatureMethod_HMAC_SHA1();

/**
 * Build OAuth Request using the OAuth library. 
 * Uses the consumer and token object created above.
 */ 
$oauthrequest = OAuthRequest::from_consumer_and_token($consumer, $token, 'GET', $unsigned_url);

/**
 * Sign the request - Add signature
 */ 
$oauthrequest->sign_request($signature_method, $consumer, $token);

/**
 * Get signed URL
 */ 
$signed_url = $oauthrequest->to_url();

/**
 * Send Yelp API Call to get details
 */ 
$ch = curl_init($signed_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
$data = curl_exec($ch); // Yelp response
curl_close($ch);

/**
 * Handle response
 */ 
$response = json_decode($data);
echo "<pre>";
print_r($response);

