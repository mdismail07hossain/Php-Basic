<?php
//Step 2:
require_once("cus.php");

if(isset($_POST["bSubmit"])){

    $cusid=$_POST["cusId"];
    $cusname=$_POST["cusName"];

    $obj=new Customer($cusid,$cusname);
    $obj->save_data();
    echo "Thank you for your buying..";
}

//  Customer::cus_all();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" >
	<div>
	Customaer_ID :<br/>
	<input type="text" name="cusId" />
	</div>
	<div>
	Customaer_Name :<br/>
	<input type="text" name="cusName" />
	</div>

	<div>
	<input type="submit" name="bSubmit" value="Submit" />
	</div>
</form>

<?php
 Customer::cus_all();
 ?>
</body>
</html>