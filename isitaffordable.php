<?php 
/*
Template Name: IIA Page
*/
get_header()

?>
<div id="iiapage">

	<div id="iiamainpic">
	</div>
		<div id="picnav" class="picnavgreen">
			<ul>
				<li><a href="/residential-solar">Home Solar</a></li>
  				<li><a href="/does-my-home-qualify-for-solar">Qualifying Homes</a></li>
  				<li><a href="/solar-rebates-and-incentives">Incentives</a></li>
  				<li><a href="#iia-circularenergysolarfinancingtitle">Financing</a></li>
			</ul>
		</div>
	<div id="iiasinglebox" class="secondbox"><div id="iiasingleboxtit" class="fourboxesheaders">
			<div id="iiasingleboxtitl1">
				IS IT AFFORDABLE?
			</div>
		</div>
	</div>

		<?php while(have_posts()): the_post()?>
		<?php the_content();?>
		<?php endwhile;?>
		
	
</div> <!-- ending of container -->
<?php get_footer()?>