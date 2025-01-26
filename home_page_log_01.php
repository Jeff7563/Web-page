<?php
session_start();
include('./php/server.php');

// Assuming you want to get the username of a specific user, e.g., with id 1
$userId = $_SESSION['user_id'];
$sql = "SELECT username FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userId);
$stmt->execute();
$stmt->bind_result($username);
$stmt->fetch();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="style_new_page.css" />
    <title>Web Design Mastery | Explore Destinations</title>
</head>
    <body>
        <div class="container">
        <nav>
            <div class="nav__logo">
            <a href="#"><img src="assets/logo.png" alt="logo" /></a>
            </div>
            <ul class="nav__links">
            <li class="link"><a href="#">Home</a></li>
            <li class="link"><a href="#">Destinations</a></li>
            <li class="link"><a href="#">Contact Us</a></li>
            <li class="link"><a href="#">Blog</a></li>
            </ul>
            <div class="search">
            <input type="text" placeholder="Search" />
            <span><i class="ri-search-line"></i></span>
            </div>
            <div class="login">
            <div class="nav-right">
                <!-- Profile Dropdown -->
                <div class="profile-dropdown">
                    <span><i class="ri-user-3-fill"></i></span>
                    <div class="profile-dropdown-content">
                        <div class="role">
                        <a href="#" class="active">User : <?php echo htmlspecialchars($username); ?></a>
                        </div>
                        <a href="./profile.php">Edit Profile</a>
                        <a href="../html/register&login.html">Logout</a>
                    </div>
                </div>
            </div>
            </div>
        </nav>
        <div class="destination__container">
            <img class="bg__img__1" src="assets/bg-dots.png" alt="bg" />
            <img class="bg__img__2" src="assets/bg-arrow.png" alt="bg" />
            <div class="socials">
            <span><i class="ri-twitter-fill"></i></span>
            <span><i class="ri-facebook-fill"></i></span>
            <span><i class="ri-instagram-line"></i></span>
            <span><i class="ri-youtube-fill"></i></span>
            </div>
            <div class="content">
            <h1>EXPLORE<br />DREAM<br /><span>DESTINATION</span></h1>
            <p>
                It encourages exploration of unfamiliar territories, embracing
                diverse cultures and landscapes, while pursuing the desired
                destination that captivates the heart and ignites a sense of wonder.
            </p>
            <button class="btn">BOOK NOW</button>
            </div>
            <div class="destination__grid">
                <div class="destination__card">
                    <img src="assets/destination-1.jpg" alt="destination" />
                    <div class="card__content">
                    <h4>10 Must-Visit Hidden Gems</h4>
                    <p>
                        Discover off-the-beaten-path locations and hidden gems within
                        dream destinations, taking you beyond the typical tourist spots.
                    </p>
                    <button class="btn">Read More</button>
                    </div>
                </div>
                <div class="destination__card">
                    <img src="assets/destination-2.jpg" alt="destination" />
                    <div class="card__content">
                    <h4>Immersive Cultural Experiences</h4>
                    <p>
                        Dive deep into the vibrant cultures of dream destinations,
                        showcasing the rituals, traditions, and local customs that make
                        these places truly unique.
                    </p>
                    <button class="btn">Read More</button>
                    </div>
                </div>
                <div class="destination__card">
                    <img src="assets/destination-3.jpg" alt="destination" />
                    <div class="card__content">
                    <h4>From Dreams to Reality</h4>
                    <p>
                        Explore expert tips, and hidden gems, ensuring every moment of
                        your trip is optimized, and make the most of time in your
                        long-awaited dream location.
                    </p>
                    <button class="btn">Read More</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>