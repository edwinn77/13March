<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0 auto;
            padding: 0;
            box-sizing: border-box;
            width: 80%;
            /* background-color: #c6c293; */
        }
        header {
            /* background-color: #f8f8f8; */
            border-bottom: solid 1px #e7e7e7;
            padding: 10px 0;
            text-align: center;
        }
        header nav {
            margin: 0;
            padding: 0;
            display: inline-block;
        }
        header nav a {
            text-decoration: none;
            color: #333;
            padding: 10px 15px;
            font-weight: bold;
        }
        .dashboard-button {
            display: block;
            background-color: #c9a678;
            color: white;
            text-align: center;
            font-size: 1.5em;
            padding: 10px;
            margin: 20px auto;
            width: 200px;
            border-radius: 20px;
            font-weight: bold;
        }
        .pricing-packages {
            display: flex;
            justify-content: space-around;
            margin: 20px 10px;
        }
        .package {
            background-color: #fff;
            border: 1px solid #e1e1e1;
            padding: 20px;
            border-radius: 8px;
            width: 30%;
            margin: 0 10px;
        }
        .package h3 {
            background-color: #f0f0f0;
            padding: 5px;
            margin: 0 0 10px 0;
            text-align: center;
        }
        .package p {
            margin: 0;
        }
        .package-price {
            color: #ff4500;
            font-weight: bold;
            margin-bottom: 5px;
        }
    </style>

<link rel="stylesheet" href="studentdashboard.css">
<script src="../admindashboard2/admindashboard2.js" defer></script>
</head>
<body>

    <?php include '../includes/nav-bar-stu.php'; ?>
    
    <main class="dashboard-main" id="dashboard-section">
        <div class="dashboard-title">
            <img src="../Images/Admindashboard page (3).png" alt="Profile">
            <h1>DASHBOARD</h1>
        </div>
    <main>

    <div class="pricing-packages">
        <div class="package">
            <h3>Kek Pisang MereLit</h3>
            <p class="package-price">RM 10.00</p>
            <ul>
                <li>kek pisang cheese</li>
                <li>kek pisang coklat</li>
            </ul>
        </div>
        <div class="package">
            <h3>Kek Bajet Part 1</h3>
            <p class="package-price">RM 10.00</p>
            <ul>
                <li>seksis soft kek</li>
                <li>marble dolu-dolu</li>
            </ul>
        </div>
        <div class="package">
            <h3>Kek Bajet Part 2</h3>
            <p class="package-price">RM 10.00</p>
            <ul>
                <li>kek coklat mist</li>
                <li>kek batik indulgence</li>
            </ul>
        </div>
    </div>

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
</body>
</html>
