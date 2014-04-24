<?php
/**
 * Template Name: Contacto
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<div class="row grid">
			<div class="col_12">
				<div class="titulo-pagina">
					<?php the_title(); ?>
				</div>
			</div>
			<div class="clearflix"></div>
		</div>
		
		<div class="contenido con-pagina">
			<div class="row grid">
				<div class="col_12">

					<div class="contenido-pagina">
						<?php the_content(); ?>
					</div>

				</div>
				<div class="clearflix"></div>
			</div>

			<div id="mapa" class="row grid">
				<div id="contacto" class="col_12">
					<span>Ubícanos</span>
					<div class="contenedor">
						<div class="ub">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7720.893531415617!2d-90.52222881223238!3d14.630562478366851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDM3JzQ2LjIiTiA5MMKwMzEnMjIuNCJX!5e0!3m2!1ses!2s!4v1398198640704" width="600px" height="250" frameborder="0" style="border:0"></iframe>
						</div>
						<div id="dir" class="ub">
							<div class="c-dir">
								<p>Dirección: </p>
								<p>Avenida Elena 21-79 Zona 1,</p>
								<p>Guatemala C.A. </p>
							</div>
							<div class="c-tel">
								<p>PBX: (502) 2270-6600</p>
							</div>
							<div class="c-mail">
								<p>E-mail: betaconstructores@mac.com </p>
							</div>
						</div>
					</div>
				</div>
				<div class="clearflix"></div>
			</div>
		</div>

	</article>
<?php endwhile; ?>

<?php get_footer(); ?>