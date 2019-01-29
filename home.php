<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

$servername = "localhost";
$username = "epic";
$password = "Epic#123";
$dbname = "upwork";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<div class="container">
		<div class="body content">
		<img src="<?= $_SESSION['avatar'] ?>"><br />
    	Welcome <span class="user"><?= $_SESSION['username'] ?></span>	
		<a href="logout.php"> LOGOUT  </a>
		<div class="welcome">
			<span>All registered users:</span><br />
		    <?php
				$sql = "SELECT id, name, image_1,image_2,image_3 FROM test";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        // echo "<br> id: ". $row["id"];
				         // echo "<div class='userlist'><span>".$row['id']."</span>";
				        echo "<div class='userlist'><span>".$row['id'].":".$row['name']."</span><br />";
        				echo "<img src='".$row['image_1']."'>";
        				echo "<img src='".$row['image_2']."'>";
        				echo "<img src='".$row['image_3']."'></div>";
				    }
				} else {
				    echo "0 results";
				}
			?> 
		</div>
		</div>	 
	</div>
	
</body>
</html>