<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<link rel="stylesheet" href="admindashboard2.css">
<!-- <script src="nav-bar.js" defer></script> -->
<script>document.addEventListener('DOMContentLoaded', (event) => {
    const profileIcon = document.getElementById('profile-icon');
    const sidebar = document.getElementById('sidebar');
    const closeButton = document.getElementById('close-btn');
    const overlay = document.getElementById('overlay');

    // When the profile icon is clicked, slide in the sidebar and show overlay
    profileIcon.addEventListener('click', function() {
        sidebar.style.left = '0';
        overlay.style.display = 'block';
    });

    // When the close button is clicked, slide out the sidebar and hide overlay
    closeButton.addEventListener('click', function() {
        sidebar.style.left = '-250px';
        overlay.style.display = 'none';
    });

    // Also hide sidebar when overlay is clicked
    overlay.addEventListener('click', function() {
        sidebar.style.left = '-250px';
        overlay.style.display = 'none';
    });
});
</script>
<style>

.dashboard-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    border-bottom: 2px solid white;
    /* background-color: #fff; */
}

.profile-icon{
    cursor: pointer;
}


.profile-icon img {
    width: 50px; /* Adjust size as needed */
    border-radius: 50%;
}

.dashboard-nav ul {
    list-style: none;
    display: flex;
    padding: 0;
}

.dashboard-nav li {
    margin-left: 20px;
}

.dashboard-nav a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
    padding: 0 40px;
}

.dashboard-nav a.active {
    border-bottom: 3px solid rgb(0, 0, 0); /* White underline for the active page */
}


/* Style for the sidebar */
.sidebar {
    position: fixed;
    top: 0;
    left: -250px; /* Start off-screen */
    width: 250px;
    height: 100%;
    background-color: #c6c293;
    overflow-x: hidden;
    transition: 0.5s; /* Smooth transition for sliding in/out */
    z-index: 2; /* Ensure the sidebar is above other content */
}

/* Style for sidebar content */
.sidebar-content {
    padding: 20px;
}

/* Style for the close button */
.close-btn {
    position: absolute;
    top: 0;
    right: 20px;
    font-size: 36px;
    border: none;
    background: none;
    cursor: pointer;
}

.sidebar-profile-picture {
    width: 80px; /* Adjust the size as needed */
    height: 80px; /* Adjust the size as needed */
    border-radius: 50%; /* Makes the image round */
    display: block; /* Centers the image in the sidebar */
    margin: 0 auto 10px; /* Adds margin to the bottom */
}

.admin-email {
    display: block; /* Ensures the <p> tag takes up the full width */
    text-align: left; /* Centers the text */
    margin-bottom: 5px; /* Space below the email */
    /* border-bottom: 2px solid #fff; */
}

.sidebar-divider {
    border: 0;
    height: 2px; /* Height of the horizontal line */
    background-color: #fff; /* Color of the horizontal line */
    margin-bottom: 20px; /* Space below the horizontal line */
}

.sidebar-link {
    font-size: 18px; /* Makes the text larger than the default */
    color: #000000; /* Black color for the links */
    text-decoration: none; /* Removes the underline from links */
    display: block; /* Makes the link take the full width of its container */
    padding: 10px 0; /* Adds vertical padding for spacing */
    /* ... other styles ... */
}

.sidebar-nav li {
    margin-bottom: 10px; /* Adds space between the list items */
}

.overlay {
    display: none; /* Hidden by default */
    position: fixed; /* Overlay is taken out of the normal flow and placed relative to the viewport */
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    top: 0;
    left: 0;
    background: rgba(255, 255, 255, 0.4); /* White color with opacity for shading */
    z-index: 1; /* Ensure it's below the sidebar and above other content */
}

</style>
</head>
<body>
    <header class="dashboard-header">
        <div class="profile-icon" id="profile-icon">
            <img src="../Images/Admindashboard page (1).png" alt="Profile">
        </div>
        <nav class="dashboard-nav">
            <ul>
            <li><a href="../admindashboard2/admindashboard2.php#dashboard-section">HOME</a></li>
                <li><a href="../admindashboard2/admindashboard2.php#about-section">ABOUT US</a></li>
                <li><a href="../admindashboard2/admindashboard2.php#contact-section">CONTACT</a></li>
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