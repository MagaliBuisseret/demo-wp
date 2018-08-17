<?php get_header(); ?>
<!-- Header -->
  <header>
    <img class="header__image header__image--default" src="<?php echo get_template_directory_uri(); ?>/assets/images/news-banner.jpg" alt="banner">
    <div class="header__content header__content--default">
      <h1>
        noticias
      </h1>
    </div>
  </header>


  <!-- Morenews section -->
  <section class="moreNews">
    <h2>
      más noticias
    </h2>

    <div class="cards">

      <div class="moreNews__selectContainer">
        <select class="moreNews__select" name="category">
          <option class="moreNews__category"value="">Selecciona un categoría</option>
          <option class="moreNews__category"value="">1</option>
          <option class="moreNews__category"value="">2</option>
          <option class="moreNews__category"value="">3</option>
          <option class="moreNews__category"value="">4</option>
        </select>
      </div>
      
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="card">
          <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url();?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">
              <?php echo the_title();?>
            </h5>
            <p class="card-text">
              <?php the_excerpt(); ?>
            </p>
            <a class="link link--primary" href="<?php the_permalink(); ?>">Ver más<i class="icon-arrow-right-circle"></i></a>
          </div>
        </article>
      <?php  endwhile; 
    endif; ?>

      

    </div>
  </section>
<?php get_footer(); ?>