<?php
include('DbManager.php');
include('SessionManager.php');

$dbManager = DbManager::getInstance();
$nonTrovato = false;

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $utente = $dbManager->getUtente($username);

    if ($utente == null || !password_verify($_POST['password'], $utente->getPassword()))
        $nonTrovato = true;
    else {
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
        <form action="login.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <input type="submit" name="submit" value="Login">
            <?php if ($nonTrovato) echo "<h4>Username o email errata: <a href='registrazione.php'>registrati</a></h4>"?>
        </form>
    </body>
</html>