
  <?php
require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

  class prueba{
    public function __construct(){}


public function setUp(){
define('CONSUMER_KEY', 'gAgy6UZjObmhYpncLxkywQFHa');
define('CONSUMER_SECRET', 'qp4Xmo6vXsB0at4JuprViCYijZJ8QcZpLBHvsLkiPlF1QYCTDB');
define('OAUTH_CALLBACK','salida.php');
$access_token='79051477-tAUT7OxYUuB7p5NArzqu2Iv0mlLNSTsJPly2A8nD4';
$access_token_secret='zRTQaaiVBUg0CXMn9XbVCkIT7Jk76SolntDr0Wg6GBZza';
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);
$connection->setTimeouts(10, 15);
$content = $connection->get("account/verify_credentials");

$url = $connection->url("oauth/authorize", ["oauth_token" => "zRTQaaiVBUg0CXMn9XbVCkIT7Jk76SolntDr0Wg6GBZza"]);

echo $url;
}



public function compararUsuario(){

}


 public function liberar(){
}

}
