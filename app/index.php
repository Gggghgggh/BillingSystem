<!-- main.php -->
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

<div id="content">
    <div class="container-fluid mt-4" style="padding-top: 39px;">
  <?php
    // Invoice Card
echo '
    <a href="#" class="card orange">
        <div>
            <h3>Invoices</h3>
            <div class="count">' . '</div>
        </div>
        <div class="icon"></div>
    </a>
';

// Clients Card
echo '
    <a href="#" class="card blue">
        <div>
            <h3>Clients</h3>
            <div class="count">' .  '</div>
        </div>
        <div class="icon"></div>
    </a>
';

// Prices History Card
echo '
    <a href="#" class="card blue">
        <div>
            <h3>Prices History</h3>
        </div>
    </a>
';

// Items Card
echo '
    <a href="#" class="card blue">
        <div>
            <h3>Items</h3>
            <div class="count">' .  '</div>
        </div>
        <div class="icon"></div>
    </a>
';

// Summary Reports Card (Full Width)
echo '
    <a href="#" class="card large">
        <h3>Summary Reports</h3>
    </a>
';

// Unpaid Invoices Card (Full Width)
echo '
    <a href="#" class="card large">
        <h3>Unpaid Invoices</h3>
    </a>
';
?>
        
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
