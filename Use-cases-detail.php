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
        <div class="row pb-4">
            <div class="col-12 text-center">
                <div class="btn-group-custom">
                    <a href="blog.php?tag=all">
                        <button class="btn btn-primary <?php echo $tag == 'all' ? 'active':'' ?>">ALL</button>
                    </a>
                    <a href="blog.php?tag=news">
                        <button class="btn btn-primary <?php echo $tag == 'news' ? 'active':'' ?>">NEWS</button>
                    </a>
                    <a href="blog.php?tag=future">
                        <button class="btn btn-primary <?php echo $tag == 'future' ? 'active':'' ?>">FUTURE</button>
                    </a>
                    <a href="blog.php?tag=society">
                        <button class="btn btn-primary <?php echo $tag == 'society' ? 'active':'' ?>">SOCIETY</button>
                    </a>
                    <a href="blog.php?tag=iot">
                        <button class="btn btn-primary <?php echo $tag == 'iot' ? 'active':'' ?>">IOT</button>
                    </a>
                    <a href="blog.php?tag=innovation">
                        <button class="btn btn-primary <?php echo $tag == 'innovation' ? 'active':'' ?>">INNOVATION</button>
                    </a>
                    <a href="blog.php?tag=others">
                        <button class="btn btn-primary <?php echo $tag == 'others' ? 'active':'' ?>">OTHERS</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
                if($result->num_rows){
                while ($row = $result->fetch_assoc()) {
            ?>
                <section class="col-12 col-sm-6 col-md-4 p-2">
                    <div class="card h-100">
                        <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="warpper-card-img">
                            <img class="card-img-top" src="<?php echo $base_path_blog.$row['image'] ?>" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['subject'] ?></h5>
                            <p class="card-text"><?php echo $row['sub_title'] ?></p>
                        </div>
                        <div class="p-3">
                            <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="btn btn-block blogbotton">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </section>
            <?php }
            } else {
            ?>
            <section class="col-12">
                <p class="text-center">ไม่มีข้อมูล</p>
            </section>
            <?php } ?>
        </div>
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