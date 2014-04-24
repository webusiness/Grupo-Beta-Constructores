<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>
	<footer>
		<div class="row grid">
			<div id="fcontenido">
				<div class="col_6 contenido separador">
					<div> Avenida Elena 21-79 zona 1, Guatemala, C.A. </div>
					<div> PBX: (502) 2270-6600&nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp;Email: betaconstructores@mac.com </div>
				</div>
				<div class="col_3 contenido separador">
					<div> Siguenos en:&nbsp;&nbsp;
						<div id="isociales">
							<a href=""> <img src="<?php bloginfo('template_directory'); ?>/images/youtube.png"></a>	
							<a href="">	<img src="<?php bloginfo('template_directory'); ?>/images/tw.png"></a>
							<a href="">	<img src="<?php bloginfo('template_directory'); ?>/images/fb.png"></a>
						</div>
					</div>
				</div>
				<div class="col_3 contenido">
					<div id="wb" class="nolink"> 
						Powered by: <a href="http://webusiness.co/"> Webusiness </a> 
					</div>
				</div>
				<div class="clearflix"></div>
			</div>
		</div>
	</footer>
<?php
	wp_footer();
?>
<script type="text/javascript">
	$.noConflict();
	jQuery( document ).ready(function( $ ) { /* Inicio de todas las funciones Javascript y jQuery */
		$(function(){
			jQuery('#maximage').maximage();
		});
		function random(owlSelector){
			owlSelector.children().sort(function(){
			    return Math.round(Math.random()) - 0.5;
			}).each(function(){
			  $(this).appendTo(owlSelector);
			});
		}
 
		$("#owl-inicio").owlCarousel({
			navigation: true,
			navigationText: [
			  "<i class='icon-chevron-left icon-white'></i>",
			  "<i class='icon-chevron-right icon-white'></i>"
			  ],
			  items : 1,
			  pagination : false,
			beforeInit : function(elem){
			  //Parameter elem pointing to $("#owl-inicio")
			  random(elem);
			}
		});
		$("#owl-ser").owlCarousel({
			pagination: true,
			items:1,
			autoPlay:3000,
			beforeInit : function(elem){
			  //Parameter elem pointing to $("#owl-ser")
			  random(elem);
			}
		});
		$("#owl-demo").owlCarousel({
			navigation: false,
			pagination : false,
			items : 4,
			autoPlay: 3000,
			beforeInit : function(elem){
			//Parameter elem pointing to $("#owl-demo")
			random(elem);
			} 
		});
 
	})
	</script>
</body>
</html>