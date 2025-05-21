<?php
    include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Booking</title>
</head>
<body>


<center>

<h1>My Booking </h1>

    <table border="2px solid">
            <tr>
                <th>Reservation Number</th>
                <th>Valid ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Number of Guest</th>
                <th>Check in</th>
                <th>Check out</th>
                <th>Room Type</th>
                <th>Action 1 </th>
                <th> Action 2 </th>
            </tr>   


            <?php 
                $records = mysqli_query($conn, "SELECT * FROM reservation ORDER BY res_num DESC LIMIT 1");
                while($get_records = mysqli_fetch_array($records)){
                    ?>
                    <tr>
                        <td><?php echo $get_records['res_num'];?> </td>
                        <td><?php echo $get_records['valid'];?>  </td>
                        <td><?php echo $get_records['fn'];?>  </td>
                        <td><?php echo $get_records['ln'];?>  </td>
                        <td><?php echo $get_records['pn'];?> </td>
                        <td><?php echo $get_records['num_guest'];?>  </td>
                        <td><?php echo $get_records['check_in'];?>  </td>
                        <td><?php echo $get_records['check_out'];?>  </td>
                        <td><?php echo $get_records['room_type'];?>  </td>

                        <td><a href="delete.php?myid=<?php echo $get_records['res_num'];?>">DELETE </a> </td>

                        <td><a href="update.php?myid=<?php echo $get_records['res_num'];?>">UPDATE  </a>  </td>
                     </tr>
                <?php
                }

            ?>

           


    </table>
</center>
    
</body>
</html>