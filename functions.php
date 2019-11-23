<?php
function db_connect(){
    $connection =  mysqli_connect("127.0.0.1", "root", "Harshanilesh108", "projectOne");
    return $connection;
}

function displayCopyrightInfo(){
    echo "<p>&copy;" . date("Y") . " P.L.A.N.E.T.A.R.I.U.M</p>";
}
?>