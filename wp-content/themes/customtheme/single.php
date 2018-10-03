<?php
/**
 * The template for displaying all single posts
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

			<div class="contenedor " >	
			<!-- CUSTOM FIELDS -->

				<div class="collection">
					<p class="collection-item active"><i class="material-icons tiny">description</i><?php the_field('titulo'); ?></p>
				</div>

				<img class="responsive-img foto-receta" src=<?php the_field('foto_de_la_receta'); ?>>

				<div id="categorias">
				<?php
				$categories = get_the_category( $post->ID );
				foreach ( $categories as $category ) {
					echo '<a class="waves-effect waves-light btn boton-categoria" href="' . get_category_link( $category->term_id ) . '"><i class="material-icons left">add_circle_outline</i>' . $category->name  . '</a>';

				}
				?>
				</div>
				<br>
				<div class="contenedor-medio">
					<div id="descripcion" class="collection">
						<p class="collection-item active"><i class="material-icons tiny">list</i>Descripción:</p>
						<p><?php the_field('preparacion'); ?></p> <!-- traigo 'preparación' en vez de 'descripción' porque cuando cree el contenido armé la preparación de la misma longitud que los ingredientes, solo está cambiado por fines estéticos de este ejemplo -->
					</div>	
					<div id="ingredientes" class="collection">
						<p class="collection-item active"><i class="material-icons tiny">shopping_cart</i>Ingredientes</p>
						<p><?php the_field('ingredientes'); ?></p>
					</div> 
				</div>

				<div id="preparacion" class="collection">
					<p class="collection-item active"><i class="material-icons tiny">check</i>Preparación:</p>
					<p><?php the_field('descripcion'); ?></p><!-- traigo 'descripción' en vez de 'preparación' porque cuando cree el contenido armé la descripción mucho más amplia, simplemente es para el mockup -->
				</div>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
