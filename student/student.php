<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact List</title>
<link rel="stylesheet" href="student.css">
</head>
<body>

<div class="container">
<?php include '../includes/nav-bar.php'; ?>

  <section class="contact-table">
    <div class="table-controls">
      <label for="show-entries">Show
        <select id="show-entries">
          <option value="10">10</option>
          <option value="20">20</option>
          <option value="50">50</option>
          <!-- Additional options -->
        </select> entries
      </label>
      <div class="search-box">
        <label for="search">Search:</label>
        <input type="text" id="search">
      </div>
    </div>
    <table>
      <thead>
        <tr>
          <th>Name <span class="sort-icon">&#9660;</span></th>
          <th>Phone Number <span class="sort-icon">&#9660;</span></th>
          <th>Email <span class="sort-icon">&#9660;</span></th>
        </tr>
      </thead>
      <tbody>
        <!-- Table data populated from server -->
        <tr>
          <td>Fatin Faqihah</td>
          <td>019-3214563</td>
          <td>faq@gmail.com</td>
        </tr>
        <tr>
          <td>Nur Adriana</td>
          <td>013-3456231</td>
          <td>addy@gmail.com</td>
        </tr>
        <tr>
          <td>Nurin Jannah</td>
          <td>010-23456789</td>
          <td>jannah@gmail.com</td>
        </tr>
        <tr>
          <td>Siti Nur Sukirah</td>
          <td>011-33495001</td>
          <td>addy@gmail.com</td>
        </tr>
        <!-- More rows -->
      </tbody>
    </table>

    <div class="table-footer">
      <div class="table-info">Showing 1 to 4 of 4 entries</div>
      <div class="pagination">
        <a href="#" class="page-link">Previous</a>
        <a href="#" class="page-link active">1</a>
        <a href="#" class="page-link">Next</a>
      </div>
    </div>

  </section>
  
  <footer>
    <!-- Footer content -->
  </footer>
</div>
</body>
</html>
