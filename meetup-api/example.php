<?php
echo phpinfo();
exit;
require_once('meetup/Meetup.php');
$api_key = '7123471b6a52647f18237b4f767417b';
$connection = new MeetupKeyAuthConnection($api_key);
$m = new MeetupEvents($connection);


$events = $m->getEvents( array( 'group_urlname' => 'AnchorageAdventurers' ) );
echo "<pre>";
print_r($events);