<?php get_header();?>
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2>Seja bem vindo ao meu novo tema</h2>			
			</div>
		</div>
	</div>
	

	<div class="row">
	<?php
	$cont = 0;
		if ( have_post() ) {
			while ( have_post() ) {
				the_post();
				$cont++;
			if ($cont <= 3) {
?>
	
			<div class="col-md-4">

				<h3><?php the_title(); ?></h3>
				<div class="img-responsive img-thumbanail foto"><?php the_post_thumbnail(); ?></div>
				<p><?php the_excerpt(); ?></p>
				<a class="btn btn-primary" href="<?php the_permalink();?>">Leia mais</a>

			</div>
	<?php			
			}
			}
		}
	?>
	</div>


<?php get_footer();?>