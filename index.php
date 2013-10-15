<?php get_header(); ?>
<section class="content container" role="main">
            <div class="container960">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <article class="blog-entry" id="post-<?php the_ID(); ?>">
        <header>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <h1><?php the_title(); ?></h1>
          </a>
          <span class="meta"><?php the_time('F j, Y') ?> Posted in: <?php the_category(', '); ?>, <?php the_tags('Tagged: ', ', ', ''); ?> by <?php the_author() ?></span> 
        </header>
        <?php the_content('Read the rest of this entry &raquo;'); ?>
        <hr>
          <span class="comments-link">
            <a href="<?php comments_link(); ?>"><?php comments_number( '0 Comments', '1 Comment', '% Comments'); ?></a> | <a href="<?php the_permalink() ?>#respond">Leave a Comment</a>
            <?php edit_post_link('Edit Post', ' | ' ); ?>
          </span>
      </article>

    <?php endwhile; ?>

    <nav class="center-text blog-nav">
      <div class="left"><?php next_posts_link('<span class="icon-arrow-left" aria-hidden="true"></span> OLDER POSTS') ?></div>
      <div class="right"><?php previous_posts_link('NEWER POSTS <span class="icon-arrow-right" aria-hidden="true">') ?></div>
    </nav>

  <?php else : ?>

    <h2>Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>

  <?php endif; ?>

            </div>
        </section>
		

<?php get_footer(); ?>