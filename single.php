<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<!-- Header -->
  <header>
    <img class="header__image header__image--default" src="<?php echo get_template_directory_uri(); ?>/assets/images/news-banner.jpg" alt="banner">
    <div class="header__content header__content--default">
      <h1>
        noticias
      </h1>
    </div>
  </header>

  <!-- post section -->
  <section class="post">
    <span class="post__date">
      <i class="far fa-calendar"></i> 28 de junio
    </span>

    <h2 class="post__title">
      <?php the_title(); ?>
    </h2>
    <div class="content">
      <?php the_content(); ?>  
    </div>
    

    <h5 class="post__share">
      Compartir <a class="post__link link--primary" href=""><i class="fab fa-facebook-f"></i></a> <a class="post__link link--primary" href=""><i class="fab fa-twitter"></i></a>
    </h5>
  </section>
  
  <?php  endwhile; 
  endif; ?>
  <!-- Othernews section -->
  <section class="otherNews">
    <h2>
      otras noticias
    </h2>

    <div class="cards">

      <article class="card">
        <img class="card-img-top" src="images/news-image-4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">
            título evento placeholder lorem ipsum dolor sit amet
          </h5>
          <p class="card-text">
            Aenean nec nisl nec lorem condimentum mattis et vitae eros. Ut feugiat nibh a mi aliquet,
            eget molestie ligula maximus. Donec in nunc dictum, eleifend mauris, mattis turpis.
          </p>
          <a class="link link--primary" href="">Ver más<i class="icon-arrow-right-circle"></i></a>
        </div>
      </article>

      <article class="card">
        <img class="card-img-top" src="images/news-image-5.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">
            título evento placeholder lorem ipsum dolor sit amet
          </h5>
          <p class="card-text">
            Aenean nec nisl nec lorem condimentum mattis et vitae eros. Ut feugiat nibh a mi aliquet,
            eget molestie ligula maximus. Donec in nunc dictum, eleifend mauris, mattis turpis.
          </p>
          <a class="link link--primary" href="">Ver más<i class="icon-arrow-right-circle"></i></a>
        </div>
      </article>

      <article class="card">
        <img class="card-img-top" src="images/news-image-6.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">
            título evento placeholder lorem ipsum dolor sit amet
          </h5>
          <p class="card-text">
            Aenean nec nisl nec lorem condimentum mattis et vitae eros. Ut feugiat nibh a mi aliquet,
            eget molestie ligula maximus. Donec in nunc dictum, eleifend mauris, mattis turpis.
          </p>
          <a class="link link--primary" href="">Ver más<i class="icon-arrow-right-circle"></i></a>
        </div>
      </article>

    </div>
  </section>
<?php get_footer(); ?>