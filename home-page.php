<?php 
/*
Template Name: Home Page
*/
get_header()

?>
<div id="homepage">

<div id="homepic">
</div>
		<div id="picnav">
			<ul>
  				<li><a href="#circlivemid">Sustainability</a></li>
  				<li><a href="#innovatinganddeliveringsection">Innovation</a></li>
  				<li><a href="#ourclientshaveanopinionsection">Clients</a></li>
  				<li><a href="#workingwiththecoummunitysection">Community</a></li>
  				<li><a href="#getconnected">Connect</a></li>
			</ul>
		</div>
<div id="fourboxes">
	<a href="http://www.propowerproviders.com/" target="_blank"><div id="shopelectricityplans">
		<div id="septit" class="fourboxesheaders">
			<div id="septitl1">
				ELECTRICITY
			</div>
			<div id="septitl2">
				PLANS
			</div>
		</div>
		<div id="seppic">	
			<img src="wp-content/themes/circular/images/lightbulb.gif" height="88" width="201">
		</div>
		<div id="septext">
			<div class="fourboxeshtext">Pro Power Provider</div>
			<div class="fourboxesptext">Retail Electricity Solutions give you the ability to shop for power at the best possible rates.</div> 
		</div>
		<div id="sepmoreinfo">
			<div id="sepmoreinfotext" class="fourboxesmoreinfotext">
				MORE INFO
			</div>
			<div id="sepmoreinfoarrow">
				>
			</div>
		</div>
	</div></a>
	<a href="/solar-solutions"><div id="solarsolutions">
		<div id="sstit" class="fourboxesheaders">
			<div id="sstitl1">
				SOLAR
			</div>
			<div id="sstitl2">
				SOLUTIONS
			</div>
		</div>
		<div id="sspic">	
			<img src="wp-content/themes/circular/images/panels.gif" height="88" width="100%">
		</div>
		<div id="sstext">
			<div class="fourboxeshtext">Power From The Sun</div>
			<div class="fourboxesptext">Solar Energy and Solar Panels enable you to produce your own power and become energy independent.</div>
		</div>
		<div id="ssmoreinfo">
			<div id="ssmoreinfotext" class="fourboxesmoreinfotext">
				MORE INFO
			</div>
			<div id="ssmoreinfoarrow">
				>
			</div>
		</div>
	</div></a>
	<a href="http://energycurb.com/" target="_blank"><div id="homeautomation">
		<div id="hatit" class="fourboxesheaders">
			<div id="hatitl1">
				ENERGY 
			</div>
			<div id="hatitl2">
				MONITORING
			</div>
		</div>
		<div id="hapic">	
			<img src="wp-content/themes/circular/images/intelligent.gif" height="88" width="100%">
		</div>
		<div id="hatext">
			<div class="fourboxeshtext">Curb Energy Management</div>
			<div class="fourboxesptext">Intelligent Energy Software allows you to keep tabs on where your power is going and control your energy usage.</div>
		</div>
		<div id="hamoreinfo">
			<div id="hamoreinfotext" class="fourboxesmoreinfotext">
				MORE INFO
			</div>
			<div id="hamoreinfoarrow">
				>
			</div>
		</div>
	</div></a>
	<div id="livesupport">
		<div id="lstit" class="fourboxesheaders">
			<div id="lstitl1">
				REQUEST
			</div>
			<div id="lstitl2">
				INFORMATION
			</div>
		</div>
		<div id="lspic">	
			<img src="wp-content/themes/circular/images/vectorcircuit.gif" height="88" width="100%">
		</div>
		<div id="lstext">
			<div class="fourboxeshtext">Contact Circular Energy</div>
			<div class="fourboxesptext">Reach out to us and let us know how we can help you save money through our robust network of power solutions.</div>
		</div>
		<div id="lsmoreinfo">
			<div id="lsmoreinfotext" class="fourboxesmoreinfotext">
				MORE INFO
			</div>
			<div id="lsmoreinfoarrow">
				>
			</div>
		</div>
	</div>
</div> <!-- end four boxes -->


 <?php 

 //wp_mail( 'danielm@circularenergy.com', 'The subject', 'The message' ); 

 ?>

	<div id="dialog-2">
		<?php dynamic_sidebar('contact-form-sidebar');?>
	</div>

<script>
	
	var $fcaq = jQuery.noConflict();
    $fcaq("#dialog-2").dialog({autoOpen:false});

	var $fca = jQuery.noConflict();
