<?php 
/*
Template Name: News Page
*/
get_header()

?>
<div id="newspage">

	<div id="newspic">
	</div>
		<div id="picnav">
			<ul>
				<li><a href="#newsroomtitle">Newsroom</a></li>
  				<li><a href="#newsroomupcomingeventstext">Upcoming Events</a></li>
  				<li><a href="#newsroomconnecttext">Connect</a></li>
			</ul>
		</div>
	
	<div id="newscontent">
		<?php $x=8000; ?>
		<?php while(have_posts()): the_post()?>

		 <?php the_content();?>
		 <?php 
		 
		 while ($x>=1) {
		 if (in_category('news',$x)){		 
		 ?>
		 <a href="<?php echo get_permalink($x); ?>"><div id="newsroompost">
		<div id="newsroomreadmoretext">Read More...</div>
		<div id="newsroomdots">....................................................................................................................................</div>
		<div id="newsroomposttitle">
			<?php
				$thepost1=get_post($x);
				echo $thepost1->post_title;
			?>
		</div>
		<div id="newsroompostthumb">
			<?php echo get_the_post_thumbnail( $x, 'newsroom-thumb'); ?>
		</div><a/>
		<div id="newsroompostcontent">
			<?php
				echo $thepost1->post_excerpt;
			?>
		</div>
	</div>
	<?php
	}
	$x--;
	} 
	?>
	<br>
	<?php endwhile;?>
	<div id="newsroomconnect">
	</div>
	<div id="newsroomfirstevent">
		<?php
			if (class_exists('MultiPostThumbnails')) :
			MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL, 'secondary-featured-thumbnail');
			endif;
		?>
	</div>
	<div id="newsroomsecondevent">
		<?php
			if (class_exists('MultiPostThumbnails')) :
			MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'third-image', NULL, 'secondary-featured-thumbnail');
			endif;
		 ?>
		</div>

	</div>
</div> <!-- ending of container -->
<?php get_footer()?>