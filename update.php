<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit my Booking</title>
</head>
<body>
    
    <?php
        include "conn.php";
        $res_num = $_GET['myid'];
        
     
        $get_data = mysqli_query($conn, "SELECT * FROM reservation WHERE res_num='$res_num'");

        while($row = mysqli_fetch_object($get_data)){

            $valid = $row -> valid;
            $fn = $row -> fn;
            $ln = $row ->ln;
            $pn = $row -> pn;
            $num_guest = $row ->num_guest;
            $check_in = $row -> check_in;
            $check_out = $row ->check_out;
            $room_type = $row -> room_type;
           

        }
    ?>
     <center>
    <h1> Edit my Booking </h1>

    <form action=process.php?id=<?php echo $res_num;?> method="POST"> 

        
          <div class="content" style="text-align:center; margin-top:20px;">
            <img src="upload/<?php echo $valid; ?>" width="200px" height="200px">
            
                                
        </div>

        <label> Valid ID </label> </br></p> 
        
        

        <label> First Name </label> </br>
        <input type="text" name="fn" required value="<?php echo $fn; ?>"></p></br>

        <label> Last Name </label> </br>
        <input type="text" name="ln" required value="<?php echo $ln; ?>"></p></br>

        <label> Phone Number </label> </br>
        <input type="number" name="pn" required value="<?php echo $pn; ?>"></p></br>

        <label> Number of Guest </label> </br>
        <input type="number" name="num_guest" required value="<?php echo $num_guest; ?>"></p></br>


        <label>Check-in</label>
        <div class="input-group">
          <span class="input-group-text"><i class="@"></i></span>
          <input type="date" class="form-control" required name="check_in" value="<?php echo $check_in; ?>">
        </div></p>

        <label>Check-out</label>
        <div class="input-group">
          <span class="input-group-text"><i class="@"></i></span>
          <input type="date" class="form-control" required name="check_out" value="<?php echo $check_out; ?>">
        </div></p>

        

        <select class="input-group" required name="room_type">
                <option data-display="Room Type"> <?php echo $room_type?> </option>
                <option value="Single">Single</option>
                <option value="Double">Double</option>
                <option value="Family">Family</option>
                <option value="Presidential">Presidential</option>
        </select>                                     

        <input type="submit" name="update_booking" value="UPDATE">
    </form>
    </center>
    

</body>
</html>