$fca("#livesupport").click(function() {
	
    var target = $fca(this);
	$fca( "#dialog-2" ).dialog( "open" ).position({
       my: 'left', //Moves to left
       at: 'left', //
       of: target
    });
    /*
    $fca("#dialog-2").position({
       my: 'center top', //Moves to left
       at: 'center', //
       of: target
    });
*/
});

	
	


	/*
 	$fca(function() {
            $fca( "#dialog-2" ).dialog({
               autoOpen: false, 
               buttons: {
                  SUBMIT: function() {
                  	$fca("#homepageform6").submit();
                  	$fca(this).dialog("close");
					alert("Thanks for submitting the form. A Circular Design Consultant will be following up with you.");
               }},
               position: ['middle',20]
            });

            $fca( "#livesupport" ).click(function() {
               $fca( "#dialog-2" ).dialog( "open" );
            });
         });

		var $hp = jQuery.noConflict();
		$hp(document).ready(function(){
    	if (location.href.indexOf("#wpcf7-f6196-o1") != -1) {
    		alert('Please fill out all of the required fields');
        	// Your code in here accessing the string like this
        	// location.href.substr(location.href.indexOf("#"))
    		}});

*/
  </script>

<div id="circlivemid">
	Sustainability Report
</div>

<div id="homebox">
	<img src="wp-content/themes/circular/images/homebox.jpg" height="318" width="965">

<span id="dollarcounterdollar">$</span>
<span id="dollarcounternum1" class="dollarcounternum">1</span>
<span id="dollarcountercomma">,</span>
<span id="dollarcounternum2" class="dollarcounternum">6</span>
<span id="dollarcounternum3" class="dollarcounternum">1</span>
<span id="dollarcounternum4" class="dollarcounternum">7</span>
<span id="dollarcountercomma2">,</span>
<span id="dollarcounternum5" class="dollarcounternum">5</span>
<span id="dollarcounternum6" class="dollarcounternum">0</span>
<span id="dollarcounternum7" class="dollarcounternum">4</span>
<span id="dollarcounterperiod">.</span>
<span id="dollarcounternum8" class="dollarcounternum">8</span>
<span id="dollarcounternum9" class="dollarcounternum">0</span>

<span id="emissionreductioncounternum1" class="emissionreductioncounternum">2</span>
<span id="emissionreductioncounternum2" class="emissionreductioncounternum">4</span>
<span id="emissionreductioncountercomma">,</span>
<span id="emissionreductioncounternum3" class="emissionreductioncounternum">0</span>
<span id="emissionreductioncounternum4" class="emissionreductioncounternum">8</span>
<span id="emissionreductioncounternum5" class="emissionreductioncounternum">2</span>
<span id="emissionreductioncountercomma2">,</span>
<span id="emissionreductioncounternum6" class="emissionreductioncounternum">9</span>
<span id="emissionreductioncounternum7" class="emissionreductioncounternum">4</span>
<span id="emissionreductioncounternum8" class="emissionreductioncounternum">6</span>
<span id="emissionreductioncounterperiod">.</span>
<span id="emissionreductioncounternum9" class="emissionreductioncounternum">6</span>
<span id="emissionreductioncounternum10" class="emissionreductioncounternum">6</span>
<div></div>
<span id="coalcounternum1" class="coalcounternum">1</span>
<span id="coalcounternum2" class="coalcounternum">3</span>
<span id="coalcountercomma">,</span>
<span id="coalcounternum3" class="coalcounternum">3</span>
<span id="coalcounternum4" class="coalcounternum">1</span>
<span id="coalcounternum5" class="coalcounternum">1</span>
<span id="coalcountercomma2">,</span>
<span id="coalcounternum6" class="coalcounternum">2</span>
<span id="coalcounternum7" class="coalcounternum">7</span>
<span id="coalcounternum8" class="coalcounternum">8</span>
<span id="coalcounterperiod">.</span>
<span id="coalcounternum9" class="coalcounternum">0</span>
<span id="coalcounternum10" class="coalcounternum">0</span>

<span id="cleancounternum1" class="cleancounternum">1</span>
<span id="cleancounternum2" class="cleancounternum">7</span>
<span id="cleancountercomma">,</span>
<span id="cleancounternum3" class="cleancounternum">3</span>
<span id="cleancounternum4" class="cleancounternum">1</span>
<span id="cleancounternum5" class="cleancounternum">1</span>
<span id="cleancountercomma2">,</span>
<span id="cleancounternum6" class="cleancounternum">2</span>
<span id="cleancounternum7" class="cleancounternum">7</span>
<span id="cleancounternum8" class="cleancounternum">8</span>
<span id="cleancounterperiod">.</span>
<span id="cleancounternum9" class="cleancounternum">1</span>
<span id="cleancounternum10" class="cleancounternum">2</span>


