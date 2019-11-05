<?php
require_once 'php/connect.php';
$tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
$sql = "SELECT * FROM `articles` WHERE `tag` LIKE '%".$tag."%' AND `status` = 'true'";
$result = $conn->query($sql);
if(!$result){
    header('Location: blog.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>5G Thailand</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <!-- Section Navbar -->
    <?php include_once 'include/navbar.php'?>

    <!-- Section PageTitle -->
    <header class="jarallax" data-jarallax='{"speed": 0.3}' style="background-image: url(https://images.unsplash.com/photo-1473163928189-364b2c4e1135?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80);">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold">บทความ</h1>
            <p class="lead">"5G Thailand ความรู้ไร้ขีดจำกัด"</p>
        </div>
    </header>

    <!-- Section Blog -->
    <section class="container py-5">
   
    </section>

    

    <!-- Section Footer -->
    <?php include_once 'include/footer.php'?>

    <!-- Section On to Top -->
    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>