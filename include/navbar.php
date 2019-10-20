<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php") ?>
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark bg-alpha">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="https://www.eng.chula.ac.th/wp-content/uploads/2018/01/logo.png" width="35" height="35" class="d-inline-block align-top"
                    alt="">
                5G Thailand 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKey" aria-controls="navbarKey"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarKey">
                <ul class="navbar-nav ml-auto text-center">
                    <!-- <li class="nav-item <?php echo $file_name == 'index' ? 'active':''  ?>">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="d-none d-md-inline nav-link">|</li> -->
                    <li class="nav-item <?php echo $file_name == 'index' ? 'active':''  ?>">
                        <a class="nav-link" href="index.php">Road to 5G </a>
                    </li>
                    <li class="d-none d-md-inline nav-link">|</li>
                    <li class="nav-item <?php echo $file_name == 'uses-cases' ? 'active':''  ?>">
                        <a class="nav-link" href="uses-cases.php">Use cases </a>
                    </li>
                    <li class="d-none d-md-inline nav-link">|</li>
                    <li class="nav-item <?php echo $file_name == 'key-technologies' ? 'active':''  ?>">
                        <a class="nav-link" href="key-technologies.php">Key technologies </a>
                    </li>
                    <li class="d-none d-md-inline nav-link">|</li>
                    <li class="nav-item <?php echo $file_name == 'training-courses' ? 'active':''  ?>">
                        <a class="nav-link" href="training-courses.php">Training Courses </a>
                    </li>
                    <li class="d-none d-md-inline nav-link">|</li>
                    <li class="nav-item <?php echo $file_name == 'blog'|| $file_name == 'blog-detail' ? 'active':''  ?>">
                        <a class="nav-link" href="blog.php">Blog </a>
                    </li>
                    <li class="d-none d-md-inline nav-link">|</li>
                    <li class="nav-item <?php echo $file_name == 'contact' ? 'active':''  ?>">
                        <a class="nav-link" href="contact.php">Contact </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>