<!--
<script type="text/javascript">

	var $fcdollar = jQuery.noConflict();
	//var clock = $fc('.clock').FlipClock(5800);
	var clockdollarcounter = $fcdollar('.dollarcounter').FlipClock(161750480, {
		clockFace: 'Counter'
	});
	setTimeout(function() {
		setInterval(function() {
			clockdollarcounter.increment();
		}, 3000);
	});
	var $fcemission = jQuery.noConflict();
	var clockemissionreductioncounter = $fcemission('.emissionreductioncounter').FlipClock(2408294666, {
		clockFace: 'Counter'
	});
	setTimeout(function() {
		setInterval(function() {
			clockemissionreductioncounter.increment();
		}, 30);
	});
	var $fccoal = jQuery.noConflict();
	var clockcoalcounter = $fcemission('.coalcounter').FlipClock(1331127800, {
		clockFace: 'Counter'
	});
	setTimeout(function() {
		setInterval(function() {
			clockcoalcounter.increment();
		}, 300);
	});

	var $fcclean = jQuery.noConflict();
	var clockcleancounter = $fcclean('.cleancounter').FlipClock(1731127812, {
		clockFace: 'Counter'
	});
	setTimeout(function() {
		setInterval(function() {
			clockcleancounter.increment();
		}, 3);
	});
</script>
-->
<div id="asofsection">
Sustainability Report as of January 2015
</div>
</div>

<div id="innovatinganddeliveringsection">
	<div id="innovatinganddelivering" class="navsectiontitle">
	Delivering The Next Generation Of Electricity Solutions
	</div>
	<div id="homegreenbox">	
		<img src="wp-content/themes/circular/images/greenbox.jpg" height="235" width="393">
	</div>
	<div id="innovationtitle">
		Innovation
	</div>
	<div id="homegreenboxtext">
		Circular Energy embodies a <span class="boldtext">truly unique opportunity</span> 
		for power consumers. We are a single company who provides an innovative, comprehensive 
		energy offering including retail electricity (in deregulated markets), solar power 
		solutions, in-house financing, and energy monitoring.
	</div>
</div>
<div id="ourclientshaveanopinionsection">
	<div id="ourclientshaveanopinion">
		In Our Clients' Words
	</div>
<div id="homepagetestimonialsbox">
	<ul id="lightSlider">
  <li id="homefirsttest">
      <div class="hometesttext">"Circular Energy's turnkey solar solution is providing huge savings."</div>
      <div class="hometestperson">-President, BAE Systems</div>
  </li>
  <li>
      <div class="hometesttext">"Our rooftop solar panels decreased our monthly energy costs by 30%."</div>
      <div class="hometestperson">- Vice President, Hilton</div>
  </li>
  <li>
      <div class="hometesttext">"The process with seamless. Circular Energy is a great company."</div>
      <div class="hometestperson">-COO, Pearson</div>
  </li>
  <li>
      <div class="hometesttext">"In the first year we saved over $6,000 dollars with solar."</div>
      <div class="hometestperson">-President, Abercorn International</div>
  </li>
  <li>
      <div class="hometesttext">"Our customers love hearing that we are a solar powered business."</div>
      <div class="hometestperson">-Marketing Director, Presidium Group</div>
  </li>
  <li>
      <div class="hometesttext">"Circular Energy did a great job from start to finish."</div>
      <div class="hometestperson">-Owner, ThunderCloud Subs</div>
  </li>
  
</ul>
<div id="homepagetestimonialspic">
	<img src="wp-content/themes/circular/images/homepagetestimonialspic.gif" height="55" width="93">
</div>
	</div>

