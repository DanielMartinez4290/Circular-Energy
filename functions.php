<?php

add_action('wpcf7_mail_sent', 'ip_wpcf7_mail_sent');
function ip_wpcf7_mail_sent($wpcf7)
{
	$on_sent_ok = $wpcf7->additional_setting('ip_on_sent_ok', false);

	if (is_array($on_sent_ok) && count($on_sent_ok) > 0)
	{
		wp_redirect(trim($on_sent_ok[0]));
		exit;
	}
}


function register_my_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'pic-menu' => __( 'Home Pic Menu' ),
      'shop-ce-footer-menu' => __( 'Shop CE Footer' ),
      'ce-advantage-footer-menu' => __( 'The CE Advantage Footer' ),
      'ss-pic-menu' => __( 'SS Pic Menu' ),
      'ss-locations-menu' => __( 'SS Locations Menu' ),
      'resisolar-pic-menu' => __( 'Residential Solar Pic Menu' ),
      'news-pic-menu' => __( 'News Pic Menu' ),
      'company-pic-menu' => __( 'Company Pic Menu' ),
      'dmhq-pic-menu' => __( 'DMHQ Pic Menu' ),
      'iia-pic-menu' => __( 'IIA Pic Menu' ),
      'diqfi-pic-menu' => __( 'DIQFI Pic Menu' ),
      'solarfaqs-menu' => __( 'Solar Faqs Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

register_sidebar(array(
'name' => __('Contact FormSidebar'),
'id' => 'contact-form-sidebar',
'description' => 'Contact Form Sidebar',
'before_widget' => '<div>',
'after_widget' => '</div>'
));

register_sidebar(array(
'name' => __('Single Post Sidebar'),
'id' => 'single-post-sidebar',
'description' => 'single post sidebar',
'before_widget' => '<div>',
'after_widget' => '</div>'
));

if (class_exists('MultiPostThumbnails')) {
new MultiPostThumbnails(array(
'label' => 'Secondary Image',
'id' => 'secondary-image',
'post_type' => 'page'
));
}
if (class_exists('MultiPostThumbnails')) {
new MultiPostThumbnails(array(
'label' => 'Third Image',
'id' => 'third-image',
'post_type' => 'page'
));
}

add_filter( 'rwmb_meta_boxes', 'YOURPREFIX_register_meta_boxes' );

function YOURPREFIX_register_meta_boxes( $meta_boxes )
{
    $prefix = 'rw_';

    // 1st meta box
    $meta_boxes[] = array(
        'id'       => 'personal',
        'title'    => 'Personal Information',
        'pages'    => array( 'post', 'page' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            array(
                'name'  => 'Picture Text',
                'id'    => $prefix . 'fname',
                'type'  => 'text',
                'class' => 'custom-class',
                'clone' => true,
            ),
        )
    );

    // 2nd meta box
    $meta_boxes[] = array(
        'title'    => 'Media',
        'pages'    => array( 'post', 'page' ),
        'fields' => array(
            array(
                'name' => 'URL',
                'id'   => $prefix . 'url',
                'type' => 'text',
            ),
            array(
				'name' => __( 'Image Upload', 'meta-box' ),
				'id'   => "{$prefix}image",
				'type' => 'image',
			)
        )
    );

    return $meta_boxes;
}



add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'jobs',
    array(
      'labels' => array('name' => __( 'Jobs' ),'singular_name' => __( 'Job' )),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
      'taxonomies' => array('category'),
    )
  );
}


add_role( 'circularagent', 'Circular DC', 'manage_options' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'rect-thumb', 94, 71 );
add_image_size('blogthumb',200,200);
add_image_size('secondary-featured-thumbnail',478,445);
add_image_size('jobsthumb',99,136);
add_image_size('newsroom-thumb',209,155);


