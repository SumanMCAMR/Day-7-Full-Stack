<?php
$servername ="localhost";
$username="root";
$dbpassword="";
$dbname="full_stack";
$conn = mysqli_connect($servername, $username, $dbpassword, $dbname);
// if(!$conn){
//     echo"Connection failure";
// }
// echo "connection established";
if($_SERVER['REQUEST_METHOD']==='POST')
{
    $a = $b ='' ;

    $a=$_POST['email'];
    $b=$_POST['password'];

// $sql="INSERT INTO login_data('email','password')VALUES('$a','$b')";
$sql = "INSERT INTO `login_data` (`sr. n`, `Email`, `Password`) VALUES (NULL, '$a','$b');";
mysqli_query($conn, $sql);
echo '<script> alert("data submited")</script>';
mysqli_close($conn);
}



?>
