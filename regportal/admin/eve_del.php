<?php include('connection.php')?>
<?php
if(isset($_POST['delete_event']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_event']);

    $query = "DELETE FROM audience WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: check2.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        // header("Location: index.php");
        exit(0);
    }
}

?>