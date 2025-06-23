<?php
/**
 * Emergency Ambulance Hiring Portal - Database Connection
 * 
 * @author Yeabsira Kayel
 * @email yeabsira.kayel@bitscollege.edu.et
 * @github https://github.com/yeabkal1001/EAHP-Project-PHP
 * @version 2.0
 * @date June 2025
 */

$con=mysqli_connect("localhost", "root", "", "eahpdb");
if(mysqli_connect_errno()){
    echo "Connection Failed: ".mysqli_connect_error();
}
?>
