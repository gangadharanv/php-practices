<?php
require('WriteHTML.php');
include_once "config.php";

if(!isset($_POST['submit'])){

	 header("location:index.php");
	exit;
}
//print_r($_POST);
	$name = $_POST['name'];
	$email = $_POST['email'];
	$url = $_POST['url'];
	$comment = $_POST['comment'];
	//echo $name .''.$email.''.$url.''.$comment;
	$sql = "INSERT INTO pdf_form_table VALUES(NULL,'".$name."','".$email."','".$url."','".$comment."')";
	mysql_query($sql);

$pdf=new PDF_HTML();

$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 15);

$pdf->AddPage();
// $pdf->Image('logo.png',18,13,33);
$pdf->SetFont('Arial','B',14);
// $pdf->WriteHTML('<para><br>
// Website: </para><br><br>How to Convert HTML to PDF with fpdf example');
$pdf->SetFont('Arial','B',7); 
$htmlTable='<TABLE>
<TR>
	<TD>Name:</TD>
	
    <TD>'.$_POST['name'].'</TD>
</TR>
<TR>
	<TD>Email:</TD>
	<TD>'.$_POST['email'].'</TD>
</TR>
<TR>
	<TD>URl:</TD>
	<TD>'.$_POST['url'].'</TD>
</TR>
<TR>
	<TD>Comment:</TD>
	<TD>'.$_POST['comment'].'</TD>
</TR>
</TABLE>';

$pdf->WriteHTML2("<br><br><br>$htmlTable");
$pdf->SetFont('Arial','B',6);
$pdf->Output(); 

?>	