<?php
$site_url = base_url();
$local_style = $site_url . "/assets/";
$image_url = $site_url . "/assets/images/";
$css_url = $site_url . "/assets/stylesheets/";
$script_url = $site_url . "/assets/scripts/";
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Red Valley Event Management</title>
        <link rel="icon" href="<?php echo $image_url ?>favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=M+PLUS+2&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo $css_url . "style.css" ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo $css_url . "splide.min.css"?>"/>
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li> <?php echo anchor('Home/index',img($image_url . "logo.png")); ?></li>
                    <li class="navlinks">What we do <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <ul>
                            <li><?php echo anchor('Home/EventPromo', 'Weddings'); ?></li>
                            <li><?php echo anchor('Home/EventPromo', 'Brand Launches'); ?></li>
                            <li><?php echo anchor('Home/EventPromo', 'Team Building'); ?></li>
                            <li><?php echo anchor('Home/EventPromo', 'Conferences'); ?></li>
                            <li><?php echo anchor('Home/EventPromo', 'Company Party'); ?></li>
                        </ul>
                    </li>
                    <li class="navlinks"><?php echo anchor('Home/OurPartners', 'Our Partners'); ?></li>
                    <li class="navlinks"><?php echo anchor('Home/adminPortal', 'Admin Portal'); ?></li>
                    <li class="navlinks"><?php echo anchor('Home/staffPortal', 'Staff Portal'); ?></li>


                    <?php if (session()->get('isLoggedIn')): ?>
                       <li class="navlinks">Welcome <i class="fa fa-angle-down" aria-hidden="true"></i>
                                   <ul>
                    <li><?php echo anchor('login_Controller/ViewCustomerProfile', 'Profile'); ?></li>
                      <li><?php echo anchor('', 'View EventDetails'); ?></li>
                      <li><?php echo anchor('Home/CustomerPayment', 'MakePayment'); ?></li>
                      <li><?php echo anchor('', 'DeleteAccount'); ?></li>
                      <li><?php echo anchor('login_Controller/logout', 'Logout'); ?></li>
                          </ul>


                      </li>

                    <?php else: ?>
                      <li class="navlinks"><?php echo anchor('Home/login','Login/Register'); ?></li>

                      <?php endif;?>


                </ul>
            </nav>
        </header>
        <main>
