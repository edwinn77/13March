<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="editprofile.css">
</head>
<body>

<div class="edit-profile-container">
    <aside class="sidebar">
        <h2>EDIT PROFILE</h2>
        <!-- Content here -->
        <a href="profile.php" class="back-button">
            <img src="../Images/back-icon.svg" alt="Back">
        </a>
    </aside>
    <section class="profile-form">
        <h2>Admin Personal Information</h2>
        <p>Enter personal information</p>
        <form>
            <div class="form-row">
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>
            <div class="form-row">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-row">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <div class="form-actions">
                <!-- <button type="submit">Update</button>

                document.addEventListener('DOMContentLoaded', function() {
                    document.querySelector('.form-actions button[type="submit"]').addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent the default form submission
                        // You would typically handle form data here

                        // After handling form data, redirect to profile.php
                        window.location.href = 'profile.php';
                    });
                }); -->
                <a href="../admindashboard2/admindashboard2.php" class="button">Update</a>
                <a href="profile.php" class="button">Cancel</a>
            </div>
        </form>
    </section>
</div>

</body>
</html>
