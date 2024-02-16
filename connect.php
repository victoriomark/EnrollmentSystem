<?php
$Success = "dd";
$Complete_Name = $_POST['student_name'];
$Email = $_POST['student_email'];
$Age = $_POST['student_age'];
$Program =$_POST["student_program"];
$Password =$_POST["student_password"];

// connection of the database
$conn = new mysqli('localhost','root','','studen_data');


//chick if connection is success of not
if($conn-> connect_error){
    die("connection Failed!" .$conn->connect_error) ;
}else{
    $stmt = $conn->prepare( "insert into studentlist(Name, age, emails, passwords, program)
value(?,?,?,?,?)");
}

$stmt->bind_param('sisss', $Complete_Name,$Age,$Email,$Password,$Program);
$stmt->execute();
 $Success = "Success adding Student!!!";
$stmt->close();
$conn->close();


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body{
        height: 100vh;
    }
</style>
<body class="d-flex justify-content-center align-items-center">
 <div class="container-fluid flex-column d-flex justify-content-center align-items-center">
     <h5 class="text-success"><?php echo $Success; ?></h5>
     <a href="./Home.php">Back Home</a>
 </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>