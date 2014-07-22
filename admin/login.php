<?php 
//start session
session_start();

//database connection
include ('../config/connection.php');
if($_POST) {
    $q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = SHA1('$_POST[password]')";
    $r = mysqli_query($dbc, $q);
    if(mysqli_num_rows($r)) {
        $_SESSION['username'] = $_POST['email'];
        header('location: index.php');
    }
}
?>

<!DOCTYPE html>
<html>
    
<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('config/css.php'); ?>
    <?php include('config/js.php'); ?>
</head>

<body>
    
    <?php //include(D_TEMPLATE.'/navigation.php'); //main navigation ?>

    <div class="container">
       <div class="row">
           <div class="col-md-4 col-md-offset-4">
               <div class="panel panel-info">
                   <div class="panel-heading">
                       <strong>Login</strong>
                   </div> <!-- end panel-heading -->
                  <div class="panel-body">
                        <form action="login.php" method="post" role="form">
                          <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                          </div>
                          <!--
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> Check me out
                            </label>
                          </div>
                          -->
                          <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div> <!-- end pane-body -->
                </div> <!-- end panel -->
           </div> <!-- end column -->
        </div> <!-- end row -->
    </div> <!-- end container -->

    <?php //include(D_TEMPLATE.'/footer.php'); //page footer ?>
    
    <?php //if($debug == 1) { include ('widgets/debug.php'); } ?>
    
</body>

</html>