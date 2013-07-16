<?php include('perch/runtime.php');?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title>Smallery</title>
        <meta name="description" content="">
    
        <?php perch_layout('global.header'); ?>

        <?php perch_content('Current Theme CSS'); ?>
        
    </head>
    <body>
    
    	<?php perch_layout('global.menu'); ?>

    	<?php perch_content('Show Splash'); ?>

    	<main id="gallery" class="clearfix">

    		<?php perch_content('Gallery Item'); ?>

    	</main>


    	<?php perch_layout('global.footer'); ?>
    </body>
</html>
