<?php get_header('example'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <header role="header">
    <h1>Demo: <?php echo the_title(); ?></h1>
  </header>
  <article role="content">
    <?php the_content(); ?>
  </article>
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

<?php get_footer('example'); ?>