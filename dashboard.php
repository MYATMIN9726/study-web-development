<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>

            <div class="profile-card">
                <img src="https://cdn.britannica.com/70/234870-050-D4D024BB/Orange-colored-cat-yawns-displaying-teeth.jpg" alt="Profile Picture" class="profile-img">
                <h2><?php echo $_SESSION['username']; ?></h2>
                <p>Your simple dashboard.</p>
            </div>

            <div class="stat-card">
                <h3>Statistics</h3>
                <p>Some data or summary will go here.</p>
            </div>
        </div>
    </div>
</body>
</html>
