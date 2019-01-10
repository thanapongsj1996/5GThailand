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
    <?php include_once('include/navbar.php') ?>

    <!-- Section PageTitle -->
    <header class="jarallax" data-jarallax='{"speed": 0.3}' style="background-image: url(https://images.unsplash.com/photo-1512699126689-b59fb4e97c92?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80);">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold">เกี่ยวกับเรา</h1>
            <p class="lead">"5G Thailand อนาคตความเร็วสูง"</p>
        </div>
    </header>

    <!-- Section TODO -->
    <section class="container py-5">
        <div class="row">
            <div class="col-lg-6 py-3 p-lg-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XZ0eScielS8" frameborder="0"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <h2>ทำความรู้จักกับเราให้ดียิ่งขึ้น...</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro nisi, animi velit ipsa quia ratione
                    perferendis aspernatur repellat hic est asperiores at facilis inventore eveniet molestiae itaque
                    harum reprehenderit quae!</p>
                <h2>ทำความรู้จักกับเราให้ดียิ่งขึ้น...</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro nisi, animi velit ipsa quia ratione
                    perferendis aspernatur repellat hic est asperiores at facilis inventore eveniet molestiae itaque
                    harum reprehenderit quae!</p>
            </div>
        </div>
    </section>

    <!-- Section Timeline -->
    <section class="position-relative py-5 jarallax" data-jarallax='{"speed": 0.3}' style="background-image: url(https://images.unsplash.com/photo-1476725994324-6f6833ea0631?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="https://www.eng.chula.ac.th/wp-content/uploads/2018/01/logo.png" class="img-fluid" width="150px">
                    <h1 class="text-white display-4 font-weight-bold">Timeline About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-5">
        <div class="row">
            <div class="col-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge">
                            <p>1981</p>
                        </div>
                        <div class="timeline-card">
                            <h5>1G</h5>
                            <p class="text-muted">Analog Technology</p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">
                            <p>1991</p>
                        </div>
                        <div class="timeline-card">
                            <h5>2G</h5>
                            <p class="text-muted">Digital Technology</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge">
                            <p>2001</p>
                        </div>
                        <div class="timeline-card">
                            <h5>3G</h5>
                            <p class="text-muted">Internet in your phone</p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">
                            <p>2001</p>
                        </div>
                        <div class="timeline-card">
                            <h5>4G</h5>
                            <p class="text-muted">Mobile broadband</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge">
                            <p>2020?</p>
                        </div>
                        <div class="timeline-card">
                            <h5>5G</h5>
                            <p class="text-muted">Faster 1,000 times. More data</p>
                        </div>
                    </li>
                    <li class="timeline-arrow">
                        <i class="fa fa-chevron-down"></i>
                    </li>
                </ul>
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
    <script src="assets/js/main.js"></script>
</body>

</html>