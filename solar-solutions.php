<?php 
/*
Template Name: Solar Solutions
*/
get_header()

?>
<div id="ss-homepage">

<div id="ss-homepic">
</div>
		<div id="ss-picnav" class="sspicnavs">
			<ul>
  				<li><a href="#solarbasics">Solar Basics</a></li>
  				<li><a href="#ourprojects">Project Portfolio</a></li>
  				<li><a href="#thecirculardifferenceouter">The Circular Difference</a></li>
  				<li><a href="http://circularenergy.com/blog/">Blog</a></li>
			</ul>
		</div>
<div id="fourboxes">
	<div id="ss-residentialsolutions">
		<a href="/solar-rebates-and-incentives"><div id="ss-rstit" class="fourboxesheaders">
			<div id="ss-rstitl1">
				WHAT INCENTIVES 
			</div>
			<div id="ss-rstitl2">
				ARE AVAILABLE
			</div>
		</div></a>
		<div id="ss-rspic">	
			<img src="../wp-content/themes/circular/images/yesno.gif" height="88" width="201">
		</div>
		<div id="ss-rstext">
			<div class="fourboxeshtext">Solar Rebates</div>
			<div class="fourboxesptext">Find out about the solar rebates and incentives that are available in your area.</div>  
		</div>
		<div id="ss-rsmoreinfo">
			<div id="ss-rsmoreinfotext" class="fourboxesmoreinfotext">
				MORE INFO
			</div>
			<div id="ss-rsmoreinfoarrow">
				>
			</div>
		</div>
	</div>
	<div id="ss-commercialsolutions">
		<a href="/commercial-solar"><div id="ss-cstit" class="fourboxesheaders">
			<div id="ss-cstitl1" class="centertext">
				COMMERCIAL
			</div>
			<div id="ss-cstitl2" class="centertext">
				SOLUTIONS
			</div>
		</div></a>
		<div id="ss-cspic">	
			<img src="../wp-content/themes/circular/images/tallbuildings.gif" height="88" width="100%">
		</div>
		<div id="ss-cstext">
			<div class="fourboxeshtext">Solar For Your Business</div>
			<div class="fourboxesptext">Circular Energy delivers commercial solar work at the highest professional 
				standard.</div>
		</div>
		<div id="ss-csmoreinfo">
			<div id="ss-csmoreinfotext" class="fourboxesmoreinfotext">
				MORE INFO
			</div>
			<div id="ss-csmoreinfoarrow">
				>
			</div>
		</div>
	</div>
	<div id="ss-architectsandbuilders">
		<a href="/architects-and-builders"><div id="ss-abtit" class="fourboxesheaders">
			<div id="ss-abtitl1" class="centertext">
				ARCHITECTS
			</div>
			<div id="ss-abtitl2" class="centertext">
				& BUILDERS
			</div>
		</div></a>
		<div id="ss-abpic">	
			<img src="../wp-content/themes/circular/images/draftingruler.gif" height="88" width="100%">
		</div>
		<div id="ss-abtext">
			<div class="fourboxeshtext">New Construction</div>
			<div class="fourboxesptext">We provide solar deliverables that include a cost-benefit analysis, 
				conceptual panel layout, and construction documents.</div>
		</div>
		<div id="ss-abmoreinfo">
			<div id="ss-abmoreinfotext" class="fourboxesmoreinfotext">
				MORE INFO
			</div>
			<div id="ss-abmoreinfoarrow">
				>
			</div>
		</div>
	</div>
	<div id="ss-requestaquote">
		<div id="ss-raqtit" class="fourboxesheaders">
			<div id="ss-raqtitl1" >
				REQUEST
			</div>
			<div id="ss-raqtitl2" >
				A QUOTE
			</div>
		</div>
		<div id="ss-raqpic">	
			<img src="../wp-content/themes/circular/images/moneyexchange.gif" height="88" width="100%">
		</div>
		<div id="ss-raqtext">
			<div class="fourboxeshtext">Contact Circular Energy</div>
			<div class="fourboxesptext">Reach out to Circular Energy and let us know 
				how we can help you save money with a solar panel installation at your 
				location.</div>
		</div>
		<div id="ss-raqmoreinfo">
			<div id="ss-raqmoreinfotext" class="fourboxesmoreinfotext">
				MORE INFO
			</div>
			<div id="ss-raqmoreinfoarrow">
				>
			</div>
		</div>
	</div>
