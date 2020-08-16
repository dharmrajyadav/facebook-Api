<?php

    session_start();

    require './vendor/autoload.php';

    $fb = new Facebook\Facebook([
      'app_id' => '',
      'app_secret' => '',
      'default_graph_version' => 'v2.4'
      ]);
    
    $helper = $fb->getRedirectLoginHelper();
    $login_url = $helper->getLoginUrl("https://localhost/fb_login/welcome.php");
    //  print_r($login_url);
        

    try {
           $accessToken = $helper->getAccessToken();
           if(isset($acessToken))
           {
            $_SESSION['acess_token'] = (string)$accessToken;
             header("Location:welcome.php");
           }
    } 
    catch (Exception $exc) {
      echo $exc->getTraceAsString();
    }




?>