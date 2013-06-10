<?php get_header(); ?>

<div id="content" class="clearfix">

  <div id="main" class="sevencol clearfix" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <script>
    $(document).ready(function() {
      $('#boastful').boastful({
        location: '<?php echo get_permalink(); ?>'
                // limit: 50
                // empty_message: ''
              });
    });
    </script>

    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

      <header>

        <h1 class="single-title"><?php the_title(); ?></h1>

        <p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('M jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>

      </header> <!-- end article header -->

      <section class="post_content clearfix" itemprop="articleBody">

        <?php the_content(); ?>

      </section> <!-- end article section -->

      <footer>
        <nav><p><?php previous_post_link(); ?>&nbsp;&bull;&nbsp;<?php next_post_link(); ?></p></nav>
        <p>So, liked my post! Follow me on twitter and share it if you did.<br/><br/>
          <a href="https://twitter.com/share" class="twitter-share-button" data-count="none" data-via="aniket_pant">Tweet</a>&emsp;<a href="https://twitter.com/aniket_pant" class="twitter-follow-button" data-show-count="false">Follow @aniket_pant</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
        </p>

        <div id="boastful">
        </div>

        <?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>

      </footer> <!-- end article footer -->

    </article> <!-- end article -->

    <?php comments_template(); ?>

  <?php endwhile; ?>

<?php else : ?>

  <article id="post-not-found">
    <header>
      <h1>Not Found</h1>
    </header>
    <section class="post_content">
      <p>Sorry, but the requested resource was not found on this site.</p>
    </section>
    <footer>
    </footer>
  </article>

<?php endif; ?>

</div> <!-- end #main -->

<?php get_sidebar(); // sidebar 1 ?>

</div> <!-- end #content -->



<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/library/holman-boastful/boastful.css" type="text/css" media="screen" title="boastful css" charset="utf-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/library/holman-boastful/jquery.boastful.js"></script>

<?php get_footer(); ?>