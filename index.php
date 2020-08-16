<?php
      
    require './fb-init.php';

?>



<?php if(isset( $_SESSION['acess_token'])):?>
        <a href="">Log-Out</a>
<?php else:?>
    <a href="<?php echo $login_url; ?>">Login With Facebook</a>
<?php endif;?>