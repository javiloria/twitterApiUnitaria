
  <?php
require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

  class prueba{
    public function __construct(){}


public function setUp(){
define('CONSUMER_KEY', 'gAgy6UZjObmhYpncLxkywQFHa');
define('CONSUMER_SECRET', 'qp4Xmo6vXsB0at4JuprViCYijZJ8QcZpLBHvsLkiPlF1QYCTDB');
define('OAUTH_CALLBACK','https://twittering.herokuapp.com/callback.php');
echo "string <br>";

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
echo "aaa <br>";
$request_token = $connection->oauth('oauth/request_token', array ('oauth_callback' => OAUTH_CALLBACK));
echo "ee<br>";
$_SESSION['oauth_token'] = $request_token['oauth_token'];
echo "aaaasdd<br>";
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
echo "ssssssssssssss<br>";

$url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));

echo $url;
}



public function compararUsuario(){

}


 public function liberar(){
}

}
