<?php
require "database.php";
$email = $_GET["email"];

$sql = "SELECT * FROM signup_info WHERE email='$email'";
$showInfo = $conn->prepare($sql);
$showInfo->execute();
$result = $showInfo->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="about.html">About</a></li>
                    <a href="profile.php"><i class='bx bxs-user'></i></a>
                </ul>
            </nav>
        </div>
        <section>
            <div class="title">
                <h1>Profile</h1>
            </div>  
            <div class="page-content">
                <div class="user">
                    <div class="img-container">
                        <img src="images/user.png">
                    </div>
                    <div class="line"></div>
                    <div class="options">
                        <div class="profile-navbar">
                            <ul>
                                <li id="show">Show Info</li>
                                <!-- <li id="change">Edit Your Profile</li> -->
                                <li><a href="home.html">LOG OUT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="user-results">
                    <?php
                    foreach ($result as $info) {
                        echo '<ul>
                            <h3>First Name: ' . $info["first_name"] . '</h3>
                            <h3>Last Name: ' . $info["last_name"] . '</h3>
                            <h3>email: ' . $info["email"] . '</h3>
                            <h3>password: ' . $info["password"] . '</h3>
                        </ul>';
                    }
                    ?>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
