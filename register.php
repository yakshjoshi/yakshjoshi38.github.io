<?php include('./header.php') ?>

<?php
if (isset($_POST['name'])) {
$name = $_POST['name'];
}
if (isset($_POST['birthday'])) {
$birthday = $_POST['birthday'];
}
if (isset($_POST['gender'])) {

$gender = $_POST['gender'];
}
if (isset($_POST['email'])) {

$email = $_POST['email'];
}

$dbconnect = db_connect();
$sql = "Select * From users";


if(isset($_POST['submit']))
{
$sql1 = "Insert into users(user_name,user_b_date,user_gender,user_email) VALUES ('$name', '$birthday' , '$gender' , '$email')";
$result = mysqli_query($dbconnect, $sql1);

}
else
{
    echo mysqli_error($dbconnect);
}

if (!$dbconnect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



?>
<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="name">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="BIRTHDATE" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">GENDER</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <input type="email" placeholder="EMAIL" id="email"  size="30" required name="email">
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Jquery JS-->
    


<?php include('./footer.php') ?>