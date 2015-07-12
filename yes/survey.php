<?php
include("config.inc.php");
$Dbcon = new connection();
$Dbcon->localarea();
?>
<?php

$schoolname = $_POST["school"];
$schoolauth = $_POST["schoolauth"];
$disasteraffected = $_POST["dis"];
$numberofstudents = $_POST["no"];
$studentpop = $_POST["pop"];
$dest = $_POST["dest"];
$comm = $_post["2"];
$amount = $_POST["amt"];
$constcost = $_POST["cost"];
$newresource = $_POST["newreso"];
$prone = $_POST["prone"];
$value=($disasteraffected*5)+(($numberofstudents/$studentpop)*4)+($dest*3)+($newresource*2)+($prone);
if(isset($_POST["submit"]))
{

	$SqlContent1 = $Dbcon->ExecuteQuery("insert into survey values('','$schoolname','$schoolauth','$disasteraffected','$numberofstudents','$studentpop','$dest','$comm','$constcost','$newresource','$prone','$amount','$value')");

	if($SqlContent1)
	{
	 echo "Your response has been recorded.";
	 echo $value;
	 mail("rachitadevakumar@gmail.com","My subject","Your response");
	}
	else
		echo "Sorry!";
}
?>