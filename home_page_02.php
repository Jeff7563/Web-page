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
        href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="home_page_02.css" />
    <title>Web Design Mastery | MNTN</title>
</head>
<body>
        <header class="header" id="home">
        <nav>
            <div class="nav__bar">
                <div class="logo nav__logo">
                    <a href="#">Harmony Space</a>
                </div>
                <ul class="nav__links" id="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#activity">Activity</a></li>
                    <li><a href="#course">Course</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="nav__menu__btn" id="menu-btn">
                    <i class="ri-menu-line"></i>
                </div>
                    <div class="nav__action__btn">
                        <button class="btn">
                        <div class="nav-right">
                        <!-- Profile Dropdown -->
                        <div class="profile-dropdown">
                            <span><i class="ri-user-line"></i> Account</span>
                            <div class="profile-dropdown-content">
                                <div class="role">
                                <a href="#" class="active">User : <?php echo htmlspecialchars($username); ?></a>
                                </div>
                                <a href="./profile.php">Edit Profile</a>
                                <a href="./html/register&login.html">Logout</a>
                            </div>
                        </div>
                        </button>
                    </div>
                </div>
            </div>
            
        </nav>
        <div class="section__container header__container" id="home">
            <div class="header__content">
            <h3 class="section__subheader">Harmony Space</h3>
            <h1 class="section__header">
                พื้นที่ส่งเสริมสุขภาพจิต!
            </h1>
            <div class="scroll__btn">
                <a href="#activity">
                เลื่อนลง
                <span><i class="ri-arrow-down-line"></i></span>
                </a>
            </div>
            </div>
            <div class="header__socials">
            <span>Follow us</span>
            <a href="#"><i class="ri-instagram-line"></i></a>
            <a href="#"><i class="ri-twitter-fill"></i></a>
            </div>
        </div>
        </header>
        <section class="about">
            <div class="section__container about__container">
                <div class="about__image about__image-2" id="about">
                <img src="assets/Contact1.jpg" alt="about" />
                </div>
                <div class="about__content about__content-1">
                    <h3 class="section__subheader">About Us</h3>
                    <h2 class="section__header">อยากร่วมเป็นส่วนหนึ่งกับเราไหม?</h2>
                    <p>
                        เรามีกิจกรรมที่ตอบโจทย์ทุกความต้องการ ไม่ว่าจะเป็นด้านสุขภาพ และ ด้านจิตใจ และมีศูนย์กิจกรรมที่เป็นจุดเชื่อมต่อผู้สูงอายุที่มีความสนใจเหมือนกัน ช่วยสร้างมิตรภาพใหม่และความสัมพันธ์ที่ดีในชุมชน
                        มาร่วมกันสร้างสุขภาพที่ดีและคลายความกังวลในบรรยากาศที่อบอุ่น พร้อมกิจกรรมที่ช่วยเสริมสุขภาพกายและใจ เพื่อชีวิตที่สดใสและมีคุณภาพ!!
                    </p>
                    <div class="about__btn">
                        <a href="#">
                        ดูเพิ่มเติม
                        <span><i class="ri-arrow-right-line"></i></span>
                        </a>
                    </div>
                </div>
                <div class="about__image about__image-2" id="activity">
                    <div class="destination__grid about__grid">
                        <div class="destination__card">
                            <img src="assets/aa1.PNG" alt="destination" />
                            <div class="card__content">
                            <h4>10 Must-Visit Hidden Gems</h4>
                            <p>
                                Discover off-the-beaten-path locations and hidden gems within
                                dream destinations, taking you beyond the typical tourist spots.
                            </p>
                            </div>
                        </div>
                        <div class="destination__card">
                            <img src="assets/aa3.JPG" alt="destination" />
                            <div class="card__content">
                            <h4>Immersive Cultural Experiences</h4>
                            <p>
                                Dive deep into the vibrant cultures of dream destinations,
                                showcasing the rituals, traditions, and local customs that make
                                these places truly unique.
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about__content about__content-2">
                    <h3 class="section__subheader">Activity</h3>
                    <h2 class="section__header">Picking the right hiking gear!</h2>
                    <div class="about__btn">
                        <a href="#">
                        Read more
                        <span><i class="ri-arrow-right-line"></i></span>
                        </a>
                    </div>
                </div>
                <div class="about__image about__image-2" id="course">
                    <div class="destination__grid about__grid">
                            <img src="assets/aa8.png" alt="destination" />
                            <img src="assets/aa9.png" alt="destination" />
                    </div>
                </div>
                <div class="about__content about__content-3">
                    <h3 class="section__subheader">Course</h3>
                    <h2 class="section__header">Understanding your map & timing</h2>
                    <p>
                        Knowing when to start and anticipating the changing conditions
                        ensures a safe and enjoyable journey. So, dive into the details,
                        grasp the contours, and synchronize your steps with the rhythm of
                        nature. It's not just a hike; it's a journey orchestrated by your
                        map and timed to perfection.
                    </p>
                    <div class="about__btn">
                        <a href="#">
                        Read more
                        <span><i class="ri-arrow-right-line"></i></span>
                        </a>
                    </div>
                </div>
                <div class="about__image about__image-2" id="contact">
                    <img src="assets/tt5.PNG" alt="about" />
                </div>
                <div class="about__content about__content-4">
                    <h3 class="section__subheader">Contact</h3>
                    <h2 class="section__header">Picking the right hiking gear!</h2>
                    <p>
                        From durable footwear that conquers rugged trails to lightweight
                        backpacks that carry your essentials with ease, we navigate the
                        intricacies of gear selection to ensure you're geared up for success
                        on every hike. Lace up your boots and let the journey begin with
                        confidence, knowing you've chosen the right gear for the trail
                        ahead!
                    </p>
                    <div class="about__btn">
                        <a href="#">
                        Read more
                        <span><i class="ri-arrow-right-line"></i></span>
                        </a>
                    </div>
                </div>
                
            </div>
        </section>

        <footer class="footer">
        <div class="section__container footer__container">
            <div class="footer__col">
            <div class="logo footer__logo">
                <a href="#">Harmony Space</a>
            </div>
            <p>
                ให้เราได้ดูแลคูณ จากนี้และตลอดไป!
            </p>
            </div>
            <div class="footer__col">
            <h4>More on The Blog</h4>
            <ul class="footer__links">
                <li><a href="#">About MNTN</a></li>
                <li><a href="#">Contributors & Writers</a></li>
                <li><a href="#">Write For Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
            </div>
            <div class="footer__col">
            <h4>More on Harmony Space</h4>
            <ul class="footer__links">
                <li><a href="#">The Team</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Press</a></li>
            </ul>
            </div>
        </div>
        <div class="footer__bar">
            Copyright © 2025 Web Design Mastery. All rights reserved.
        </div>
        </footer>

        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="main.js"></script>
</body>
</html>