<?php
get_header();
?>
<div id="left">
<?php
 while(have_posts()): the_post()?>
		<div id="blogpage">
			<div id="blogpagepic">
				<a href="<?php the_permalink()?>"><?php echo get_the_post_thumbnail($post_id,'blogthumb'); ?></a>
			</div>
			<div id="blogpagetitle">
				<h2><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
			</div>
			<br>
			<div id="blogpagecontent">
				<?php the_excerpt(__('Continue Reading'));?>
			</div>
		</div>
		<br>
		<br>
	<?php endwhile;?>

</div>
<?php
get_footer();
?>