<?php 

if ($_SERVER ['REQUEST_METHOD'] == 'POST' && isset($_POST ['submit'])) {
		
		$servername	= "localhost"
		$user		= "root"
		$password	= ""
		$db 		= "kdnpDB"

		$conn=  mysqli_connect($host,$user, $password, $db) or 
		die("Connection Failed:" .mysqli_connect_error());

##If Entries Are Null

		if (isset($_POST['folio']) && isset($_POST['caseid']) && isset($_POST['state']) && isset($_POST['lga']) && isset($_POST['district']) && isset($_POST['fullname']) & isset($_POST['sex']) && isset($_POST['age']) && isset($_POST['remark'])) {

			$folio 		= $_POST['folio'];
			$caseid 	= $_POST['caseid'];
			$state 		= $_POST['state'];
			$lga 		= $_POST['lga'];
			$district 	= $_POST['district'];
			$fullname	= $_POST['fullname'];
			$sex 		= $_POST['sex'];
			$age 		= $_POST['age'];
			$remark 	= $_POST['remark'];

			$sql = "INSERT INTO 'kdnp_vctm' (''folio', 'caseid', 'state', 'lga', 'district', 'fullname', 'sex', 'age', 'remark') VALUES ('$folio', '$caseid', '$state', '$lga', '$district', '$fullname', '$sex', '$age', '$remark')";

			$query = mysqli_query($conn, $sql);
				if ($query) {

							echo "Entry Successful";
						}

				else 	{

						echo "Error SomeWhere";
				}
		
			}

		}

 ?>