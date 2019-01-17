<?php 
    require_once 'php/connect.php';
    $sql = "SELECT * FROM articles WHERE id = '".$_GET['id']."' AND `status` = 'true' ";
    $result = $conn->query($sql) or die($conn->error);

    if ($result->num_rows > 0){
        $row = $result->fetch_assoc();
    } else {
        header('Location: blog.php');
    }

    $sql_random = "SELECT * FROM `articles` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
    $result_random = $conn->query($sql_random);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $row['subject']; ?></title>

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
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body>
    <!-- Section Navbar -->
    <?php include_once('include/navbar.php') ?>

    <!-- Section PageTitle -->
    <header class="jarallax" data-jarallax='{"speed": 0.3}' style="background-image: url(<?php echo $base_path_blog.$row['image']; ?>)">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold"><?php echo $row['subject']; ?></h1>
            <p class="lead"><?php echo $row['sub_title']; ?></p>
        </div>
    </header>

    <!-- Section Blog -->
    <section class="container blog-content">
        <div class="row">
            <div class="col-12">
                <?php echo $row['detail']; ?>
            </div>
            <div class="col-12">
                <hr>
                <p class="text-right text-muted"><?php echo $row['writer'] ?></p>
                <p class="text-right text-muted"><?php echo date_format(new DateTime($row['updated_at']),"j F Y"); ?></p>
            </div>
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <?php  while($row_random = $result_random->fetch_assoc()){ ?>
                        <section class="col-12 p-2">
                            <div class="card h-100">
                                <a href="blog-detail.php?id=<?php echo $row_random['id'] ?>" class="warpper-card-img">
                                    <img class="card-img-top" src="<?php echo $base_path_blog.$row_random['image']?>" alt="Card image cap">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row_random['subject']?></h5>
                                    <p class="card-text"><?php echo $row_random['sub_title']?></p>
                                </div>
                                <div class="p-3">
                                    <a href="blog-detail.php?id=<?php echo $row_random['id'] ?>" class="btn btn-block blogbotton">อ่านเพิ่มเติม</a>
                                </div>
                            </div>
                        </section>
                    <?php } ?>
                </div> 
            </div>
            <div class="col-12">
                <div class="fb-comments" 
                    data-width="100%" 
                    data-href="http://localhost/blog/blog-detail.php?id_5gthailand=<?php echo $row['id']; ?>"
                    data-numposts="5"></div>
                <div id="fb-root"></div>
            </div>
        </div>
    </section>

    <!-- Section Footer -->
    <?php include_once('include/footer.php') ?>

    <!-- Section On to Top -->
    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>
</body>

</html>