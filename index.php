<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
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

                <div class="box form-box">
                    <h2>Sign In Here</h2>
                    <form action="" method="post">
                        <div class="field input">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" required>
                        </div>

                        <div class="field input">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" required>
                        </div>

                        <div class="field">
                            <input type="submit" name="submit" value="Sign In" required>
                        </div>

                        <div class="links">
                            Don't have account? <a href="register.php"> Sign Up Here </a>
                        </div>

                    </form>
                </div>
        </div>
    </div>
</body>
</html>