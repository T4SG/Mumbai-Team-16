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

if(isset($_POST["submit"]))
{

	echo "Hello";
	$SqlContent1 = $Dbcon->ExecuteQuery("insert into survey values('','$schoolname','$schoolauth','$disasteraffected','$numberofstudents','$studentpop','$dest','$comm','$constcost','$newresource','$prone','$amount')");

	if($SqlContent1)
	{
	 echo "Done!";
	}
	else
		echo "Not done";
}
?>