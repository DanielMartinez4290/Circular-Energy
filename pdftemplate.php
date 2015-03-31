<?php
/* Template Name: PDF Template*/
?>
<?php
// This must be defined before including mpdf.php file
define("_JPGRAPH_PATH", 'wp-content/themes/circular/src/'); 
include("wp-content/themes/circular/mpdf/mpdf.php");
// Change these if necessary to the name of font files you can access from JPGraph
define("_TTF_FONT_NORMAL", 'arial.ttf');
define("_TTF_FONT_BOLD", 'arialbd.ttf');
$mpdf=new mPDF('','', 0, '', 4, 4, -5, 4, 0, 0);
// This must be set to allow mPDF to parse table data
$mpdf->useGraphs = true;
ob_start();
?>
<div id="pdffrontpage">
	<div id="pdffrontpagecompany">	
			<?php echo "$_POST[pdfcompanyinput]" ?>
		</div>
		<div id="pdffrontpageinstall">
			<?php echo "$_POST[pdfinstallationinput]" ?>
		</div>
		<div id="pdffrontpagepreparedfor">
			<?php echo "$_POST[pdfpreparedforinput]" ?>
		</div>
		<div id="pdffrontpagecompany2">
			<?php echo "$_POST[pdfcompanyinput]" ?>
		</div>
		<div id="pdffrontpageaddress">
			<?php echo "$_POST[pdfaddressinput]" ?>
		</div>
		<div id="pdffrontpagedate">
			<?php echo "$_POST[pdfdateinput]" ?>
		</div>
		<div id="pdffrontpagecontact">
			<?php echo "$_POST[pdfcontactinput]" ?>
		</div>
</div>
		<div id="pdfsecondpage">
			<div id="pdfspoverviewtitle">
				Overview
			</div>
			<div id="pdfspoverview">
				<?php echo "$_POST[pdfspoverviewinput]" ?>
			</div>
			<div id="pdfspeconomicssummarytitle">
				Economics Summary
			</div>
			<div id="pdfspinvestmenttitle">
				Investment
			</div>
			<div id="pdfspannualsavingstitle">
				Annual Savings
			</div>
			<div id="pdfspsimplepaybacktitle">
				Simple Payback (yrs)
			</div>
			<div id="pdfspinvestment">
				<?php echo "$_POST[pdfspinvestmentinput]" ?>
			</div>
			<div id="pdfspannualsavings">
				<?php echo "$_POST[pdfspannualsavingsinput]" ?>
			</div>
			<div id="pdfspsimplepayback">
				<?php echo "$_POST[pdfspsimplepaybackinput]" ?>
			</div>
			<div id="pdfsplifecyclesavingstitle">
				Lifecycle Savings
			</div>
			<div id="pdfsplifecyclesavings">
				<?php echo "$_POST[pdfsplifecyclesavingsinput]" ?>
			</div>
			<div id="pdfspsirtitle">
				SIR
			</div>
			<div id="pdfspirrtitle">
				IRR
			</div>
			<div id="pdfspnpvtitle">
				NPV
			</div>
			<div id="pdfspsir">
				<?php echo "$_POST[pdfspsirinput]" ?>
			</div>
			<div id="pdfspirr">
				<?php echo "$_POST[pdfspirrinput]" ?>
			</div>
			<div id="pdfspnpv">
				<?php echo "$_POST[pdfspnpvinput]" ?>
			</div>
			<div id="pdfsputilityescalationratetitle">
				Utility Escalation Rate:
			</div>
			<div id="pdfsputilityescalationrate">
				<?php echo "$_POST[pdfsputilityescalationrateinput]" ?> |
			</div>
			<div id="pdfspequipmentlifetitle">
				Equipment Life:
			</div>
			<div id="pdfspequipmentlife">
				<?php echo "$_POST[pdfspequipmentlifeinput]" ?> |
			</div>
			<div id="pdfspdiscountratetitle">
				Discount Rate:
			</div>
			<div id="pdfspdiscountrate">
				<?php echo "$_POST[pdfspdiscountrateinput]" ?>
			</div>
			<div id="pdfspexamplefinancingcashflowtitle">
				Example Financing Cash Flow
			</div>
			<div id="pdfspassumesagoodcredittitle">
				(Assumes a good credit rating and final payments may vary.)
			</div>
			<div id="pdfsptermlengthtitle">
				Term Length:
			</div>
			<div id="pdfsptermlength">
				<?php echo "$_POST[pdfsptermlengthinput]" ?>
			</div>
			<div id="pdfspannualpaymenttitle">
				Annual Payment:
			</div>
			<div id="pdfspannualpayment">
				<?php echo "$_POST[pdfspannualpaymentinput]" ?>
			</div>
			<div id="pdfspannualcashflowtitle">
				Annual Cash flow:
			</div>
			<div id="pdfspannualcashflow">
				<?php echo "$_POST[pdfspannualcashflowinput]" ?>
			</div>
			<div id="pdfspannualsavingssectiontitle">
				Annual Savings
			</div>
			<div id="pdfsputilitytypetitle">
				Utility Type
			</div>
			<div id="pdfsputilityimpacttitle">
				Utility Impact
			</div>
			<div id="pdfspunitcosttitle">
				Unit Cost
			</div>
			<div id="pdfspannualsavingstitle2">
				Annual Savings
			</div>
			<div id="pdfspelectricitytitle">
				Electricity
			</div>
			<div id="pdfsputilityimpact">
				<?php echo "$_POST[pdfsputilityimpactinput]" ?>
			</div>
			<div id="pdfspunitcost">
				<?php echo "$_POST[pdfspunitcostinput]" ?>
			</div>
			<div id="pdfspelectricityannual">
				<?php echo "$_POST[pdfspelectricityannualinput]" ?>
			</div>
			<div id="pdfspmaintenancesavingstitle">
				Maintenance Savings
			</div>
			<div id="pdfspmaintenancesavingsannual">
				<?php echo "$_POST[pdfspmaintenancesavingsannualinput]" ?>
			</div>
			<div id="pdfsptotalannualsavingstitle">
				Total Annual Savings
			</div>
			<div id="pdfsptotalannualsavings">
				<?php echo "$_POST[pdfsptotalannualsavingsinput]" ?>
			</div>
			<div id="pdffooteremail">
				<?php echo "$_POST[pdffooteremailinput]" ?>
			</div>
			<div id="pdffooterphone">
				<?php echo "$_POST[pdffooterphoneinput]" ?>
			</div>
