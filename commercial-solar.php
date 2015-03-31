<?php 
/*
Template Name: Commercial Solar
*/
get_header()

?>
<div id="commercialsolar-homepage">

<div id="commercialsolar-homepic">
</div>
		<div id="cs-picnav" class="sspicnavs">
			<ul>
				<li><a href="/solar-solutions">Solar Solutions</a></li>
  				<li><a href="#cs-ourprojects">Experience</a></li>
  				<li><a href="#cs-thecirculardifference">The Difference</a></li>
  				<li><a href="#cs-goingsolar">Testimonials</a></li>
			</ul>
		</div>
<div id="fourboxes">
	<div id="thebusinesscasefourbox">
		<a href="/commercial-solar/the-business-case"><div id="tbctit" class="fourboxesheaders">
			<div id="tbctitl1">
				BUSINESS
			</div>
			<div id="tbctitl2">
				CASE
			</div>
		</div></a>
		<div id="tbcpicfourboxes">	
			<img src="../wp-content/themes/circular/images/paperseverywhere.gif" height="88" width="201">
		</div>
		<div id="tbctext">
			<div class="fourboxeshtext">Solar Solutions That Pay</div>
			<div class="fourboxesptext">Reel in high energy costs with a home solar panel installation from Circular Energy.</div>  
		</div>
		<div id="tbcmoreinfo">
			<div id="tbcmoreinfotext" class="fourboxesmoreinfotext">
				MORE INFO
			</div>
			<div id="tbcmoreinfoarrow">
				>
			</div>
		</div>
	</div>
	<div id="theturnkeyprocessfourbox">
		<a href="/commercial-solar/the-turn-key-process"><div id="ttkptit" class="fourboxesheaders">
			<div id="ttkptitl1">
				TURN-KEY
			</div>
			<div id="ttkptitl2">
				PROCESS
			</div>
		</div></a>
		<div id="ttkppic">	
			<img src="../wp-content/themes/circular/images/maninstallingsolar.gif" height="88" width="100%">
		</div>
		<div id="ttkptext">
			<div class="fourboxeshtext">Commercial Solar Easy</div>
			<div class="fourboxesptext">Circular Energy's team handles all facets of your solar solution so you can
			focus on running your business.</div>
		</div>
		<div id="ttkpmoreinfo">
			<div id="ttkpmoreinfotext" class="fourboxesmoreinfotext">
				MORE INFO
			</div>
			<div id="ttkpmoreinfoarrow">
				>
			</div>
		</div>
	</div>
	<div id="thelifetimewarrantyfourbox">
		<a href="/commercial-solar/comprehensive-energy-solution"><div id="tlwtit" class="fourboxesheaders">
			<div id="tlwtitl1">
				COMPREHENSIVE
			</div>
			<div id="tlwtitl2">
				ENERGY SOLUTION
			</div>
		</div></a>
		<div id="tlwpic">	
			<img src="../wp-content/themes/circular/images/bg_pic1.jpg" height="88" width="100%">
		</div>
		<div id="tlwtext">
			<div class="fourboxeshtext">More Than Just Solar</div>
			<div class="fourboxesptext">Circular Energy's commercial offering also includes other services to substantially decrease energy costs.</div>
		</div>
		<div id="tlwmoreinfo">
			<div id="tlwmoreinfotext" class="fourboxesmoreinfotext">
				MORE INFO
			</div>
			<div id="tlwmoreinfoarrow">
				>
			</div>
		</div>
	</div>
	<div id="contactusnowfourbox">
		<div id="cuntit" class="fourboxesheaders">
			<div id="cuntitl1">
				CONTACT US
			</div>
			<div id="cuntitl2">
				NOW
			</div>
		</div>
		<div id="cunpic">	
			<img src="../wp-content/themes/circular/images/handtyping.gif" height="88" width="100%">
		</div>
		<div id="cuntext">
			<div class="fourboxeshtext">Request Solar Consultation</div>
			<div class="fourboxesptext">Reach out to Circular Energy and find out how much money your organization can save with solar panel installation.</div>
		</div>
		<div id="cunmoreinfo">
			<div id="cunmoreinfotext" class="fourboxesmoreinfotext">
				MORE INFO
			</div>
			<div id="cunmoreinfoarrow">
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
	var $jqcs = jQuery.noConflict();
 	$jqcs(function() {
            $jqcs( "#dialog-2" ).dialog({
               autoOpen: false, 
               buttons: {
                  SUBMIT: function() {
                  	$jqcs("#homepageform6").submit();
                  	$jqcs(this).dialog("close");
					alert("Thanks for submitting the form. A Circular Design Consultant will be following up with you.");
                  },
                  //X: function() {$fca(this).dialog("close");}
               },
               position: {
                  my: "center center",
                  at: "center center"
               }
            });

            $jqcs( "#cuntit" ).click(function() {
               $jqcs( "#dialog-2" ).dialog( "open" );
            });
            /*

            $fca( "#formxbox" ).click(function() {
            	$fca(this).dialog("close");
            });
		*/
         });

  </script>




<div id="cs-ourprojects">
	<div id="cs-ourprojectstitle" class="navsectiontitle" >
		Our Projects
	</div>
	<div id="cs-ourprojectspic" class="centertext">
		<img src="../wp-content/themes/circular/images/cs-ourprojectspic.gif" height="253" width="633">
	</div>
	<div id="commercialsolarourproj">
		<img src="../wp-content/themes/circular/images/commercialsolarourproj.gif" height="129" width="965">
	</div>

</div>
	<div id="cs-thecirculardifference">
		<div id="cs-thecirculardifferencetitle" class="navsectiontitle">
			The Circular Difference
		</div>
		<div id="cs-thecirculardifferencetext">
			We know our business is only as strong as the results delivered from the promises that we make. When we deliver a 
			solar solution proposal for your organization, we stand behind our performance projections.
			<br><br>
			The Circular Energy Advantage is receiving results that exceed expectations. Each and every of our commercial 
			solar clients enjoys their experience and benefits from higher-performing solar investments than promised. 
			<span class="boldtext">Over 100% system performance 100% of the time - That's the Circular Energy Advantage.</span>
		</div>
	</div>
	<div id="cs-goingsolar">
		<div id="cs-goingsolartext" class="navsectiontitle">
			Going Solar Has Never Been This Fun And Easy!
		</div>
		<div id="cs-goingsolarvideo">
			<iframe width="435" height="244" src="//www.youtube.com/embed/57ATtg1-OvQ" frameborder="0" allowfullscreen></iframe>
		</div>
		<div id="cs-goingsolartestimonials">
			<div id="cs-goingsolartestimonialstitle">
				Testimonials
			</div>
			<div id="cs-goingsolartest1">
				<img src="../wp-content/themes/circular/images/managerpic.gif" height="107" width="107">
				<div id="cs-goingsolartest1text">
					"For me it was basically just a turnkey solar project, which is exactly what I wanted because we've 
					got ThunderClouds to run, not solar to put in."
					<br>
					 - Mike Haggerty, Owner, ThunderCloud Subs
				</div>
			</div>
			<div id="cs-goingsolartest2">
				<img src="../wp-content/themes/circular/images/managerpic.gif" height="107" width="107">
				<div id="cs-goingsolartest2text">
					"These guys just get it. A full year into it and my system is producing 25% more power than what we had expected.”
					<br>-Lynn Bennett, President, Streamline Technology Services
				</div>
			</div>
		</div>
		<div id="cs-goingsolargreenline">
			<div id="cs-goingsolargreenlinetext">
				Click on the video to see one of our commercial installs!
			</div>
		</div>

	</div>
</div>
<?php get_footer()?>