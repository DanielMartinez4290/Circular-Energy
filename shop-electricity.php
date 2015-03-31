<?php 
/*
Template Name: Shop Electricity
*/
get_header()

?>

<!--
<div id="homepic">
</div>
-->
<div id="homepage">

<div id="homepic">
</div>
	
		<div id="picnav">
			<?php wp_nav_menu( array( 'theme_location' => 'pic-menu' ) ); ?>
		</div>

<div id="fourboxes">
	<div id="shopelectricityplans">
		<a href="/shop"><div id="septit">
			<div id="septitl1">
				Residential
			</div>
			<div id="septitl2">
				Plans
			</div>
		</div></a>
		<div id="seppic">	
			<img src="wp-content/themes/circular/images/lightbulb.jpg" height="80" width="201">
		</div>
		<div id="septext">
			<h3>Title 1</h3>
			ipsum dolor. lorem ipsum lorem ipsum lorem ipsum lorem ipsum.  
		</div>
		<div id="sepmoreinfo">
			<div id="sepmoreinfotext">
				MORE INFO
			</div>
			<div id="sepmoreinfoarrow">
				>
			</div>
		</div>
	</div>
	<div id="solarsolutions">
		<div id="sstit">
			<div id="sstitl1">
				Commercial
			</div>
			<div id="sstitl2">
				Plans
			</div>
		</div>
		<div id="sspic">	
			<img src="wp-content/themes/circular/images/panels.jpg" height="80" width="100%">
		</div>
		<div id="sstext">
			<h3>Title 2</h3>
			ipsum dolor. lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
		</div>
		<div id="ssmoreinfo">
			<div id="ssmoreinfotext">
				MORE INFO
			</div>
			<div id="ssmoreinfoarrow">
				>
			</div>
		</div>
	</div>
	<div id="homeautomation">
		<div id="hatit">
			<div id="hatitl1">
				HOME
			</div>
			<div id="hatitl2">
				AUTOMATION
			</div>
		</div>
		<div id="hapic">	
			<img src="wp-content/themes/circular/images/panels.jpg" height="80" width="100%">
		</div>
		<div id="hatext">
			<h3>Title 3</h3>
			ipsum dolor. lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
		</div>
		<div id="hamoreinfo">
			<div id="hamoreinfotext">
				MORE INFO
			</div>
			<div id="hamoreinfoarrow">
				>
			</div>
		</div>
	</div>
	<div id="livesupport">
		<div id="lstit">
			<div id="lstitl1">
				LIVE
			</div>
			<div id="lstitl2">
				SUPPORT
			</div>
		</div>
		<div id="lspic">	
			<img src="wp-content/themes/circular/images/vectorcircuit.jpg" height="80" width="100%">
		</div>
		<div id="lstext">
			<h3>Title 4</h3>
			ipsum dolor. lorem ipsum lorem ipsum lorem ipsum lorem ipsum.
		</div>
		<div id="lsmoreinfo">
			<div id="lsmoreinfotext">
				MORE INFO
			</div>
			<div id="lsmoreinfoarrow">
				>
			</div>
		</div>
	</div>
</div> <!-- end four boxes -->
</div>


<?php get_footer()?>