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
		<style>
			body{
				 background: #d1d1d1;
			}
			section{
				margin-top:200px;
				margin-left:200px;
				width: 400px;
			}
			form{
				padding:20px 30px;
				background-color:white;
				border-radius: 10px;
				box-shadow: 6px 6px 15px rgb(170, 170, 170);
			}
			input{
				width: 100%;
				padding: 10px;
				border: 2px solid #8b8b8b;
				outline: none;
				border-radius: 6px;
				margin-top: 10px;
				margin-bottom: 7px;
			}
			#button{
				width: 100%;
				padding: 10px;
				background-color: #bb00bbc7;
				color: #fff;
				margin-top: 20px;
				border-radius: 7px;
				font-size: 21px;
				text-align: center;
			}
		</style>
		<body>
		<section>
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
			<input id="button" type="submit" name="bSubmit" value="Submit" />
			</div>
		</form>
		</section>

		<?php
		Customer::cus_all();
		?>
		</body>
		</html>