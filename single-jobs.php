<?php get_header()?>

<div id="left">
	<div id="jobssinglepost">
	<?php while(have_posts()): the_post()?>
		<div id="jobssingleposttitle">
			<h2><?php the_title()?></h2>
		</div>
		<br>
		<div id="jobssinglepostthumb">
		<?php the_post_thumbnail('jobsthumb');?>
		</div>
		<div id="jobssinglepostcontent">
		<?php the_content();?>
		</div>
		
	<?php endwhile;?>
	</div>

</div>

<?php get_footer()?>
