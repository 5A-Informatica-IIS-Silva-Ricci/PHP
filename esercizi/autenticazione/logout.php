<?php
include('SessionManager.php');
SessionManager::distruggi();
header('location:home.php');
