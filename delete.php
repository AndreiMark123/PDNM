<?php

    include "conn.php";

    $res_num = $_GET['myid'];

    //this code is for deleting data in database
    $delete = mysqli_query($conn, "DELETE FROM reservation WHERE res_num='$res_num'");

        if($delete == true){
            ?>
                <script>
                        alert("Data is Deleted!");
                        window.location.href="index.php";
                </script>
            <?php
        }else{
            ?>
                <script>
                        alert("No Data is Deleted!");
                        window.location.href="index.php";
                </script>
            <?php
        }




?>