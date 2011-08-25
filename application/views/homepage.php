<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/style.css">
  
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build incl. Respond.js
       Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects; 
       for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>

	<div id="container">
        <header class="container_12 clearfix">
            <?php include("masthead.php"); ?>
        </header>
        <div id="main" role="main">
			<section id="nln" class="container_12">
            	<p>Our collection of <a href="">video</a>, <a href="">audio</a> and still <a href="">images</a> is available for you to download and use freely on a rights-free basis. We provide this service at a small-cost, with the aim of promoting Welsh culture.</p>
			</section>
            
            <section id="productions" class="container_12 clearfix">
            	<h2>Radio Production</h2>
				<?php foreach($production as $entry): ?>
                <article class="clearfix">
                	<div class="grid_8 alpha">
                        <h3><?php echo $entry->slug; ?></h3>
                        <p><?php echo $entry->description ?></p>
                        <audio>
                        </audio>
                        <p><a href="/homepage/production/<?php echo $entry->slug; ?>">More info</a></p>
                    </div>
                    <div class="grid_4 omega">
                    	<img src="img/placeholder.jpg"/>
                    </div>
                </article>
                <?php endforeach; ?>
            </section>
            <section id="assets" class="container_12">            
                <h2>Assets</h2>
                <article class="grid_4 alpha">
                    <h4>Video</h4>
                    <ul>
                    <?php foreach($video as $entry): ?>
                        <li>
                        <h5><?php echo $entry->slug; ?></h5>
                        <p class="data"><a href="/homepage/archive/<?php echo $entry->cat; ?>"><?php echo $entry->cat; ?></a> produced by <a href="">Damage Ltd</a></p>
                        <audio>
                        </audio>
                        <a href="/homepage/archive/<?php echo $entry->slug; ?>"><?php echo $entry->slug; ?></a>
                        <input type="button" value="Add to Cart" />
                        </li>
                    <?php endforeach; ?>
                    </ul>
                </article>
                <article class="grid_4">
                    <h4>Audio</h4>
                    <ul>
						<?php foreach($audio as $entry): ?>
                        <li>
                            <h5><?php echo $entry->slug; ?></h5>
                            <p class="data"><a href="/homepage/archive/<?php echo $entry->cat; ?>"><?php echo $entry->cat; ?></a> produced by <a href="">Damage Ltd</a></p>
                            <audio>
                            </audio>
                            <a href="/homepage/archive/<?php echo $entry->slug; ?>"><?php echo $entry->slug; ?></a>
                            <input type="button" value="Add to Cart" />
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </article>
                <article class="grid_4 omega">
                    <h4>Images</h4>
                    <ul>
						<?php foreach($images as $entry): ?>
                        <li>
                            <h5><?php echo $entry->slug; ?></h5>
                            <p class="data"><a href="/homepage/archive/<?php echo $entry->cat; ?>"><?php echo $entry->cat; ?></a> produced by <a href="">Damage Ltd</a></p>
                            <audio>
                            </audio>
                            <a href="/homepage/archive/<?php echo $entry->slug; ?>"><?php echo $entry->slug; ?></a>
                            <input type="button" value="Add to Cart" />
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            </section>        
        </div>
        <footer class="container_12">
    	Copyright Damage Ltd 2011
        </footer>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via build script -->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts -->


  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>
