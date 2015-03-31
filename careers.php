<?php 
/*
Template Name: Careers Page
*/
get_header()

?>
<div id="careerspage">

	<div id="careerspic">
	</div>
		<div id="picnav">
			<ul>
				<li><a href="#careerstopcontent">Company Culture</a></li>
  				<li><a href="#careersjobsection">Current Employment Opportunities</a></li>
			</ul>
		</div>


<div id="news1content">
		<?php $x=8000; ?>
		<?php while(have_posts()): the_post()?>
		
		<div id="careerstopcontent">
		 <?php the_content();?>
		</div>
		
		<div id="careersjobsection">
			<div id="careersjobs">
		 <?php 
		 
		 while ($x>=1) {
		 if (in_category('Jobs',$x)){

		 ?>
		 <div id="careerspost">
		<a href="<?php echo get_permalink($x); ?>"><div id="careersposttitle">
			<?php
				$thepost1=get_post($x);
				echo $thepost1->post_title;
			?>
		</div>
		<div id="careerspostthumb">
			<?php echo get_the_post_thumbnail( $x, 'jobsthumb'); ?>
		</div></a>
		<div id="careerspostcontent">
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
</div>
</div>
	<?php endwhile;?>
</div>
<br>
</div> <!-- ending of container -->
<?php get_footer()?>