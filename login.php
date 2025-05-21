<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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
      height: 100vh;
    }
    
    .container {
      width: 100%;
      max-width: 400px;
      padding: 20px;
    }
    
    .login-card {
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      padding: 40px;
      transition: all 0.3s ease;
    }
    
    .login-card:hover {
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
    
    .form-group {
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      margin-bottom: 8px;
      font-size: 14px;
      color: #555;
      font-weight: 500;
    }
    
    input {
      width: 100%;
      padding: 12px 16px;
      border: 1px solid #e1e5eb;
      border-radius: 8px;
      font-size: 15px;
      transition: all 0.2s ease;
    }
    
    input:focus {
      outline: none;
      border-color: #6e8efb;
      box-shadow: 0 0 0 3px rgba(110, 142, 251, 0.1);
    }
    
    .forgot-password {
      text-align: right;
      margin-top: 10px;
      margin-bottom: 25px;
    }
    
    .forgot-password a {
      color: #6e8efb;
      font-size: 14px;
      text-decoration: none;
    }
    
    .forgot-password a:hover {
      text-decoration: underline;
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
    
    .signup {
      text-align: center;
      margin-top: 25px;
      font-size: 14px;
      color: #555;
    }
    
    .signup a {
      color: #6e8efb;
      text-decoration: none;
      font-weight: 500;
    }
    
    .signup a:hover {
      text-decoration: underline;
    }
   
    
  
  </style>
</head>
<body>
  <div class="container">
    <div class="login-card">
      <div class="logo">
        <div class="logo-circle">PDNP</div>
      </div>
      <h2>Welcome!</h2>
      <form action="process.php" method="POST">
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
    
        <button type="submit" name="login">Log In</button>
      </form>
      <div class="signup">
        Don't have an account? <a href="reg.php">Sign up</a>
      </div>
    </div>
  </div>
</body>
</html>