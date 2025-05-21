<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register & Login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="logsty.css">
<style>
    .main {
        text-align: center;
        margin-bottom: 20px;
    }
    .logo-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .logo {
        width: 100px;
        height: auto;
    }
    .logo-text h1, .logo-text p {
        margin: 5px 0;
    }
</style>
</head>
<body>



<div class="container" id="signup" style="display:none;">
<div class="main">
    <div class="logo-section">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWMZQfeoShTagdm3mUvO4gHyhuZnMJxvNhiw&s" alt="Election Commission Logo" class="logo">
        <div class="logo-text">
            <h1>भारत सरकार विद्युत मंत्रालय</h1>
            <p>GOVERNMENT OF INDIA MINISTRY OF POWER</p>
        </div>
    </div>
</div>
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="fName" id="fName" placeholder="First Name" required>
            <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <p class="or">----------or--------</p>
    <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
    </div>
</div>

<div class="container" id="signIn">
<div class="main">
    <div class="logo-section">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWMZQfeoShTagdm3mUvO4gHyhuZnMJxvNhiw&s" alt="Election Commission Logo" class="logo">
        <div class="logo-text">
            <h1>भारत सरकार विद्युत मंत्रालय</h1>
            <p>GOVERNMENT OF INDIA MINISTRY OF POWER</p>
        </div>
    </div>
</div>
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="register.php">
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        
        <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
    <p class="or">----------or--------</p>
    <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
        <p>Don't have account yet?</p>
        <button id="signUpButton">Sign Up</button>
    </div>
</div>

<script src="log.js"></script>
</body>
</html>
