<?php
require_once('twitteroauth/twitteroauth.php');
error_reporting(E_ALL);
ini_set('display_errors', 'On');

function getConnectionWithAccessToken($oauth_token, $oauth_token_secret) {
      $connection = new TwitterOAuth('yT577ApRtZw51q4NPMPPOQ', '3neq3XqN5fO3obqwZoajavGFCUrC42ZfbrLXy5sCv8', $oauth_token, $oauth_token_secret);
      return $connection;
    }
date_default_timezone_set('Asia/Jakarta');
$params = date("H:i:s");
$data = "@sekarang Jam ".$params;
$connection = getConnectionWithAccessToken('2364023538-P64gscjUcBagxlIBjwIXFA4IDKzhzafeF9WFwpH', 'Bv3uPCKJMY02gjQXp7hdrQZ3ITve4mxLlthbfQ7uH3bvF');
$parameters = array('status' => $data);
$status = $connection->post('statuses/update', $parameters);
print_r($status->text);