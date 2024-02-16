
<?php
$CountedStudent =0;
 $connection = new mysqli("localhost","root",'');
 $db = mysqli_select_db($connection, 'studen_data');

$query = "SELECT COUNT(Student_id) AS countedId from studentlist;";
$query_run = mysqli_query($connection,$query);

if($query_run){
    $row = mysqli_fetch_assoc($query_run);

    $CountedStudent =$row['countedId'];
}
mysqli_close($connection);
//
//$query = "SELECT * FROM studentlist";
//$query_run = mysqli_query($connection,$query);
//
//while ($row =mysqli_fetch_array($query_run)){
//    echo "Email: " .$row['Email'];
//    echo "<br/>";
//    echo "pass" . $row['Passwords'];
//    echo "<br/>";
//}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $UserAdmin = $_POST['email'];
    $AdminPass = $_POST['password'];

    if($UserAdmin === 'erwin@gmail.com' && $AdminPass === 'admin'){
         header("Location: ./Dashboard.php");
    }else{
        header("Location: ./Home.php");
        echo "you are not logo";
    }
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>
</head>
<style>
    .sidebar{
        padding: 10px;
        background: #222;
        height: 100vh;
        min-width: 200px;
        transition: 0.5s;
        overflow: hidden;
        width: 69px;
        
    }
    ul{
        list-style: none;
    }
    ul li a{
        text-decoration: none;
    }
    header i{
        cursor: pointer;
    }
    .sidebarActive{
       min-width: 10px;
    }
    ul li:hover{
        background-color: #183153;
        border-radius: 10px;
    }
    #dashboard{
        background-color: #183153;
        border-radius: 10px;
    }
    .card{
        transition: 0.5s;
    }
    .card:hover{
        background-color: #222;
        color: aliceblue;
        cursor: pointer;
        transform: translateY(-5px);


    }

</style>
<body class="d-flex justify-content-center ">
<div class="sidebar">
    <ul class="d-flex flex-column gap-2">
        <li id="dashboard" class="d-flex gap-1 align-items-center p-2">
            <i class="fa-solid fa-gauge text-light"></i>
            <a class="text-light fw-bold" href="#">Dashboard</a>
        </li>

        <li class="d-flex gap-1 align-items-center p-2">
            <i class="fa-regular fa-user text-light"></i>
            <a class="text-light fw-bold" href="./StudentList.php">Student List</a>
        </li>

        <li class="d-flex gap-1 align-items-center p-2">
            <i class="fa-solid fa-calculator text-light"></i>
            <a class="text-light fw-bold" href="#">Student Grades</a>
        </li>

        <li class="d-flex gap-1 align-items-center p-2">
            <i class="fa-solid fa-gear text-light"></i>
            <a class="text-light fw-bold" href="#">Settings</a>
        </li>
    </ul>
</div>

<div style="background-color: #183153" class="container-fluid  p-5">
    <header class="container-fluid d-flex align-items-center gap-4 text-light  p-3 rounded-2">
        <i id="Menu" class="fa-solid fa-bars"></i>
         <h5>Dashboard</h5>
    </header>
    <div class="container row  p-5 gap-4">
        <div class="card border border-0 col-lg-3 justify-content-center align-items-center p-3">
            <i class="fa-regular fa-user fw-bold"></i>
          <h4  class="car fw-bold">Student List</h4>
            <h1 class="fw-bold text-success"><?php echo $CountedStudent ?> </h1>
        </div>

        <div class="card border border-0 col-lg-3 justify-content-center align-items-center p-3">
            <i class="fa-regular fa-user fw-bold"></i>
            <h4  class="car fw-bold">Student List</h4>
        </div>

        <div class="card border border-0 col-lg-3 justify-content-center align-items-center p-3">
            <i class="fa-regular fa-user fw-bold"></i>
            <h4  class="car fw-bold">Student List</h4>
        </div>
    </div>
</div>



<script>
    const menu = document.getElementById("Menu");
    const SideBar = document.querySelector(".sidebar");
    menu.addEventListener("click",()=>{
        SideBar.classList.toggle("sidebarActive");
    })

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>