<script type="text/javascript">
	var $lights = jQuery.noConflict();
  	$lights(document).ready(function() {
    $lights("#lightSlider").lightSlider({
        item: 1,
        autoWidth: false,
        slideMove: 1, // slidemove will be 1 if loop is true
        slideMargin: 10,
 
        addClass: '',
        mode: "slide",
        useCSS: true,
        cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
        easing: 'linear', //'for jquery animation',////
 
        speed: 400, //ms'
        auto: true,
        loop: true,
        slideEndAnimatoin: true,
        pause: 3000,
 
        keyPress: false,
        controls: true,
        prevHtml: '',
        nextHtml: '',
 
        rtl:false,
        adaptiveHeight:false,
 
        vertical:false,
        verticalHeight:500,
        vThumbWidth:100,
 
        thumbItem:10,
        pager: true,
        gallery: false,
        galleryMargin: 5,
        thumbMargin: 5,
        currentPagerPosition: 'middle',
 
        enableTouch:true,
        enableDrag:true,
        freeMove:true,
        swipeThreshold: 40,
 
        responsive : [],
 
        onBeforeStart: function (el) {},
        onSliderLoad: function (el) {},
        onBeforeSlide: function (el) {},
        onAfterSlide: function (el) {},
        onBeforeNextSlide: function (el) {},
        onBeforePrevSlide: function (el) {}
    });
});
</script>


</div>
<div id="workingwiththecoummunitysection">
<div id="workingwiththecommunitytitle" class="navsectiontitle">
	Working With The Community
</div>
<div id="homeblog">
	<?php while(have_posts()): the_post()?>
	<a href="<?php echo get_permalink(176); ?>"><div id="homeblogpost1">
		<?php 
			echo get_the_post_thumbnail( 176, 'rect-thumb');
		?>
		<div id="homeblogpost1title">
			<?php
				$thepost1=get_post(176);
				echo $thepost1->post_title;
			?>
		</div><a/>
		<div id="homeblogpost1content">
			<?php
				echo $thepost1->post_excerpt;
			?>
			<a href="<?php echo get_permalink(176); ?>" class="readmoretext">...Read More.</a>
		</div>
	</div>
	<a href="<?php echo get_permalink(177); ?>"><div id="homeblogpost2">
		<?php echo get_the_post_thumbnail( 177, 'rect-thumb');?>
		<div id="homeblogpost2title">
			<?php
				$thepost2=get_post(177);
				echo $thepost2->post_title;
			?>
		</div></a>
		<div id="homeblogpost2content">
			<?php echo $thepost2->post_excerpt;?>
			<a href="<?php echo get_permalink(177); ?>" class="readmoretext">...Read More.</a>
		</div>
	</div>
	
	<a href="<?php echo get_permalink(178); ?>"><div id="homeblogpost3">
		<?php echo get_the_post_thumbnail( 178, 'rect-thumb');?>
		<div id="homeblogpost3title">
			<?php
				$thepost3=get_post(178);
				echo $thepost3->post_title;
			?>
		</div><a>
		<div id="homeblogpost3content">
			<?php 
			echo $thepost3->post_excerpt;
			?>
			<a href="<?php echo get_permalink(178); ?>" class="readmoretext">...Read More.</a>
		</div>
	</div>

	<?php endwhile;?>
</div>
<div id="handsinpicture">
	<img src="wp-content/themes/circular/images/handsinpicture.gif" height="326" width="353">
</div>
</div>
<div id="staytunedsection">
<div id="staytuned">
Network With Us
</div>
<div id="getconnected">
	
	<a href="https://www.youtube.com/channel/UCMiMvM4ULXsXRh_Std03_lQ/" target="_blank"><div id="youtubeactive">
	</div></a>
	<a href="mailto:info@circularenergy.com" target="_blank"><div id="mailactive">
	</div></a>
	<a href="http://www.facebook.com/circularenergy" target="_blank"><div id="facebookactive">
	</div></a>
	<a href="http://www.twitter.com/circularenergy" target="_blank"><div id="twitteractive">
	</div></a>
	<a href="https://www.linkedin.com/company/circular-energy" target="_blank"><div id="linkedinactive">
	</div></a>
	<a href="https://plus.google.com/+Circularenergy/" target="_blank"><div id="googleplusactive">
	</div></a>
	<a href="/blog" target="_blank"><div id="blogactive">
	</div></a>
	<div id="getconnectedmain" class="getconnectedbackgrounds">		
	</div>
	<div id="getconnectedyoutubeactive" class="getconnectedbackgrounds">
	</div>
	<div id="getconnectedmailactive" class="getconnectedbackgrounds">
	</div>
	<div id="getconnectedfacebookactive" class="getconnectedbackgrounds">
	</div>
	<div id="getconnectedtwitteractive"class="getconnectedbackgrounds">
	</div>
	<div id="getconnectedlinkedinactive"class="getconnectedbackgrounds">
	</div>
	<div id="getconnectedgoogleplusactive"class="getconnectedbackgrounds">
	</div>
	<div id="getconnectedblogactive"class="getconnectedbackgrounds">
	</div>
	<div id="getconnectedsubscribe">
	</div>