</div> <!-- end four boxes -->

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
	var $jqss = jQuery.noConflict();
 	$jqss(function() {
            $jqss( "#dialog-2" ).dialog({
               autoOpen: false, 
               buttons: {
                  SUBMIT: function() {
                  	$jqss("#homepageform6").submit();
                  	$jqss(this).dialog("close");
					alert("Thanks for submitting the form. A Circular Design Consultant will be following up with you.");
                  },
                  //X: function() {$fca(this).dialog("close");}
               },
               position: {
                  my: "center center",
                  at: "center center"
               }
            });

            $jqss( "#ss-raqtit" ).click(function() {
               $jqss( "#dialog-2" ).dialog( "open" );
            });
            /*

            $fca( "#formxbox" ).click(function() {
            	$fca(this).dialog("close");
            });
		*/
         });


  </script>




<div id="solarbasics">
	<div id="solarbasicstitle">
		Solar Basics
	</div>
	<div id="solarbasicspic">
		<img src="../wp-content/themes/circular/images/solarbasicspic.gif" height="371" width="965">
	</div>
	<div id="solarbasicstext">
		Photovoltaic (PV) Solar Systems convert sunlight into electricity that can be used to power your home, office, or industrial facility. By harnessing PV solar technology, you can offset a significant portion of the power supplied by your local utility, or with a battery back-up system installed you can take yourself completely off the grid. 
		<br><br>
		Power created by a properly installed Solar PV System becomes your <span class="boldtext">primary power source</span>. During the day, this power will be consumed within your structure and any excess will be sent back into the power grid. In the event of an overproduction from solar, you’ll be credited by the local power utility. 
		<br><br>
		<span class="boldtext">PV solar panels interact seamlessly with your existing electrical system</span>. At night, or when you require more power than is produced by your system (such as cooling your structure during the summer), you’ll draw power from the grid to ensure your facility always has electricity.*
		<br><br>
		*As a safety precaution for utility workers, PV solar systems automatically shut off in the case of grid blackout. Speak with your Circular Energy representative about blackout prevention solutions.
	</div>
</div>
<div id="ourprojects">
	<div class="navsectiontitle">
	Our Projects
	</div>
	<!--
	<a href="http://google.com/" onclick="return GB_showCenter('Google', this.href)">Visit Google</a>
