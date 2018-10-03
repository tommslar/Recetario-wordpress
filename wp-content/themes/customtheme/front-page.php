<?php
/**
 * The template for displaying all posts with custom tag
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ShUrRe
 */

get_header();
get_sidebar();
?>

	<div id="primary" class="content-area">

		<!--NAVBAR -->
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'shurre' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>

		<main id="main" class="site-main">

			<div class="collection">
				<h4 id="titulo-dinamico" class="collection-item active"><i class="material-icons small">bookmark</i>Todas las recetas:</h4>
			</div>

			<div class="contenedor row" >	
			<!-- CUSTOM FIELDS -->

				<?php while ( have_posts() ) : the_post(); ?>
				
				    <div class="col s12 m4">
				      <div class="card">
				        <div class="card-image">
				          <img src=<?php the_field('foto_de_la_receta'); ?>>
				          <span class="card-title"><?php the_field('titulo'); ?></span>
				        </div>
				        <div class="card-content">
				         	<p  class="descripcion-teaser"><?php the_field('descripcion'); ?></p>
				        	<div id="categorias">
								<?php
								$categories = get_the_category( $post->ID );
								foreach ( $categories as $category ) {
									echo '<a class="waves-effect waves-light btn boton-categoria" href="' . get_category_link( $category->term_id ) . '"><i class="material-icons left">add_circle_outline</i>' . $category->name  . '</a>';
								}
								?>
							</div>
				        </div>
				        <div class="card-action">
				          <a href= <?php echo get_permalink($post->ID)  ?> >IR A LA RECETA</a>
				        </div>
				      </div>
				    </div>
		
				<?php endwhile; // end of the loop. ?>
	

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<script type="text/javascript"> 
// JS para quedarme con los primeros 150 caracteres de la descripción
	document.getElementsByClassName("descripcion-teaser")[0].innerHTML = document.getElementsByClassName("descripcion-teaser")[0].innerHTML.substring(0, 150);
	document.getElementsByClassName("descripcion-teaser")[1].innerHTML = document.getElementsByClassName("descripcion-teaser")[1].innerHTML.substring(0, 150);
	document.getElementsByClassName("descripcion-teaser")[2].innerHTML = document.getElementsByClassName("descripcion-teaser")[2].innerHTML.substring(0, 150);
	document.getElementsByClassName("descripcion-teaser")[3].innerHTML = document.getElementsByClassName("descripcion-teaser")[3].innerHTML.substring(0, 150);
	document.getElementsByClassName("descripcion-teaser")[4].innerHTML = document.getElementsByClassName("descripcion-teaser")[4].innerHTML.substring(0, 150);
	document.getElementsByClassName("descripcion-teaser")[5].innerHTML = document.getElementsByClassName("descripcion-teaser")[5].innerHTML.substring(0, 150);
	document.getElementsByClassName("descripcion-teaser")[6].innerHTML = document.getElementsByClassName("descripcion-teaser")[6].innerHTML.substring(0, 150);
	document.getElementsByClassName("descripcion-teaser")[7].innerHTML = document.getElementsByClassName("descripcion-teaser")[7].innerHTML.substring(0, 150);
	document.getElementsByClassName("descripcion-teaser")[8].innerHTML = document.getElementsByClassName("descripcion-teaser")[8].innerHTML.substring(0, 150);
</script>

<?php

get_footer();
