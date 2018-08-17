<?php get_header(); ?>

  <!-- Header -->
  <header>
    <img class="header__image header__image--home" src="<?php echo get_template_directory_uri(); ?>/assets/images/home-banner.jpg" alt="banner">
    <div class="header__content header__content--home">
      <h1 class="header__title--home">
          <?php echo get_field('banner_title');?>
      </h1>
      <a href="#highlights" class="link link--tertiary header__icon">
        <i class="icon-arrow-down"></i>
      </a>
    </div>
  </header>

  <!-- Highlights section -->
  <section id="highlights" class="highlights">
    <h2>
      lo más destacado
    </h2>

    <div class="overlay__container">

      <div class="backgroundImage overlay__thumbnail highlights__thumbnail--1">
        <div class="overlay__content">
          <h3>
            lorem ipsum
          </h3>
          <a class="link link--primary" href="">Ver más<i class="icon-arrow-right-circle"></i></a>
        </div>
        <div class="overlay overlay--blue"></div>
      </div>

      <div class="backgroundImage overlay__thumbnail highlights__thumbnail--2">
        <div class="overlay__content">
          <h3>
            lorem ipsum
          </h3>
          <a class="link link--primary" href="">Ver más<i class="icon-arrow-right-circle"></i></a>
        </div>
        <div class="overlay overlay--blue"></div>
      </div>

      <div class="backgroundImage overlay__thumbnail highlights__thumbnail--3">
        <div class="overlay__content">
          <h3>
            lorem ipsum
          </h3>
          <a class="link link--primary" href="">Ver más<i class="icon-arrow-right-circle"></i></a>
        </div>
        <div class="overlay overlay--blue"></div>
      </div>

      <div class="backgroundImage overlay__thumbnail highlights__thumbnail--4">
        <div class="overlay__content">
          <h3>
            lorem ipsum
          </h3>
          <a class="link link--primary" href="">Ver más<i class="icon-arrow-right-circle"></i></a>
        </div>
        <div class="overlay overlay--blue"></div>
      </div>

    </div>
  </section>

  <!-- Latest events -->
  <section class="latest">

    <h2>últimos eventos</h2>
    <a class="link link--secondary link--center" href="events.html">Ver todos los eventos<i class="icon-arrow-right-circle"></i></a>

    <div class="highlight__container container-fluid">
      <div class="row">
        

        <?php
        $query = new WP_Query( array( 'post_type' => 'eventos' ) );        
        if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>   
                
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 highlight__inner latest__image--1 backgroundImage"></div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 highlight__inner">
                <div class="highlight__content">
                  <h4>
                    <?php the_title(); ?>
                  </h4>
                  <p>
                    <?php the_excerpt(); ?>
                  </p>
                  <a class="link link--primary " href="<?php the_permalink();?>">Ver más<i class="icon-arrow-right-circle"></i></a>
                </div>
              </div>


            <?php endwhile; wp_reset_postdata(); ?>
        <!-- show pagination here -->
        <?php else : ?>
            <!-- show 404 error here -->
        <?php endif; ?>
        

  

      </div>
    </div>

  </section>

  <!-- brands section -->
  <section class="brands">
    <img class="brands__banner" src="<?php echo get_template_directory_uri(); ?>/assets/images/brands.png" alt="logos de marcas">
  </section>
<?php get_footer(); ?>
