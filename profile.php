<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);        
?>
<!DOCTYPE html>
<html>
<body>
    <h2>User Profile</h2>
    <p><strong>Username:</strong><?php echo $user['username']; ?></p>
    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>

    <h3>Update Profile</h3>
    <form method="POST" action="update_profile.php">
        Email: <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
        <input type="submit" name="update" value="Update Profile">  
    </form>
</body>
</html>