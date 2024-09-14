<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style/register.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="Logo">Farm<Span>Vigilance</Span></h2>
                <div class="pos_cen">
                    <img class="img_deg" src="logo.png">
                </div>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="content">
            <h1>INSECTS <span>IDENTIFICATION</span><br>SYSTEM<br></h1><br>
            <p class="par">Accurate and easy insect identifications enable farmers and agricultural professionals <br> 
                to provide accurate and efficient Insects management solutions <br> 
                to ensure healthy crops and improve agricultural productivity.</p>

                <div class="container">
                <div class="box form-box">

                <?php 
         
         include("php/config.php");
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Password) VALUES('$username','$email','$password')") or die("Erroe Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='index.php'><button class='btn'>Login Now</button>";
         

         }

         }else{
         
        ?>

                    <h2>Sign Up Here</h2>
                    <form action="" method="post">

                        <div class="field input">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" required>
                        </div>

                        <div class="field input">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" required>
                        </div>

                        <div class="field input">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" required>
                        </div>

                        <div class="field">
                            <input type="submit" name="submit" value="Sign Up" required>
                        </div>

                        <div class="links">
                            Don't have account? <a href="index.php"> Sign In Here </a>
                        </div>

                    </form>
                </div>
        </div>
            </div>
            <?php } ?>
    </div>
</body>
</html>