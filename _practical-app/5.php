<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	echo pow(3,2);
	echo "<br>"."<hr>";

	$string = "This is a string";
	echo strtoupper($string) . "<br>";
	echo strtolower($string) . "<br>" ."<hr>";

	$values = ['sadfa' ,3243,'342432',$string];
	$found = in_array($string, $values);

	

	if($found){
		echo "we found it!";
	}else{
		echo "FAILED!";
	}


?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>