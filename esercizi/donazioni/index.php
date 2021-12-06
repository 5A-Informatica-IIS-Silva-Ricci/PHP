<?php
include "autoloader.php";

include "header.php";
TemplateUtil::renderPageTitle("Home");

$manager = new ManagerX();

if(!empty($_POST)) {
    if(isset($_GET['id']))
        $_POST['id'] = $_GET['id'];
    $manager->salva($_POST);
    header("location:index.php");
}

$manager->lista();
?>

<?php
include "footer.php";
