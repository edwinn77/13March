<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<link rel="stylesheet" href="admindashboard2.css">
<script src="admindashboard2.js" defer></script>
</head>
<body>

<div class="dashboard-container">
    <header class="dashboard-header">
        <div class="profile-icon" id="profile-icon">
            <img src="../Images/Admindashboard page (1).png" alt="Profile">
        </div>
        <nav class="dashboard-nav">
            <ul>
                <li><a href="#dashboard-section" class="active">HOME</a></li>
                <li><a href="#about-section">ABOUT US</a></li>
                <li><a href="#contact-section">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <!-- This is the sidebar that will slide in -->
    <div class="sidebar" id="sidebar">
        <button class="close-btn" id="close-btn">×</button>
        <!-- Sidebar content -->
        <div class="sidebar-content">
            <img src="../Images/Admindashboard Page (1).png" alt="Nur Mariana" class="sidebar-profile-picture">
            <h2>NUR MARIANA</h2>
            <p class="admin-email">Admin | marianaibaidin@gmail.com</p>
            <hr class="sidebar-divider">
            <ul>
                <li><a href="../profile/profile.php" class="sidebar-link">Profile</a></li>
                <li><a href="../student/student.php" class="sidebar-link">Student</a></li>
                <li><a href="../package/package.php" class="sidebar-link">Package</a></li>
                <li><a href="../payment/payment.php" class="sidebar-link">Payment</a></li>
                <li><a href="../evalution/evalution.php" class="sidebar-link">Evaluation</a></li>
                <li><a href="../landing/landing.php" class="sidebar-link">Log out</a></li>
            </ul>
        </div>
    </div>
    <div id="overlay" class="overlay"></div>
    
    <main class="dashboard-main" id="dashboard-section">
        <div class="dashboard-title">
            <img src="../Images/Admindashboard page (3).png" alt="Profile">
            <h1>DASHBOARD</h1>
        </div>
        <div class="dashboard-stats">
            <div class="stat-item">
                <div class="stat-text">
                    <p>Number of students</p>
                    <span class="stat-number">20</span>
                </div>
                <div class="stat-value">
                    <img src="../Images/Admindashboard page (2).png" alt="Students">
                </div>
            </div>
            <!-- Additional stat items here -->
        </div>

    </main>

    <main class="content" id="about-section">
        <div class="content-wrapper">
            <h1 class="content-title">About Us</h1>
            <ol class="content-list">
                <li>Flexible Learning: Access classes anytime, anywhere, and at your own pace</li>
                <li>Interactive Experience: Enjoy video tutorials, downloadable recipes, and live Q&A sessions</li>
                <li>Empowering Skills: Gain the confidence and skills to create restaurant-quality meals at home</li>
                <li>Community Support: Connect with fellow food enthusiasts to share tips and celebrate successes</li>
            </ol>
        </div>
    </main>

    <main class="contact" id="contact-section">
        <h1 class="contact-title">Get In Touch</h1>
        <div class="contact-wrapper">
            <div class="contact-info">
                <img src="../Images/Phone-icon.svg" alt="Phone">
                <h2>Phone: 012-3456789</h2>
                <h2>NUR MARIANA</h2>
            </div>
            <div class="contact-info">
                <img src="../Images/Email-icon.svg" alt="Email">
                <h2>marianazainalabidin@gmail.com</h2>
            </div>
        </div>
    </main>
</div>

</body>
</html>
