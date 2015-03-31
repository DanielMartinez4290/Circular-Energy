<?php
/* Template Name: Contract Form*/
?>
<?php
include("wp-content/themes/circular/mpdf/mpdf.php");
ob_end_clean();
$mpdf = new mPDF();
ob_start();
?>
<div id="contractformfirstpage">	
	<div id="contractform">
			Project Revenue: <?php echo "$_POST[qbprojectrevenue]" ?>
	</div>
	<div id="pdffofooterphone">
			GM: <?php echo "$_POST[qbgm]" ?>
	</div>
	<div id="pdffofooterphone">
			Related Customer: <?php echo "$_POST[qbrelatedcustomer]" ?>
	</div>
</div>
<?php	
$html5=ob_get_contents();
ob_end_clean();
$mpdf->debug = true;    
$mpdf->WriteHTML($html5);
$mpdf->Output();
exit; 