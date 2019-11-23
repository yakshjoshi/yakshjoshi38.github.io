
<?php include('./header.php');
		

?>

<?php
$dbconnect = db_connect();
$sql = "Select * From planets";
$result = mysqli_query($dbconnect, $sql);

if (!$dbconnect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>

<h1>The Welcome Page</h1>
	<div class="container">
	<table class="table">
		<tr>
			<th>Planets Number Chronologically</th>
			<th>Name of the planet	</th>
			<th>Planet Habitable	</th>
			<th>Visit The Page	</th>
		</tr>
		<tr>
			<?php
        if ($result-> num_rows > 0 ){
            while ($row = $result-> fetch_assoc()){
                $planet_id = $row['planet_id'];
                $planet_name = $row['planet_name'];
                $planet_habitat = $row['planet_habitat'];
                $planet_link = $row['planet_link'];
                
                 echo "<tr><td> " . $row["planet_id"]. "</td><td> " . $row["planet_name"]. "</td><td> " . $row["planet_habitat"]. "</td><td> <a href='".$row["planet_link"]."'>"."VISIT". "</a></td></tr>";
            }
        }else {
            echo "0 result";
        }
        ?>
			
		</tr>

	</table>
</div>




<?php include('./footer.php') ?>