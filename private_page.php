<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location:login.php');
}
?>
<html>
    <head>
        <title>Title goes here</title>
        <script src="jquery-3.1.1.min.js"></script>
        <script type='text/javascript'src='validate.js'></script>
        <script type="text/stylesheet" src="apikey.js"></script>
        <link rel='stylesheet' type="text/css" href="validate.css">
        <!-- Bootstrap file -->
        <!-- js -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

        <!-- css -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css.map">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css.map">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css.map">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css.map">

    </head>
    <body>
        <p><a href="logout.php">Logout</a></p>
        <hr>
        <h3>Here, we will create and API that will allow Users/Developers to order items from external systems</h3>
        <hr>
        <h4>We now put this feature of allowing users to generate an API key. Click the button to generate the API key</h4>

        <button class="btn btn-primary" id="api_key_btn">Generate API key</button> <br><br>
        <!-- This text area will hold the API key -->
        <strong>Your API key: </strong>(Note that if your API key is already in use by already running applications, 
                generating a new key will stop the application from functioning)<br>
        
        <textarea name="api_key" id="api_key" cols="100" rows="2" readonly><?php echo fetchUserApiKey();?>></textarea>

        <h3>Service Description</h3>
        We have a service/API that allows external applications to order food and also pull all order status by using order id. Let's do it.

        <hr>
    </body>
</html>
