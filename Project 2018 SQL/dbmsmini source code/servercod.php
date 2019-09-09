<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$emailid = $_POST['emailid'];
	$pnumber = $_POST['pnumber'];
	$address = $_POST['address'];

	if (!empty($firstname) || !empty($lastname) || !empty($emailid) || !empty($pnumber) || !empty($address)) {
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "shipment_address";

		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
		if (mysqli_connect_error()) {
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		}
		else{
			$SELECT = "SELECT emailid From details Where emailid = ? Limit 1";
			$INSERT = "INSERT Into details (firstname,lastname,emailid,pnumber,address) values(?,?,?,?,?)";

			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s",$emailid);
			$stmt->execute();
			$stmt->bind_result($emailid);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if ($rnum==0) {
				$stmt->close();
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sssis",$firstname,$lastname,$emailid,$pnumber,$address);
				$stmt->execute();
				echo "Thank you for shopping";
			}
			else{
					echo "Someone already used this email";
				}
				$stmt->close();
				$conn->close();
		}
	}
	

?>