<!DOCTYPE html>
<html lang="en">
<head>
   <?php include 'includes/layout/head/Head.php' ?>
</head>
<body>
    <?php 
        echo 'Login Page';
        include 'includes/scripts/Scripts.php';
    ?>
</body>
    <?php 
        use HotReloader\HotReloader;
        $reload = new HotReloader('phrwatcher.php');
        $reload->init();
    ?>
</html>