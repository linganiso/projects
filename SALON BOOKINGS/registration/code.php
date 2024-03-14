<?php
ob_start();
session_start();
$con = mysqli_connect("localhost","root","","salon_management_system");
if(mysqli_connect_errno()){
    echo "Failed to connect: ".mysqli_connect_error();
}
?>

<?php
if(isset($_POST['OK'])){
    $emp_first_name = $_POST['emp_first_name'];
    $emp_last_name = $_POST['emp_last_name'];
    $emp_username = $_POST['emp_username'];
    $emp_gender = $_POST['emp_gender'];
    $emp_dob = $_POST['emp_dob'];
    $emp_contact = $_POST['emp_contact'];
    $emp_address = $_POST['emp_address'];
    $emp_password = $_POST['emp_password'];
    
    $insert = "INSERT INTO employee(
        emp_first_name, emp_last_name, emp_username, emp_gender, emp_dob, emp_contact, emp_address, emp_password) VALUES (
            '$emp_first_name', '$emp_last_name', '$emp_username', '$emp_gender', '$emp_dob', '$emp_contact', '$emp_address', '$emp_password')";
    $query = mysqli_query($con, $insert) or die(mysqli_error($con));
    
    if($query){
        $_SESSION['status'] = "Inserted Succesful";
        header("Location:signup.php");
        }
        else{
            $_SESSION['status'] = "Not Inserted";
            header("Location:signup.php");  
        } 
}
?>