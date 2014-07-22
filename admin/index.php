<?php

//start the session
session_start();

if(!isset($_SESSION['username'])){
    header('location: login.php');
}

?>

<?php include('config/setup.php'); ?>

<!DOCTYPE html>
<html>
    
<head>
    <title><?php echo $page['title'].' | '.$site_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('config/css.php'); ?>
    <?php include('config/js.php'); ?>
</head>

<body>
    
    <?php include(D_TEMPLATE.'/navigation.php'); //main navigation ?>

    <div class="container">
        <h1>Admin Dashboard</h1>
    </div>

    <?php include(D_TEMPLATE.'/footer.php'); //page footer ?>
    
    <?php if($debug == 1) { include ('widgets/debug.php'); } ?>
    
</body>

</html>