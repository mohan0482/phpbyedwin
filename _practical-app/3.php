<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  
	if (4 > 10) {
		echo "No PHP";
	} elseif(4 < 10) {
		echo "I love PHP <br>";
	} else {
		echo "NO <br>";
	}
	
for ($i=1; $i <= 10; $i++) { 
	echo $i . "<br>";
}

switch ($v = 12) {
	case '9':
		echo "9 ";
		break;
	case '10':
		echo " 10";
		break;
	case '12':
		echo "found 12";
		break;
	case '13':
		echo "13 ";
		break;
	case '14':
		echo "14 ";
		break;
	default:
		echo " Not found";
		break;
}
/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP


	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>