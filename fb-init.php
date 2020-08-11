<?php

    session_start();

    require './vendor/autoload.php';

    $fb = new Facebook\Facebook([
      'app_id' => '',
      'app_secret' => '',
      'default_graph_version' => 'v2.4'
      ]);
    
    $helper = $fb->getRedirectLoginHelper();
    $login_url = $helper->getLoginUrl("http://localhost/fb_login/");
    // print_r($login_url);

?>