<?php get_header()?>

<div id="left6">
	<div id="singlepostcontent">
	<?php while(have_posts()): the_post()?>
		<div id="singleposttitle">
			<h2><?php the_title()?></h2>
		</div>
		<br>
		<div class="aligncenter">
		<?php the_post_thumbnail('full');?>
		</div>
		<br>
		<br>
		<?php the_content();?>
		<br>
	<?php endwhile;?>
	</div>

</div>

<?php get_footer()?>
