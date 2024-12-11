<?php  
    include "Dashboard/inc/connection.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        $select="SELECT * FROM `header`";
        $query=mysqli_query($conn , $select);
        while($row=mysqli_fetch_assoc($query)):
    ?>
        <title><?php echo $row['title_tab'] ?></title>
        <link rel="shortcut icon" href="Dashboard/Upload/<?php echo $row['img_tab'] ?>">
    <?php endwhile; ?>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css" />
    <script src="https://unpkg.com/scrollreveal@4.0.0-beta.6"></script>

</head>

<body>
    <header class="site-header">
        <div class="container">
            <div class="header-content">
                <div class="top-menu  scroll-reveal">
                    <div class="menu">
                        <div class="title-bar" data-responsive-toggle="main-nav" data-hide-for="medium">
                            <button class="menu-icon dark" type="button" data-toggle="main-nav"></button>
                            <div class="title-bar-title">Menu</div>
                        </div>

                        <nav id="main-nav" data-animate="menu-in menu-out">
                            <ul class="main-navigation">
                                <li><a class="m-active" href="#" data-text="Home">Home</a></li>
                                <li><a class="m-anim" href="#specials-grid" data-text="Specials">Specials</a></li>
                                <li><a class="m-anim" href="#about-us" data-text="About">About</a></li>
                                <li><a class="m-anim" href="#main-menu" data-text="Menu Cart">Menu Cart</a></li>
                                <li><a class="m-anim" href="#contact-us" data-text="Contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>