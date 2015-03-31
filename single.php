<?php get_header()?>

<div id="left">
	<?php
		 if (in_category('Blog',$x)){		 
	?>
	<div id="singlepostsidebar">
		<?php dynamic_sidebar('single-post-sidebar');?>
		<script type="text/javascript">
		var $sp = jQuery.noConflict();
		$sp(document).ready(function(){
    	if (location.href.indexOf("#wpcf7-f6424-o1") != -1) {
    		alert('Please fill out all of the required fields');
        	// Your code in here accessing the string like this
        	// location.href.substr(location.href.indexOf("#"))
    		}});
		</script>
	</div>
	<div id="blogpostcontent">
	<?php }
	else {  ?>
	<div id="notblogpostcontent">
	<?php } ?>
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
