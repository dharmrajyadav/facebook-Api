<?php

    session_start();

    require './vendor/autoload.php';

    $fb = new Facebook\Facebook([
      'app_id' => '{2407595056207766}',
      'app_secret' => '{3201a91497be9fe7b488617c744c78a5}',
      'default_graph_version' => 'v2.4'
      ]);
    
    $helper = $fb->getRedirectLoginHelper();
    $login_url = $helper->getLoginUrl("http://localhost/fb_login/");
    // print_r($login_url);

?>