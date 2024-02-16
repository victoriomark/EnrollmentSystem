<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enrollment System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d4532539ca.js" crossorigin="anonymous"></script>
</head>
<style>
    body{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: black;
    }
    #cover{
        width: 200px;
    }


</style>
<body >
<header class="container-fluid p-2 d-flex justify-content-around gap-5 text-light bg-success">
    <div>
        <h4>Reg-Portal</h4>
    </div>

    <div>
        <button type="button" class="btn btn-dark rounded-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add New Student</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title text-dark fs-5" id="exampleModalLabel">Student Registration</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="./connect.php" method="post" class="text-dark">
                            <div class="mb-3">
                                <label for="student-name" class="col-form-label">CompleteName:</label>
                                <input type="text" id="student-name" class="form-control" name="student_name"  placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="student-email" class="col-form-label">Email:</label>
                                <input type="email" id="student-email" class="form-control" name="student_email" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="student-email" class="col-form-label">Password:</label>
                                <input type="password" id="student-password" class="form-control" name="student_password" placeholder="Enter your password" required>
                            </div>
                            <div class="mb-3">
                                <label for="student-age" class="col-form-label">Age:</label>
                                <input type="number" id="student-age" class="form-control" name="student_age" placeholder="Enter your age" required>
                            </div>
                            <div class="mb-3">
                                <label for="student-program" class="col-form-label">Program:</label>
                                <select class="form-select" id="student-program" name="student_program">
                                    <option selected>Choose...</option>
                                    <option value="Bachelor">Bachelor</option>
                                    <option value="Master">Master</option>
                                    <option value="PhD">PhD</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<div class="container-fluid d-lg-flex d-md-flex gap-3 justify-content-around align-items-center mt-5 ">

    <form class="form text-success d-flex flex-column justify-content-center align-items-center  gap-3 p-4 bg-dark rounded-3 " action="./Dashboard.php" method="post">
        <img class="img-thumbnail rounded-circle col-3" src="./Asstes/user.svg" alt="user">
        <h5 class="text-light">Admin</h5>
        <div>
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" placeholder="Email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit" name="login" class="btn btn-success col-3">Login</button>
        <div>
            <a href="./">Forgot password?</a>
        </div>
    </form>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
