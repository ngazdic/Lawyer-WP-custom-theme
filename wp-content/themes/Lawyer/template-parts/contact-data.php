
<?php 
//ovde ispod uzimamo podatke iz option.php 
$address = get_option('lawyer_address');
$phone = get_option('lawyer_phone');
$mobile1 = get_option('lawyer_mobile_1');
$mobile2 = get_option('lawyer_mobile_2');
$email1 = get_option('lawyer_email_1');
$email2 = get_option('lawyer_email_2');

?>
<?php 
if(!empty($address)){
    ?>
  <p class="info-address animation" data-animation="slide-top" data-delay="0s">
                <span class="fas fa-map-marker-alt"></span>
               <?php echo $address?>
            </p>

<?php
    
    
}

?>
            
            
            <?php 
if(!empty($phone)){
    ?>
 
            <p class="info-phone animation" data-animation="slide-top" data-delay="0.2s">
                <span class="fas fa-phone-alt"></span>
                    <?php echo $phone?>
            </p>

<?php
    
    
}

?>
            
            
            
            
                        <?php 
if(!empty($mobile1)){
    ?>
 
            <p class="info-phone animation" data-animation="slide-top" data-delay="0.4s">
                <span class="fas fa-phone-alt"></span>
                    <?php echo $mobile1?>
            </p>

<?php
    
    
}

?>

            
                                    <?php 
if(!empty($mobile2)){
    ?>
 
            <p class="info-phone animation" data-animation="slide-top" data-delay="0.4s">
                <span class="far fa-phone-alt"></span>
                    <?php echo $mobile2?>
            </p>

<?php
    
    
}

?>
     
            
                                                <?php 
if(!empty($email1)){
    ?>
 
            <p class="info-email animation" data-animation="slide-top" data-delay="0.4s">
                <span class="far fa-envelope"></span>
                    <?php echo $email1?>
            </p>

<?php
    
    
}

?>

            
                                                           <?php 
if(!empty($email2)){
    ?>
 
            <p class="info-email animation" data-animation="slide-top" data-delay="0.4s">
                <span class="far fa-envelope"></span>
                    <?php echo $email2?>
            </p>

<?php
    
    
}

?>
