<?php 
/*
Template Name: Locations
*/
get_header()

?>
<div id="locations-page">

	<div id="locations-pic">
		<?php
			the_post_thumbnail( array(965,444) );
		?>
	</div>


<div id="dialog-2">

		<?php dynamic_sidebar('contact-form-sidebar');?>

			<div id="homepageformtext">
				Completing the following contact form in its entirety will allow us to provide you<br>
				with answers to your request in the quickest and most effective manner possible.
			</div>
			<div id="homepageformconnect">
				<img src="../wp-content/themes/circular/images/homepageformconnect.gif" height="53" width="225">
			</div>
			<div id="homepageformphonepic">
				<img src="../wp-content/themes/circular/images/homepageformphonepic.gif" height="45" width="46">
			</div>
			<div id="homepageformphonenumber">
				(866) 274-5578
			</div>
			<div id="homepageformemail">
				info@circularenergy.com
			</div>
	</div>

<script>
	var $fca = jQuery.noConflict();
 	$fca(function() {
            $fca( "#dialog-2" ).dialog({
               autoOpen: false, 
               buttons: {
                  SUBMIT: function() {
                  	$fca("#homepageform6").submit();
                  	$fca(this).dialog("close");
                  },
               },
               position: {
                  my: "center center",
                  at: "center center"
               }
            });

            $fca( "#austinlocationsheaderimage" ).click(function() {
               $fca( "#dialog-2" ).dialog( "open" );
            });
          
         });


  </script>



		<div id="austinpagepicnav">
			<div id="austinlocationsheaderimage">
				<img src="../../wp-content/themes/circular/images/locationspagepicnav.png" height="78" width="237">
			</div>
			<ul>
				<li><a href="/solar-solutions">Main</a></li>
  				<li><a href="/solar-installer-austin-texas">Austin</a></li>
		  		<li><a href="solar-installer-dallas-texas/">Dallas</a></li>
		  		<li><a href="/solar-installer-san-antonio-texas">San Antonio</a></li>
		  		<li><a href="/solar-installer-houston-texas/">Houston</a></li>
		  		<li><a href="/solar-installer-louisiana">Louisiana</a></li>
			</ul>
		</div>
	<div id="austin-content">
		<div id="redcontactbox">	
		</div>		

		<?php while(have_posts()): the_post()?>
		<div id="secondfeaturedimage">
		<?php
			if (class_exists('MultiPostThumbnails')) :
			MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL, 'secondary-featured-thumbnail');
			endif;
		 ?>
		</div>
		 <?php the_content();?>
		<?php endwhile;?>
<!--
<div id="metabox55">
	<?php
	/* 
	$names56 = rwmb_meta('rw_image','type=image'); 
	$pictureurl= $names56['384']['url'];
	$names23 = rwmb_meta('rw_fname');
	//echo $names23[0];

	?>
<a href="$pictureurl" rel="gb_imageset[tople5ft_pics]">
		<div id="ourprojectstopleft">
			<div id="ourprojectstoplefttext" class="ourprojectsgaltext">
				<?php echo $names23[0];*/?>
			</div>
		</div>
	</a>

</div>
-->
		<div id="ourprojectsandtestimonials">
		</div>
		<script>
		var $locations = jQuery.noConflict();
		$locations(document).ready(function(){
		$locations("#locationstoplefttext").hide();
		$locations("#locationstopmidtext").hide();
		$locations("#locationstoprighttext").hide();
		$locations("#locationsmidlefttext").hide();
		$locations("#locationsmidmidtext").hide();
		$locations("#locationsmidrighttext").hide();
		$locations("#locationsbotlefttext").hide();
		$locations("#locationsbotmidtext").hide();
		$locations("#locationsbotrighttext").hide();

		$locations("#locationstopleft").hover(function(){
		    $locations("#locationstopleft").css("background-color","#d75244").css("opacity",".6");
		    $locations("#locationstoplefttext").show();
		    },function(){
		    $locations("#locationstopleft").css("background-color","transparent");
		    $locations("#locationstoplefttext").hide();
		  });

		$locations("#locationstopmid").hover(function(){
		    $locations("#locationstopmid").css("background-color","#d75244").css("opacity",".6");
		    $locations("#locationstopmidtext").show();
		    },function(){
		    $locations("#locationstopmid").css("background-color","transparent");
		    $locations("#locationstopmidtext").hide();
		  });

		$locations("#locationstopright").hover(function(){
		    $locations("#locationstopright").css("background-color","#d75244").css("opacity",".6");
		    $locations("#locationstoprighttext").show();
		    },function(){
		    $locations("#locationstopright").css("background-color","transparent");
		    $locations("#locationstoprighttext").hide();
		  });

		$locations("#locationsmidleft").hover(function(){
		    $locations("#locationsmidleft").css("background-color","#d75244").css("opacity",".6");
		    $locations("#locationsmidlefttext").show();
		    },function(){
		    $locations("#locationsmidleft").css("background-color","transparent");
		    $locations("#locationsmidlefttext").hide();
		  });

		$locations("#locationsmidmid").hover(function(){
		    $locations("#locationsmidmid").css("background-color","#d75244").css("opacity",".6");
		    $locations("#locationsmidmidtext").show();
		    },function(){
		    $locations("#locationsmidmid").css("background-color","transparent");
		    $locations("#locationsmidmidtext").hide();
		  });

		$locations("#locationsmidright").hover(function(){
		    $locations("#locationsmidright").css("background-color","#d75244").css("opacity",".6");
		    $locations("#locationsmidrighttext").show();
		    },function(){
		    $locations("#locationsmidright").css("background-color","transparent");
		    $locations("#locationsmidrighttext").hide();
		  });

		$locations("#locationsbotleft").hover(function(){
		    $locations("#locationsbotleft").css("background-color","#d75244").css("opacity",".6");
		    $locations("#locationsbotlefttext").show();
		    },function(){
		    $locations("#locationsbotleft").css("background-color","transparent");
		    $locations("#locationsbotlefttext").hide();
		  });

		$locations("#locationsbotmid").hover(function(){
		    $locations("#locationsbotmid").css("background-color","#d75244").css("opacity",".6");
		    $locations("#locationsbotmidtext").show();
		    },function(){
		    $locations("#locationsbotmid").css("background-color","transparent");
		    $locations("#locationsbotmidtext").hide();
		  });

		$locations("#locationsbotright").hover(function(){
		    $locations("#locationsbotright").css("background-color","#d75244").css("opacity",".6");
		    $locations("#locationsbotrighttext").show();
		    },function(){
		    $locations("#locationsbotright").css("background-color","transparent");
		    $locations("#locationsbotrighttext").hide();
		  });
	});
		</script>
		<div id="locationsaffiliations">
		</div>
	</div>
	
</div> 
<?php get_footer()?>