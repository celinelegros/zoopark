  <footer class="page-footer brown lighten-1">
    <div class="container">
      <div class="row">
        <div class="col l3 m6 s12">
          <h3 class="white-text">Spectacles</h3>
          <ul class="footer-links">
          <?php
            $args = array(
               'post_type' =>  'spectacle',
               'post_status'   =>  'publish',
               'posts_per_page' =>  4
            );
            $requete = new WP_Query($args);
            if($requete->have_posts()) : ?>

            <?  while($requete->have_posts()): $requete->the_post(); ?> <li><a href="#!"><?php the_title(); ?></a></li><?php endwhile;
            endif; 
            wp_reset_postdata();
            ?>
          </ul>
        </div>
        <div class="col l3 m6 s12">
          <h3 class="white-text">Activités</h3>
          <ul class="footer-links">
          <?php
            $args = array(
               'post_type' =>  'activite',
               'post_status'   =>  'publish',
               'posts_per_page' =>  4
            );
            $requete = new WP_Query($args);
            if($requete->have_posts()) : ?>

            <?  while($requete->have_posts()): $requete->the_post(); ?> <li><a href="#!"><?php the_title(); ?></a></li><?php endwhile;
            endif; 
            wp_reset_postdata();
            ?>
          </ul>
        </div>
        <div class="gmap col l6 m12 s12" style="padding:0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506.7165607572676!2d4.468290242331335!3d50.47078958056967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c22920c155cb77%3A0x122916fe7183d084!2sCentre+de+comp%C3%A9tence+Forem+Cepegra!5e0!3m2!1sfr!2sbe!4v1499845937345" width="100%" height="100%"frameborder="0" allowfullscreen>
         </iframe>

        </div>
      </div>
    </div>


<?php
           $args = array(
              'post_type' =>  'information',
              'post_status'   =>  'publish',
              'posts_per_page' =>  1
           );
           $requete = new WP_Query($args);
           if($requete->have_posts()) :
           while($requete->have_posts()): $requete->the_post(); ?>
   <div class="section white">
     <div class="access-map container">
       <div class="row">
         <div class="col s12 center">
           <h3 class="brown-text">Adresse</h3>
           <p>
             <?php if($image = get_field('footer_logo')): ?>
             <h4><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></h4><?php endif;?>
             <span itemprop="streetAddress"><?php the_field('rue_footer'); ?></span></br>
             <span itemprop="addressLocality"><?php the_field('localite_footer'); ?></span></br>
             <span itemprop="addressRegion"><?php the_field('pays_footer');?></span>
           </p>
         </div>
       </div>
     </div>
   </div>
<?php endwhile; endif; 
  wp_reset_postdata();
?>


    <div class="footer-copyright center grey darken-4">
      <div class="container">
        ZooPark <a class="brown-text text-lighten-3" href="#">2016</a>
      </div>
    </div>
  </footer>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/materialize.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/init.js"></script>

</body>
</html>
