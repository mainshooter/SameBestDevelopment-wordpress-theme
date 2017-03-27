<?php get_header(); ?>
<body>
  <div id="navpos">
    <div ID="centernav">
      <div id="nav">
          <?php wp_nav_menu( array( 'theme_locations' => 'top-menu' ) ); ?>
      </div>
    </div>
  </div>
  <div id="header">
  <img src="http://samebestdevelopment.nl/file/photo/header.jpg" id="headerfoto"><h3 id="titel"><?php bloginfo( 'name' ); ?><span id="slogan"><?php bloginfo( 'description' ); ?></span></h3></img>
  </div>
  <div id="leftwrapper">
    <?php cn_include_content(22); ?>
  </div>
  <div id="wrapper">
    <div id="container">
  <div id="main">
    <?php if (have_posts()) :?>
    <?php while (have_posts())  : the_post(); ?>

      <div <?php post_class() ?>>
        <h2><a href="<?php the_permalink() ?>"<?php the_title(); ?></a></h2>

        <?php if(has_post_thumbnail())  : ?>
          <div class="post-tumb">
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
          </div>
        <?php endif; ?>

        <?php get_page_by_title( $page_title, $object, $p ); ?>
        <?php the_content('false', 'false'); ?>

    <?php endwhile; ?>

    <div class="pagination">
      <ul>
        <li class="older"><?php next_posts_link('Older') ?></li>
        <li class="newer"><?php previous_posts_link('Newer') ?></li>
      </ul>
    </div>

  <?php else : ?>
    <h2>Sorry niks gevonden</h2>
    <p>U zoekt naar iets wat er niet is</p>
    <p><a href="<?php echo get_option('home'); ?>">Terug naar de home pagina</a></p>

  <?php endif; ?>

<?php get_footer(); ?>
