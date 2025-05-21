<?php 

    session_start();
    include 'conn.php';

    // Register the user
    if(isset($_POST['submit'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_number = $_POST['phonenumber'];

    // Check if the email is already taken
    $email_check = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    
    if(mysqli_num_rows($email_check) > 0) {
        echo "<script>alert('Email is already in use! Please use a different email.');
         window.location.href='reg.php';</script>";
    } else {
        // Insert the new user if the email is not in use
        $insert = mysqli_query($conn, "INSERT INTO users (first_name, last_name, email, password, phone_number) VALUES ('$fname', '$lname', '$email', '$password', '$phone_number')");

        if($insert){
            echo "<script>alert('Registration successful!');
            window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Registration failed!');</script>";
        }
    }
}


    // Login the user
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");

        if(mysqli_num_rows($check) > 0){
            
            $_SESSION['email'] = $email;
            echo "<script>
                alert('Login successful');
                window.location.href = 'index.php';
                </script>";
        }else{
            echo "<script>
                alert('Login failed');
                window.location.href = 'login.php';
                </script>";
        }

    }

    // Generate meal plan
    if (isset($_POST['generate'])) {
        $weight = $_POST['weight'];
        $target_weight = $_POST['target_weight'];
        $height = $_POST['height'];
        $sex = $_POST['sex'];
        $activity = $_POST['activity'];
        $age = $_POST['age'];
    
        // BMI
        $height_m = $height / 100;
        $bmi = $weight / ($height_m * $height_m);
    
        // BMR
        $bmr = ($sex == 'male') ?
            10 * $weight + 6.25 * $height - 5 * $age + 5 :
            10 * $weight + 6.25 * $height - 5 * $age - 161;
    
        // TDEE
        switch ($activity) {
            case 'lightly_active': $tdee = $bmr * 1.375; break;
            case 'moderately_active': $tdee = $bmr * 1.55; break;
            case 'very_active': $tdee = $bmr * 1.725; break;
            case 'super_active': $tdee = $bmr * 1.9; break;
            default: $tdee = $bmr * 1.2;
        }
    
        // Goal
        if ($target_weight < $weight) {
            $goal = "lose";
            $calorie_goal = $tdee - 500;
        } elseif ($target_weight > $weight) {
            $goal = "gain";
            $calorie_goal = $tdee + 400;
        } else {
            $goal = "maintain";
            $calorie_goal = $tdee;
        }
    
        // Meal calories
        $meal_limits = [
            'breakfast' => round($calorie_goal * 0.25),
            'lunch'     => round($calorie_goal * 0.30),
            'dinner'    => round($calorie_goal * 0.30),
            'snack'     => round($calorie_goal * 0.15)
        ];
    
        // Function to get a combo of meals
        function getMealCombo($conn, $meal_type, $cal_limit) {
            $sql = "SELECT name, calories FROM meals WHERE meal_type = '$meal_type' ORDER BY RAND()";
            $result = $conn->query($sql);
            
            $combo = [];
            $total = 0;
    
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if ($total + $row['calories'] <= $cal_limit) {
                        $combo[] = $row;
                        $total += $row['calories'];
                    }
                    if ($total >= $cal_limit * 0.95) break; // stop early if close enough
                }
            }
    
            if (empty($combo)) {
                return [['name' => 'No meal found', 'calories' => 0]];
            }
    
            return $combo;
        }
    
        // Get combo meals
        $meals = [];
        foreach ($meal_limits as $type => $limit) {
            $meals[$type] = getMealCombo($conn, $type, $limit);
        }
    
        // Output
        echo "<h3>📊 Results</h3>";
        echo "<p><strong>Current Weight:</strong> $weight kg<br>";
        echo "<strong>Target Weight:</strong> $target_weight kg<br>";
        echo "<strong>BMI:</strong> " . round($bmi, 1) . "<br>";
        echo "<strong>TDEE:</strong> " . round($tdee) . " kcal/day<br>";
        echo "<strong>Goal:</strong> $goal weight</p>";
    
        echo "<h4>🎯 Calorie Goal: " . round($calorie_goal) . " kcal/day</h4>";
    
        echo "<h4>🍽️ Meal Plan (Combo Meals)</h4>";
        foreach ($meals as $type => $items) {
            $type_name = ucfirst($type);
            echo "<strong>$type_name:</strong><ul>";
            $total = 0;
            foreach ($items as $m) {
                echo "<li>{$m['name']} – {$m['calories']} kcal</li>";
                $total += $m['calories'];
            }
            echo "<li><em>Total: $total kcal</em></li>";
            echo "</ul>";
        }
    
        $conn->close();
    }
    
    
    

?>