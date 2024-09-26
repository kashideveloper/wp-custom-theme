<?php
/**
 * 
 * HEADER TEMPLATE
 * 
 * @package AKONIC
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AKONIC</title>
        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?> >

    <!-- HEADER STRT -->
    <header class="main-header">

        <!-- ==== NAVIGATION === -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xl-12 col-sm-12 col-12">
                        <div class="menu-inner-box">
                             <?php
                            wp_nav_menu(array(
                            'sort_column' => 'menu_order',
                            'menu-id' =>'primary-menu',
                            'depth' => 0,
                            'container' =>'false' ,
                            'menu_class' => 'nav topnav',
                            ));
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </header> 

    <div class="" id="page">
    <div id="content" class="content">

       