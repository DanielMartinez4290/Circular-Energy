<?php 
/*
Template Name: Residential Solar
*/
get_header()

?>
<div id="rs-homepage">

<div id="rs-homepic">
</div>
		<div id="rs-picnav" class="sspicnavs">
			<ul>
				<li><a href="/solar-solutions">Solar Solutions</a></li> 
				<li><a href="#howsolarworks">How Solar Works</a></li>
  				<li><a href="#thecircularenergyprocess">Our Process</a></li>
  				<li><a href="#goingsolarhasneverbeenthisfunandeasy">Testimonials</a></li>
  				<li><a href="#rs-locations">Locations</a></li>
  				<li><a href="#solarfaq">FAQ</a></li>
			</ul>
		</div>
<div id="fourboxes">
	<div id="doesmyhomequalify">
		<a href="/residential-solar/does-my-home-qualify-for-solar"><div id="dmhqtit" class="fourboxesheaders">
			<div id="dmhqtitl1">
				DOES MY HOME 
			</div>
			<div id="dmhqtitl2">
				QUALIFY
			</div>
		</div></a>
		<div id="dmhqpicfourboxes">	
			<img src="../wp-content/themes/circular/images/homeinhand.gif" height="88" width="201">
		</div>
		<div id="dmhqtext">
			<div class="fourboxeshtext">Home Solar Solutions</div>
			<div class="fourboxesptext">Reel in high energy costs with a home solar panel installation from Circular Energy.</div>  
		</div>
		<div id="dmhqmoreinfo">
			<div id="dmhqmoreinfotext" class="fourboxesmoreinfotext">
				MORE INFO
			</div>
			<div id="dmhqmoreinfoarrow">
				>
			</div>
		</div>
	</div>
	<div id="isitaffordable">
		<a href="/residential-solar/cost-of-solar-power"><div id="iiatit" class="fourboxesheaders">
			<div id="iiatitl1">
				IS IT
			</div>
			<div id="iiatitl2">
				AFFORDABLE
			</div>
		</div></a>
		<div id="iiapic">	
			<img src="../wp-content/themes/circular/images/handdroppingmoney.gif" height="88" width="100%">
		</div>
		<div id="iiatext">
			<div class="fourboxeshtext">The Cost Of Going Solar</div>
			<div class="fourboxesptext">You need power. You can continue to buy it from the power company or you can create it yourself with home solar.</div>
		</div>
		<div id="iiamoreinfo">
			<div id="iiamoreinfotext" class="fourboxesmoreinfotext">
				MORE INFO
			</div>
			<div id="iiamoreinfoarrow">
				>
			</div>
		</div>
	</div>
	<div id="doiqualifyforincentives">
		<a href="/residential-solar/solar-rebates-and-incentives"><div id="diqfitit" class="fourboxesheaders">
			<div id="diqfititl1">
				WHAT INCENTIVES
			</div>
			<div id="diqfititl2">
				ARE AVAILABLE
			</div>
		</div></a>
		<div id="diqfipic">	
			<img src="../wp-content/themes/circular/images/yesno.gif" height="88" width="100%">
		</div>
		<div id="diqfitext">
			<div class="fourboxeshtext">Residential Solar Rebates</div>
			<div class="fourboxesptext">Find out about the solar rebates and incentives that are available to home owners in your area.</div>
		</div>
		<div id="diqfimoreinfo">
			<div id="diqfimoreinfotext" class="fourboxesmoreinfotext">
				MORE INFO
			</div>
			<div id="diqfimoreinfoarrow">
				>
			</div>
		</div>
	</div>
	<div id="rs-requestaquote">
		<div id="raqtit" class="fourboxesheaders">
			<div id="raqtitl1">
				REQUEST
			</div>
			<div id="raqtitl2">
				A QUOTE
			</div>
		</div>
		<div id="raqpic">	
			<img src="../wp-content/themes/circular/images/moneyexchange.gif" height="88" width="100%">
		</div>
		<div id="raqtext">
			<div class="fourboxeshtext">Free Solar Consultation</div>
			<div class="fourboxesptext">Learn more about what a solar investment looks like for your home.</div>
		</div>
		<div id="raqmoreinfo">
			<div id="raqmoreinfotext" class="fourboxesmoreinfotext">
				MORE INFO
			</div>
			<div id="raqmoreinfoarrow">
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
	var $jqrs = jQuery.noConflict();
 	$jqrs(function() {
            $jqrs( "#dialog-2" ).dialog({
               autoOpen: false, 
               buttons: {
                  SUBMIT: function() {
                  	$jqrs("#homepageform6").submit();
                  	$jqrs(this).dialog("close");
					alert("Thanks for submitting the form. A Circular Design Consultant will be following up with you.");
                  },
                  //X: function() {$fca(this).dialog("close");}
               },
               position: {
                  my: "center center",
                  at: "center center"
               }
            });

            $jqrs( "#raqtit" ).click(function() {
               $jqrs( "#dialog-2" ).dialog( "open" );
            });
            /*

            $fca( "#formxbox" ).click(function() {
            	$fca(this).dialog("close");
            });
		*/
         });

  </script>