<script>
var $getc = jQuery.noConflict();
$getc("#getconnectedtwitteractive").hide();
$getc("#getconnectedmailactive").hide();
$getc("#getconnectedyoutubeactive").hide();
$getc("#getconnectedfacebookactive").hide();
$getc("#getconnectedtwitteractive").hide();
$getc("#getconnectedlinkedinactive").hide();
$getc("#getconnectedgoogleplusactive").hide();
$getc("#getconnectedblogactive").hide();

$getc(document).ready(function(){
   
	$getc("#youtubeactive").hover(function(){
    $getc("#getconnectedyoutubeactive").show();
    $getc("#getconnectedmailactive").hide();
    $getc("#getconnectedtwitteractive").hide();
    $getc("#getconnectedfacebookactive").hide();
	$getc("#getconnectedtwitteractive").hide();
	$getc("#getconnectedlinkedinactive").hide();
	$getc("#getconnectedgoogleplusactive").hide();
	$getc("#getconnectedblogactive").hide();
    $getc("#getconnectedmain").hide();
   });

    $getc("#mailactive").hover(function(){
    $getc("#getconnectedyoutubeactive").hide();
    $getc("#getconnectedmailactive").show();
    $getc("#getconnectedtwitteractive").hide();
    $getc("#getconnectedfacebookactive").hide();
	$getc("#getconnectedtwitteractive").hide();
	$getc("#getconnectedlinkedinactive").hide();
	$getc("#getconnectedgoogleplusactive").hide();
	$getc("#getconnectedblogactive").hide();
    $getc("#getconnectedmain").hide();
   });

    $getc("#facebookactive").hover(function(){
    $getc("#getconnectedyoutubeactive").hide();
    $getc("#getconnectedmailactive").hide();
    $getc("#getconnectedtwitteractive").hide();
    $getc("#getconnectedfacebookactive").show();
	$getc("#getconnectedtwitteractive").hide();
	$getc("#getconnectedlinkedinactive").hide();
	$getc("#getconnectedgoogleplusactive").hide();
	$getc("#getconnectedblogactive").hide();
    $getc("#getconnectedmain").hide();
   });

    $getc("#twitteractive").hover(function(){
    $getc("#getconnectedyoutubeactive").hide();
    $getc("#getconnectedmailactive").hide();
    $getc("#getconnectedtwitteractive").hide();
    $getc("#getconnectedfacebookactive").hide();
	$getc("#getconnectedtwitteractive").show();
	$getc("#getconnectedlinkedinactive").hide();
	$getc("#getconnectedgoogleplusactive").hide();
	$getc("#getconnectedblogactive").hide();
    $getc("#getconnectedmain").hide();
   });

    $getc("#linkedinactive").hover(function(){
    $getc("#getconnectedyoutubeactive").hide();
    $getc("#getconnectedmailactive").hide();
    $getc("#getconnectedtwitteractive").hide();
    $getc("#getconnectedfacebookactive").hide();
	$getc("#getconnectedtwitteractive").hide();
	$getc("#getconnectedlinkedinactive").show();
	$getc("#getconnectedgoogleplusactive").hide();
	$getc("#getconnectedblogactive").hide();
    $getc("#getconnectedmain").hide();
   });

    $getc("#googleplusactive").hover(function(){
    $getc("#getconnectedyoutubeactive").hide();
    $getc("#getconnectedmailactive").hide();
    $getc("#getconnectedtwitteractive").hide();
    $getc("#getconnectedfacebookactive").hide();
	$getc("#getconnectedtwitteractive").hide();
	$getc("#getconnectedlinkedinactive").hide();
	$getc("#getconnectedgoogleplusactive").show();
	$getc("#getconnectedblogactive").hide();
    $getc("#getconnectedmain").hide();
   });

    $getc("#blogactive").hover(function(){
    $getc("#getconnectedyoutubeactive").hide();
    $getc("#getconnectedmailactive").hide();
    $getc("#getconnectedtwitteractive").hide();
    $getc("#getconnectedfacebookactive").hide();
	$getc("#getconnectedtwitteractive").hide();
	$getc("#getconnectedlinkedinactive").hide();
	$getc("#getconnectedgoogleplusactive").hide();
	$getc("#getconnectedblogactive").show();
    $getc("#getconnectedmain").hide();
   });
    

});



</script>
</div>
<br>
<br>
</div>
</div>
<?php get_footer()?>