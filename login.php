<?php
include 'db.php';

if (isset($_POST['login'])  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";    
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
       $_SESSION['username'] = $username;
       header("Location: profile.php");
       exit();;
    } else {
       $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<form method="POST" action="">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" name="login" value="Login">
</form>
<?php
if (isset($error)) {
    echo $error;

}
?>
</body> 
</html>