add_action( 'admin_menu', 'circ_agent_menu' );
function circ_agent_menu() {
	add_menu_page( 'Circular Agent Options', 'Circular DC', 'read', 'circ-agent-options', 'circ_agent_options' );
	add_submenu_page( 'circ-agent-options','Circular Agent Options' , 'Constants', 'read', 'circ-agent-constants', 'circ_agent_constants' );
	add_submenu_page( 'circ-agent-options','Circular Agent Options' , 'Summary', 'read', 'circ-agent-summary', 'circ_agent_summary' );
	add_submenu_page( 'circ-agent-options','Circular Agent Options' , 'Edit Summary', 'read', 'circ-agent-edit', 'circ_agent_edit' );
	add_menu_page( 'Feasibility Study', 'Circular FS', 'read', 'feas-study-form', 'feas_study_form' );
	add_submenu_page( 'feas-study-form','Feasibility Study Options' , 'FS Edit', 'read', 'feas-study-fsedit', 'feas_study_fsedit' );
	add_submenu_page( 'feas-study-form','Feasibility Study Options' , 'FS PDF ', 'read', 'feas-study-fspdf', 'feas_study_fspdf' );
	add_menu_page( 'Circular Contract', 'Circular Contract', 'read', 'contract-form', 'contract_form' );
	add_submenu_page( 'contract-form','Contract PDF' , 'Contract PDF', 'read', 'contract-form-pdf', 'contract_form_pdf' );
	

}
function circ_agent_options() {
	if ( !current_user_can( 'read' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
?>


<div class="wrap">
	<h2>Design Consultant Info</h2>

	<form method="post" action="http://localhost/wp-admin/admin.php?page=circ-agent-summary">
	DC Name:
	<input type="text" name="dcname">
	<br>
	DC Email:
	<input type="text" name="dcemail">
	<br>
	DC Phone:
	<input type="text" name="dcphone">
	<br>
	<h2>Customer Info</h2>
	Proposal Name:
	<input type="text" name="proposalname" />
	<br>
	Proposal Date:
	<input type="date" name="proposaldate" value="<?php echo date('Y-m-d'); ?>" />
	<br>
	Prefix:
	<input type="text" name="prefix" />
	First:
	<input type="text" name="firstname" />
	Last:
	<input type="text" name="lastname" />
	<br>
	Address:
	<input type="text" name="address" />
	City:
	<input type="text" name="city" id="cityinput"/>
	State:
	<input type="text" name="state" />
	Zip Code:
	<input type="text" name="zipcode" />
	
	<button id="valuebutton1" type="button" onclick="loadXMLDoc('taxrate.txt')" name="hopeful" value="Abbott">Find Rate</button>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
	<script>

	    function loadXMLDoc()
		{
		var xmlhttp;
		if (window.XMLHttpRequest)
 		{// code for IE7+, Firefox, Chrome, Opera, Safari
  		xmlhttp=new XMLHttpRequest();
 		}
		else
		{// code for IE6, IE5
 		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
 			if (xmlhttp.readyState==4 && xmlhttp.status==200)
  			{
    		var a = xmlhttp.responseText;
    		var str = a.split(" ")
    		var buttonValue = document.getElementById('cityinput').value
    		var buttonValuelower=buttonValue.toLowerCase();


    		for (i=0;i<str.length;i++){
    			var arraycheck = str[i];
    			var arraychecklower = arraycheck.toLowerCase();
    			
    			if (buttonValuelower==arraychecklower){
    				i++;
    				var arraycheck2 = str[i];
    				
    				document.getElementById("newtaxrate8").innerHTML = arraycheck2;
    				return arraycheck2;
    			}
    		}

  			}
		}
		xmlhttp.open("GET","taxrate.txt",true);
		xmlhttp.send();

$.ajax({
  type: "GET",
  data: { name: "John", location: "Boston" },
  success: function(){
            console.log("awesome") 
        }
});
		}
		</script>
		<br>
		Tax Rate --------> <span id="newtaxrate8" name="blah3">NULL</span>
		<br>
		State Sales Tax:
		<input type="text" name="statesalestax">
	

<?php

$phpVariableName =$_POST['taxrate6'];
echo $phpVariableName;
//echo "blah";

?>

	<br>
	Client Phone:
	<input type="text" name="clientphone" />
	Client Email:
	<input type="text" name="clientemail" />
	<br>
	Roof Type:
	<select name="rooftype" />
	<option value="Shingle">Shingle</option>
	<option value="Metal">Metal</option>
	<option value="Tile">Tile</option>
	<option value="Ground Mount">Ground Mount</option>
	<option value="Pole Mount">Pole Mount</option>
	</select>
	<br>
	Referral:
	<input type="checkbox" name="referral" value="Yes" />Yes
	<input type="checkbox" name="referral" value="No" />No
	<h2>Customers Energy Use</h2>
	Energy Provider:
	<select name="energyprovider" />
	<option value="Austin Energy">Austin Energy</option>
	<option value="CPS">CPS</option>
	<option value="Oncor">Oncor</option>
	<option value="Denton">Denton</option>
	<option value="Other">Other</option>
	</select>
	<br>
	Previous Use Available:
	<br>
	<span id="12monthsuseavail">
		<input type="radio" name="previoususeavail" value="12monthskwh" />12 Months kWh
	</span>
	<br>
	<span id="averageuseavail">
		<input type="radio" name="previoususeavail" value="average" />Average Dollar Amount
	</span>
	<br>
	<span id="highlowuseavail">
		<input type="radio" name="previoususeavail" value="highlow" />High-Low Dollar Amounts
	</span>
	<br>
	<br>
	<h2>System Specs</h2>
	Panel Type
	<select name="paneltype" />
	<option value="Q.PRO-G3-255">Q.PRO-G3-255</option>
	<option value="LG270S1C-A3">LG270S1C-A3</option>
	<option value="LG275S1C-B3">LG275S1C-B3</option>
	<option value="LG300N1C-B3">LG300N1C-B3</option>
	<option value="SPR-E20-327">SPR-E20-327</option>
	<option value="SPR-X21-335-BLK">SPR-X21-335-BLK</option>
	<option value="SPR-X21-345">SPR-X21-345</option>
	<option value="SPR-E20-327">SPR-E20-327</option>
	<option value="SPR-X21-335-BLK">SPR-X21-335-BLK</option>
	<option value="SPR-X21-345">SPR-X21-345</option>
	<option value="Custom Build">Custom Build</option>
	</select>  
	<br>
	Inverter Manufacturer:
	<span id="enphase">
		<input type="radio" name="invertermanufacturer" value="enphase" />Enphase
	</span>
	<span id="fronius">
		<input type="radio" name="invertermanufacturer" value="fronius" />Fronius
	</span>
	<span id="sma">
		<input type="radio" name="invertermanufacturer" value="sma" />SMA
	</span>
	<span id="solaredge">
		<input type="radio" name="invertermanufacturer" value="solaredge" />Solar Edge
	</span>
	<!--
	<select name="invertermanufacturer" />
	<span id="enphase5">
	<option value="enphase6">Enphase</option>
	</span>
	<option value="fronius">Fronius</option>
	<option value="sma">SMA</option>
	<option value="solaredge">Solar Edge</option>
	</select>
	-->
	<br>
	Inverter Model:
	<select name="invertermodelen" id ="enphaseinverters"/>
		<option value="M215-60-2LL-S22/S23">M215-60-2LL-S22/S23</option>
		<option value="M250-60-2LL-S22/S23">M250-60-2LL-S22/S23</option>
	</select>
	<select name="invertermodelfr" id="froniusinverters">
		<option value="IG Plus V 3.0-1 UNI">IG Plus V 3.0-1 UNI</option>
		<option value="fr3800">IG Plus V 3.8-1 UNI</option>
		<option value="fr5000">IG Plus V 5.0-1 UNI</option>
		<option value="fr6000">IG Plus V 6.0-1 UNI</option>
		<option value="fr7500">IG Plus V 7.5-1 UNI</option>
		<option value="fr10000">IG Plus V 10.0-1 UNI</option>
		<option value="fr11400">IG Plus V 11.4-1 UNI</option>
	</select>
	<select name="invertermodelsma" id="smainverters">
		<option value="sb-3000tl-us-22" id="sma3000">SB-3000TL-US-22</option>
		<option value="sb-3800tl-us-22" id="sma3800">SB-3800TL-US-22</option>
		<option value="sb-4000tl-us-22" id="sma4000">SB-4000TL-US-22</option>
		<option value="sb-5000tl-us-22" id="sma5000">SB-5000TL-US-22</option>
		<option value="sb-6000tl-us-22" id="sma6000">SB-6000TL-US-22</option>
		<option value="sb-7000us" id="sma7000">SB-7000US</option>
		<option value="sb-8000us" id="sma8000">SB-8000US</option>
		<option value="sb-7000tl-us" id="sma7000">SB-7000TL-US</option>
		<option value="sb-8000tl-us" id="sma8000">SB-8000TL-US</option>
		<option value="sb-9000tl-us" id="sma9000">SB-9000TL-US</option>
		<option value="sb-10000tl-us" id="sma10000">SB-10000TL-US</option>
		<option value="sb-11000tl-us" id="sma11000">SB-11000TL-US</option>
	</select>
	<select name="invertermodelse" id="solaredgeinverters">
		<option value="p300" id="p300">P300</option>
		<option value="p400" id="p400">P400</option>
		<option value="se3000a-us" id="se3000a-us">SE3000A-US</option>
		<option value="se3800a-us" id="se3800a-us">SE3800A-US</option>
		<option value="se5000a-us" id="se5000a-us">SE5000A-US</option>
		<option value="se6000a-us" id="se6000a-us">SE6000A-US</option>
		<option value="se7000a-us" id="se7000a-us">SE7000A-US</option>
		<option value="se7600a-us" id="se7600a-us">SE7600A-US</option>
		<option value="se10000a-us" id="se10000a-us">SE10000A-US</option>
		<option value="se11400a-us" id="se11400a-us">SE11400A-US</option>	
	</select>
	
<script>
//console.log("blah6");
$(document).ready(function(){
   $("#enphase").click(function(){
    $("#enphaseinverters").show();
    $("#froniusinverters").hide();
    $("#smainverters").hide();
    $("#solaredgeinverters").hide();
   });
   $("#fronius").click(function(){
    $("#enphaseinverters").hide();
    $("#froniusinverters").show();
    $("#smainverters").hide();
    $("#solaredgeinverters").hide();
   });
   $("#sma").click(function(){
    $("#enphaseinverters").hide();
    $("#froniusinverters").hide();
    $("#smainverters").show();
    $("#solaredgeinverters").hide();
   });
   $("#solaredge").click(function(){
    $("#enphaseinverters").hide();
    $("#froniusinverters").hide();
    $("#smainverters").hide();
    $("#solaredgeinverters").show();
   });

});
</script>	
	<br>
	Monitoring:
	<input type="text" name="monitoring">
	<br>
	Orientation:
	<input type="text" name="orientation">
	<br>
	# of Arrays:
	<span id="numarrayone">
		<input type="radio" name="numberofarrays" value="1" />1
	</span>
	<span id="numarraytwo">
		<input type="radio" name="numberofarrays" value="2" />2
	</span>
	<span id="numarraythree">
		<input type="radio" name="numberofarrays" value="3" />3
	</span>
	<span id="numarrayfour">
		<input type="radio" name="numberofarrays" value="4" />4
	</span>
	<span id="numarrayfive">
		<input type="radio" name="numberofarrays" value="5" />5
	</span>
	<br>
	# of Sub-Arrays:
	<input type="text" name="numofsubarrays">
	<br>

	<div id="onearray">
	<h3>Array 1</h3>
	Number of Panels:
	<input type="text" name="numberofpanels1">
	<br>
	Azimuth:
	<input type="text" name="azimuth1">
	<br>
	Tilt:
	<input type="text" name="tilt1">
	<br>
</div>
<div id="twoarray">
	<h3>Array 2</h3>
	Number of Panels:
	<input type="text" name="numberofpanels2">
	<br>
	Azimuth:
	<input type="text" name="azimuth2">
	<br>
	Tilt:
	<input type="text" name="tilt2">
	<br>
</div>
<div id="threearray">
	<h3>Array 3</h3>
	Number of Panels:
	<input type="text" name="numberofpanels3">
	<br>
	Azimuth:
	<input type="text" name="azimuth3">
	<br>
	Tilt:
	<input type="text" name="tilt3">
	<br>
</div>
<div id="fourarray">
	<h3>Array 4</h3>
	Number of Panels:
	<input type="text" name="numberofpanels4">
	<br>
	Azimuth:
	<input type="text" name="azimuth4">
	<br>
	Tilt:
	<input type="text" name="tilt4">
	<br>
</div>
<div id="fivearray">
	<h3>Array 5</h3>
	Number of Panels:
	<input type="text" name="numberofpanels5">
	<br>
	Azimuth:
	<input type="text" name="azimuth5">
	<br>
	Tilt:
	<input type="text" name="tilt5">
	<br>
</div>

<div id="12monthskwh">
	<h3>Energy Usage (kWh)</h3>
	January:
	<input type="text" name="janusage">
	February:
	<input type="text" name="febusage">
	<br>
	March:
	<input type="text" name="marusage">
	April:
	<input type="text" name="aprusage">
	<br>
	May:
	<input type="text" name="mayusage">
	June:
	<input type="text" name="junusage">
	<br>
	July:
	<input type="text" name="julusage">
	August:
	<input type="text" name="augusage">
	<br>
	September:
	<input type="text" name="sepusage">
	October:
	<input type="text" name="octusage">
	<br>
	November:
	<input type="text" name="novusage">
	December:
	<input type="text" name="decusage">
	<br>
	
</div>
<div id="averagedollaramount">
<h3>Energy Usage Average ($)</h3>
Average Dollar Amount
<input type="text" name="averagedollaramount">
</div>
<div id="highlowdollaramount">
<h3>Energy Usage (High - Low)</h3>
High Dollar Amount
<input type="text" name="highdollaramount">
<br>
Low Dollar Amount
<input type="text" name="lowdollaramount">
</div>
<script>
$(document).ready(function(){
   $("#numarrayone").click(function(){
    $("#onearray").show();
    $("#twoarray").hide();
    $("#threearray").hide();
    $("#fourarray").hide();
    $("#fivearray").hide();
   });
   $("#numarraytwo").click(function(){
    $("#onearray").show();
    $("#twoarray").show();
    $("#threearray").hide();
    $("#fourarray").hide();
    $("#fivearray").hide();
   });
   $("#numarraythree").click(function(){
    $("#onearray").show();
    $("#twoarray").show();
    $("#threearray").show();
    $("#fourarray").hide();
    $("#fivearray").hide();
   });
   $("#numarrayfour").click(function(){
    $("#onearray").show();
    $("#twoarray").show();
    $("#threearray").show();
    $("#fourarray").show();
    $("#fivearray").hide();
   });
   $("#numarrayfive").click(function(){
    $("#onearray").show();
    $("#twoarray").show();
    $("#threearray").show();
    $("#fourarray").show();
    $("#fivearray").show();
   });
$("#12monthsuseavail").click(function(){
    $("#12monthskwh").show();
    $("#highlowdollaramount").hide();
    $("#averagedollaramount").hide();
   });
$("#highlowuseavail").click(function(){
    $("#12monthskwh").hide();
    $("#highlowdollaramount").show();
    $("#averagedollaramount").hide();
   });
$("#averageuseavail").click(function(){
    $("#12monthskwh").hide();
    $("#highlowdollaramount").hide();
    $("#averagedollaramount").show();
   });
 });	
</script>

	<tbody>
<br>
<br>

	<input type="submit" value="Submit" class='button-primary' id='submitbutton' name="Submit2">
	</form>
	<?php
}
	function circ_agent_constants(){
		if ( !current_user_can( 'read' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
		?>
		<div class="wrap">
		<h2>Circular Energy Constants</h2>

	    <form method="post">
	    Effective Offset Rate:
	    <input type="text" name="effectiveoffsetrate" value=".108">
	    <br>
	    Annual Escalator:
	    <input type="text" name="annualescalator" value="4.4%">
	    <br>
	    <br>
	    </form>
	    <br>
	    <?php
	    $response =wp_remote_retrieve_body(wp_remote_get('https://circularenergy.quickbase.com/db/main?a=API_Authenticate&username=danielm4290&password=lando901&hours=24'));
	    $quickbasevalues=json_encode($response,true);
	    //echo $quickbasevalues;
	    ?>
	    <br>
	    <br>
	    <?php
	    $qbvalueslength= strlen($quickbasevalues);
	    echo $qbvalueslength;
	    ?>
	    <br>
	    <br>
	    <br>
	    <?php

	    if ($qbvalueslength==426){ 
		$quickbaseticket=substr($quickbasevalues,240,80);
		}
		else if ($qbvalueslength==425){ 
		$quickbaseticket=substr($quickbasevalues,240,79);
		}		
		else if ($qbvalueslength==424){ 
		$quickbaseticket=substr($quickbasevalues,240,78);
		}		
		else if ($qbvalueslength==423){ 
		$quickbaseticket=substr($quickbasevalues,240,77);
		}		
		else if ($qbvalueslength==422){ 
		$quickbaseticket=substr($quickbasevalues,240,76);
		}		
		else if ($qbvalueslength==427){ 
		$quickbaseticket=substr($quickbasevalues,240,81);
		}		
		else if ($qbvalueslength==428){ 
		$quickbaseticket=substr($quickbasevalues,240,82);
		}		
		else if ($qbvalueslength==429){ 
		$quickbaseticket=substr($quickbasevalues,240,83);
		} 		
		else if ($qbvalueslength==430){ 
		$quickbaseticket=substr($quickbasevalues,240,84);
		}
	    //$quickbaseticket="7_bjjuiej5b_b2cunp_fhwj_a_cg4rba9yuni22c3xs5b3cfp62yvcu7g2hxdcm24dacy272fcnvydc9";	
		//echo $quickbaseticket;
		$quickbasetoken="dx3ip9hdrx687xb9jjm2zdiekb9b";
		?>
		<br>
		<br>
		<br>
		<?php

		//$response12 =wp_remote_retrieve_body(wp_remote_get('https://circularenergy.quickbase.com/db/main?a=API_CreateDatabase&ticket='.$quickbaseticket.'&dbname=FuelCharter&dbdesc=Vehicletracker&createapptoken=1'));
	    //$response12 =wp_remote_retrieve_body(wp_remote_get('https://circularenergy.quickbase.com/db/bjjrvfgmm?a=API_CreateTable&ticket='.$quickbaseticket.'&apptoken='.$quickbasetoken.'&tname=MyVehicleList&pnoun=Vehicles'));
	    //$response12 =wp_remote_retrieve_body(wp_remote_get('https://circularenergy.quickbase.com/db/bjjrvv9zn?a=API_AddField&ticket='.$quickbaseticket.'&apptoken='.$quickbasetoken.'&label=Quote&type=text'));
	    //$response12 =wp_remote_retrieve_body(wp_remote_get('https://circularenergy.quickbase.com/db/bjjrvv9zn?a=API_AddRecord&ticket='.$quickbaseticket.'&apptoken='.$quickbasetoken.'&_fnm_id=3&_fnm_phone_number=123-456-0000&_fnm_price=5000&_fnm_quote=1234'));
	    $response12 =wp_remote_retrieve_body(wp_remote_get('https://circularenergy.quickbase.com/db/bjjrvv9zn?a=API_DoQuery&ticket='.$quickbaseticket.'&apptoken='.$quickbasetoken.'&query={3.EX.561}'));
	    //$response12 =wp_remote_retrieve_body(wp_remote_get('https://circularenergy.quickbase.com/db/bjjrvv9zn?a=API_EditRecord&ticket='.$quickbaseticket.'&apptoken='.$quickbasetoken.'&rid=1&_fnm_price=2000'));
	    //$quickbasevalues56=json_encode($response12,true);
	   echo $response12;
	    ?>

		</div>
	<?php
	}

	function feas_study_form(){
?>
<br>
<form action="../wp-admin/admin.php?page=feas-study-fsedit" method="post" enctype="multipart/form-data">
    <h2> Feasibility Study Upload</h2>
    <br>
    Upload Tab Separated:<input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    <input type="submit" value="Submit" name="submit">
</form>
<?php
	}
	
	function feas_study_fsedit(){

	move_uploaded_file ($_FILES['fileToUpload']['tmp_name'], 
        "../wp-content/themes/circular/uploads/{$_FILES['fileToUpload']['name']}");
	
	$pathoffile="../wp-content/themes/circular/uploads/{$_FILES['fileToUpload']['name']}";
	echo $pathoffile;
	?>
<script>
function reqListener () {
  var pdfvalues=this.responseText;
  var str5 = pdfvalues.split("\n")
  var str6 = str5[1];
  str65 = str6.replace(/"/g, ""); 
  var str7 = str65.split("\t");
  document.getElementById("pdfcompanyinput").value = str7[0];
  document.getElementById("pdfinstallationinput").value = str7[1];
  document.getElementById("pdfpreparedforinput").value = str7[2];
  document.getElementById("pdfaddressinput").value = str7[3];
  document.getElementById("pdfdateinput").value = str7[4];
  document.getElementById("pdfcontactinput").value = str7[5];
  document.getElementById("pdfspoverviewinput").value = str7[6];
  document.getElementById("pdfsplifecyclesavingsinput").value = str7[7];
  document.getElementById("pdfspinvestmentinput").value = str7[8];
  document.getElementById("pdfspannualsavingsinput").value = str7[9];
  document.getElementById("pdfspsimplepaybackinput").value = str7[10];
  document.getElementById("pdfspsirinput").value = str7[11];
  document.getElementById("pdfspirrinput").value = str7[12];
  document.getElementById("pdfspnpvinput").value = str7[13];
  document.getElementById("pdfsputilityescalationrateinput").value = str7[14];
  document.getElementById("pdfspequipmentlifeinput").value = str7[15];
  document.getElementById("pdfspdiscountrateinput").value = str7[16];
  document.getElementById("pdfsptermlengthinput").value = str7[17];
  document.getElementById("pdfspannualpaymentinput").value = str7[18];
  document.getElementById("pdfspannualcashflowinput").value = str7[19];
  document.getElementById("pdfsputilityimpactinput").value = str7[20];
  document.getElementById("pdfspunitcostinput").value = str7[21];
  document.getElementById("pdfspelectricityannualinput").value = str7[22];
  document.getElementById("pdfspmaintenancesavingsannualinput").value = str7[23];
  document.getElementById("pdfsptotalannualsavingsinput").value = str7[24];
  document.getElementById("pdffooteremailinput").value = str7[25];
  document.getElementById("pdffooterphoneinput").value = str7[26];
  document.getElementById("pdftpheaderinput").value = str7[27];
  document.getElementById("pdftpdescinput").value = str7[28];
  document.getElementById("pdftpcityinput").value = str7[29];
  document.getElementById("pdftplatitudeinput").value = str7[30];
  document.getElementById("pdftplongitudeinput").value = str7[31];
  document.getElementById("pdftpsizeinput").value = str7[32];
  document.getElementById("pdftpnumpanelsinput").value = str7[33];
  document.getElementById("pdftpmoduletypeinput").value = str7[34];
  document.getElementById("pdftpinverterinput").value = str7[35];
  document.getElementById("pdftpazimuthinput").value = str7[36];
  document.getElementById("pdftppitchinput").value = str7[37];
  document.getElementById("pdftpinstallationtypeinput").value = str7[38];  
}

var oReq = new XMLHttpRequest();
oReq.onload = reqListener;
oReq.open("get",'<?php echo $pathoffile ?>' , true);
oReq.send();
</script>

<br>
<form action="../pdf-template" method="post">
	Company: 
    <input type="text" id="pdfcompanyinput" name="pdfcompanyinput">
    <br>
    Installation:
    <input type="text" id="pdfinstallationinput" name="pdfinstallationinput">
    <br>
    Prepared for:  
    <input type="text" id="pdfpreparedforinput" name="pdfpreparedforinput">
    <br>
    Address:
    <input type="text" id="pdfaddressinput" name="pdfaddressinput">
    <br>
    Date:
    <input type="text" id="pdfdateinput" name="pdfdateinput">
    <br>
    Contact:
    <input type="text" id="pdfcontactinput" name="pdfcontactinput">
	<br>
	Overview:
	<input type="text" id="pdfspoverviewinput" name="pdfspoverviewinput">
	<br>
	Lifecycle Savings:
	<input type="text" id="pdfsplifecyclesavingsinput" name="pdfsplifecyclesavingsinput">
	<br>
	Investment:
	<input type="text" id="pdfspinvestmentinput" name="pdfspinvestmentinput">
	<br>
	Annual Savings:
	<input type="text" id="pdfspannualsavingsinput" name="pdfspannualsavingsinput">
	<br>
	Simple Payback (yrs):
	<input type="text" id="pdfspsimplepaybackinput" name="pdfspsimplepaybackinput">
	<br>
	SIR:
	<input type="text" id="pdfspsirinput" name="pdfspsirinput">
	<br>
	IRR:
	<input type="text" id="pdfspirrinput" name="pdfspirrinput">
	<br>
	NPV:
	<input type="text" id="pdfspnpvinput" name="pdfspnpvinput">
	<br>
	Utility Escalation Rate:
	<input type="text" id="pdfsputilityescalationrateinput" name="pdfsputilityescalationrateinput">
	<br>
	Equipment Life:
	<input type="text" id="pdfspequipmentlifeinput" name="pdfspequipmentlifeinput">
	<br>
	Discount Rate:
	<input type="text" id="pdfspdiscountrateinput" name="pdfspdiscountrateinput">
	<br>
	Term Length:
	<input type="text" id="pdfsptermlengthinput" name="pdfsptermlengthinput">
	<br>
	Annual Payment:
	<input type="text" id="pdfspannualpaymentinput" name="pdfspannualpaymentinput">
	<br>
	Annual Cash flow:
	<input type="text" id="pdfspannualcashflowinput" name="pdfspannualcashflowinput">
	<br>
	Utility Impact:
	<input type="text" id="pdfsputilityimpactinput" name="pdfsputilityimpactinput">
	<br>
	Unit Cost:
	<input type="text" id="pdfspunitcostinput" name="pdfspunitcostinput">
	<br>
	Electricity Annual:
	<input type="text" id="pdfspelectricityannualinput" name="pdfspelectricityannualinput">
	<br>
	Maintenance Savings Annual:
	<input type="text" id="pdfspmaintenancesavingsannualinput" name="pdfspmaintenancesavingsannualinput">
	<br>
	Total Annual Savings:
	<input type="text" id="pdfsptotalannualsavingsinput" name="pdfsptotalannualsavingsinput">
	<br>
	Footer Email:
	<input type="text" id="pdffooteremailinput" name="pdffooteremailinput">
	<br>
	Footer Phone:
	<input type="text" id="pdffooterphoneinput" name="pdffooterphoneinput">
	<br>
	TP Header:
	<input type="text" id="pdftpheaderinput" name="pdftpheaderinput">
	<br>
	TP Desc:
	<input type="text" id="pdftpdescinput" name="pdftpdescinput">
	<br>
	City:
	<input type="text" id="pdftpcityinput" name="pdftpcityinput">
	<br>
	Latitude:
	<input type="text" id="pdftplatitudeinput" name="pdftplatitudeinput">
	<br>
	Longitude:
	<input type="text" id="pdftplongitudeinput" name="pdftplongitudeinput">
	<br>
	Size:
	<input type="text" id="pdftpsizeinput" name="pdftpsizeinput">
	<br>
	Num Panels:
	<input type="text" id="pdftpnumpanelsinput" name="pdftpnumpanelsinput">
	<br>
	Module Type:
	<input type="text" id="pdftpmoduletypeinput" name="pdftpmoduletypeinput">
	<br>
	Inverter:
	<input type="text" id="pdftpinverterinput" name="pdftpinverterinput">
	<br>
	Azimuth:
	<input type="text" id="pdftpazimuthinput" name="pdftpazimuthinput">
	<br>
	Pitch:
	<input type="text" id="pdftppitchinput" name="pdftppitchinput">
	<br>
	Installation Type:
	<input type="text" id="pdftpinstallationtypeinput" name="pdftpinstallationtypeinput">
	<br>
    <input type="submit" value="Generate PDF" name="submit" formtarget="_blank">
</form>
<?php		
}

	function feas_study_fspdf(){
		
}
	function contract_form(){
	    $response =wp_remote_retrieve_body(wp_remote_get('https://circularenergy.quickbase.com/db/main?a=API_Authenticate&username=danielm4290&password=lando901&hours=24'));
	    $quickbasevalues=json_encode($response,true);
	    //echo $quickbasevalues;
	    $qbvalueslength= strlen($quickbasevalues);
	    //echo $qbvalueslength;
	    if ($qbvalueslength==426){ 
		$quickbaseticket=substr($quickbasevalues,240,80);
		}
		else if ($qbvalueslength==425){ 
		$quickbaseticket=substr($quickbasevalues,240,79);
		}		
		else if ($qbvalueslength==424){ 
		$quickbaseticket=substr($quickbasevalues,240,78);
		}		
		else if ($qbvalueslength==423){ 
		$quickbaseticket=substr($quickbasevalues,240,77);
		}		
		else if ($qbvalueslength==422){ 
		$quickbaseticket=substr($quickbasevalues,240,76);
		}		
		else if ($qbvalueslength==427){ 
		$quickbaseticket=substr($quickbasevalues,240,81);
		}		
		else if ($qbvalueslength==428){ 
		$quickbaseticket=substr($quickbasevalues,240,82);
		}		
		else if ($qbvalueslength==429){ 
		$quickbaseticket=substr($quickbasevalues,240,83);
		} 		
		else if ($qbvalueslength==430){ 
		$quickbaseticket=substr($quickbasevalues,240,84);
		}
	    
	    
		$quickbasetoken="dx3ip9hdrx687xb9jjm2zdiekb9b";
		$qbrid=$_GET['rid'];
		$response12 =wp_remote_retrieve_body(wp_remote_get('https://circularenergy.quickbase.com/db/bjjr84y77?a=API_DoQuery&ticket='.$quickbaseticket.'&apptoken='.$quickbasetoken.'&query={3.EX.'.$qbrid.'}'));		
		$xml=simplexml_load_string($response12) or die("Error: Cannot create object");
		$qbprojectrevenue = $xml->record->project_revenue;
		$qbgm= $xml->record->gm;
		$qbrelatedcustomer= $xml->record->related_customer__ref_;
		?>
		<form action="../contract-form" method="post">
		<h2> Circular Contract PDF Generator</h2>
		Project Revenue: 
    	<input type="text" value="<?php echo $qbprojectrevenue ?>" name="qbprojectrevenue">
    	<br>
    	GM: 
    	<input type="text" value="<?php echo $qbgm ?>" name="qbgm">
    	<br>
    	Related Customer: 
    	<input type="text" value="<?php echo $qbrelatedcustomer ?>" name="qbrelatedcustomer">
    	<br>
    	<input type="submit" value="Generate Contract PDF" formtarget="_blank">
		</form>
		<?php
}
function contract_form_pdf (){
	include '../wp-content/themes/circular/contractform.php';
}

	function circ_agent_summary(){
		if ( !current_user_can( 'read' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
		?>
		<div class="wrap">
		<h2>Circular Energy Client Summary</h2>
		

<?php 

	global $wpdb;

	if (isset($_POST['Submit1'])){
	
$mytestdrafts = $wpdb->get_results("
	SELECT *
	FROM circular
	ORDER BY ID DESC LIMIT 1"
	);

foreach($mytestdrafts as $mytestdraft)
	{

	$wpdb->update("circular",array(
			"dcname" => "$_POST[edcname]",
			"dcemail" => "$_POST[edcemail]",
			"dcphone" => "$_POST[edcphone]",
			"proposalname" => "$_POST[eproposalname]",
			"proposaldate" => "$_POST[eproposaldate]",
			"prefix" => "$_POST[eprefix]",
			"firstname" => "$_POST[efirstname]",
			"lastname" => "$_POST[elastname]",
			"address" => "$_POST[eaddress]",
			"city" => "$_POST[ecity]",
			"state" => "$_POST[estate]",
			"zipcode" => "$_POST[ezipcode]",
			"statesalestax" => "$_POST[estatesalestax]",
			"clientphone" => "$_POST[eclientphone]",
			"clientemail" => "$_POST[eclientemail]",
			"rooftype" => "$_POST[erooftype]",
			"referral" => "$_POST[ereferral]",
			"energyprovider" => "$_POST[eenergyprovider]",
			"previoususeavail" => "$_POST[eprevioususeavail]",
			"paneltype" => "$_POST[epaneltype]",
			"invertermanufacturer" => "$_POST[einvertermanufacturer]",
			"inverterefficiency" => "$_POST[einverterefficiency]",
			"monitoring" => "$_POST[emonitoring]",
			"orientation" => "$_POST[eorientation]",
			"numberofarrays" => "$_POST[enumberofarrays]",
			"numofsubarrays" => "$_POST[enumofsubarrays]",
			"numberofpanels1" => "$_POST[enumberofpanels1]",
			"azimuth1" => "$_POST[eazimuth1]",
			"tilt1" => "$_POST[etilt1]",
			"numberofpanels2" => "$_POST[enumberofpanels2]",
			"azimuth2" => "$_POST[eazimuth2]",
			"tilt2" => "$_POST[etilt2]",
			"numberofpanels3" => "$_POST[enumberofpanels3]",
			"azimuth3" => "$_POST[eazimuth3]",
			"tilt3" => "$_POST[etilt3]",
			"numberofpanels4" => "$_POST[enumberofpanels4]",
			"azimuth4" => "$_POST[eazimuth4]",
			"tilt4" => "$_POST[etilt4]",
			"numberofpanels5" => "$_POST[enumberofpanels5]",
			"azimuth5" => "$_POST[eazimuth5]",
			"tilt5" => "$_POST[etilt5]",
			"janusage" => "$_POST[ejanusage]",
			"febusage" => "$_POST[efebusage]",
			"marusage" => "$_POST[emarusage]",
			"aprusage" => "$_POST[eaprusage]",
			"mayusage" => "$_POST[emayusage]",
			"junusage" => "$_POST[ejunusage]",
			"julusage" => "$_POST[ejulusage]",
			"augusage" => "$_POST[eaugusage]",
			"sepusage" => "$_POST[esepusage]",
			"octusage" => "$_POST[eoctusage]",
			"novusage" => "$_POST[enovusage]",
			"decusage" => "$_POST[edecusage]",
			"averagedollaramount" => "$_POST[eaveragedollaramount]"
			
			),array('ID'=>$mytestdraft->ID));

}
}
	if (isset($_POST['Submit2'])) 
{	
	$wpdb->insert("circular",array(
	"dcname" => "$_POST[dcname]",
	"dcemail" => "$_POST[dcemail]",
	"dcphone" => "$_POST[dcphone]",
	"jobname" => "$_POST[lastname]"." - ". "$_POST[address]" ,
	"proposalname" => "$_POST[proposalname]",
	"proposaldate" => "$_POST[proposaldate]",
	"prefix" => "$_POST[prefix]",
	"firstname" => "$_POST[firstname]",
	"lastname" => "$_POST[lastname]",
	"clientname" =>"$_POST[prefix]" ." " . "$_POST[firstname]". " ". "$_POST[lastname]",
	"address" => "$_POST[address]",
	"city" => "$_POST[city]",
	"zipcode" => "$_POST[zipcode]",
	"state" => "$_POST[state]",
	"fulladdress" => "$_POST[address]" . " ". "$_POST[city]" . " ". "$_POST[state]" . " " ."$_POST[zipcode]",
	"statesalestax" => "$_POST[statesalestax]",
	"clientphone" => "$_POST[clientphone]",
	"clientemail" => "$_POST[clientemail]",
	"rooftype" => "$_POST[rooftype]",
	"referral" => "$_POST[referral]",
	"energyprovider" => "$_POST[energyprovider]",
	"previoususeavail" => "$_POST[previoususeavail]",
	"paneltype" => "$_POST[paneltype]",
	"invertermanufacturer" => "$_POST[invertermanufacturer]",
	"inverterefficiency" => "$_POST[inverterefficiency]",
	"monitoring" => "$_POST[monitoring]",
	"orientation" => "$_POST[orientation]",
	"numberofarrays" => "$_POST[numberofarrays]",
	"numofsubarrays" => "$_POST[numofsubarrays]",
	"numberofpanels1" => "$_POST[numberofpanels1]",
	"azimuth1" => "$_POST[azimuth1]",
	"tilt1" => "$_POST[tilt1]",
	"numberofpanels2" => "$_POST[numberofpanels2]",
	"azimuth2" => "$_POST[azimuth2]",
	"tilt2" => "$_POST[tilt2]",
	"numberofpanels3" => "$_POST[numberofpanels3]",
	"azimuth3" => "$_POST[azimuth3]",
	"tilt3" => "$_POST[tilt3]",
	"numberofpanels4" => "$_POST[numberofpanels4]",
	"azimuth4" => "$_POST[azimuth4]",
	"tilt4" => "$_POST[tilt4]",
	"numberofpanels5" => "$_POST[numberofpanels5]",
	"azimuth5" => "$_POST[azimuth5]",
	"tilt5" => "$_POST[tilt5]",
	"janusage" => "$_POST[janusage]",
	"febusage" => "$_POST[febusage]",
	"marusage" => "$_POST[marusage]",
	"aprusage" => "$_POST[aprusage]",
	"mayusage" => "$_POST[mayusage]",
	"junusage" => "$_POST[junusage]",
	"julusage" => "$_POST[julusage]",
	"augusage" => "$_POST[augusage]",
	"sepusage" => "$_POST[sepusage]",
	"octusage" => "$_POST[octusage]",
	"novusage" => "$_POST[novusage]",
	"decusage" => "$_POST[decusage]",
	"averagedollaramount" => "$_POST[averagedollaramount]"
	));
}

if (isset($_POST['Submit3'])) 
{	
	$wpdb->insert("circular",array(
	"dcname" => "$_POST[edcname]",
	"dcemail" => "$_POST[edcemail]",
	"dcphone" => "$_POST[edcphone]",
	"jobname" => "$_POST[elastname]"." - ". "$_POST[eaddress]" ,
	"proposalname" => "$_POST[eproposalname]",
	"proposaldate" => "$_POST[eproposaldate]",
	"prefix" => "$_POST[eprefix]",
	"firstname" => "$_POST[efirstname]",
	"lastname" => "$_POST[elastname]",
	"clientname" =>"$_POST[eprefix]" ." " . "$_POST[efirstname]". " ". "$_POST[elastname]",
	"address" => "$_POST[eaddress]",
	"city" => "$_POST[ecity]",
	"zipcode" => "$_POST[ezipcode]",
	"state" => "$_POST[estate]",
	"fulladdress" => "$_POST[eaddress]" . " ". "$_POST[ecity]" . " ". "$_POST[estate]" . " " ."$_POST[ezipcode]",
	"statesalestax" => "$_POST[estatesalestax]",
	"clientphone" => "$_POST[eclientphone]",
	"clientemail" => "$_POST[eclientemail]",
	"rooftype" => "$_POST[erooftype]",
	"referral" => "$_POST[ereferral]",
	"energyprovider" => "$_POST[eenergyprovider]",
	"previoususeavail" => "$_POST[eprevioususeavail]",
	"paneltype" => "$_POST[epaneltype]",
	"invertermanufacturer" => "$_POST[einvertermanufacturer]",
	"inverterefficiency" => "$_POST[einverterefficiency]",
	"monitoring" => "$_POST[emonitoring]",
	"orientation" => "$_POST[eorientation]",
	"numberofarrays" => "$_POST[enumberofarrays]",
	"numofsubarrays" => "$_POST[enumofsubarrays]",
	"numberofpanels1" => "$_POST[enumberofpanels1]",
	"azimuth1" => "$_POST[eazimuth1]",
	"tilt1" => "$_POST[etilt1]",
	"numberofpanels2" => "$_POST[enumberofpanels2]",
	"azimuth2" => "$_POST[eazimuth2]",
	"tilt2" => "$_POST[etilt2]",
	"numberofpanels3" => "$_POST[enumberofpanels3]",
	"azimuth3" => "$_POST[eazimuth3]",
	"tilt3" => "$_POST[etilt3]",
	"numberofpanels4" => "$_POST[enumberofpanels4]",
	"azimuth4" => "$_POST[eazimuth4]",
	"tilt4" => "$_POST[etilt4]",
	"numberofpanels5" => "$_POST[enumberofpanels5]",
	"azimuth5" => "$_POST[eazimuth5]",
	"tilt5" => "$_POST[etilt5]",
	"janusage" => "$_POST[ejanusage]",
	"febusage" => "$_POST[efebusage]",
	"marusage" => "$_POST[emarusage]",
	"aprusage" => "$_POST[eaprusage]",
	"mayusage" => "$_POST[emayusage]",
	"junusage" => "$_POST[ejunusage]",
	"julusage" => "$_POST[ejulusage]",
	"augusage" => "$_POST[eaugusage]",
	"sepusage" => "$_POST[esepusage]",
	"octusage" => "$_POST[eoctusage]",
	"novusage" => "$_POST[enovusage]",
	"decusage" => "$_POST[edecusage]",
	"averagedollaramount" => "$_POST[eaveragedollaramount]"
	));
}
?>
<form action="http://localhost/wp-admin/admin.php?page=circ-agent-edit" method="post">
		
<?php
global $wpdb;
global $idofselectedproposal;
if (isset($_POST['SelectProposal1'])) 
{
	$selectedproposal=$_POST[selectproposal];
	$mytestdrafts = $wpdb->get_results("
	SELECT *
	FROM circular
	WHERE proposalname='$selectedproposal'
	"
	);
foreach($mytestdrafts as $mytestdraft)
	{	
		$idofselectedproposal=$mytestdraft->ID;
	}
}
else{
	$mytestdrafts = $wpdb->get_results("
	SELECT *
	FROM circular
	ORDER BY ID DESC LIMIT 1"
	);
	foreach($mytestdrafts as $mytestdraft)
	{	
		$idofselectedproposal=$mytestdraft->ID;
	}
}
?>
<h3><?php echo $selectedproposal;?></h3>
<input type="submit" value="Edit Proposal<?php echo $idofselectedproposal ?>" class='button-secondary' id='submitbutton' name="selsub" > 
</form>
<?php 
foreach($mytestdrafts as $mytestdraft)
	{	
	if ($_POST[invertermanufacturer]=="enphase"){
		$invertermodel=$_POST["invertermodelen"];
	}	
	else if ($_POST[invertermanufacturer]=="fronius"){
		$invertermodel=$_POST["invertermodelfr"];
	}	
	else if ($_POST[invertermanufacturer]=="sma"){
		$invertermodel=$_POST["invertermodelsma"];
	}	
	else if ($_POST[invertermanufacturer]=="solaredge"){
		$invertermodel=$_POST["invertermodelse"];
	}
	$mytestdraftsinvs = $wpdb->get_results("
	SELECT *
	FROM circularconstants
	WHERE InverterModel='$invertermodel'
	"
	);
	foreach($mytestdraftsinvs as $mytestdraftsinv)
	{
		$invertermodelvar=$mytestdraftsinv->InverterModel;
		$inverterefficiencyvar=$mytestdraftsinv->InverterEfficiency;
		$priceinvertervar=$mytestdraftsinv->PriceInverter;
	}
	$panelvar=$_POST[paneltype];
	//echo $panelvar;
	$mytestdraftspans = $wpdb->get_results("
	SELECT *
	FROM circularconstants
	WHERE PanelModel='$panelvar'
	"
	);
	foreach($mytestdraftspans as $mytestdraftspan)
	{
		$panelmodelvar=$mytestdraftspan->PanelModel;
		$panelppwvar=$mytestdraftspan->PanelPPW;
		$panelwattagevar=$mytestdraftspan->PanelWattage;
		//echo $panelwattagevar;
	}

		$idofselectedproposal=$mytestdraft->ID;
		//echo $idofselectedproposal;
		$modazimuth1=$mytestdraft->azimuth1;
		$modazimuth2=$mytestdraft->azimuth2;
		$modazimuth3=$mytestdraft->azimuth3;
		$modazimuth4=$mytestdraft->azimuth4;
		$modazimuth5=$mytestdraft->azimuth5;
		$modtilt1=$mytestdraft->tilt1;
		$modtilt2=$mytestdraft->tilt2;
		$modtilt3=$mytestdraft->tilt3;
		$modtilt4=$mytestdraft->tilt4;
		$modtilt5=$mytestdraft->tilt5;
		$arraysize78=$mytestdraft->numofsubarrays;
		$addressstring=$mytestdraft->address;
		$citystring=$mytestdraft->city;
		$statestring=$mytestdraft->state;	
	    
		$pattern = '/\s/';
		$replacement = '+';
		$addressregexstring= preg_replace($pattern, $replacement, $addressstring);
		$cityregexstring=preg_replace($pattern, $replacement, $citystring);

		/* Google Maps API Integration */

	    $response =wp_remote_retrieve_body(wp_remote_get('https://maps.googleapis.com/maps/api/geocode/json?address='.$addressregexstring.',+'.$cityregexstring.',+'.$statestring.'&key=AIzaSyAj-AImeYKW7MBHNxIW6MvO-JXnrjrpvoM'));
	    $googlemapsinputs=json_decode($response,true);
	    $resultsarray=$googlemapsinputs['results'];
	    $resultsarray1=$resultsarray[0];
		$locationarray=$resultsarray1['geometry'];
		$latlngarray=$locationarray['location'];
		$latvalue=$latlngarray['lat'];
		$lngvalue=$latlngarray['lng'];

		/* PV Watts API Integration */

		$panelstring=$panelwattagevar;
		$numberofpanelsstring1=$mytestdraft->numberofpanels1;
		$numberofpanelsstring2=$mytestdraft->numberofpanels2;
		$numberofpanelsstring3=$mytestdraft->numberofpanels3;
		$numberofpanelsstring4=$mytestdraft->numberofpanels4;
		$numberofpanelsstring5=$mytestdraft->numberofpanels5;
		$systemcapacitystring1=($panelstring*$numberofpanelsstring1)/1000;
		$systemcapacitystring2=($panelstring*$numberofpanelsstring2)/1000;
		$systemcapacitystring3=($panelstring*$numberofpanelsstring3)/1000;
		$systemcapacitystring4=($panelstring*$numberofpanelsstring4)/1000;
		$systemcapacitystring5=($panelstring*$numberofpanelsstring5)/1000;

	    $response1 =wp_remote_retrieve_body(wp_remote_get( 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=rojJKveIzwiREkkAqxW0YmdT1dcqNT129HjqOeOi&lat='.$latvalue.'&lon='.$lngvalue.'&system_capacity='.$systemcapacitystring1.'&azimuth='.$modazimuth1.'&tilt='.$modtilt1.'&array_type=1&module_type=1&losses=23' ));
	    $response2 =wp_remote_retrieve_body(wp_remote_get( 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=rojJKveIzwiREkkAqxW0YmdT1dcqNT129HjqOeOi&lat='.$latvalue.'&lon='.$lngvalue.'&system_capacity='.$systemcapacitystring2.'&azimuth='.$modazimuth2.'&tilt='.$modtilt2.'&array_type=1&module_type=1&losses=23' ));
	    $response3 =wp_remote_retrieve_body(wp_remote_get( 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=rojJKveIzwiREkkAqxW0YmdT1dcqNT129HjqOeOi&lat='.$latvalue.'&lon='.$lngvalue.'&system_capacity='.$systemcapacitystring3.'&azimuth='.$modazimuth3.'&tilt='.$modtilt3.'&array_type=1&module_type=1&losses=23' ));
	    $response4 =wp_remote_retrieve_body(wp_remote_get( 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=rojJKveIzwiREkkAqxW0YmdT1dcqNT129HjqOeOi&lat='.$latvalue.'&lon='.$lngvalue.'&system_capacity='.$systemcapacitystring4.'&azimuth='.$modazimuth4.'&tilt='.$modtilt4.'&array_type=1&module_type=1&losses=23' ));
	    $response5 =wp_remote_retrieve_body(wp_remote_get( 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=rojJKveIzwiREkkAqxW0YmdT1dcqNT129HjqOeOi&lat='.$latvalue.'&lon='.$lngvalue.'&system_capacity='.$systemcapacitystring5.'&azimuth='.$modazimuth5.'&tilt='.$modtilt5.'&array_type=1&module_type=1&losses=23' ));

	    $arrayofinputs1=json_decode($response1,true);
	    $arrayofinputs2=json_decode($response2,true);
	    $arrayofinputs3=json_decode($response3,true);
	    $arrayofinputs4=json_decode($response4,true);
	    $arrayofinputs5=json_decode($response5,true);
	    $outputsarray1=$arrayofinputs1['outputs'];
	    $outputsarray2=$arrayofinputs2['outputs'];
	    $outputsarray3=$arrayofinputs3['outputs'];
	    $outputsarray4=$arrayofinputs4['outputs'];
	    $outputsarray5=$arrayofinputs5['outputs'];
	    $acmonthlyarray1=$outputsarray1['ac_monthly'];
	    $acmonthlyarray2=$outputsarray2['ac_monthly'];
	    $acmonthlyarray3=$outputsarray3['ac_monthly'];
	    $acmonthlyarray4=$outputsarray4['ac_monthly'];
	    $acmonthlyarray5=$outputsarray5['ac_monthly'];
	    
if($mytestdraft->previoususeavail=="12monthskwh" || $mytestdraft->previoususeavail=="average"){

	    $jantotalprod=$acmonthlyarray1[0] +$acmonthlyarray2[0] +$acmonthlyarray3[0] +$acmonthlyarray4[0] +$acmonthlyarray5[0];
	    $febtotalprod=$acmonthlyarray1[1] +$acmonthlyarray2[1] +$acmonthlyarray3[1] +$acmonthlyarray4[1] +$acmonthlyarray5[1];
	    $martotalprod=$acmonthlyarray1[2] +$acmonthlyarray2[2] +$acmonthlyarray3[2] +$acmonthlyarray4[2] +$acmonthlyarray5[2];
	    $aprtotalprod=$acmonthlyarray1[3] +$acmonthlyarray2[3] +$acmonthlyarray3[3] +$acmonthlyarray4[3] +$acmonthlyarray5[3];
	    $maytotalprod=$acmonthlyarray1[4] +$acmonthlyarray2[4] +$acmonthlyarray3[4] +$acmonthlyarray4[4] +$acmonthlyarray5[4];
	    $juntotalprod=$acmonthlyarray1[5] +$acmonthlyarray2[5] +$acmonthlyarray3[5] +$acmonthlyarray4[5] +$acmonthlyarray5[5];
	    $jultotalprod=$acmonthlyarray1[6] +$acmonthlyarray2[6] +$acmonthlyarray3[6] +$acmonthlyarray4[6] +$acmonthlyarray5[6];
	    $augtotalprod=$acmonthlyarray1[7] +$acmonthlyarray2[7] +$acmonthlyarray3[7] +$acmonthlyarray4[7] +$acmonthlyarray5[7];
	    $septotalprod=$acmonthlyarray1[8] +$acmonthlyarray2[8] +$acmonthlyarray3[8] +$acmonthlyarray4[8] +$acmonthlyarray5[8];
	    $octtotalprod=$acmonthlyarray1[9] +$acmonthlyarray2[9] +$acmonthlyarray3[9] +$acmonthlyarray4[9] +$acmonthlyarray5[9];
	    $novtotalprod=$acmonthlyarray1[10] +$acmonthlyarray2[10] +$acmonthlyarray3[10] +$acmonthlyarray4[10] +$acmonthlyarray5[10];
	    $dectotalprod=$acmonthlyarray1[11] +$acmonthlyarray2[11] +$acmonthlyarray3[11] +$acmonthlyarray4[11] +$acmonthlyarray5[11];
	    $totalprod=$jantotalprod+$febtotalprod+$martotalprod+$aprtotalprod+$maytotalprod+$juntotalprod+$jultotalprod+$augtotalprod+$septotalprod+$octtotalprod+$novtotalprod+$dectotalprod;
	    $averageprod=$totalprod/12;
}

	    $wpdb->update("circular",array(
			"janprod" => $jantotalprod,
			"febprod" => $febtotalprod,
			"marprod" => $martotalprod,
			"aprprod" => $aprtotalprod,
			"mayprod" => $maytotalprod,
			"junprod" => $juntotalprod,
			"julprod" => $jultotalprod,
			"augprod" => $augtotalprod,
			"sepprod" => $septotalprod,
			"octprod" => $octtotalprod,
			"novprod" => $novtotalprod,
			"decprod" => $dectotalprod,
			),array('ID'=>$mytestdraft->ID));


if($mytestdraft->previoususeavail=="12monthskwh"){		
		$janprodm=$jantotalprod * .107;
		$febprodm=$febtotalprod * .107;
		$marprodm=$martotalprod * .107;
		$aprprodm=$aprtotalprod * .107;
		$mayprodm=$maytotalprod * .107;
		$junprodm=$juntotalprod * .107;
		$julprodm=$jultotalprod * .107;
		$augprodm=$augtotalprod * .107;
		$sepprodm=$septotalprod * .107;
		$octprodm=$octtotalprod * .107;
		$novprodm=$novtotalprod * .107;
		$decprodm=$dectotalprod * .107;

		$janusagem=($mytestdraft->janusage) * .107;
		$febusagem=($mytestdraft->febusage) * .107;
		$marusagem=($mytestdraft->marusage) * .107;
		$aprusagem=($mytestdraft->aprusage) * .107;
		$mayusagem=($mytestdraft->mayusage) * .107;
		$junusagem=($mytestdraft->junusage) * .107;
		$julusagem=($mytestdraft->julusage) * .107;
		$augusagem=($mytestdraft->augusage) * .107;
		$sepusagem=($mytestdraft->sepusage) * .107;
		$octusagem=($mytestdraft->octusage) * .107;
		$novusagem=($mytestdraft->novusage) * .107;
		$decusagem=($mytestdraft->decusage) * .107;


		$janusage=($mytestdraft->janusage);
		$febusage=($mytestdraft->febusage);
		$marusage=($mytestdraft->marusage);
		$aprusage=($mytestdraft->aprusage);
		$mayusage=($mytestdraft->mayusage);
		$junusage=($mytestdraft->junusage);
		$julusage=($mytestdraft->julusage);
		$augusage=($mytestdraft->augusage);
		$sepusage=($mytestdraft->sepusage);
		$octusage=($mytestdraft->octusage);
		$novusage=($mytestdraft->novusage);
		$decusage=($mytestdraft->decusage);

}
if($mytestdraft->previoususeavail=="average"){
		$janprodm=$jantotalprod * .107;
		$febprodm=$febtotalprod * .107;
		$marprodm=$martotalprod * .107;
		$aprprodm=$aprtotalprod * .107;
		$mayprodm=$maytotalprod * .107;
		$junprodm=$juntotalprod * .107;
		$julprodm=$jultotalprod * .107;
		$augprodm=$augtotalprod * .107;
		$sepprodm=$septotalprod * .107;
		$octprodm=$octtotalprod * .107;
		$novprodm=$novtotalprod * .107;
		$decprodm=$dectotalprod * .107;

		$aehistaverage=(($mytestdraft->aehistjan)+($mytestdraft->aehistfeb)+($mytestdraft->aehistmar)+($mytestdraft->aehistapr)+($mytestdraft->aehistmay)+($mytestdraft->aehistjun)+($mytestdraft->aehistjul)+($mytestdraft->aehistaug)+($mytestdraft->aehistsep)+($mytestdraft->aehistoct)+($mytestdraft->aehistnov)+($mytestdraft->aehistdec))/12;
		//$aehistaverage=($mytestdraft->$aehistjan)+($mytestdraft->$aehistfeb);
		$shiftnumber=($mytestdraft->averagedollaramount)-$aehistaverage;
		
		$janusagem=$mytestdraft->aehistjan +$shiftnumber;
		$febusagem=$mytestdraft->aehistfeb +$shiftnumber;
		$marusagem=$mytestdraft->aehistmar +$shiftnumber;
		$aprusagem=$mytestdraft->aehistapr +$shiftnumber;
		$mayusagem=$mytestdraft->aehistmay +$shiftnumber;
		$junusagem=$mytestdraft->aehistjun +$shiftnumber;
		$julusagem=$mytestdraft->aehistjul +$shiftnumber;
		$augusagem=$mytestdraft->aehistaug +$shiftnumber;
		$sepusagem=$mytestdraft->aehistsep +$shiftnumber;
		$octusagem=$mytestdraft->aehistoct +$shiftnumber;
		$novusagem=$mytestdraft->aehistnov +$shiftnumber;
		$decusagem=$mytestdraft->aehistdec +$shiftnumber;
		$janusage=$janusagem/.107;
		$febusage=$febusagem/.107;
		$marusage=$marusagem/.107;
		$aprusage=$aprusagem/.107;
		$mayusage=$mayusagem/.107;
		$junusage=$junusagem/.107;
		$julusage=$julusagem/.107;
		$augusage=$augusagem/.107;
		$sepusage=$sepusagem/.107;
		$octusage=$octusagem/.107;
		$novusage=$novusagem/.107;
		$decusage=$decusagem/.107;	
}
			$wpdb->update("circular",array(
			"janprodm" => $janprodm,
			"febprodm" => $febprodm,
			"marprodm" => $marprodm,
			"aprprodm" => $aprprodm,
			"mayprodm" => $mayprodm,
			"junprodm" => $junprodm,
			"julprodm" => $julprodm,
			"augprodm" => $augprodm,
			"sepprodm" => $sepprodm,
			"octprodm" => $octprodm,
			"novprodm" => $novprodm,
			"decprodm" => $decprodm,
			"janusagem" => $janusagem,
			"febusagem" => $febusagem,
			"marusagem" => $marusagem,
			"aprusagem" => $aprusagem,
			"mayusagem" => $mayusagem,
			"junusagem" => $junusagem,
			"julusagem" => $julusagem,
			"augusagem" => $augusagem,
			"sepusagem" => $sepusagem,
			"octusagem" => $octusagem,
			"novusagem" => $novusagem,
			"decusagem" => $decusagem,
			"janusage"=>$janusage,
			"febusage"=>$febusage,
			"marusage"=>$marusage,
			"aprusage"=>$aprusage,
			"mayusage"=>$mayusage,
			"junusage"=>$junusage,
			"julusage"=>$julusage,
			"augusage"=>$augusage,
			"sepusage"=>$sepusage,
			"octusage"=>$octusage,
			"novusage"=>$novusage,
			"decusage"=>$decusage,
			),array('ID'=>$mytestdraft->ID));
	}

	
	?>


		<table class="widefat">
		<thead>
	</thead>

	<tbody>
	<?php
	
	global $wpdb;

	$mytestdrafts = $wpdb->get_results("
	SELECT *
	FROM circular
	WHERE ID=$idofselectedproposal"
	);


	?>	

	</tbody>
<br>
<script type="text/javascript">


      window.onload = function () {
          <?php
		  foreach($mytestdrafts as $mytestdraft)
		  {
		  ?>
          var chartenergy = new CanvasJS.Chart("energysummary", {
              theme: "theme2",//theme1
              title:{text: "Energy Summary (kWh)"},
              legend:{horizontalAlign:"right",verticalAlign:"top"},
              data:[
              {
                  type: "column",
         		  showInLegend:true,
         	      legendText:'Production',
                  dataPoints: 
                  [		  	
                  	{ label: "January", y:<?php echo $mytestdraft->janprod ?> },
    				{ label: "February", y: <?php echo $mytestdraft->febprod ?> },
         			{ label: "March", y: <?php echo $mytestdraft->marprod ?> },                                    
         			{ label: "April", y: <?php echo $mytestdraft->aprprod ?> },
         			{ label: "May", y: <?php echo $mytestdraft->mayprod ?> },
         			{ label: "June", y: <?php echo $mytestdraft->junprod ?> },
         			{ label: "July", y: <?php echo $mytestdraft->julprod ?> },
         			{ label: "August", y: <?php echo $mytestdraft->augprod ?> },
         			{ label: "September", y: <?php echo $mytestdraft->sepprod ?> },
         			{ label: "October", y: <?php echo $mytestdraft->octprod ?> },
         			{ label: "November", y: <?php echo $mytestdraft->novprod ?> },
         			{ label: "December", y: <?php echo $mytestdraft->decprod ?> }
                  ]
              },
			  {        
        		  type: "line",
         		  showInLegend:true,
         	      legendText:'Consumption',
        		  dataPoints: [
        			{ label: "January", y: <?php echo $mytestdraft->janusage ?> },
        			{ label: "February", y: <?php echo $mytestdraft->febusage ?>},
        			{ label: "March", y: <?php echo $mytestdraft->marusage ?> },
        			{ label: "April", y: <?php echo $mytestdraft->aprusage ?> },
        	 		{ label: "May", y: <?php echo $mytestdraft->mayusage ?> },
        			{ label: "June", y: <?php echo $mytestdraft->junusage ?> },
        			{ label: "July", y: <?php echo $mytestdraft->julusage ?> },
        			{ label: "August", y: <?php echo $mytestdraft->augusage ?> },
        			{ label: "September", y: <?php echo $mytestdraft->sepusage ?>},
        			{ label: "October", y: <?php echo $mytestdraft->octusage ?>},
        			{ label: "November", y: <?php echo $mytestdraft->novusage ?>},
        			{ label: "December", y: <?php echo $mytestdraft->decusage ?>},
        			]
              } // end of line graph
              ]//end of data
          
         }); //end of var chartenergy

var chartfinancial = new CanvasJS.Chart("financialsummary", {
              theme: "theme2",//theme1
              title:{text: "Financial Summary ($)"},
              legend:{horizontalAlign:"right",verticalAlign:"top"},
              data: 
              [{
         		  showInLegend:true,
         	      legendText:'Production',
                  type: "column",
                  dataPoints: 
                  [
                  { label: "January", y:<?php echo $mytestdraft->janprodm ?> },
    			  { label: "February", y: <?php echo $mytestdraft->febprodm ?> },
         		  { label: "March", y: <?php echo $mytestdraft->marprodm ?> },                                    
         		  { label: "April", y: <?php echo $mytestdraft->aprprodm ?> },
         		  { label: "May", y: <?php echo $mytestdraft->mayprodm ?> },
         		  { label: "June", y: <?php echo $mytestdraft->junprodm ?> },
         		  { label: "July", y: <?php echo $mytestdraft->julprodm ?> },
         		  { label: "August", y: <?php echo $mytestdraft->augprodm ?> },
         		  { label: "September", y: <?php echo $mytestdraft->sepprodm ?> },
         		  { label: "October", y: <?php echo $mytestdraft->octprodm ?> },
         		  { label: "November", y: <?php echo $mytestdraft->novprodm ?> },
         		  { label: "December", y: <?php echo $mytestdraft->decprodm ?> }
                  ]
              }

,
			  {        
        		  type: "line",
         		  showInLegend:true,
         	      legendText:'Consumption',
        		  dataPoints: [
        			{ label: "January", y: <?php echo $mytestdraft->janusagem ?> },
        			{ label: "February", y: <?php echo $mytestdraft->febusagem ?>},
        			{ label: "March", y: <?php echo $mytestdraft->marusagem ?> },
        			{ label: "April", y: <?php echo $mytestdraft->aprusagem ?> },
        	 		{ label: "May", y: <?php echo $mytestdraft->mayusagem ?> },
        			{ label: "June", y: <?php echo $mytestdraft->junusagem ?> },
        			{ label: "July", y: <?php echo $mytestdraft->julusagem ?> },
        			{ label: "August", y: <?php echo $mytestdraft->augusagem ?> },
        			{ label: "September", y: <?php echo $mytestdraft->sepusagem ?>},
        			{ label: "October", y: <?php echo $mytestdraft->octusagem ?>},
        			{ label: "November", y: <?php echo $mytestdraft->novusagem ?>},
        			{ label: "December", y: <?php echo $mytestdraft->decusagem ?>},
        			]
              }//end of line graph
              ]//end of data
          });//end of var chartfinancial
          chartenergy.render();
          chartfinancial.render();
<?php
				  }
				  ?>          
      }
  </script>
  
<script type="text/javascript" src="/wp-content/themes/circular/canvasjs.min.js"></script> 

<div id="energysummary" style="height: 300px; width: 100%;">
</div>
<br>
<br>
<div id="financialsummary" style="height: 300px; width: 100%;">
</div>
	<br>
	<br>
<?php
}


function circ_agent_edit() {
?>
<div class="wrap">
	<h2>Edit Summary</h2>
	<?php
	//$idofselectedproposal=$idofselectedproposal + 1; 
	//echo $idofselectedproposal;
	$blahvariab=$_POST["selsub"];
	//echo $blahvariab;
	$trimmed=substr($blahvariab,13,15);
	echo $trimmed;
	?>
	<br>
	<?php
	//echo "blah";
	global $wpdb;
	$mytestdrafts = $wpdb->get_results("
	SELECT *
	FROM circular
	WHERE ID=$trimmed"
	);
	foreach($mytestdrafts as $mytestdraft)
	{
		$jobnamevar=$mytestdraft->jobname;
		echo $jobnamevar;
		?>
		<br>
		<?php

		$mytestdrafts6 = $wpdb->get_results("
		SELECT *
		FROM circular
		WHERE jobname='$jobnamevar'
		"
		);	
		foreach($mytestdrafts6 as $mytestdraft)
		{
			echo $mytestdraft->proposalname;
			?>
			<br>
			<?php
		}
		?>
		<form method="post" action="http://localhost/wp-admin/admin.php?page=circ-agent-summary">
		Select Proposal
		<input type="text" name="selectproposal" />
		<input type="submit" value="Select Proposal" class='button-primary' id='submitbutton' name="SelectProposal1">
		</form>
		<?php
	}
	foreach($mytestdrafts as $mytestdraft)
	{
?>

	<form method="post" action="http://localhost/wp-admin/admin.php?page=circ-agent-summary">
	    <h3>Design Consultant Info</h3>
	    DC Name:
	    <input type="text" name="edcname" value="<?php echo $mytestdraft->dcname; ?>">
	    <br>
	    DC Email:
	    <input type="text" name="edcemail" value="<?php echo $mytestdraft->dcemail; ?>">
	    <br>
	    DC Phone:
	    <input type="text" name="edcphone" value="<?php echo $mytestdraft->dcphone; ?>">
	    <br>
	    <h3>Customer Info</h3>
	    Proposal Name:
		<input type="text" name="eproposalname" value="<?php echo $mytestdraft->proposalname;  ?>" />
		<br>
	    Proposal Date:
		<input type="date" name="eproposaldate" value="<?php echo $mytestdraft->proposaldate;  ?>" />
		<br>
		Prefix:
		<input type="text" name="eprefix" value="<?php echo $mytestdraft->prefix;  ?>" />
		First:
		<input type="text" name="efirstname" value="<?php echo $mytestdraft->firstname;  ?>" />
		Last:
		<input type="text" name="elastname" value="<?php echo $mytestdraft->lastname;  ?>" />
		<br>
		Address:
		<input type="text" name="eaddress" value="<?php echo $mytestdraft->address;  ?>"/>
		City:
		<input type="text" name="ecity" id="cityinput" value="<?php echo $mytestdraft->city;  ?>"/>
		State:
		<input type="text" name="estate" value="<?php echo $mytestdraft->state;  ?>"/>
		Zip Code:
		<input type="text" name="ezipcode" value="<?php echo $mytestdraft->zipcode; ?>"/>	    
		<br>
		State Sales Tax:
		<input type="text" name="estatesalestax" value="<?php echo $mytestdraft->statesalestax; ?>">
		<br>
		Client Phone:
		<input type="text" name="eclientphone" value="<?php echo $mytestdraft->clientphone; ?>" />
		Client Email:
		<input type="text" name="eclientemail" value="<?php echo $mytestdraft->clientemail; ?>" />
		<br>
		Roof Type:
		<select name="erooftype" />
		<option value="Shingle" id="shingle">Shingle</option>
		<option value="Metal" id="metal">Metal</option>
		<option value="Tile" id="tile">Tile</option>
		<option value="Ground Mount" id="groundmount">Ground Mount</option>
		<option value="Pole Mount" id="polemount">Pole Mount</option>
		</select>
		
		<?php if($mytestdraft->rooftype=="Shingle"){?>
		<script>document.getElementById("shingle").selected = "true";</script>
		<?php } ?>
		<?php if($mytestdraft->rooftype=="Metal"){?>
		<script>document.getElementById("metal").selected = "true";</script>
		<?php } ?>
		<?php if($mytestdraft->rooftype=="Tile"){?>
		<script>document.getElementById("tile").selected = "true";</script>
		<?php } ?>
		<?php if($mytestdraft->rooftype=="Ground Mount"){?>
		<script>document.getElementById("groundmount").selected = "true";</script>
		<?php } ?>
		<?php if($mytestdraft->rooftype=="Pole Mount"){?>
		<script>document.getElementById("polemount").selected = "true";</script>
		<?php } ?>

		<br>
		Referral:
		<input type="radio" name="ereferral" value="Yes" id="refyes"/>Yes
		<input type="radio" name="ereferral" value="No" id="refno"/>No
		<?php if($mytestdraft->referral=="Yes"){?>
		<script>document.getElementById("refyes").checked = "true";</script>
		<?php } ?>
		<?php if($mytestdraft->referral=="No"){?>
		<script>document.getElementById("refno").checked = "true";</script>
		<?php } ?>
		
		<h2>Customers Energy Use</h2>
		Energy Provider:
		<select name="eenergyprovider"/>
		<option value="Austin Energy" id="austinenergy">Austin Energy</option>
		<option value="CPS" id="cps">CPS</option>
		<option value="Oncor" id="oncor">Oncor</option>
		<option value="Denton" id="denton">Denton</option>
		<option value="Other" id="other">Other</option>
		</select>
		<br>
		
		<?php if($mytestdraft->energyprovider=="Austin Energy"){?>
		<script>document.getElementById("austinenergy").selected = "true";</script>
		<?php } ?>
		<?php if($mytestdraft->energyprovider=="CPS"){?>
		<script>document.getElementById("cps").selected = "true";</script>
		<?php } ?>
		<?php if($mytestdraft->energyprovider=="Oncor"){?>
		<script>document.getElementById("oncor").selected = "true";</script>
		<?php } ?>
		<?php if($mytestdraft->energyprovider=="Denton"){?>
		<script>document.getElementById("denton").selected = "true";</script>
		<?php } ?>
		<?php if($mytestdraft->energyprovider=="Other"){?>
		<script>document.getElementById("other").selected = "true";</script>
		<?php } ?>
	Previous Use Available:
	<br>
		<span id="12monthsuseavail">
			<input type="radio" name="eprevioususeavail" value="12monthskwh" id="12monthskwhv"/>12 Months kWh
		</span>
		<br>
		<span id="averageuseavail">
			<input type="radio" name="eprevioususeavail" value="average" id="averagev"/>Average Dollar Amount
		</span>
		<br>
		<span id="highlowuseavail">
			<input type="radio" name="eprevioususeavail" value="highlow" id="highlowv"/>High-Low Dollar Amounts
		</span>
		<?php if($mytestdraft->previoususeavail=="12monthskwh"){?>
		<script>document.getElementById("12monthskwhv").checked = "true";</script>
		<?php } ?>
		<?php if($mytestdraft->previoususeavail=="average"){?>
		<script>document.getElementById("averagev").checked = "true";</script>
		<?php } ?>
		<?php if($mytestdraft->previoususeavail=="highlow"){?>
		<script>document.getElementById("highlowv").checked = "true";</script>
		<?php } ?>
		<br>
		<br>
	<div id="12monthskwh">
	<h3>Energy Usage (kWh)</h3>
	January:
	<input type="text" name="ejanusage" value="<?php echo $mytestdraft->janusage; ?>">
	February:
	<input type="text" name="efebusage" value="<?php echo $mytestdraft->febusage; ?>">
	<br>
	March:
	<input type="text" name="emarusage" value="<?php echo $mytestdraft->marusage; ?>">
	April:
	<input type="text" name="eaprusage" value="<?php echo $mytestdraft->aprusage; ?>">
	<br>
	May:
	<input type="text" name="emayusage" value="<?php echo $mytestdraft->mayusage; ?>">
	June:
	<input type="text" name="ejunusage" value="<?php echo $mytestdraft->junusage; ?>">
	<br>
	July:
	<input type="text" name="ejulusage" value="<?php echo $mytestdraft->julusage; ?>">
	August:
	<input type="text" name="eaugusage" value="<?php echo $mytestdraft->augusage; ?>">
	<br>
	September:
	<input type="text" name="esepusage" value="<?php echo $mytestdraft->sepusage; ?>">
	October:
	<input type="text" name="eoctusage" value="<?php echo $mytestdraft->octusage; ?>">
	<br>
	November:
	<input type="text" name="enovusage" value="<?php echo $mytestdraft->novusage; ?>">
	December:
	<input type="text" name="edecusage" value="<?php echo $mytestdraft->decusage; ?>">
	<br>
	
</div>
<div id="averagedollaramount">
<h3>Energy Usage Average ($)</h3>
Average Dollar Amount
<input type="text" name="eaveragedollaramount" value="<?php echo $mytestdraft->averagedollaramount; ?>">
</div>
<div id="highlowdollaramount">
<h3>Energy Usage (High - Low)</h3>
High Dollar Amount
<input type="text" name="ehighdollaramount" value="<?php echo $mytestdraft->highdollaramount; ?>">
<br>
Low Dollar Amount
<input type="text" name="elowdollaramount" value="<?php echo $mytestdraft->lowdollaramount; ?>">
</div>



	<h2>System Specs</h2>
	Panel Type

<select name="epaneltype" />
	<option value="Q.PRO-G3-255" id="Q.PRO-G3-255">Q.PRO-G3-255</option>
	<option value="LG270S1C-A3" id="LG270S1C-A3">LG270S1C-A3</option>
	<option value="LG275S1C-B3" id="LG275S1C-B3">LG275S1C-B3</option>
	<option value="LG300N1C-B3" id="LG300N1C-B3">LG300N1C-B3</option>
	<option value="SPR-E20-327" id="SPR-E20-327">SPR-E20-327</option>
	<option value="SPR-X21-335-BLK" id="SPR-X21-335-BLK">SPR-X21-335-BLK</option>
	<option value="SPR-X21-345" id="SPR-X21-345">SPR-X21-345</option>
	<option value="SPR-E20-327" id="SPR-E20-327">SPR-E20-327</option>
	<option value="SPR-X21-335-BLK" id="SPR-X21-335-BLK">SPR-X21-335-BLK</option>
	<option value="SPR-X21-345" id="SPR-X21-345">SPR-X21-345</option>
	<option value="Custom Build">Custom Build</option>
	</select> 

	<?php if($mytestdraft->paneltype=="Q.PRO-G3-255"){?>
	<script>document.getElementById("Q.PRO-G3-255").selected = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->paneltype=="LG270S1C-A3"){?>
	<script>document.getElementById("LG270S1C-A3").selected = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->paneltype=="LG275S1C-B3"){?>
	<script>document.getElementById("LG275S1C-B3").selected = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->paneltype=="LG300N1C-B3"){?>
	<script>document.getElementById("LG300N1C-B3").selected = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->paneltype=="SPR-E20-327"){?>
	<script>document.getElementById("SPR-E20-327").selected = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->paneltype=="SPR-X21-335-BLK"){?>
	<script>document.getElementById("SPR-X21-335-BLK").selected = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->paneltype=="SPR-X21-345"){?>
	<script>document.getElementById("SPR-X21-345").selected = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->paneltype=="SPR-E20-327"){?>
	<script>document.getElementById("SPR-E20-327").selected = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->paneltype=="SPR-X21-335-BLK"){?>
	<script>document.getElementById("SPR-X21-335-BLK").selected = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->paneltype=="SPR-X21-345"){?>
	<script>document.getElementById("SPR-X21-345").selected = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->paneltype=="Custom Build"){?>
	<script>document.getElementById("custombuild").selected = "true";</script>
	<?php } ?>

	<br>
	Inverter Manufacturer:
	<select name="einvertermanufacturer" />
	<option value="enphase" id="enphase">Enphase</option>
	<option value="fronius" id="fronius">Fronius</option>
	<option value="sma" id="sma">SMA</option>
	<option value="solaredge" id="solaredge">Solar Edge</option>
	</select>
	<?php if($mytestdraft->invertermanufacturer=="enphase"){?>
	<script>document.getElementById("enphase").selected = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->invertermanufacturer=="fronius"){?>
	<script>document.getElementById("fronius").selected = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->invertermanufacturer=="sma"){?>
	<script>document.getElementById("sma").selected = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->invertermanufacturer=="solaredge"){?>
	<script>document.getElementById("solaredge").selected = "true";</script>
	<?php } ?>
	Inverter Model:
	<select name="einvertermodel" />
	<option value="enphase" id="enphase">Enphase, M215-60-2LL-S22/S23, 215W</option>
	<option value="fronius" id="fronius">Enphase, M250-60-2LL-S22/S23, 250W</option>
	<option value="sma" id="sma">SMA</option>
	<option value="solaredge" id="solaredge">Solar Edge</option>
	</select>
	<br>
	Inverter Efficiency:
	<input type="text" name="einverterefficiency" value="<?php echo $mytestdraft->inverterefficiency; ?>">
	<br>
	Monitoring:
	<input type="text" name="emonitoring" value="<?php echo $mytestdraft->monitoring; ?>">
	<br>
	Orientation:
	<input type="text" name="eorientation" value="<?php echo $mytestdraft->orientation; ?>">
	<br>
	# of Arrays:
	<span id="numarrayone">
		<input type="radio" name="enumberofarrays" value="1" id="numarrays1"/>1
	</span>
	<span id="numarraytwo">
		<input type="radio" name="enumberofarrays" value="2" id="numarrays2"/>2
	</span>
	<span id="numarraythree">
		<input type="radio" name="enumberofarrays" value="3" id="numarrays3"/>3
	</span>
	<span id="numarrayfour">
		<input type="radio" name="enumberofarrays" value="4" id="numarrays4"/>4
	</span>
	<span id="numarrayfive">
		<input type="radio" name="enumberofarrays" value="5" id="numarrays5"/>5
	</span>
	<br>
	# of Sub-Arrays:
	<input type="text" name="enumofsubarrays" value="<?php echo $mytestdraft->numofsubarrays; ?>">
	
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<?php if($mytestdraft->numberofarrays=="1"){?>
	<script>document.getElementById("numarrays1").checked = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->numberofarrays=="2"){?>
	<script>document.getElementById("numarrays2").checked = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->numberofarrays=="3"){?>
	<script>document.getElementById("numarrays3").checked = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->numberofarrays=="4"){?>
	<script>document.getElementById("numarrays4").checked = "true";</script>
	<?php } ?>
	<?php if($mytestdraft->numberofarrays=="5"){?>
	<script>document.getElementById("numarrays5").checked = "true";</script>
	<?php } ?>
	<br>
	

<div id="onearray">
	<h3>Array 1</h3>
	Number of Panels:
	<input type="text" name="enumberofpanels1" value="<?php echo $mytestdraft->numberofpanels1; ?>">
	<br>
	Azimuth:
	<input type="text" name="eazimuth1" value="<?php echo $mytestdraft->azimuth1; ?>">
	<br>
	Tilt:
	<input type="text" name="etilt1" value="<?php echo $mytestdraft->tilt1; ?>">
	<br>
</div>
<div id="twoarray">
	<h3>Array 2</h3>
	Number of Panels:
	<input type="text" name="enumberofpanels2" value="<?php echo $mytestdraft->numberofpanels2; ?>">
	<br>
	Azimuth:
	<input type="text" name="eazimuth2" value="<?php echo $mytestdraft->azimuth2; ?>">
	<br>
	Tilt:
	<input type="text" name="etilt2" value="<?php echo $mytestdraft->tilt2; ?>">
	<br>
</div>
<div id="threearray">
	<h3>Array 3</h3>
	Number of Panels:
	<input type="text" name="enumberofpanels3" value="<?php echo $mytestdraft->numberofpanels3; ?>">
	<br>
	Azimuth:
	<input type="text" name="eazimuth3" value="<?php echo $mytestdraft->azimuth3; ?>">
	<br>
	Tilt:
	<input type="text" name="etilt3" value="<?php echo $mytestdraft->tilt3; ?>">
	<br>
</div>
<div id="fourarray">
	<h3>Array 4</h3>
	Number of Panels:
	<input type="text" name="enumberofpanels4" value="<?php echo $mytestdraft->numberofpanels4; ?>">
	<br>
	Azimuth:
	<input type="text" name="eazimuth4" value="<?php echo $mytestdraft->azimuth4; ?>">
	<br>
	Tilt:
	<input type="text" name="etilt4" value="<?php echo $mytestdraft->tilt4; ?>">
	<br>
</div>
<div id="fivearray">
	<h3>Array 5</h3>
	Number of Panels:
	<input type="text" name="enumberofpanels5" value="<?php echo $mytestdraft->numberofpanels5; ?>">
	<br>
	Azimuth:
	<input type="text" name="eazimuth5" value="<?php echo $mytestdraft->azimuth5; ?>">
	<br>
	Tilt:
	<input type="text" name="etilt5" value="<?php echo $mytestdraft->tilt5; ?>">
	<br>
</div>


<script>
$(document).ready(function($){
	
   $("#numarrayone").click(function(){
    $("#onearray").show();
    $("#twoarray").hide();
    $("#threearray").hide();
    $("#fourarray").hide();
    $("#fivearray").hide();
   });

   $("#numarraytwo").click(function(){
    $("#onearray").show();
    $("#twoarray").show();
    $("#threearray").hide();
    $("#fourarray").hide();
    $("#fivearray").hide();
   });
   $("#numarraythree").click(function(){
    $("#onearray").show();
    $("#twoarray").show();
    $("#threearray").show();
    $("#fourarray").hide();
    $("#fivearray").hide();
   });
   $("#numarrayfour").click(function(){
    $("#onearray").show();
    $("#twoarray").show();
    $("#threearray").show();
    $("#fourarray").show();
    $("#fivearray").hide();
   });
   $("#numarrayfive").click(function(){
    $("#onearray").show();
    $("#twoarray").show();
    $("#threearray").show();
    $("#fourarray").show();
    $("#fivearray").show();
   });
$("#12monthsuseavail").click(function(){
    $("#12monthskwh").show();
    $("#highlowdollaramount").hide();
    $("#averagedollaramount").hide();
   });
$("#highlowuseavail").click(function(){
    $("#12monthskwh").hide();
    $("#highlowdollaramount").show();
    $("#averagedollaramount").hide();
   });
$("#averageuseavail").click(function(){
    $("#12monthskwh").hide();
    $("#highlowdollaramount").hide();
    $("#averagedollaramount").show();
   });
 });	
</script>
<br>
<input type="submit" value="Save" class='button-primary' id='submitbutton' name="Submit1">
<input type="submit" value="Save As New" class='button-primary' id='submitbutton' name="Submit3">


</form>
<?php	
	}
?>
</div>
<?php
}