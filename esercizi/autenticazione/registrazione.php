<?php
include('DbManager.php');
include('SessionManager.php');

$dbManager = DbManager::getInstance();
$nonRegistrato = true;

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $nonRegistrato = $dbManager->registraUtente($username, $password);

    if ($nonRegistrato) {
        SessionManager::createSession($username);
        header("location:riservata.php");
    }
}
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
<form action="registrazione.php" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <input type="submit" name="Submit" value="Registrati">
    <?php if (!$nonRegistrato) echo "<h4>Utente già registrato: <a href='login.php'>fai il login</a></h4>"?>
</form>
</body>
</html>