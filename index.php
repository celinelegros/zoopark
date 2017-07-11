<?php get_header(); ?>
<!--INDEX -->
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="slogan container">

        <div class="row center">
          <?php if(get_field('txt_accueil_1')): ?><h2 class="header col s12 light"><?php the_field('txt_accueil_1'); ?></h2><?php endif;?>
        </div>

        <div class="row center">
          <?php if(get_field('btn_1')): ?><a href="#" id="download-button" class="btn-large waves-effect waves-light brown lighten-1"><?php the_field('btn_1'); ?></a><?php endif;?>
        </div>

      </div>
    </div>
     <?php if($image = get_field('img_accueil_1')): ?><div class="parallax"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div><?php endif;?>
  </div>

 <!-- animaux promote-->

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
<?php
  $args = array(
      'post_type' =>  'animal',
      'post_status'   =>  'publish',
      'posts_per_page' =>  3
  );
  $requete = new WP_Query($args);
  if($requete->have_posts()):
      while($requete->have_posts()): $requete->the_post(); ?>
      <div class="col s12 m4">
         <div class="icon-block">
           <h2 class="center brown-text"><i class="<?php the_field('logo_animal'); ?>"></i></h2>
           <h3 class="center"><?php the_field('nom_animal'); ?> <em>- <?php the_field('lieu_animal'); ?></em></h3>
           <p class="light"><?php the_field('descriptif_animal'); ?></p>
         </div>
      </div> <!-- col s12 m4 -->
    <?php endwhile; endif; 
    wp_reset_postdata();
    ?>
      </div><!-- row -->
    </div><!-- .section -->
  </div> <!-- .container -->


  <!-- Call-->
  <div class="call orange lighten-1">
    <div class="container">
      <div class="section">
        <div class="row">
          <div class="col s12 center">

              <p>Achetez votre ZOOPASS et accéder à notre Parc toute l'année !</p>

<?php
$terms = get_terms( 'type_billet', array(
    'orderby'    => 'count',
    'hide_empty' => 0
) );

foreach( $terms as $term ) { ?>

<a href="#" id="download-button" class="call-btn btn-large waves-effect waves-light brown lighten-1">ZooPass<strong> <?php echo $term->name; ?> </strong></a>

<?php } ;?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <?php if(get_field('txt_accueil_2')): ?><h3 class="header col s12 light"><?php the_field('txt_accueil_2'); ?></h3><?php endif;?>
        </div>
      </div>
    </div>
     <?php if($image = get_field('img_accueil_2')): ?><div class="parallax"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div><?php endif;?>

  </div>

<?php
$args = array(
    'post_type' =>  'horaire',
    'post_status'   =>  'publish',
    'posts_per_page' =>  3
);
$requete = new WP_Query($args);
if($requete->have_posts()) : ?>
       <div class="opening container">
   <div class="section">
    <div id="horaire">
         <div class="row">
       <div class="col s12 center">
         <h3 class="orange-text">Horaires</h3>
         <h4>Jours d'ouverture et heures d'ouverture</h4>
         <ul class="tabs">
          <?  while($requete->have_posts()): $requete->the_post(); ?> <li class="tab col s3"><a href="#<?php the_field('id_horaire'); ?>"><?php the_title(); ?></a></li> <?php endwhile; ?>
         </ul>
       </div>
       <?  while($requete->have_posts()): $requete->the_post(); ?> <div id="<?php the_field('id_horaire'); ?>" class="col s12"><p><?php the_content(); ?></p></div><?php endwhile; 
 endif; 
wp_reset_postdata();
?>

     </div>
    </div>
   </div>
 </div>


     </div>
   </div>
 </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <?php if(get_field('txt_accueil_3')): ?><h3 class="header col s12 light"><?php the_field('txt_accueil_3'); ?></h3><?php endif;?>
        </div>
      </div>
    </div>
     <?php if($image = get_field('img_accueil_3')): ?><div class="parallax"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div><?php endif;?>

  </div>

<?php get_footer(); ?>