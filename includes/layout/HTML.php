<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'includes/layout/head/Head.php' ?>
</head>
<body>
    <?php
        //Main Page 
        include 'includes/layout/login/Login.php';

        // Scripts
        include_once 'includes/scripts/Scripts.php';
    ?>
</body>
    <?php 
        use HotReloader\HotReloader;
        $reload = new HotReloader('phrwatcher.php');
        $reload->init();
    ?>
</html>