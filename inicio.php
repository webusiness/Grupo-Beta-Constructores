<?php
/*
Template Name: inicio
*/
get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
  <div class="row grid">
    <div class="col_12">
		<div id="owl-inicio" class="owl-carousel owl-theme">
		  <?php  query_posts(array('post_type' => 'slide', 'showposts' => 8));
		    if (have_posts()) : while (have_posts()) : the_post();
		      $thumb = get_post_thumbnail_id();
		      $img_url = wp_get_attachment_url( $thumb,'full' );
		  ?>
		  <div class="item">
		  	<div class="grid">
			  	<div class="col_6">
					<img src="<?php echo $img_url ?>">
			  	</div>
			  	<div class=" col_6 tbanner">
			  		<?php the_content(); ?>
			  		<div id="mas">
			  		<button class="mas"><a href="<?php the_permalink(); ?>"> Ver más </a></button>
			  		</div>
			  	</div>
			</div>
		  </div>
		  <?php 
		    endwhile;
		    endif;
		    wp_reset_query();
		  ?>
		</div>
		<div id="separador-inicio"></div>
		<div id="owl-demo" class="owl-carousel owl-theme">
	      <?php  query_posts(array('post_type' => 'post', 'showposts' => 6));
	        if (have_posts()) : while (have_posts()) : the_post();
	        $thumb = get_post_thumbnail_id();
	        $img_url = wp_get_attachment_url( $thumb,'full' );
	      ?>
	      <div class="item">
	      		<div class="owl-con"> <!--Caja contenedora -->
	      			<div class="con-img">
	      				<img src="<?php echo $img_url ?>">
	      			</div>
	      			<div class="con-titulo">
	      				<?php the_title() ?>
	      			</div>
	      			<div class="con-des">
			            <?php
			              $excerpt = get_the_excerpt();
			              echo string_limit_words($excerpt,14); /* Toma la descripcion y la recorta a no mas de 20 palabras */
			            ?>
	      			</div>
	      			<button class="mas-alt"><a href="<?php the_permalink(); ?>"> Ver más </a></button>
	      		</div>
	      </div>
	      <?php 
	        endwhile;
	        endif;
	        wp_reset_query();
	      ?>
		</div>
    </div>
    <div class="clearflix"></div>
  </div>

<?php endwhile; ?>

<?php get_footer();?>