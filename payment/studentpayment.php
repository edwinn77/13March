<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Details</title>
<link rel="stylesheet" href="studentpayment.css">
</head>
<body>
  <nav><?php include '../includes/nav-bar-stu.php'; ?></nav>
  <div class="payment-details-container">
    <div class="form-section">
      <h2>Payment Details</h2>
      <div class="form-field">
        <label for="date">Date</label>
        <input type="text" id="date" name="date">
      </div>
      <div class="form-field">
        <label for="time">Time</label>
        <input type="text" id="time" name="time">
      </div>
      <div class="form-field">
        <label for="package">Package</label>
        <input type="text" id="package" name="package">
      </div>
      <div class="form-field">
        <label for="amount">Amount</label>
        <input type="text" id="amount" name="amount">
      </div>
      <div class="form-field">
        <label for="receipt">Upload Receipt</label>
        <input type="file" id="receipt" name="receipt">
      </div>
      <div class="action-buttons">
        <a href="../evalution/studentevalution1.php"><input type="button" class="save-btn" value="Pay"></a>
        <a href="../dashboard/studentdashboard.php"><input type="button" class="save-btn" value="Cancel"></a>
      </div>
    </div>
    <div class="qr-section">
      <img src="../Images/qrcode.png" alt="QR Code" class="qr-code">
      <!-- <p>Scan QR Code</p> -->
    </div>
  </div>
</body>
</html>