-->
	<div id="ourprojectspic">
		<img src="../wp-content/themes/circular/images/ourprojectspic.jpg" height="383" width="400px">
	<a href="/wp-content/themes/circular/greybox/CS-NORTH-CENTRAL-ELEMENTARY.jpg" rel="gb_imageset[topleft_pics]">
		<div id="ourprojectstopleft">
			<div id="ourprojectstoplefttext" class="ourprojectsgaltext">
				North Central Elementary <!-- 965x730 -->
			</div>
		</div>
	</a>

	<a href="/wp-content/themes/circular/greybox/CS-CUEVAS(SAN-ANTONIO).jpg" rel="gb_imageset[topleft_pics]">
		<div id="ourprojectstop">
			<div id="ourprojectstoptext" class="ourprojectsgaltext">
				Cuevas
			</div>
		</div>
	</a>

	<a href="/wp-content/themes/circular/greybox/CS-COLLIER.jpg" rel="gb_imageset[topleft_pics]">
		<div id="ourprojectstopright">
			<div id="ourprojectstoprighttext" class="ourprojectsgaltext">
				Colier
			</div>
		</div>
	</a>

	<a href="/wp-content/themes/circular/greybox/CS-STREAMLINE.jpg" rel="gb_imageset[topleft_pics]" >
		<div id="ourprojectsmidleft">
			<div id="ourprojectsmidlefttext" class="ourprojectsgaltext">
				Steamline
			</div>
		</div>
	</a>

	<a href="/wp-content/themes/circular/greybox/CS-FOCH-STREET.jpg" rel="gb_imageset[topleft_pics]">
		<div id="ourprojectsmidmid">
			<div id="ourprojectsmidmidtext" class="ourprojectsgaltext">
				Foch Street
			</div>
		</div>
	</a>

	<a href="/wp-content/themes/circular/greybox/CS-KUNZ.jpg" rel="gb_imageset[topleft_pics]">
		<div id="ourprojectsmidright">
			<div id="ourprojectsmidrighttext" class="ourprojectsgaltext">
				Kunz
			</div>
		</div>
	</a>

	<a href="/wp-content/themes/circular/greybox/cshowdyhonda.jpg" rel="gb_imageset[topleft_pics]">
		<div id="ourprojectsbottomleft">
			<div id="ourprojectsbottomlefttext" class="ourprojectsgaltext">
				Howdy Honda
			</div>
		</div>
	</a>

	<a href="/wp-content/themes/circular/greybox/cs-pease-place-apartments.jpg" rel="gb_imageset[topleft_pics]">
		<div id="ourprojectsbottommid">
			<div id="ourprojectsbottommidtext" class="ourprojectsgaltext">
				Pease
			</div>
		</div>
	</a>
	<a href="../../wp-content/themes/circular/greybox/cs-pearson-education.jpg" rel="gb_imageset[topleft_pics]">
		<div id="ourprojectsbottomright">
			<div id="ourprojectsbottomrighttext" class="ourprojectsgaltext">
				Pearson
			</div>
		</div>
	</a>
		<script>
		var $j = jQuery.noConflict();
		$j(document).ready(function(){

		 $j("#ourprojectstoplefttext").hide();
		 $j("#ourprojectstoptext").hide();
		 $j("#ourprojectstoprighttext").hide();
		 $j("#ourprojectsmidlefttext").hide();
		 $j("#ourprojectsmidmidtext").hide();
		 $j("#ourprojectsmidrighttext").hide();
		 $j("#ourprojectsbottomlefttext").hide();
		 $j("#ourprojectsbottommidtext").hide();
		 $j("#ourprojectsbottomrighttext").hide();	

		  $j("#ourprojectstopleft").hover(function(){
		    $j("#ourprojectstopleft").css("background-color","#d75244").css("opacity",".6");
		    $j("#ourprojectstoplefttext").show();
		    },function(){
		    $j("#ourprojectstopleft").css("background-color","transparent");
		    $j("#ourprojectstoplefttext").hide();
		  });
		  $j("#ourprojectstop").hover(function(){
		    $j("#ourprojectstop").css("background-color","#d75244").css("opacity",".6");
		    $j("#ourprojectstoptext").show();
		    },function(){
		    $j("#ourprojectstop").css("background-color","transparent");
		    $j("#ourprojectstoptext").hide();
		  });
		  $j("#ourprojectstopright").hover(function(){
		    $j("#ourprojectstopright").css("background-color","#d75244").css("opacity",".6");
		    $j("#ourprojectstoprighttext").show();
		    },function(){
		    $j("#ourprojectstopright").css("background-color","transparent");
		    $j("#ourprojectstoprighttext").hide();
		  });
		  $j("#ourprojectsmidleft").hover(function(){
		    $j("#ourprojectsmidleft").css("background-color","#d75244").css("opacity",".6");
		    $j("#ourprojectsmidlefttext").show();
		    },function(){
		    $j("#ourprojectsmidleft").css("background-color","transparent");
		    $j("#ourprojectsmidlefttext").hide();
		  });
		  $j("#ourprojectsmidmid").hover(function(){
		    $j("#ourprojectsmidmid").css("background-color","#d75244").css("opacity",".6");
		    $j("#ourprojectsmidmidtext").show();
		    },function(){
		    $j("#ourprojectsmidmid").css("background-color","transparent");
		    $j("#ourprojectsmidmidtext").hide();
		  });
		  $j("#ourprojectsmidright").hover(function(){
		    $j("#ourprojectsmidright").css("background-color","#d75244").css("opacity",".6");
		    $j("#ourprojectsmidrighttext").show();
		    },function(){
		    $j("#ourprojectsmidright").css("background-color","transparent");
		    $j("#ourprojectsmidrighttext").hide();
		  });
		  $j("#ourprojectsbottomleft").hover(function(){
		    $j("#ourprojectsbottomleft").css("background-color","#d75244").css("opacity",".6");
		    $j("#ourprojectsbottomlefttext").show();
		    },function(){
		    $j("#ourprojectsbottomleft").css("background-color","transparent");
		    $j("#ourprojectsbottomlefttext").hide();
		  });
		  $j("#ourprojectsbottommid").hover(function(){
		    $j("#ourprojectsbottommid").css("background-color","#d75244").css("opacity",".6");
		    $j("#ourprojectsbottommidtext").show();
		    },function(){
		    $j("#ourprojectsbottommid").css("background-color","transparent");
		    $j("#ourprojectsbottommidtext").hide();
		  });
		  $j("#ourprojectsbottomright").hover(function(){
		    $j("#ourprojectsbottomright").css("background-color","#d75244").css("opacity",".6");
		    $j("#ourprojectsbottomrighttext").show();
		    },function(){
		    $j("#ourprojectsbottomright").css("background-color","transparent");
		    $j("#ourprojectsbottomrighttext").hide();
		  });
		});
		</script>

	</div>