<!--
<div id="pdfsphidetable">
<table id="tbl_1"><tbody>
<tr><td></td><td><b>Energy Cost</b></td></tr>
<tr><td>Year 0</td><td><b>120000</b></td></tr>
<tr><td> </td><td><b>122000</b></td></tr>
<tr><td>Year 2</td><td><b>124000</b></td></tr>
<tr><td> </td><td><b>126000</b></td></tr>
<tr><td> </td><td><b>126000</b></td></tr>
<tr><td> </td><td><b>126000</b></td></tr>
<tr><td> </td><td><b>126000</b></td></tr>
<tr><td> </td><td><b>126000</b></td></tr>
<tr><td> </td><td><b>126000</b></td></tr>
<tr><td> </td><td><b>126000</b></td></tr>
<tr><td> </td><td><b>126000</b></td></tr>
<tr><td> </td><td><b>126000</b></td></tr>
<tr><td> </td><td><b>126000</b></td></tr>
</tbody></table>
</div>
<div id="pdfspgraph">
<jpgraph table="tbl_1" type="bar"  series="cols" data-row-end="-1" show-values="1" height="300" width="600" legend-overlap="1" hide-grid="1" />
</div>
-->
</div>
<?php echo "why does this work"; ?>
<div id="pdfthirdpage">
	<div id="pdftptitle">
		<?php echo "$_POST[pdftpheaderinput]" ?>
	</div>
	<div id="pdftpline">
		____________________________________________________________________________________
	</div>
	<div id="pdftpdesc">
		<?php echo "$_POST[pdftpdescinput]" ?>
	</div>	
	<div id="pdftpcity">
		<?php echo "$_POST[pdftpcityinput]" ?>
	</div>
	<div id="pdftplatitude">
		<?php
			$pdflatitude="$_POST[pdftplatitudeinput]";
		 	echo $pdflatitude;
		?>
	</div>
	<div id="pdftplongitude">
		<?php
			$pdflongitude="$_POST[pdftplongitudeinput]";
		 	echo $pdflongitude;
		?>
	</div>
	<div id="pdftpsize">
		<?php
			$pdfsize="$_POST[pdftpsizeinput]";
		 	echo $pdfsize;
		?>
	</div>
	<div id="pdftpnumpanels">
		<?php
			$pdfnumpanels="$_POST[pdftpnumpanelsinput]";
		 	echo $pdfnumpanels;
		?>
	</div>
	<div id="pdftpmoduletype">
		<?php echo "$_POST[pdftpmoduletypeinput]" ?>
	</div>
	<div id="pdftpinverter">
		<?php echo "$_POST[pdftpinverterinput]" ?>
	</div>
	<div id="pdftpazimuth">
		<?php
			$pdfazimuth="$_POST[pdftpazimuthinput]";
		 	echo $pdfazimuth;
		?>	
	</div>
	<div id="pdftppitch">
		<?php echo "$_POST[pdftppitchinput]" ?>
	</div>
	<div id="pdftpinstallationtype">
		<?php echo "$_POST[pdftpinstallationtypeinput]" ?>
	</div>
	<div id="pdftpfooteremail">
		<?php echo "$_POST[pdffooteremailinput]" ?>
	</div>
	<div id="pdftpfooterphone">
		<?php echo "$_POST[pdffooterphoneinput]" ?>
	</div>
