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

  <title>Assets</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="<?php echo base_url(); ?>css/grid.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/base.css">
  
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build incl. Respond.js
       Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects; 
       for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="<?php echo base_url(); ?>js/libs/modernizr-2.0.6.min.js"></script>
</head>
<body>
	<div id="container">
        <header class="clearfix">
            <section id="cartholder">
				<?php if ($cart = $this->cart->contents()): ?>
                <div id="cart" class="container_12 clearfix">
                    <table>
                    <caption>Shopping Cart</caption>
                    <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Option</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach ($cart as $item): ?>
                        <tr>
                            <td><?php echo $item['name']; ?></td>
                            <td>
                                <?php if ($this->cart->has_options($item['rowid'])) {
                                    foreach ($this->cart->product_options($item['rowid']) as $option => $value) {
                                        echo $option . ": <em>" . $value . "</em>";
                                    }
                                    
                                } ?>
                            </td>
                            <td>$<?php echo $item['subtotal']; ?></td>
                            <td class="remove">
                                <?php echo anchor('shop_assets/remove/'.$item['rowid'],'X'); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <tr class="total">
                        <td colspan="2"><strong>Total</strong></td>
                        <td>$<?php echo $this->cart->total(); ?></td>
                    </tr>
                    </table>		
                </div>
                <?php endif; ?>	
            </section>
            <?php include("masthead.php"); ?>
        </header>
        <div>
			<section id="nln" class="container_12">
                <ul class="categories">
                	<li>Categories: <a href="<?php echo base_url(); ?>shop/assets">All</a>,</li>
					<?php foreach ($categories as $cat): ?>
					<li><a href="<?php echo base_url(); ?>shop/assets/<?php echo $cat->name; ?>"><?php echo $cat->name; ?></a>,</li>      
					<?php endforeach; ?>
                </ul>
                <ul class="tags">
                	<li>Tags: 
						<?php if ($this->uri->segment(3) == TRUE): ?>
                            <a href="<?php echo base_url(); ?>shop/assets/<?php echo $this->uri->segment(3); ?>">All</a>,
                        <?php else: ?>
                            <a href="<?php echo base_url(); ?>shop/assets/categories/">All</a>,
                        <?php endif; ?>
                    </li>
                    
                    
                    <?php if ($this->uri->segment(3) == FALSE || $this->uri->segment(3) == 'categories'): ?>
                    	<?php foreach($tags as $tag):?>
                    		<li><a href="<?php echo base_url(); ?>shop/assets/categories/<?php echo $tag->tag_id; ?>"><?php echo $tag->name; ?></a>,</li>
                    	<?php endforeach; ?>
                    <?php endif; ?>
                    
                    
					<?php if ($v1 == 'video' || $v1 == 'categories'): ?>
                    <?php foreach($tags as $tag):?>
                    <?php
                    // An empty array we'll populate with product tags once
                    $loaded_products = array();
                    foreach($video as $product):
                    
                        // Check if the tag id is in the array
                        if (in_array($product->tag_id, $loaded_products)) {
                            // It is (and we don't want a second one to be), so continue will allow us to skip the rest of the loop
                            continue;
                        }
                        // If we're at this spot, the tag id isn't in the array, so we'll add it to prevent duplicates
                        $loaded_products[] = $product->tag_id;
                    ?>
                        <li><?php if ($tag->tag_id == $product->tag_id): ?>
                                <?php if ($this->uri->segment(3) == TRUE && $this->uri->segment(3) != 'categories'): ?>
                                    <a href="<?php echo base_url(); ?>shop/assets/<?php echo $this->uri->segment(3); ?>/<?php echo $tag->tag_id; ?>"><?php echo $tag->name; ?></a>
                                <?php else: ?>
                                    <!-- <a href="<?php echo base_url(); ?>shop/assets/categories/<?php echo $tag->tag_id; ?>"><?php echo $tag->name; ?></a>-->
                                <?php endif; ?>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                    <?php endforeach; ?>
                    <?php endif; ?>

					<?php if ($v1 == 'audio' || $v1 == 'categories'): ?>
                    <?php foreach($tags as $tag):?>
                    <?php
                    // An empty array we'll populate with product tags once
                    $loaded_products = array();
                    foreach($audio as $product):
                    
                        // Check if the tag id is in the array
                        if (in_array($product->tag_id, $loaded_products)) {
                            // It is (and we don't want a second one to be), so continue will allow us to skip the rest of the loop
                            continue;
                        }
                        // If we're at this spot, the tag id isn't in the array, so we'll add it to prevent duplicates
                        $loaded_products[] = $product->tag_id;
                    ?>
                        <li><?php if ($tag->tag_id == $product->tag_id): ?>
                                <?php if ($this->uri->segment(3) == TRUE && $this->uri->segment(3) != 'categories'): ?>
                                    <a href="<?php echo base_url(); ?>shop/assets/<?php echo $this->uri->segment(3); ?>/<?php echo $tag->tag_id; ?>"><?php echo $tag->name; ?></a>
                                <?php else: ?>
                                    <!-- <a href="<?php echo base_url(); ?>shop/assets/categories/<?php echo $tag->tag_id; ?>"><?php echo $tag->name; ?></a>-->
                                <?php endif; ?>
                            <?php endif; ?>
                        </li>  
                    <?php endforeach; ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    
                    <?php if ($v1 == 'images' || $v1 == 'categories'): ?>
                    <?php foreach($tags as $tag):?>
                    <?php
                    // An empty array we'll populate with product tags once
                    $loaded_products = array();
                    foreach($images as $product):
                    
                        // Check if the tag id is in the array
                        if (in_array($product->tag_id, $loaded_products)) {
                            // It is (and we don't want a second one to be), so continue will allow us to skip the rest of the loop
                            continue;
                        }
                        // If we're at this spot, the tag id isn't in the array, so we'll add it to prevent duplicates
                        $loaded_products[] = $product->tag_id;
                    ?>
                        <li><?php if ($tag->tag_id == $product->tag_id): ?>
                                <?php if ($this->uri->segment(3) == TRUE && $this->uri->segment(3) != 'categories'): ?>
                                    <a href="<?php echo base_url(); ?>shop/assets/<?php echo $this->uri->segment(3); ?>/<?php echo $tag->tag_id; ?>"><?php echo $tag->name; ?></a>
                                <?php else: ?>
                                    <!-- <a href="<?php echo base_url(); ?>shop/assets/categories/<?php echo $tag->tag_id; ?>"><?php echo $tag->name; ?></a>-->
                                <?php endif; ?>
                            <?php endif; ?>
                        </li>
                        
                       
                    <?php endforeach; ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
				</ul>
			</section>     

        </div>
        <div id="assets_wrapper" role="main">
            <section id="assets" class="container_12 clearfix">      
                <article class="grid_4 alpha">
                <? if ($v1 == 'video' || $v1 == 'categories'): ?>
                    <h4 class="video_text"><a>Video</a></h4>
                    <ul>
                    <?php foreach ($video as $product): ?>
                    <?php if ($product->tag_id == $v2 || $v2 == 'tags'): ?>
                        <li>
                            <?php echo form_open('shop_assets/add_video'); ?>
                            <div class="name"><?php echo $product->name; ?></div>
                            <div class="category">Category: <a href="<?php echo base_url(); ?>shop/assets/video">video</a> &nbsp; Tags:
                           	<?php foreach($tags as $tag):?> 
									<?php if ($tag->tag_id == $product->tag_id): ?>
                                    	<?php if ($this->uri->segment(3) == TRUE && $this->uri->segment(3) != 'categories'): ?>
											<a href="<?php echo base_url(); ?>shop/assets/<?php echo $this->uri->segment(3); ?>/<?php echo $tag->tag_id; ?>"><?php echo $tag->name; ?> </a>
                                        <?php else: ?>
                                        	<a href="<?php echo base_url(); ?>shop/assets/categories/<?php echo $tag->tag_id; ?>"><?php echo $tag->name; ?></a>
                                        <?php endif; ?>
									<?php endif; ?>
							<?php endforeach; ?>
                            </div>
                            <video controls="controls">
                                <source src="<?php echo base_url(); ?>assets/video/<?php echo $product->sample; ?>.webm" type="video/webm" />
                                <source src="<?php echo base_url(); ?>assets/video/<?php echo $product->sample; ?>.ogg" type="video/ogg" />
                                <source src="<?php echo base_url(); ?>assets/video/<?php echo $product->sample; ?>.m4v" type="video/mp4" />
                                <source src="<?php echo base_url(); ?>assets/video/<?php echo $product->sample; ?>.m4v" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                            <div class="price">$<?php echo $product->price; ?></div>
                            <div class="option">
                                <?php if ($product->option_name): ?>
                                    <?php echo form_label($product->option_name, 'option_'. $product->id); ?>
                                    <?php echo form_dropdown(
                                        $product->option_name,
                                        $product->option_values,
                                        NULL,
                                        'id="option_'. $product->id.'"'
                                    ); ?>
                                <?php endif; ?>
                            </div>
                            <?php echo form_hidden('id', $product->id); ?>
                            <?php echo form_submit('action', 'Add to Cart'); ?>&pound;<?php echo $product->price; ?>
                            <?php echo form_close(); ?>
                        </li>
                    <?php endif; ?>    
                    <?php endforeach; ?>
                    </ul>
                    <? endif; ?>
                    <div class="invisible">Video</div>
                </article>
                <article class="grid_4">
                <? if ($v1 == 'audio' || $v1 == 'categories'): ?>
                    <h4 class="audio_text"><a>Audio</a></h4>
                    <ul>
						<?php foreach ($audio as $product): ?>
                        <?php if ($product->tag_id == $v2 || $v2 == 'tags'): ?>
                        <li>
                            <?php echo form_open('shop_assets/add_audio'); ?>
                            <div class="name"><?php echo $product->name; ?></div>
                            <div class="category">Category: <a href="<?php echo base_url(); ?>shop/assets/audio">audio</a> &nbsp; Tags:
                           	<?php foreach($tags as $tag):?> 
									<?php if ($tag->tag_id == $product->tag_id): ?>
                                    	<?php if ($this->uri->segment(3) == TRUE && $this->uri->segment(3) != 'categories'): ?>
											<a href="<?php echo base_url(); ?>shop/assets/<?php echo $this->uri->segment(3); ?>/<?php echo $tag->tag_id; ?>"><?php echo $tag->name; ?> </a>
                                        <?php else: ?>
                                        	<a href="<?php echo base_url(); ?>shop/assets/categories/<?php echo $tag->tag_id; ?>"><?php echo $tag->name; ?></a>
                                        <?php endif; ?>
									<?php endif; ?>
							<?php endforeach; ?>
                            </div>
                            <audio controls="controls">
                              <source src="<?php echo base_url(); ?>assets/audio/<?php echo $product->sample; ?>" type="audio/wav" />
                            	Your browser does not support the audio element.
                            </audio>                                                     
                            <?php echo form_hidden('id', $product->id); ?>
                            <?php echo form_submit('action', 'Add to Cart'); ?>&pound;<?php echo $product->price; ?>
                            <?php echo form_close(); ?>
                        </li>
                        <?php endif; ?> 
                        <?php endforeach; ?>
                    </ul>
                    <? endif; ?>
                    <div class="invisible">Audio</div>
                </article>
                <article class="grid_4 omega">
                <? if ($v1 == 'images' || $v1 == 'categories'): ?>
                    <h4 class="images_text"><a>Images</a></h4>
                    <ul>
						<?php foreach ($images as $product): ?>
                        <?php if ($product->tag_id == $v2 || $v2 == 'tags'): ?>
                        <li class="clearfix">
                            <?php echo form_open('shop_assets/add_images'); ?>
                            <div class="thumb_sample">
                            <?php echo img(array(
                                'src' => 'assets/images/' . $product->sample,
                                'class' => 'thumb',
                                'alt' => $product->name,
                            )); ?>				
                            </div>
                            <div class="name"><?php echo $product->name; ?></div>
                            <div class="category">Category: <a href="<?php echo base_url(); ?>shop/assets/audio">audio</a> &nbsp; Tags:
							<?php foreach($tags as $tag):?> 
									<?php if ($tag->tag_id == $product->tag_id): ?>
                                    	<?php if ($this->uri->segment(3) == TRUE && $this->uri->segment(3) != 'categories'): ?>
											<a href="<?php echo base_url(); ?>shop/assets/<?php echo $this->uri->segment(3); ?>/<?php echo $tag->tag_id; ?>"><?php echo $tag->name; ?> </a>
                                        <?php else: ?>
                                        	<a href="<?php echo base_url(); ?>shop/assets/categories/<?php echo $tag->tag_id; ?>"><?php echo $tag->name; ?></a>
                                        <?php endif; ?>
									<?php endif; ?>
							<?php endforeach; ?>
                            </div>
                            <?php echo form_hidden('id', $product->id); ?>
                            <?php echo form_submit('action', 'Add to Cart'); ?>&pound;<?php echo $product->price; ?>
                            <?php echo form_close(); ?>
                        </li>
                        <?php endif; ?> 
                        <?php endforeach; ?>
                    </ul>
                    <? endif; ?>
                    <div class="invisible">Images</div>
                </article>
            </section>        
        </div>
        <footer>
        	<div class="container_12 clearfix">
    			<p>Copyright Damage un Ltd 2011</p>
            </div>
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