
<?php
$username = filter_input(INPUT_POST, 'Email address');
$password = filter_input(INPUT_POST, 'Password');
if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "TechPro";
$dbpassword = "123456";
$dbname = "signupform";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else if('login'==1){
$sql = "INSERT INTO account (username, password)
values ('$username','$password')";
if ($conn->query($sql)){
echo "New Employee is signed in sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
