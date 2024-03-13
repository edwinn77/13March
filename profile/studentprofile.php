<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile Page</title>
<link rel="stylesheet" href="profile.css">
</head>
<body>

<nav><?php include '../includes/nav-bar-stu.php'; ?></nav>
  <div class="profile-container">
    <div class="header">
      <span class="avatar">
        <img src="../Images/student-icon.svg" alt="Profile" class="profile-pic">
      </span>
      <div class="user-info">
        <span class="username">NUR SUKI</span><br>
        <span class="role">@student</span>
      </div>
    </div>

    <div class="personal-i">
        <h1> Personal Information </h1>

        <form class="personal-info"  action="studenteditprofile.php" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        <div class="form-group">
            <button type="submit" class="save-btn">Edit Profile</button>
        </div>
        </form>
    </div>
  </div>
</body>
</html>
