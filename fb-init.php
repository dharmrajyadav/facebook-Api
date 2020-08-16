<?php

    session_start();

    require './vendor/autoload.php';

    $fb = new Facebook\Facebook([
      'app_id' => '328073031701593',
      'app_secret' => 'b0d8c8f2a5fd89c722128edb151e823c',
      'default_graph_version' => 'v2.4'
      ]);
    
    $helper = $fb->getRedirectLoginHelper();
    //$login_url = $helper->getLoginUrl("http://localhost:8000/fb_login/");
    $login_url = $helper->getLoginUrl("http://localhost:8000/fb-callback.php");
    //$login_url = $helper->getLoginUrl("http://localhost:8000/");
    //var_dump($login_url);
	
?>