<div id="howsolarworks">
	<div id="howsolarworkstitle">
		How Solar Works
	</div>
	<div id="howsolarworksvideo">		
			<iframe width="435" height="246" src="//www.youtube.com/embed/QSw6jw3YmDM" frameborder="0" allowfullscreen></iframe>
	</div>
	<div id="howsolarworkspic">
		<img src="../wp-content/themes/circular/images/howsolarworkspic.gif" height="246" width="435">
	</div>
	
</div>
	<div id="thecircularenergyprocess">
		<div id="thecircularenergyprocesstitle">
			The Circular Energy Process
		</div>
		<div id="thecircularenergyprocesspic">
			<img src="/wp-content/themes/circular/images/processtogosolar.gif" height="715" width="100%">
		</div>
	</div>
	<div id="goingsolarhasneverbeenthisfunandeasy">
		<div id="goingsolarhasneverbeenthisfunandeasytitle">
			Going Solar Has Never Been This Fun And Easy
		</div>
		<div id="testimonials">
			<div id="testimonial1">
				<div id="testimonial1pic">
					<img src="../wp-content/themes/circular/images/testimonialpic.gif" height="108" width="108">
				</div>
				"We chose Circular Energy because of their gentle approach, their professionalism, and conservative financial analysis."
				<br> - Leah B., Houston, Texas

			</div>
			<div id="testimonial2">
				<div id="testimonial2pic">
					<img src="../wp-content/themes/circular/images/testimonialpic.gif" height="108" width="108">
				</div>
				"After consulting with 10 Austin-area solar installers, I chose Circular Energy."
				<br>
				 -Rusty K., Austin Texas
			</div>
			<div id="testimonial3">
				<div id="testimonial3pic">
					<img src="../wp-content/themes/circular/images/testimonialpic.gif" height="108" width="108">
				</div>
				"I recommend Circular Energy to all my neighbors who are interested in getting solar systems.”
				<br>
				- Chris M., San Antonio Texas
			</div>
			<div id="testimonial4">
				<div id="testimonial4pic">
					<img src="../wp-content/themes/circular/images/testimonialpic.gif" height="108" width="108">
				</div>
				"I know when things feel right and with Circular Energy it all felt right." 
				<br>
				- John M, Austin Texas"
			</div>
		</div>
	</div>

<div id="rs-locations" class="navsectiontitle">
		Locations
	</div>

<div id="rs-locationspic">
		<div id="sliderFrame">
			<div id="rs-locationsnav">
				<div id="rs-locationsnavtext">
					<ul>
		  				<li><a href="/solar-installer-austin-texas">AUSTIN</a></li>
		  				<li><a href="solar-installer-dallas-texas/">DALLAS</a></li>
		  				<li><a href="/solar-installer-san-antonio-texas">SAN ANTONIO</a></li>
		  				<li><a href="/solar-installer-houston-texas/">HOUSTON</a></li>
		  				<li><a href="/solar-installer-louisiana">LOUISIANA</a></li>
					</ul>
				</div>
			</div>
        <div id="slider">
            <img src="../wp-content/themes/circular/images/austinmap.jpg" height="600" width="965">
            <img src="../wp-content/themes/circular/images/dallasmap.jpg" height="600" width="965">
            <img src="../wp-content/themes/circular/images/houstonmap.jpg" height="600" width="965">
            <img src="../wp-content/themes/circular/images/sanantoniomap.jpg" height="600" width="965">
            <img src="../wp-content/themes/circular/images/louisianamap.jpg" height="600" width="965">         
        </div>
     </div>
