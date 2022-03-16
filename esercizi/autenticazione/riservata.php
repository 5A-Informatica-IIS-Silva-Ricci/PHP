<?php
include('SessionManager.php');

if (!SessionManager::inSession())
    header("location:login.php");
?>

<html>
<head>
    <title>Riservata</title>
</head>
<body>
<h1>
    RISERVATA
</h1>

<a href="logout.php">Logout</a>
</body>
</html>