</div>
<?php echo "still don't know why I need this"; ?>
<div id="pdffourthpage">
<?php	
		$pdfsystemcapacity=($pdfsize*$pdfnumpanels)/1000;
		$pdftilt=30;
		$pdfsystemlosses=23;
	    $response1 =wp_remote_retrieve_body(wp_remote_get( 'http://developer.nrel.gov/api/pvwatts/v5.json?api_key=rojJKveIzwiREkkAqxW0YmdT1dcqNT129HjqOeOi&lat='.$pdflatitude.'&lon='.$pdflongitude.'&system_capacity='.$pdfsystemcapacity.'&azimuth='.$pdfazimuth.'&tilt='.$pdftilt.'&array_type=1&module_type=1&losses='.$pdfsystemlosses.''));
	    $arrayofinputs1=json_decode($response1,true);
	    $arrayofinputs1;
	    $outputsarray1=$arrayofinputs1['outputs'];
	    $acmonthlyarray1=$outputsarray1['ac_monthly'];
	    $solarradarray=$outputsarray1['solrad_monthly'];
	    $kwhperyear=$acmonthlyarray1[0]+$acmonthlyarray1[1]+$acmonthlyarray1[2]+$acmonthlyarray1[3]+$acmonthlyarray1[4]+$acmonthlyarray1[5]+$acmonthlyarray1[6]+$acmonthlyarray1[7]+$acmonthlyarray1[8]+$acmonthlyarray1[9]+$acmonthlyarray1[10]+$acmonthlyarray1[11];
	    $solarradannual=($solarradarray[0]+$solarradarray[1]+$solarradarray[2]+$solarradarray[3]+$solarradarray[4]+$solarradarray[5]+$solarradarray[6]+$solarradarray[7]+$solarradarray[8]+$solarradarray[9]+$solarradarray[10]+$solarradarray[11])/12;
	    
	    ?>
	    <div id="pdffokwhperyear">
	    	<?php echo substr_replace(substr($kwhperyear,0,6), ',', 3, 0); ?>
	    </div>
	    <div id="pdffojanrad">
	    	<?php echo substr($solarradarray[0],0,4); ?>
	    </div>
	    <div id="pdffojanacenergy">
	    	<?php echo substr_replace(substr($acmonthlyarray1[0],0,5), ',', 2, 0); ?>
		</div>
		<div id="pdffofebrad">
	    	<?php echo substr($solarradarray[1],0,4); ?>
	    </div>
	    <div id="pdffofebacenergy">
	    	<?php echo substr_replace(substr($acmonthlyarray1[1],0,5), ',', 2, 0); ?>
		</div>
		<div id="pdffomarrad">
	    	<?php echo substr($solarradarray[2],0,4); ?>
	    </div>
	    <div id="pdffomaracenergy">
	    	<?php echo substr_replace(substr($acmonthlyarray1[2],0,5), ',', 2, 0); ?>
		</div>
		<div id="pdffoaprrad">
	    	<?php echo substr($solarradarray[3],0,4); ?>
	    </div>
	    <div id="pdffoapracenergy">
	    	<?php echo substr_replace(substr($acmonthlyarray1[3],0,5), ',', 2, 0); ?>
		</div>
		<div id="pdffomayrad">
	    	<?php echo substr($solarradarray[4],0,4); ?>
	    </div>
	    <div id="pdffomayacenergy">
	    	<?php echo substr_replace(substr($acmonthlyarray1[4],0,5), ',', 2, 0); ?>
		</div>
		<div id="pdffojunrad">
	    	<?php echo substr($solarradarray[5],0,4); ?>
	    </div>
	    <div id="pdffojunacenergy">
	    	<?php echo substr_replace(substr($acmonthlyarray1[5],0,5), ',', 2, 0); ?>
		</div>
		<div id="pdffojulrad">
	    	<?php echo substr($solarradarray[6],0,4); ?>
	    </div>
	    <div id="pdffojulacenergy">
	    	<?php echo substr_replace(substr($acmonthlyarray1[6],0,5), ',', 2, 0); ?>
		</div>
		<div id="pdffoaugrad">
	    	<?php echo substr($solarradarray[7],0,4); ?>
	    </div>
	    <div id="pdffoaugacenergy">
	    	<?php echo substr_replace(substr($acmonthlyarray1[7],0,5), ',', 2, 0); ?>
		</div>
		<div id="pdffoseprad">
	    	<?php echo substr($solarradarray[8],0,4); ?>
	    </div>
	    <div id="pdffosepacenergy">
	    	<?php echo substr_replace(substr($acmonthlyarray1[8],0,5), ',', 2, 0); ?>
		</div>
		<div id="pdffooctrad">
	    	<?php echo substr($solarradarray[9],0,4); ?>
	    </div>
	    <div id="pdffooctacenergy">
	    	<?php echo substr_replace(substr($acmonthlyarray1[9],0,5), ',', 2, 0); ?>
		</div>
		<div id="pdffonovrad">
	    	<?php echo substr($solarradarray[10],0,4); ?>
	    </div>
	    <div id="pdffonovacenergy">
	    	<?php echo substr_replace(substr($acmonthlyarray1[10],0,5), ',', 2, 0); ?>
		</div>
		<div id="pdffodecrad">
	    	<?php echo substr($solarradarray[11],0,4); ?>
	    </div>
	    <div id="pdffodecacenergy">
	    	<?php echo substr_replace(substr($acmonthlyarray1[11],0,5), ',', 2, 0); ?>
		</div>
		<div id="pdfforadannual">
			<?php echo substr($solarradannual,0,4); ?>
		</div>
		<div id="pdffoacenergyannual">
			<?php echo substr_replace(substr($kwhperyear,0,6), ',', 3, 0); ?>
		</div>
		<div id="pdfforequestedlocation">
			<?php echo "$_POST[pdftpcityinput]" ?>
		</div>
		<div id="pdffoweatherdatasource">
			<?php 
			echo "(TMY2) ";
			echo "$_POST[pdftpcityinput]"; 
			?>
		</div>
		<div id="pdffolatitude">
			<?php echo $pdflatitude; ?>
		</div>
		<div id="pdffolongitude">
			<?php echo $pdflongitude; ?>
		</div>
		<div id="pdffodcsystemsize">
		<?php echo $pdfsize; ?>	
		</div>
		<div id="pdffomoduletype">
		<?php echo "$_POST[pdftpmoduletypeinput]" ?>
		</div>
		<div id="pdffoarraytype">
		<?php echo "$_POST[pdftpinstallationtypeinput]" ?>
		</div>
		<div id="pdffoarraytilt">
			<?php echo "$_POST[pdftppitchinput]" ?>
		</div>
		<div id="pdffoarrayazimuth">
			<?php echo $pdfazimuth; ?>
		</div>
		<div id="pdffosystemlosses">
			<?php echo $pdfsystemlosses ?>
		</div>
		<div id="pdffoinverterefficiency">
		<?php echo "$_POST[pdftpinverterinput]" ?>
		</div>
		<div id="pdffodctoacratio">
			1.1
		</div>
		<div id="pdffofooteremail">
			<?php echo "$_POST[pdffooteremailinput]" ?>
		</div>
		<div id="pdffofooterphone">
			<?php echo "$_POST[pdffooterphoneinput]" ?>
		</div>
</div>

<?php
$html10 = ob_get_contents();
ob_end_clean();
$stylesheet = file_get_contents('wp-content/themes/circular/pdftemplate.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($html10,2);
$mpdf->Output();
exit;