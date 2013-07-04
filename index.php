<!DOCTYPE html>
<html class="no-js">
    <head>
        <?php get_header( ); ?>
    </head>
    <body>

    <?php require( 'nav.php' )?>

    <div class="container"><!-- closed in footer.php -->

	    <div class="row">
		    <div class="span3"><img src="logo.png" alt="<?php echo get_bloginfo( 'name' ); ?>"/></div>
		    <div class="span9"><img src="" width="728" style="border:1px solid;width:728px;height:90px;" alt=""/></div>
	    </div>

        <!-- Example row of columns -->
        <div class="row">
            <div class="span8">
			    <div id="content" role="main" style="padding-top: 40px">
				    <?php get_template_part( 'content', get_post_format() ); ?>
			    </div>
            </div>
            <?php get_sidebar( ); ?>
        </div>
        <hr>
        </div> <!-- /container -->
        <?php get_footer( ); ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php get_template_directory(); ?>/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="<?php get_template_directory(); ?>/js/vendor/bootstrap.min.js"></script>

        <script src="<?php get_template_directory(); ?>/js/main.js"></script>
    </body>
</html>