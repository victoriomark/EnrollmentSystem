<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>
</head>
<style>
    a{
        text-decoration: none;
    }
</style>
<body>
<div class="container-fluid p-3 bg-primary sticky-top text-light">
 <h4>Student List</h4>
</div>



    <header class="container-fluid p-3 bg-primary d-lg-flex justify-content-evenly">
            <!--FOR SEARCHING-->
        <form class="col-2 d-flex gap-2" action="Search.php" method="post">
            <input class="form-control" name="search_input"  type="text" placeholder="Search by Name...">
            <button type="submit" name="search_btn" class="btn btn-dark">Search</button>
        </form>
      <nav class="text-light d-flex">
          <a class="text-light" href="./Dashboard.php">
              <h5>Dashboard</h5>
          </a>
          /
          <a class="text-light" href="./StudentList.php">
              <h5>Student List</h5>
          </a>
      </nav>

<!--        Modal for deleting students  -->
        <div>
            <button type="button" class="btn btn-danger rounded-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Delete Student</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title text-dark fs-5" id="exampleModalLabel">Delete Student</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="./Delete.php" method="post" class="text-dark">
                                <div class="mb-3">
                                    <label for="student_DELETE" class="col-form-label">STUDENT ID</label>
                                    <input type="number" id="student-name" class="form-control" name="student_DELETE"  placeholder="Enter the ID you to delete" required>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </header>

<?php
$conn = new mysqli("localhost", "root", "");
$db = mysqli_select_db($conn, 'studen_data');

$Query = "select * from studentlist";
$Query_run = mysqli_query($conn, $Query);

?>
<form>
    <table class="table table-transparent table-hover ">

        <thead>
        <tr>
            <th scope="col">Student_Id</th>
            <th scope="col">Complete Name</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
            <th scope="col">Program</th>
            <th scope="col">Password</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_array($Query_run)) {
            ?>
            <tr>
                <td><?php echo $row['Student_id'] ?></td>
                <td><?php echo $row['Name'] ?></td>
                <td><?php echo $row['Age'] ?></td>
                <td><?php echo $row['Emails'] ?></td>
                <td><?php echo $row['Program'] ?></td>
                <td><?php echo $row['Passwords'] ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous">
</script>
</body>
