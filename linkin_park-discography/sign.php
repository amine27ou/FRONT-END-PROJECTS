    <?php

       require "database.php";
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="website icon" type="png" href="mini-logo.png">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
        <title>Linkin Park</title>
    </head>
    <body>
        <div class="header" id="home">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" usemap="#image-map">
                    <map name="image-map">
                        <area  alt="Linkin Park" title="Linkin Park" href="home.html" coords="0,0,207,38" shape="rect">
                    </map>
                </div>
                <nav>
                    <ul>
                        <li><a href="albums.html">Albums</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="members.html">Members</a></li>
                        <li><a href="blog.html">blog</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="sign.php">sign up</a></li>
                    </ul>
                </nav>
            </div>
            <!-- ---------------------------------------- -->
            <section>
                <div class="adv-2">
                    <a id="sign-btn">sign up</a>
                </div>
                <div class="form-container hide">
                    <form action="" method="post">
                        <h1>register</h1>
                        <input type="text" name="fname" id="fname" placeholder="first name" >
                        <input type="text" name="lname" id="lname" placeholder="last name" >
                        <input type="email" name="email" id="email" placeholder="email" >
                        <input type="password"  class="psw" name="password" id="password" placeholder="password" >
                        <p class="login-link" >already have an account <a href="login.php">login now!</a> </p>
                        <p id="status"></p>
                        <div class="btns">
                            <input type="submit" id="add" name="add" value="Sign Up">
                            <input type="reset" id="reset" value="reset">
                        </div>
                    </form>
                </div>
            </section>
            <!-- ---------------------------------------- -->
            <footer>
                <div class="logo2">
                    <img src="images/lp-gif.gif" alt="">
                </div>
                <div class="links">
                    <li><a href="albums.html">Albums</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="members.html">Members</a></li>
                    <li><a href="blog.html">blog</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="sign.php">sign up</a></li>
                </div>
                <div class="social">
                    <a href="https://www.facebook.com/linkinpark/"><i class='bx bxl-facebook'></i></a>
                    <a href="https://www.instagram.com/linkinpark/"><i class='bx bxl-instagram'></i></a>
                    <a href="https://twitter.com/linkinpark"><i class='bx bxl-twitter'></i></a>
                    <a href="https://www.youtube.com/channel/UCZU9T1ceaOgwfLRq7OKFU4Q"><i class='bx bxl-youtube'></i></a>
                    <a href="https://open.spotify.com/artist/6XyY86QOPPrYVGvF9ch6wz"><i class='bx bxl-spotify'></i></a>
                </div>
                <div class="copyright">
                    <p>© created by Amine Outkacha 2022</p>
                </div>
                <script src="script.js"></script>
            </footer>
        </div>
    </body>
    </html>

    <?php
    if (isset($_POST['add'])) {
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $email = $_POST['email'];
        $psw = $_POST['password'];

        $sql = 'INSERT INTO signup_info (first_name, last_name, email, password) VALUES (:firstn,:lastn,:email,:password)';
        $insert = $conn->prepare($sql);
        $insert->bindParam("firstn",$first_name);
        $insert->bindParam("lastn",$last_name);
        $insert->bindParam("email",$email);
        $insert->bindParam("password",$psw);
        $insert->execute();
        echo '<script>window.location.href="login.php"</script>';
    }
    ?>

