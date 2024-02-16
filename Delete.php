<?php
// Check if the form is submitted
if(isset($_POST['delete'])){
    // Get the student ID to delete
    $Id = $_POST['student_DELETE'];

    // Establish connection to MySQL
    $conn = mysqli_connect('localhost', 'root', '', 'Studen_data');

    // Check if connection is successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the DELETE query
    $Sql = "DELETE FROM studentlist WHERE Student_id = ?";

    // Prepare the statement
    $stmt = mysqli_prepare($conn, $Sql);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "i", $Id);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Check if the deletion was successful
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    // Close the statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
