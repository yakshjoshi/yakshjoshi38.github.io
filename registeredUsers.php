<?php include('./header.php') ?>


<?php
$dbconnect = db_connect();
$sql = "Select * From users";
$result = mysqli_query($dbconnect, $sql);

if (!$dbconnect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>

<h1>Registered Users Page</h1>
	<div class="container">
	<table class="table">
		<tr>
			<th>No.</th>
			<th>Name of the User	</th>
			<th>Date of Birth	</th>
			<th>Gender	</th>
			<th>Email	</th>
		</tr>
		<tr>
			<?php
        if ($result-> num_rows > 0 ){
            while ($row = $result-> fetch_assoc()){
                $user_id = $row['user_id'];
                $user_name = $row['user_name'];
                $user_b_date = $row['user_b_date'];
                $user_gender = $row['user_gender'];
                $user_email = $row['user_email'];
                
                 echo "<tr><td> " . $row["user_id"]. "</td><td> " . $row["user_name"]. "</td><td> " . $row["user_b_date"]. "</td><td> ".$row["user_gender"]."</td><td> ".$row['user_email']."</td></tr>";
            }
        }else {
            echo "0 result";
        }
        ?>
			
		</tr>

	</table>
</div>








<?php include('./footer.php') ?>