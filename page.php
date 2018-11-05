<?php

/*
Template Name: project_studio-portfolio
*/

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<section id="skills" class="skills">
			<div class="skills_wrapper">
				<h3>We can do it</h3>
				<?php 
				$skills_items = ot_get_option('skills', array() );

					if ( !empty ($skills_items)) {
					
					foreach ($skills_items as $skills_item) {
						echo  
					'<div class="skills_items">
						<div class="skills_item">
							<i class="'.$skills_item['skill_icon'].'"></i>
							<p>'.$skills_item['skill_text'].'</p>
						</div>
					</div>';
					}
				}
			?>
			</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();