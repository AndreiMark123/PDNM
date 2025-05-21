<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="icon" href="image/logo1.png" type="image/png">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    
    body {
      background-color: #f5f7fa;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px 0;
    }
    
    .container {
      width: 100%;
      max-width: 480px;
      padding: 20px;
    }
    
    .registration-card {
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      padding: 40px;
      transition: all 0.3s ease;
    }
    
    .registration-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
    }
    
    .logo {
      text-align: center;
      margin-bottom: 30px;
    }
    
    .logo-circle {
      width: 60px;
      height: 60px;
      background: linear-gradient(135deg, #6e8efb, #a777e3);
      border-radius: 50%;
      display: inline-flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-weight: bold;
      font-size: 24px;
    }
    
    h2 {
      text-align: center;
      font-size: 24px;
      font-weight: 600;
      color: #333;
      margin-bottom: 30px;
    }
    
    .form-row {
      display: flex;
      gap: 16px;
      margin-bottom: 20px;
    }
    
    .form-group {
      margin-bottom: 20px;
      flex: 1;
    }
    
    label {
      display: block;
      margin-bottom: 8px;
      font-size: 14px;
      color: #555;
      font-weight: 500;
    }
    
    input, select {
      width: 100%;
      padding: 12px 16px;
      border: 1px solid #e1e5eb;
      border-radius: 8px;
      font-size: 15px;
      transition: all 0.2s ease;
    }
    
    input:focus, select:focus {
      outline: none;
      border-color: #6e8efb;
      box-shadow: 0 0 0 3px rgba(110, 142, 251, 0.1);
    }
    

    
    button {
      width: 100%;
      padding: 14px;
      background: linear-gradient(135deg, #6e8efb, #a777e3);
      border: none;
      border-radius: 8px;
      color: white;
      font-size: 16px;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.2s ease;
    }
    
    button:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(110, 142, 251, 0.4);
    }
    
    .login-link {
      text-align: center;
      margin-top: 25px;
      font-size: 14px;
      color: #555;
    }
    
    .login-link a {
      color: #6e8efb;
      text-decoration: none;
      font-weight: 500;
    }
    
    .login-link a:hover {
      text-decoration: underline;
    }
    
    
    @media (max-width: 576px) {
      .form-row {
        flex-direction: column;
        gap: 0;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="registration-card">
      <div class="logo">
        <div class="logo-circle">PDNP</div>
      </div>
      <h2>Sign Up</h2>
      <form action="process.php" method="POST">
        <div class="form-row">
          <div class="form-group">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="firstname" placeholder="Enter your first name" required>
          </div>
          <div class="form-group">
            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" name="lastname" placeholder="Enter your last name" required>
          </div>
        </div>
        
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Create a password" required>
        </div>
        
        <div class="form-group">
          <label for="confirm-password">Confirm Password</label>
          <input type="password" id="confirm-password" name="confirmpassword" placeholder="Confirm your password" required>
        </div>
        
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="tel" id="phone" name="phonenumber" placeholder="Enter your phone number" required>
        </div>
        
        <button type="submit" name="submit">Create Account</button>
      </form>
      
      <div class="login-link">
        Already have an account? <a href="login.php">Log In</a>
      </div>
      
    </div>
  </div>
</body>
</html>