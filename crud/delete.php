<?php
    include '../config.php';

    if(isset($_POST['deletedata']));
    {
        $id = $_POST['delete_id'];

        $query = "DELETE FROM inventory_app WHERE id='$id'";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            header('Location: ../welcome.php');
        }
        else
        {
            echo '<script> alert("Data not Saved"); </script>';
        }
    }
?>