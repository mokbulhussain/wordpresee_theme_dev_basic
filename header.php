<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    
    <!-- wp_head() this function hook must be write on head -->
    <?php wp_head();?>

</head>

<!-- body_class() this function use for customize and body design must be write -->
<body <?php body_class();?>>
    <div class="area">
        <!-- Header Start Here -->
        <div class="header fix">
            <div class="logo">
                <a href="">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="Logo">
                </a>
            </div>
            <div class="menu">
                <?php 
                wp_nav_menu( array(
                    'theme_location'=>'main_menu',
                    'menu_class'=>'test_menu',
                    'menu_id'=>'test_menu'
                ) );
                ?>
            </div>
        </div>
        <!-- Header End Here -->