</div>
<div id="jslightbox">
<!--
<a href="../wp-content/themes/circular/greybox/gbcontent.php" rel="gb_page_center[800, 400]" title="Night valley">
   <img src="../wp-content/themes/circular/greybox/intelligent.gif" />Where does this text go
</a>
-->
</div>
<div id="thecirculardifferenceouter">
	<div id="thecirculardifferencetitle">
		The Circular Difference
	</div>
	<div id="thecirculardifferencetext">
		The highest quality solar solutions, the best customer service, and the friendliest, most fun to work with solar company. All of these things make up the Circular Energy Difference, and they've all helped to make Circular Energy the premier solar design and installation company.
		<div id="thecirculardifferencetextl2">
			Our all-inclusive footprint throughout the state of Texas and beyond allows us to offer the best solar solutions to residential and commercial customers. Contradictory to the practices of many other solar companies, Circular Energy doesn’t just design your system - We install it ourselves through a true Turn-Key Process. This allows us to ensure a quality solar solution is delivered, on-time and exactly as promised. It is because of this that Circular Energy has a 99.9% pass rate on our City Inspections.

		</div>
	</div>
</div>
<div id="becauseyoualwaysneedtobeupdatedsection">
<div id="becauseyoualwaysneedtobeupdated">
	Latest Solar Energy News
</div>

<div id="ssblog">
	<?php while(have_posts()): the_post()?>
	<a href="<?php echo get_permalink(212); ?>"><div id="ssblogpost1">
		<?php 
			echo get_the_post_thumbnail( 212, 'rect-thumb');
		?>
		<div id="ssblogpost1title">
			<?php
				$thepost1=get_post(212);
				echo $thepost1->post_title;
			?>
		</div></a>
		<div id="ssblogpost1content">
			<?php echo $thepost1->post_excerpt;?>
			<a href="<?php echo get_permalink(212); ?>" class="readmoretext">...Read More.</a>
		</div>
	</div>

	<a href="<?php echo get_permalink(159); ?>"><div id="ssblogpost2">
		<?php 
			echo get_the_post_thumbnail( 159, 'rect-thumb');
		?>
		<div id="ssblogpost2title">
			<?php
				$thepost2=get_post(159);
				echo $thepost2->post_title;
			?>
		</div></a>
		<div id="ssblogpost2content">
			<?php echo $thepost2->post_excerpt;?>
			<a href="<?php echo get_permalink(159); ?>" class="readmoretext">...Read More.</a>
		</div>
	</div>

	<a href="<?php echo get_permalink(164); ?>"><div id="ssblogpost3">
		<?php 
			echo get_the_post_thumbnail( 164, 'rect-thumb');
		?>
		<div id="ssblogpost3title">
			<?php
				$thepost3=get_post(164);
				echo $thepost3->post_title;
			?>
		</div></a>
		<div id="ssblogpost3content">
			<?php echo $thepost3->post_excerpt;?>
			<a href="<?php echo get_permalink(164); ?>" class="readmoretext">...Read More.</a>
		</div>
	</div>

	<a href="<?php echo get_permalink(166); ?>"><div id="ssblogpost4">
		<?php 
			echo get_the_post_thumbnail( 166, 'rect-thumb');
		?>
		<div id="ssblogpost4title">
			<?php
				$thepost4=get_post(166);
				echo $thepost4->post_title;
			?>
		</div></a>
		<div id="ssblogpost4content">
			<?php echo $thepost4->post_excerpt;?>
			<a href="<?php echo get_permalink(166); ?>" class="readmoretext">...Read More.</a>
		</div>
	</div>

	<?php endwhile;?>
</div>
</div>
</div> <!-- ending of container -->
<?php get_footer()?>