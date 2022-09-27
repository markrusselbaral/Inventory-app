<?php
    include '../config.php';

    if(isset($_POST['savedata']));
    {
        $pname = $_POST['pname'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $query = "INSERT INTO inventory_app (`product_name`,`description`,`price`) VALUES ('$pname','$description','$price')";
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