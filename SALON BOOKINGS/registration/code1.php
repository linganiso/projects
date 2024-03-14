<?php
ob_start();
session_start();
$con = mysqli_connect("localhost","root","","salon_management_system");
if(mysqli_connect_errno()){
    echo "Failed to connect: ".mysqli_connect_error();
}
?>

<?php
if(isset($_POST['save_select'])){
    $cust_firstName = $_POST['cust_firstName'];
    $cust_lastName = $_POST['cust_lastName'];
    $cust_dob = $_POST['cust_dob'];
    $cust_gender = $_POST['cust_gender'];
    $cust_mail = $_POST['cust_mail'];
    $cust_contact = $_POST['cust_contact'];
    $cust_address = $_POST['cust_address'];
    
    $insert = "INSERT INTO customer(
        cust_firstName, cust_lastName, cust_dob, cust_gender, cust_mail, cust_contact, cust_address) VALUES (
            '$cust_firstName', '$cust_lastName', '$cust_dob', '$cust_gender', '$cust_mail', '$cust_contact', '$cust_address')";
    $query = mysqli_query($con, $insert) or die(mysqli_error($con));
    
     if($query){
            echo "Payment done";
        }
    }else{
        echo "Payment not done";
    }
?>