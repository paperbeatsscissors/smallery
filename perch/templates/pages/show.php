<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title>Smallery | <?php perch_pages_title(); ?></title>
        <meta name="description" content="">
    
        <!-- ICONS -->
        <link rel="shortcut icon" href="http://smallery.co/favicon.ico" />
        <link rel="apple-touch-icon" sizes="144x144" href="http://smallery.co/apple-touch-icon-144x144-precomposed.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="http://smallery.co/apple-touch-icon-114x114-precomposed.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="http://smallery.co/apple-touch-icon-72x72-precomposed.png" />
        <link rel="apple-touch-icon" sizes="52x52" href="http://smallery.co/apple-touch-icon.png" />

        <link rel="stylesheet" href="http://smallery.co/css/normalize.css">
        <link rel="stylesheet" href="http://smallery.co/css/main.css">
        <link href="http://smallery.co/glyphs/ss-gizmo/ss-gizmo.css" rel="stylesheet" type="text/css" />
        <link href="http://smallery.co/glyphs/ss-social/ss-social.css" rel="stylesheet" type="text/css" />

        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>

        <!-- Facebook -->
        <meta property="og:title" content="Smallery" />
        <meta property="og:description" content="Smallery hosts mini gallery shows for smart phone wallpapers." />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://smallery.co/" />
        <meta property="og:image" content="http://smallery.co/img/facebook.png" />
        <meta property="og:site_name" content="Smallery.co" />

        <!-- Google -->

        <meta itemprop="name" content="Smallery">
        <meta itemprop="description" content="Smallery hosts mini gallery shows for smart phone wallpapers.">
        <meta itemprop="image" content="http://smallery.co/img/facebook.png">

        <script src="http://smallery.co/js/vendor/modernizr-2.6.2.min.js"></script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-12550007-7', 'smallery.co');
          ga('send', 'pageview');
        </script>

        <?php perch_content('Theme CSS'); ?>
        
    </head>
    <body>
    
    	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=238658402849328";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <div class="menu-wrap">
           <nav class="menu wrapper clearfix">

              <a class="logo" href="http://smallery.co"><img title="Smallery" alt="Smallery" src="http://smallery.co/img/logo.png"> smallery</a>

              <div class="navlinks">
                 <a href="#gallery">Gallery</a>
                 <a href="#about">About</a>
              </div>

           </nav>
        </div>

    	<?php perch_content('Show Splash'); ?>

    	<main id="gallery" class="clearfix">

    		<?php perch_content('Gallery Item'); ?>

    	</main>


    	<div class="footer-wrap">

        <footer id="about" class="wrapper clearfix">

            <section class="about">
                <h1>About Smallery</h1>

                <p>
                Smallery hosts mini gallery shows for smart phone wallpapers. 
                </p>

                <p>
                Every show is curated by an artist who picks the participants and a theme for them to follow. The theme can be
                anything the curator wants. The only limit on the artwork is that it has to be sized for a smart phone.
                </p>

                <p>
                All the artwork is free to download right on your phone. If you like the wallpaper, consider tipping the 
                artist a buck!
                </p>

                <p>
                Thanks for checking us out!
                </p>

                <div class="likes">

                      <div class="share-fb">
                      <div class="fb-like" data-href="http://smallery.co" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false"></div>
                      </div>
                      
                      <div class="share-tweet">
                      <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                      </div>
                      
                      <div class="share-gplus">
                      <!-- Place this tag where you want the +1 button to render. -->
                      <div class="g-plusone"></div>
                      
                      <!-- Place this tag after the last +1 button tag. -->
                      <script type="text/javascript">
                        (function() {
                          var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                          po.src = 'https://apis.google.com/js/plusone.js';
                          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                        })();
                      </script>
                      </div>
                </div>

            </section>

            <section class="connect">

                <img class="logo" title="Smallery" alt="Smallery" src="http://smallery.co/img/logo.png">

            </section>

        </footer>

    </div>

    <div class="subfoot">
        <footer class="wrapper clearfix">
        <div class="copy">All work is &copy;Copyright the respective artist.</div>
        <div class="credit">Site by <a target="_blank" href="http://paperbeatsscissors.com">paperbeatsscissors</a></div>
        </footer>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="http://smallery.co/js/vendor/jquery.js"><\/script>')</script>

    <script src="http://smallery.co/js/vendor/lightboxme.js"></script>
    <script src="http://smallery.co/js/vendor/scrollto.js"></script>

    <script src="http://smallery.co/glyphs/ss-gizmo/ss-gizmo.js"></script>
    <script src="http://smallery.co/glyphs/ss-social/ss-social.js"></script>

    <script src="http://smallery.co/js/main.js"></script>

    </body>
</html>
