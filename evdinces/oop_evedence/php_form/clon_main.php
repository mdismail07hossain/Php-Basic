<?php
require("studata.php");

if(isset($_POST["btnSubmit"])){
    $id=$_POST['txtId'];
    $name=$_POST['txtName'];
    $batch=$_POST['Batch'];
    $obj=new Student($id,$name,$batch);
    $obj->data_sava();
    echo  "save_data";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<div class="form">
    <body>
    <form action="#" method="post">
	<div>
	ID :<br/>
	<input type="text" name="txtId" />
	</div>
	<div>
	Name :<br/>
	<input type="text" name="txtName" />
	</div>
	<div>
	Batch :<br/>
	<input type="text" name="Batch" />
	</div>
	<div>
	<input type="submit" name="btnSubmit" value="Submit" />
	</div>
</form>
</div>

<section>
    
<?php
Student::result();
?>
</section>
</body>
</html>