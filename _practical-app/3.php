<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

$varTest = 3;
if($varTest == 3){
	echo "I love PHP!\n";
	echo $varTest;
	
}
elseif($varTest == 4){
	echo "I love PHP!\n";
	echo $varTest;
	
}
else{
	echo "this is else";
}
	echo "<hr>";

for($counter = 0; $counter <10 ; $counter++){
	echo $counter . " ";
}
echo "<br>";
$counter =2;
switch($counter){
	case 1:
		echo "This is case 1 <br>";
		break;
	case 2:
		echo "This is case 2 <br>";
	case 3:
		echo "this is case 3\n";
		break;
	case 4:
		echo "this is case 4\n";
	case 5:
		echo "this is case 5\n";
		break;
	default:
		echo "no cases\n";
}




?>

</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>