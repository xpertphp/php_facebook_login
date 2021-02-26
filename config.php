<?php

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

$facebook = new \Facebook\Facebook([
  'app_id'      => 'enter facebook app id',
  'app_secret'     => 'enter facebook app secret key',
  'default_graph_version'  => 'v2.10'
]);

?>