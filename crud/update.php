<?php
    include '../config.php';

    if(isset($_POST['updatedata']));
    {
        $id = $_POST['update_id'];

        $pname = $_POST['pname'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $query = "UPDATE inventory_app SET product_name='$pname', description='$description', price='$price' WHERE id='$id' ";
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