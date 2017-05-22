<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<?php
$cat=$_POST['clothes'];
$ctr=$_POST['country'];
$pat[0]="/ая одежда$/i";
$pat[1]="/а$/i";
$pat[2]="/ия$/i";
$pat[3]="/н$/i";
$pat[4]="/и$/i";
$pat[5]="/ет$/i";
$pat[6]="/р$/i";
$pat[7]="/о$/i";
$pat[8]="/й$/i";
$pat[9]="/д$/i";
$pat[10]="/ки$/i";
$pat[11]="/ь$/i";
$pat[12]="/я$/i";
$clothes[13]="/cы$/i";

$repl[0]="ой одежды";
$repl[1]="ы";
$repl[2]="ии";
$repl[3]="на";
$repl[4]="и";
$repl[5]="та";
$repl[6]="ра";
$repl[7]="о";
$repl[8]="я";
$repl[9]="д";	
$repl[10]="ек";
$repl[11]="и";
$repl[12]="и";
$clot[13]="ов";

	$cat=preg_replace($pat, $repl, $cat);
	$ctr=preg_replace($pat, $repl, $ctr);
	if (isset($_POST['done'])) {
		echo "База производителей"." ".$cat." "."из"." ".$ctr;
	}
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <form name="test" method="post" action="DRAFT_1.php">
  	<input type="text" name="clothes" placeholder="Введите категорию" ><br>
  	<input type="text" name="country" placeholder="Введите страну" ><br>
  	<input type="submit" name="done" value="Отправить">
  </form>