</div>





	<div id="solarfaqs">
		<div id="solarfaqstitle">
			Solar FAQs
		</div>
		<div id="solarfaqsnav">
			<ul>
				<span id="generalq"><li>GENERAL</li></span>
  				<span id="systemq"><li>SYSTEM</li></span>
  				<li>TECHNICAL</li>
  				<li>INSTALLATION / MAINTENANCE</li>
  				<li>FINANCIAL</li>
  				<li>CIRCULAR ENERGY</li>
			</ul>
		</div>
		<div id="solarfaqsquestions">
			<div id="generalquestions">
				<div id="issollarpowerrightformyhomequestion" class="solarfaqquestion">
					Is solar power right for my home?
				</div>
				<div id="issollarpowerrightformyhomeanswer" class="solarfaqanswer" >
					Generally, yes. However, when you’re considering installing solar, ask yourself the following 
					questions:<br>
					1. How much sun exposure does my roof get? More sunlight is better.<br>	
					2. Is there anything around my house that is shading my roof? Less shading is better.<br>
					3. Is my roof in good condition? Newer roofs will last longer and thus not have to be 
					<br>replaced as soon. Metal roofs last a lifetime.<br>
				</div>
				<div id="howmuchcansolaroffsetquestion"  class="solarfaqquestion">
					How much can solar offset?
				</div>
				<div id="howmuchcansolaroffsetanswer" class="solarfaqanswer">
					25%, 50%, 100% or more, it just depends on your electrical usage and your available roof space.
					Circular Energy solar design consultants will put together a solar array to produce as much energy as
					you would like it to. Many of our clients have solar systems in place that cover their entire energy usage
					each month leaving them with <span class="boldtext">no electricity bill.</span>
				</div>
				<div id="whyshouldiinvestinsolalrnowwhenpriceskeepdroppingquestion" class="solarfaqquestion">
					Why should I invest in solar now when prices keep dropping?
				</div>
				<div id="whyshouldiinvestinsolalrnowwhenpriceskeepdroppinganswer" class="solarfaqanswer">
					Solar panel prices have bottomed out. In fact, right now there is speculation that those prices will begin to increase again in the next few months.
				</div>
			</div>
			<div id="systemquestions">
				<div id="systemquestionsquestions">
					<div id="willineedtoadaptmyhomeorbusinesstorunonsolarpowerquestion" class="solarfaqquestion">
						Will I need to adapt my home or business to run on solar power?
					</div>
					<div id="shouldiwaitfornewsolartechnologyquestion" class="solarfaqquestion">
						Should I wait for new solar technology?
					</div>	
				</div>
				<div id="systemquestionsanswers">
					<div id="willineedtoadaptmyhomeorbusinesstorunonsolarpoweranswer" class="solarfaqanswer">
						No. The inverter installed with each system converts the solar 
						energy into usable AC power. All you need to do is sit back and 
						relax while your system does the work.
					</div>
					<div id="shouldiwaitfornewsolartechnologyanswer" class="solarfaqanswer">
						While it is true that solar technology will improve over time, you have more to lose by 
						waiting to install solar on your home or business. Just look at how much you've paid for 
						power over the past five years, and then estimate how much you will pay over the next five... 
						It quickly adds up! The longer you wait to go solar the more money you throw aay on power bills 
						each month.
					</div>
				</div>
			</div>
		</div>
		<div id="solarfaqspic">
			<img src="../wp-content/themes/circular/images/solarfaqspic.gif" height="142" width="306">
		</div>
</div>
<script>
	var $rs = jQuery.noConflict();

	$rs(document).ready(function(){
		$rs("#issollarpowerrightformyhomeanswer").hide();
		$rs("#howmuchcansolaroffsetanswer").hide();
		$rs("#whyshouldiinvestinsolalrnowwhenpriceskeepdroppinganswer").hide();
		$rs("#systemquestions").hide();

		$rs("#issollarpowerrightformyhomequestion").click(function(){
	    	$rs("#issollarpowerrightformyhomeanswer").show();
	    	$rs("#howmuchcansolaroffsetquestion").hide();
	    	$rs("#whyshouldiinvestinsolalrnowwhenpriceskeepdroppingquestion").hide();
	    	$rs("#").hide();
	   	});
	    $rs("#howmuchcansolaroffsetquestion").click(function(){
	    	//$rs("#howmuchcansolaroffsetquestion").css("top","0px");
	    	$rs("#howmuchcansolaroffsetanswer").show();
	    	$rs("#issollarpowerrightformyhomequestion").hide();
	    	$rs("#whyshouldiinvestinsolalrnowwhenpriceskeepdroppingquestion").hide();
	    	
	    	$rs("#").hide();
	   	});
	   	$rs("#whyshouldiinvestinsolalrnowwhenpriceskeepdroppingquestion").click(function(){
	    	$rs("#issollarpowerrightformyhomequestion").hide();
	    	$rs("#howmuchcansolaroffsetquestion").hide();
	    	$rs("#whyshouldiinvestinsolalrnowwhenpriceskeepdroppinganswer").show();
	    	$rs("#").hide();
	   	});
	   $rs("#generalq").click(function(){
	   	$rs("#generalquestions").show();
	   	$rs("#systemquestions").hide();
	    $rs("#issollarpowerrightformyhomeanswer").hide();
	    $rs("#howmuchcansolaroffsetquestion").show();
	    $rs("#issollarpowerrightformyhomequestion").show();
	    $rs("#howmuchcansolaroffsetanswer").hide();
	    $rs("#whyshouldiinvestinsolalrnowwhenpriceskeepdroppingquestion").show();
	    $rs("#whyshouldiinvestinsolalrnowwhenpriceskeepdroppinganswer").hide();
	   });

	   $rs("#systemq").click(function(){
	   	$rs("#generalquestions").hide();
	   	$rs("#systemquestions").show();
	   	$rs("#systemquestionsquestions").show();
	   	$rs("#systemquestionsanswers").hide();	
	   });

	   $rs("#willineedtoadaptmyhomeorbusinesstorunonsolarpowerquestion").click(function(){
	   	$rs("#systemquestionsanswers").show();
	   	$rs("#willineedtoadaptmyhomeorbusinesstorunonsolarpoweranswer").show();
	   	$rs("#shouldiwaitfornewsolartechnologyquestion").hide();
	   	$rs("#shouldiwaitfornewsolartechnologyanswer").hide();	
	   });

	});
</script>
</div> <!-- ending of container -->
<?php get_footer()?>