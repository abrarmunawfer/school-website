    <?php
    session_start();
    if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        header("Location: admin_login.php"); // Redirect to login if not logged in
        exit();
    }
    ?>

    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
        .header { background: #0077cc; color: white; padding: 15px; display: flex; justify-content: space-between; align-items: center; }
        .header h1 { margin: 0; padding-left: 20px; }
        .logout-btn { background: red; color: white; padding: 8px 15px; text-decoration: none; border-radius: 5px; margin-right: 20px; }
        .logout-btn:hover { background: darkred; }
    </style>

    <div class="header">
        <h1>Welcome to Admin Panel</h1>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>