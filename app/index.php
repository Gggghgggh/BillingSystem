<!-- main.php -->
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<div id="content">
    <div class="container-fluid mt-4">
        <h2>Welcome to the Dashboard</h2>
        <p>This is the main content area.</p>
    </div>
</div>

<!-- JavaScript to Handle Sidebar Toggle -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('sidebarToggle').onclick = function () {
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('content');
        
        sidebar.classList.toggle('show');
        content.classList.toggle('shifted');
    };
</script>
</body>
</html>
