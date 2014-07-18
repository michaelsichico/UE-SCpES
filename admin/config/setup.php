<?php
//setup file:

//database connection here ...
$dbc = mysqli_connect('localhost','username','password','scpes') OR die('Could not connect because: '.mysqli_connect_error());

//constants
DEFINE('D_TEMPLATE', 'template');

//functions
include('functions/data.php'); //dbc, pageid
include('functions/template.php'); //dbc, id

//site setup
$debug = data_setting_value($dbc, 'debug-status');

$site_title = 'UE-SCpES';

if(isset($_GET['page']))	{$pageid = $_GET['page'];}	//set page equal to the value given in the url
else 						{$pageid = 1;}				//set $pageid equal to 1 or home page

//page setup
$page = data_page($dbc,$pageid);


?>