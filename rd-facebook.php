<?php
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

require_once './Facebook/autoload.php';
require_once './Facebook/Exceptions/FacebookResponseException.php';
require_once './Facebook/Exceptions/FacebookSDKException.php';
require_once './Facebook/Helpers/FacebookRedirectLoginHelper.php';

$appId = "2267264753361658";
$appSecret = "867f462d0b97d415fc24d9fe89e82a8e";
$fb = new Facebook([
    'app_id' => $appId,
    'app_secret' => $appSecret,
    'default_graph_version' => 'v3.1'
]);

$accessToken = "2267264753361658|LPSyu25CZ9TgZwgV15xidXEHbHs";

$postData = "";
try {
    $userPosts = $fb->get("/FJNPage/feed", $accessToken);
    $postBody = $userPosts->getDecodedBody();
    $postData = $postBody["data"];
	print_r($postData);
} catch (FacebookResponseException $e) {
    // display error message
	print_r($e);
    exit();
} catch (FacebookSDKException $e) {
	print_r($e);
    // display error message
    exit();
}

require_once "wall-view.php";
?>