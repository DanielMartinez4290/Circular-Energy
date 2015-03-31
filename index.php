<?php get_header()?>
<div id="left">
	<br>
	<br>
	<?php while(have_posts()): the_post()?>
		
	<?php
		 if (in_category('Blog')){		 
	?>	
		<div id="blogpage">
		
			<div id="blogpagepic">
				<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post_id,'blogthumb'); ?></a>
			</div>
			<div id="blogpagetitle">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</div>
			<br>
			<div id="blogpagecontent">
				<?php the_excerpt();?>
			</div>

		</div>
		<br>
		<br>
		<?php
			}
		?>
	<?php endwhile;?>

</div>

<?php get_footer()?>
