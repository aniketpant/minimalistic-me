<footer role="contentinfo">

	<div id="inner-footer" class="twelvecol clearfix">

    <div id="footer-links">
      <ul class="footer-col">
        <h4>Categories</h4>
        <?php
        $args=array(
          'orderby' => 'name',
          'order' => 'ASC'
          );
        $categories=get_categories($args);
        foreach($categories as $category) {
          echo '<li> <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </li> ';
        }
        ?>
      </ul>
      <ul class="footer-col">
        <h4>About Me</h4>
        <p>
          Hey, I&#x0092;m Aniket Pant and I love to build the web. I have a major interest in <strong>Open Source</strong> technologies and I am a lover of <strong>PHP</strong>.<br/><br/><a href="<?php echo home_url(); ?>/about-me/">Read More</a> about me.<br/><br/><a href="http://eepurl.com/eNnmI">Subscribe to my newsletter</a>
        </p>
      </ul>
      <ul class="footer-col">
        <h4>Friends</h4>
        <?php get_bookmarks(31, '<li>', '</li>', '', FALSE, 'name', TRUE); ?>
      </ul>
    </div>

    <nav>
      <?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
    </nav>

    <p class="attribution">&copy; <?php bloginfo('name'); ?> <?php _e("is powered by", "bonestheme"); ?> <a href="http://wordpress.org/" title="WordPress">WordPress</a> <span class="amp">&</span> <a href="http://www.themble.com/bones" title="Bones" class="footer_bones_link">Bones</a>.</p>
    <p class="thanks">Design inspired by <a href="http://csswizardry.com" nofollow>csswizardry</a></p>

  </div> <!-- end #inner-footer -->

</footer> <!-- end footer -->

</div> <!-- end #container -->

<!-- scripts are now optimized via Modernizr.load -->
<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>

<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

  <?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>