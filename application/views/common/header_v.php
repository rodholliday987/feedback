
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FeedBack</title>
        <link rel="stylesheet"  type="text/css" href="<?php echo base_url(); ?>css/gumby.css" />
        <link rel="stylesheet"  type="text/css" href="<?php echo base_url(); ?>css/style.css" />
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.9.1.js"></script>
        <script src="//www.google-analytics.com/ga.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/libs/modernizr-2.0.6.min"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>
    </head>
    <body>
        <div class="pretty navbar" gumby-fixed="top" id="menuPrincipal">
            <div class="row">
                <a class="toggle" gumby-trigger="#menuPrincipal > .row > ul" href="javascript:activarMenu()"><i class="icon-menu"></i></a>
                <h3 class="four column logo" style="color: #fff;"><?php echo anchor('inicio','FeedBack'); ?></h3>
                <ul class="eight columns">
                    <li><?php echo anchor('inicio', 'Inicio'); ?></li>
                    <li><?php echo anchor('inicio','Inicio'); ?></li>
                    <li><button class="medium pretty primary btn icon-left icon-user"><?php echo anchor('login/login','Entrar a mi feed'); ?></button></li>
                </ul>
            </div>
        </div>
