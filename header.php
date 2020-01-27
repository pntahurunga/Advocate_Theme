<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- font-icon -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/icofont/icofont.min.css">

    <title><?php bloginfo('name'); ?> </title>
    <?php wp_head(); ?>
    
</head>
<body <?php body_class(); ?>>


    <header class="header-fix">
        <div class="header-wrapper">
            <div class="header">
                <nav class="header-nav">
                        <div class="header-txt">
                            <h1><a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a></h1>
                            <h3><?php bloginfo('description'); ?></h3>
                        </div>
                        <div class="header-nav--menu">
                            <div>
                            <?php
                                $args = array(
                                    'theme_location' => 'primary',
                                );?>
        
                                <?php wp_nav_menu($args); ?>
                            </div>
                            <div>
                                <a style="color:#fff" class="btn btn-red btn-fix" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=U9UCLYKZH488U&source=url">Donate</a>
                            </div>
                        </div>
                    </nav>
            </div>
        </div>
    </header>