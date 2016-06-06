<?php get_header(); ?>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">
      <!-- Primary Column -->
      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="post">
              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <h2><?php the_excerpt(); ?></h2>
              <ul class="post-meta no-bullet">
                <li class="author">
                  <a href="author.html">
                    <span class="avatar small">
                      <img src="assets/img/avatar.png"/>
                    </span>
                    by Gratt Spore
                  </a>
                </li>
                <li class="cat">in <a href="">Category 1</a></li>
              </ul>
              <div class="img-container">
                <img src="assets/img/temp/item-06.png" alt="">
                <p>Photo by Gratt Spore</p>
              </div>
            </article>

        <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no pages matched your criteria.' ); ?></p>
        <?php endif; ?>
        </div>
      </div>
  <!-- Secondary Column -->
    <div class="small-12 medium-4 medium-pull-8 columns">
      <div class="secondary">
        <h2 class="module-heading">Sidebar</h2>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
