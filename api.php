<?php
require_once("../secret.php");
//Get the platform and format it 
$plattform = htmlspecialchars($_GET['p']);
$plattform = preg_replace('/[^A-Za-z0-9]+/', "", $plattform);
$plattform = strtolower($plattform);
//Check for valid platforms
if($plattform != "pc" && $plattform != "xbox" && $plattform != "ps4"){
    //redirect to error page
    echo "Error: Invalid Platform";
    exit;
}

$playerName = htmlspecialchars($_GET['n']);
//This could be verified, but I do not think its actually exploitable
/*
    The verification would need to be able to work for xbox. ps4 and pc name restrictions
*/

// $p Platform
// $n Player Name

// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "{$s_url1}{$plattform}{$s_url2}{$playerName}{$s_url3}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = $s_header;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
echo $result;

//We no longer need these here
unset($s_header);
unset($s_url1);
unset($s_url2);
unset($s_url3);

?>