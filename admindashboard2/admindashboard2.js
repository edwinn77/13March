document.addEventListener('DOMContentLoaded', (event) => {
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
