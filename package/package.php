<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Management</title>
    <link rel="stylesheet" href="package.css">
</head>
<body>

<div class="container">

<?php include '../includes/nav-bar.php'; ?>

<main class="main-content">
    <a href="createpackage.php" class="create-package-btn">Create Package</a>
</main>

    <main>
        <table>
            <thead>
                <tr>
                    <th>Package ID</th>
                    <th>Package Name</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#1</td>
                    <td>Kek Pisang Merelit</td>
                    <td>
                        <ul>
                            <li>Kek Pisang Cheese</li>
                            <li>Kek Pisang Coklat</li>
                        </ul>
                    </td>
                    <td>RM 10.00</td>
                    <td><a href="editpackage.php" class="back-button">
                            <img src="../Images/edit-icon.svg" alt="Back">
                        </a>
                        <!-- <button>Edit</button> -->
                    </td>
                    <td>
                        <!-- Assume the value of data-id corresponds to the ID of the record you want to delete -->
                        <button class="delete-icon" data-id="#1">
                            <img src="../Images/delete-icon.svg" alt="Delete">
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>#2</td>
                    <td>Kek Bajet Part 1</td>
                    <td>
                        <ul>
                            <li>Seksis Soft Cake</li>
                            <li>Marble Dolu-dolu</li>
                        </ul>
                    </td>
                    <td>RM 10.00</td>
                    <td><a href="editpackage.php" class="back-button">
                            <img src="../Images/edit-icon.svg" alt="Back">
                        </a>
                        <!-- <button>Edit</button> -->
                    </td>
                    <td>
                        <!-- Assume the value of data-id corresponds to the ID of the record you want to delete -->
                        <button class="delete-icon" data-id="#1">
                            <img src="../Images/delete-icon.svg" alt="Delete">
                        </button>
                    </td>
                </tr>
                <!-- Repeat for other packages -->
            </tbody>
        </table>
    </main>

    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Are you sure?</h2>
            <p>Do you really want to delete this record? This process cannot be undone.</p>
            <div class="modal-actions">
                <button class="btn cancel-btn">Cancel</button>
                <button class="btn delete-btn">Delete</button>
            </div>
        </div>
    </div>


    
</div>
<script>
    // Get the modal
    var modal = document.getElementById('deleteModal');

    // Get the delete buttons
    var deleteButtons = document.querySelectorAll('.delete-icon');

    // Get the element that closes the modal
    var span = document.getElementsByClassName('close')[0];

    // Get the actual delete button inside the modal
    var confirmDeleteBtn = document.querySelector('.delete-btn');

    // Attach click event to delete icons (buttons now)
    deleteButtons.forEach(function(btn) {
        btn.onclick = function() {
            // Show the modal
            modal.style.display = "block";
        }
    });

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks on cancel, close the modal
    document.querySelector('.cancel-btn').onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks delete, perform the delete action
    confirmDeleteBtn.onclick = function() {
        // Hide the modal right away
        modal.style.display = "none";
        
        // Redirect to package.php (or hide the content if there is no actual redirection)
        // If you simply want to hide the row that was "deleted", you could do this:
        // document.querySelector('table tbody').style.display = 'none';
        
        // For actual redirection, uncomment the line below
        // window.location.href = 'package.php';
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


</body>
</html>
