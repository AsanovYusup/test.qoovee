<?PHP  header("Content-Type: text/html; charset=utf-8");?>
<?php
//проблемы с кодировкой
$r = fopen('dice.txt', 'r');
$i = 0;
$menu = array();
$count=count(file('dice.txt'));
echo $count."<br>";
while (!feof($r)) {
	$s=fgets ($r);
	echo $s."<br>";
	list($left,$front,$right,$back,$top,$bottom)=explode(' ',$s);
	echo "<pre>";
	$menu[$i]['left']=$left;
	$menu[$i]['front']=$front;
	$menu[$i]['right']=$right;
	$menu[$i]['back']=$back;
	$menu[$i]['top']=$top;
	$menu[$i]['bottom']=$bottom;
	$i++;

};
// fclose($r);
// print_r($menu);
// $a=array_chunk($menu, 6 );
// print_r($a);
static $scheme=0;
for ($i=0; $i <count($menu) ; $i++) { 


$a1=$left+$right;
$a2=$front+$back;
$a3=$top+$bottom;

if ($a1==$a2 || $a1==$a3 || $a2==$a3 ) {
	$scheme=1;
		}else{
	$scheme=0;
		}$scheme++;
}
// echo $scheme;
$result=$count-$scheme;
echo "Количество различных схем:".$result;

?>