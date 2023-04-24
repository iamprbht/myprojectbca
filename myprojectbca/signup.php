<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
        
    <title>Sign Up</title>
    <style>
        body{
background-image: url(images/b4.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  height: 100%;
        }
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
background-color: rgb(137, 183, 90);
}
.signup-box{
  width: 25%;
  background-color: #fff;
  padding: 40px;
  border-radius: 8px;
  position: absolute;
  top: 13%;
  left: 40%;
}
.label-field{
    margin-top: 5px;
  width: 100%;
  margin-bottom: 5px;
}
.input-field{
  position: relative;
width: 100%;
  padding: 8px;
  outline: none;
  border: 1px solid crimson;
}
.signup-btn{
  width: 100%;
  background-color: rgb(226, 52, 87);
  cursor: pointer;
  color: #fff;
  transition: all ease 0.5s;
  border: 1px solid crimson;
  outline: none;
  border-radius: 6px;
  padding: 8px;
  
}
.signup-btn:hover{
  background-color: crimson;
}

    </style>
    
</head>
<?php
include 'header.php';
?>
<body>
<div class="signup-box">
    <form action="#">
        <h2 class="header-text" style="text-align: center;">Let's Get Started</h2>
        <p class="header-subtext" style="text-align: center;">Add your personal details</p>
        <div class="label-field">
            <label for="name">Full Name: </label>
        </div>
        <div class="label-field">
            <input type="text" class="input-field" placeholder="First Name" name="name" required>
            </div>
            <div class="label-field">
            <label for="address">Address: </label>
        </div>
         <div class="label-field">
            <input type="text" class="input-field" placeholder="Address" name="address" required>
            </div>
            <div class="label-field">
            <label for="email">Email: </label>
        </div>
        <div class="label-field">
            <input type="email" class="input-field" placeholder="Email" name="email" required>
            </div>
            <div class="label-field">
            <label for="phone">Mobile Number: </label>
        </div>
         <div class="label-field">
            <input type="text" class="input-field" placeholder="Mobile Number" name="phone" required>
            </div>
            <div class="label-field">
            <label for="date">Date of Birth: </label>
        </div>
         <div class="label-field">
            <input type="date" class="input-field" placeholder="Date" name="date" required>
            </div>
         <div class="label-field">
            <label for="pass">Create Password: </label>
        </div>
         <div class="label-field">
            <input type="password" class="input-field" placeholder="Create Password" name="pass" required>
            </div>
            <div class="label-field">
            <label for="cpass">Confirm Password: </label>
        </div>
         <div class="label-field">
            <input type="password" class="input-field" placeholder="Confirm Password" name="cpass" required>
            </div>
            <br>
            <button class="signup-btn">Signup</button>
            <br>
         <p class="text-2" style="text-align:center;">Already have account? <a href="">Login</a></p>
            </div>


    </form>

</body>
<?php
include 'footer.php';
?>
</html>