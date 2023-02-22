 
<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "form_data";
$conn  = mysqli_connect($severname,$username,$password,$database);
if(!$conn){
    echo "connection unsuccessfull".mysqli_connect_error();
}
 
$name=$_POST["name"] ;
 
$email= $_POST["email"];  
  
$password= $_POST["password"]; 

$sql = "INSERT INTO `data` (name,email,password) VALUES ('$name','$email','$password')";

$result = mysqli_query($conn,$sql);
if (!$result) {
    echo "error".mysqli_error($conn);
}
else{
    echo "Account created successfully";
} 
mysqli_close($conn);
?>

<a href="login_page.php">back to login</a>
