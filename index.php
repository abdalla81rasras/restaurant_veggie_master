<?php
include "./Dashboard/inc/connection.php";
include "./includes/header.php";
?>
        <div class="slider">
            <?php 
                $select="SELECT * FROM `slider`";
                $query=mysqli_query($conn , $select);
                while($row=mysqli_fetch_assoc($query)):
            ?>
            <div class="a-slide slide1" style="background-image: url('Dashboard/Upload/<?php echo $row['img_slider'] ?>');">
                <div class="container">
                    <div class="bottom-section scroll-reveal" data-origin="right" data-distance="20%">
                        <h1 class="header-txt"><?php echo $row['title_slider'] ?></h1>
                        <div class="divider">
                            <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                                </style>
                                <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                                    717,171.5 "/>
                                <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                                    1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                                <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                                <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                                <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                            </svg>
                        </div>
                        <!--.divider-->
                    </div>
                    <!--.bottom-section-->
                </div>
            </div>
            <?php endwhile; ?>
        </div>

    </header>

    <section class="category-icons">
        <div class="container">
            <div class="yellow-content">
                <?php  
                    $select="SELECT * FROM `under_slider`";
                    $query=mysqli_query($conn , $select);
                    while($row=mysqli_fetch_assoc($query)):
                ?>
                    <div class="icon">
                        <img class="scroll-reveal" data-origin="top" data-distance="20%" src="Dashboard/Upload/<?php echo $row['img_under1'] ?>" />
                        <h3 class="scroll-reveal" data-origin="top" data-distance="20%"><?php echo $row['title_under1'] ?></h3>
                        <p class="scroll-reveal" data-distance="0" data-duration="500"><?php echo $row['description_under1'] ?></p>
                    </div>
                    <div class="icon">
                        <img class="scroll-reveal" data-origin="top" data-distance="20%" src="Dashboard/Upload/<?php echo $row['img_under2'] ?>" />
                        <h3 class="scroll-reveal" data-origin="top" data-distance="20%"><?php echo $row['title_under2'] ?></h3>
                        <p class="scroll-reveal" data-distance="0" data-duration="500"><?php echo $row['description_under2'] ?></p>
                    </div>
                    <div class="icon">
                        <img class="scroll-reveal" data-origin="top" data-distance="20%" src="Dashboard/Upload/<?php echo $row['img_under3'] ?>" />
                        <h3 class="scroll-reveal" data-origin="top" data-distance="20%"><?php echo $row['title_under3'] ?></h3>
                        <p class="scroll-reveal" data-distance="0" data-duration="500"><?php echo $row['description_under3'] ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
            <!--.yellow-content-->
        </div>
        <!--.container-->
    </section>
    <!--.category-icons-->

    <section id="specials-grid" class="month-specials" data-scroll-reveal="enter from the bottom after 0.9s">
        <div class="container">
            <h1 class="header-txt">This month specials</h1>
            <div class="divider">
                <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                                </style>
                                <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                                    717,171.5 "/>
                                <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                                    1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                                <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                                <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                                <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                                </svg>
            </div>
            <!--.divider-->
            <div class="specials-content">
                <?php 
                    $select="SELECT * FROM `specials`";
                    $query=mysqli_query($conn , $select);
                    while($row=mysqli_fetch_assoc($query)):
                ?>
                    <div class="special">
                        <div class="special-img img-01">
                            <img src="Dashboard/Upload/<?php echo $row['img_special1'] ?>" />
                        </div>
                        <div class="special-items spec-01">
                            <h2 class="scroll-reveal" data-origin="top" data-distance="20%"><?php echo $row['title_special1'] ?></h2>
                            <span class="line scroll-reveal" data-origin="top" data-distance="20%"></span>
                            <p class="scroll-reveal" data-origin="bottom" data-distance="30%"><?php echo $row['description_special1'] ?></p>
                            <span class="scroll-reveal" data-origin="bottom" data-distance="60%"><?php echo $row['price_special1'] ?>$</span>
                        </div>
                    </div>
                    <!--.special-->
                    <div class="special">
                        <div class="special-img img-02">
                            <img src="Dashboard/Upload/<?php echo $row['img_special2'] ?>" />
                        </div>
                        <div class="special-items spec-02">
                            <h2 class="scroll-reveal" data-origin="top" data-distance="20%"><?php echo $row['title_special2'] ?></h2>
                            <span class="line scroll-reveal" data-origin="top" data-distance="20%"></span>
                            <p class="scroll-reveal" data-origin="bottom" data-distance="30%"><?php echo $row['description_special2'] ?></p>
                            <span class="scroll-reveal" data-origin="bottom" data-distance="60%"><?php echo $row['price_special2'] ?>$</span>
                        </div>
                    </div>
                    <!--.special-->
                    <div class="special">
                        <div class="special-img img-03">
                            <img src="Dashboard/Upload/<?php echo $row['img_special3'] ?>" />
                        </div>
                        <div class="special-items spec-03">
                            <h2 class="scroll-reveal" data-origin="top" data-distance="20%"><?php echo $row['title_special3'] ?></h2>
                            <span class="line scroll-reveal" data-origin="top" data-distance="20%"></span>
                            <p class="scroll-reveal" data-origin="bottom" data-distance="30%"><?php echo $row['description_special3'] ?></p>
                            <span class="scroll-reveal" data-origin="bottom" data-distance="60%"><?php echo $row['price_special3'] ?>$</span>
                        </div>
                    </div>
                    <!--.special-->
                    <div class="special">
                        <div class="special-items spec-04">
                            <h2 class="scroll-reveal" data-origin="top" data-distance="20%"><?php echo $row['title_special4']; ?></h2>
                            <span class="line scroll-reveal" data-origin="top" data-distance="20%"></span>
                            <p class="scroll-reveal" data-origin="bottom" data-distance="30%"><?php echo $row['description_special4']; ?></p>
                            <span class="scroll-reveal" data-origin="bottom" data-distance="60%"><?php echo $row['price_special4']; ?>$</span>
                        </div>
                        <div class="special-img img-04">
                            <img src="assets/img/<?php echo $row['img_special4']; ?>" />
                        </div>
                    </div>
                    <!--.special-->
                    <div class="special">
                        <div class="special-items spec-05">
                            <h2 class="scroll-reveal" data-origin="top" data-distance="20%"><?php echo $row['title_special5'] ?></h2>
                            <span class="line scroll-reveal" data-origin="top" data-distance="20%"></span>
                            <p class="scroll-reveal" data-origin="bottom" data-distance="30%"><?php echo $row['description_special5'] ?></p>
                            <span class="scroll-reveal" data-origin="bottom" data-distance="60%"><?php echo $row['price_special5'] ?>$</span>
                        </div>
                        <div class="special-img img-05">
                            <img src="Dashboard/Upload/<?php echo $row['img_special5'] ?>" />
                        </div>
                    </div>
                    <!--.special-->
                    <div class="special">
                        <div class="special-items spec-06">
                            <h2 class="scroll-reveal" data-origin="top" data-distance="20%"><?php echo $row['title_special6'] ?></h2>
                            <span class="line scroll-reveal" data-origin="top" data-distance="20%"></span>
                            <p class="scroll-reveal" data-origin="bottom" data-distance="30%"><?php echo $row['description_special6'] ?></p>
                            <span class="scroll-reveal" data-origin="bottom" data-distance="60%"><?php echo $row['price_special6'] ?>$</span>
                        </div>
                        <div class="special-img img-06">
                            <img src="Dashboard/Upload/<?php echo $row['img_special6'] ?>" />
                        </div>
                    </div>
                    <!--.special-->
                <?php endwhile ?>
            </div>
            <!--.specials-content-->
        </div>
        <!--.container-->
    </section>
    <!--.month-specials-->

    <?php 
        $select="SELECT * FROM `about`";
        $query=mysqli_query($conn , $select);
        while($row=mysqli_fetch_assoc($query)):
    ?>
        <section id="about-us" class="about" style="background-image: url('Dashboard/Upload/<?php echo $row['img_about']; ?>');">
            <div class="container">
                <div class="about-content">
                    <h1 class="header-txt scroll-reveal"><?php echo $row['title_about']; ?></h1>
                    <div class="divider scroll-reveal">
                        <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                            </style>
                            <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                                717,171.5 "/>
                            <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                                1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                            <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                            <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                            <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                        </svg>
                    </div>
                    <!--.divider-->
                    <p class="scroll-reveal" data-origin="top" data-distance="10%"><?php echo $row['description_about']; ?></p>
                    <img class="signature scroll-reveal" data-origin="right" data-distance="20%" src="assets/signature.png" />
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <!--.about-->

    <section id="main-menu" class="menu-cart scroll-reveal">
        <div class="container">
            <h1 class="header-txt">Menu Cart</h1>
            <div class="divider">
                <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1930 255.5" style="enable-background:new 0 0 1930 255.5;" xml:space="preserve">
                                <style type="text/css">
                                    .st0{fill:none;stroke:#3c3c3c;stroke-width:10;stroke-linecap:square;stroke-miterlimit:10;}
                                </style>
                                <polyline class="st0" points="1224,171.8 1181.3,171.8 1139.2,129.6 1065,203.9 970.5,110.4 876,203.6 801.8,129.4 759.7,171.5 
                                    717,171.5 "/>
                                <polyline class="st0" points="5,131.5 757.3,131.5 801.8,176.1 885.9,91.9 868.3,74.2 831.5,111 870.4,149.9 970.2,50.2 1070,149.9 
                                    1108.8,111 1072.1,74.2 1054.4,91.9 1138.5,176.1 1183.1,131.5 1925,131.5 "/>
                                <rect x="921.9" y="26.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 231.426 707.2043)" class="st0" width="95" height="95"/>
                                <rect x="921.9" y="99.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 179.8072 728.5855)" class="st0" width="95" height="95"/>
                                <rect x="940.3" y="178.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 137.3893 746.1556)" class="st0" width="58.2" height="58.2"/>
                                </svg>
            </div>
            <!--.divider-->
            <ul class="menu-navigation" data-tabs data-match-height="true" id="example-tabs">
                <li class="tabs-title is-active"><a class="m-anim" href="#panel1" aria-selected="true" data-text="Starters">Starters</a></li>
                <li class="tabs-title"><a class="m-anim" data-tabs-target="panel2" href="#panel2" data-text="Main Dishes">Main Dishes</a></li>
                <li class="tabs-title"><a class="m-anim" data-tabs-target="panel3" href="#panel3" data-text="Desserts">Desserts</a></li>
                <li class="tabs-title"><a class="m-anim" data-tabs-target="panel4" href="#panel4" data-text="Drinks">Drinks</a></li>
            </ul>

            <div class="tabs-content" data-tabs-content="example-tabs">
                <div class="tabs-panel is-active" id="panel1">
                    <div class="menu-content">
                        <div class="menu-section">
                            <table>
                                <?php  
                                    $select="SELECT * FROM `mneu_cart_starters` LIMIT 6";
                                    $query=mysqli_query($conn , $select);
                                    while($row=mysqli_fetch_assoc($query)):
                                ?> 
                                    <tr>
                                        <td><span><?php echo $row['name_recipe_starters']; ?></span></td>
                                        <td><span><?php echo $row['price_recipe_starters']; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $row['content_recipe_starters']; ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </table>
                        </div>
                        <div class="menu-section">
                            <table>
                                <?php  
                                    $select="SELECT * FROM `mneu_cart_starters` LIMIT 6 OFFSET 6";
                                    $query=mysqli_query($conn , $select);
                                    while($row=mysqli_fetch_assoc($query)):
                                ?> 
                                    <tr>
                                        <td><span><?php echo $row['name_recipe_starters']; ?></span></td>
                                        <td><span><?php echo $row['price_recipe_starters']; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $row['content_recipe_starters']; ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </table>
                        </div>
                    </div>
                    <!--.menu-content-->
                </div>
                <!--#panel1-->

                <div class="tabs-panel" id="panel2">
                    <div class="menu-content">
                        <div class="menu-section">
                            <table>
                                <?php  
                                    $select="SELECT * FROM `mneu_cart_main` LIMIT 6";
                                    $query=mysqli_query($conn , $select);
                                    while($row=mysqli_fetch_assoc($query)):
                                ?> 
                                    <tr>
                                        <td><span><?php echo $row['name_recipe_main']; ?></span></td>
                                        <td><span><?php echo $row['price_recipe_main']; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $row['content_recipe_main']; ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </table>
                        </div>
                        <div class="menu-section">
                            <table>
                                <?php  
                                    $select="SELECT * FROM `mneu_cart_main` LIMIT 6 OFFSET 6";
                                    $query=mysqli_query($conn , $select);
                                    while($row=mysqli_fetch_assoc($query)):
                                ?> 
                                    <tr>
                                        <td><span><?php echo $row['name_recipe_main']; ?></span></td>
                                        <td><span><?php echo $row['price_recipe_main']; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $row['content_recipe_main']; ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </table>
                        </div>
                    </div>
                    <!--.menu-content-->
                </div>
                <!--#panel2-->

                <div class="tabs-panel" id="panel3">
                    <div class="menu-content">
                        <div class="menu-section">
                            <table>
                                <?php  
                                    $select="SELECT * FROM `mneu_cart_desserts` LIMIT 6";
                                    $query=mysqli_query($conn , $select);
                                    while($row=mysqli_fetch_assoc($query)):
                                ?> 
                                    <tr>
                                        <td><span><?php echo $row['name_recipe_desserts']; ?></span></td>
                                        <td><span><?php echo $row['price_recipe_desserts']; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $row['content_recipe_desserts']; ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </table>
                        </div>
                        <div class="menu-section">
                            <table>
                                <?php  
                                    $select="SELECT * FROM `mneu_cart_desserts` LIMIT 6 OFFSET 6";
                                    $query=mysqli_query($conn , $select);
                                    while($row=mysqli_fetch_assoc($query)):
                                ?> 
                                    <tr>
                                        <td><span><?php echo $row['name_recipe_desserts']; ?></span></td>
                                        <td><span><?php echo $row['price_recipe_desserts']; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $row['content_recipe_desserts']; ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </table>
                        </div>
                    </div>
                    <!--.menu-content-->
                </div>
                <!--#panel3-->

                <div class="tabs-panel" id="panel4">
                    <div class="menu-content">
                        <div class="menu-section">
                            <table>
                                <?php  
                                    $select="SELECT * FROM `mneu_cart_drinks` LIMIT 6";
                                    $query=mysqli_query($conn , $select);
                                    while($row=mysqli_fetch_assoc($query)):
                                ?> 
                                    <tr>
                                        <td><span><?php echo $row['name_recipe_drinks']; ?></span></td>
                                        <td><span><?php echo $row['price_recipe_drinks']; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $row['content_recipe_drinks']; ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </table>
                        </div>
                        <div class="menu-section">
                            <table>
                                <?php  
                                    $select="SELECT * FROM `mneu_cart_drinks` LIMIT 6 OFFSET 6";
                                    $query=mysqli_query($conn , $select);
                                    while($row=mysqli_fetch_assoc($query)):
                                ?> 
                                    <tr>
                                        <td><span><?php echo $row['name_recipe_drinks']; ?></span></td>
                                        <td><span><?php echo $row['price_recipe_drinks']; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $row['content_recipe_drinks']; ?></td>
                                    </tr>
                                <?php endwhile; ?>
                            </table>
                        </div>
                    </div>
                    <!--.menu-content-->
                </div>
                <!--#panel4-->

            </div>
        </div>
        <!--.container-->
    </section>
    <!--.menu-cart-->

    <a href="#0" class="cd-top">Top</a>

<?php include "./includes/footer.php"; ?>