<?php
$cat=$_POST['clothes'];
$ctr=$_POST['country'];
$pat[0]="/�� ������$/i";
$pat[1]="/�$/i";
$pat[2]="/��$/i";
$pat[3]="/�$/i";
$pat[4]="/�$/i";
$pat[5]="/��$/i";
$pat[6]="/�$/i";
$pat[7]="/�$/i";
$pat[8]="/�$/i";
$pat[9]="/�$/i";
$pat[10]="/��$/i";
$pat[11]="/�$/i";
$pat[12]="/�$/i";
$clothes[13]="/c�$/i";

$repl[0]="�� ������";
$repl[1]="�";
$repl[2]="��";
$repl[3]="��";
$repl[4]="�";
$repl[5]="��";
$repl[6]="��";
$repl[7]="�";
$repl[8]="�";
$repl[9]="�";	
$repl[10]="��";
$repl[11]="�";
$repl[12]="�";
$clot[13]="��";

	$cat=preg_replace($pat, $repl, $cat);
	$ctr=preg_replace($pat, $repl, $ctr);
	if (isset($_POST['done'])) {
		echo "���� ��������������"." ".$cat." "."��"." ".$ctr;
	}
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <form name="test" method="post" action="DRAFT_1.php">
  	<input type="text" name="clothes" placeholder="������� ���������" ><br>
  	<input type="text" name="country" placeholder="������� ������" ><br>
  	<input type="submit" name="done" value="���������">
  </form>

