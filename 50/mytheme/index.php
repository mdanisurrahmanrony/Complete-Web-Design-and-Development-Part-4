<?php get_header(); ?>

		<div class="content_wrapper">
			<div class="left_content">
				<?php 
				
				if(have_posts()) : 
					while(have_posts()) : the_post(); ?>
					
					<article>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php the_content(); ?></p>
					</article>
					
				<?php	endwhile;
				else:
				echo 'No Posts Found';
				endif;
				
				?>
			</div>
			<div class="sidebar">			
				<h2>Sidebar Heading</h2>
				<ul>
					<li><a href="#">Sidebar Link</a></li>
					<li><a href="#">Sidebar Link</a></li>
					<li><a href="#">Sidebar Link</a></li>
					<li><a href="#">Sidebar Link</a></li>
				</ul>
			</div>
			<br class="clear" />
		</div>
<?php get_footer(); ?>