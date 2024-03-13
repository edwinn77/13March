<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Upload and Description Form</title>
<style>

</style>
<link rel="stylesheet" href="studentevalution.css">
</head>
<body>

    <nav><?php include '../includes/nav-bar-stu.php'; ?></nav>
    
  <div class="upload-container">
    <div class="upload-box" onclick="document.getElementById('file-upload').click()">
      <input type="file" id="file-upload" style="display: none;" />
      <img src="../Images/cloud-upload-icon.svg" alt="Upload Icon" />
      <p>Upload Picture</p>
    </div>

    <div class="description-box">
      <label for="description">Description</label>
      <textarea id="description" rows="5"></textarea>
      <a href="studentevalution2.php"><button class="button submit-button">Submit</button></a>
      <a href="../studentdashboard/studentdashboard.php"><button class="button cancel-button">Cancel</button></a>
      
    </div>
  </div>

  <script>
    // You can add JavaScript here to handle the file upload and form submission
  </script>

</body>
</html>
