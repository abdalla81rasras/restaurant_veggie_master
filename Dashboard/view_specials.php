<?php
include "inc/connection.php";
include "inc/header.php";
?>
                <div class="navbar-nav nv w-100">
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2"><span style="font-size: 24px;">H</span></i>Header</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="add_header.php" class="dropdown-item mb-1">Add New</a>
                            <a href="view_header.php" class="dropdown-item">View all</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2"><span style="font-size: 24px;">F</span></i>Footer</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="add_footer.php" class="dropdown-item mb-1">Add new</a>
                            <a href="view_footer.php" class="dropdown-item">View All</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2"><span style="font-size: 24px;">S</span></i>Slider</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="add_slider.php" class="dropdown-item mb-1">Add New</a>
                            <a href="view_slider.php" class="dropdown-item mb-1">View All</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2"><span style="font-size: 24px;">U</span></i>Under Slider</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="add_under_slider.php" class="dropdown-item mb-1">Add New</a>
                            <a href="view_under_slider.php" class="dropdown-item mb-1">View All</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa me-2"><span style="font-size: 24px;">S</span></i>Specials</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="add_specials.php" class="dropdown-item mb-1">Add New</a>
                            <a href="view_specials.php" class="dropdown-item active mb-1">View All</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2"><span style="font-size: 24px;">A</span></i>About Us</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="add_about.php" class="dropdown-item mb-1">Add New</a>
                            <a href="view_about.php" class="dropdown-item mb-1">View All</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2"><span style="font-size: 24px;">S</span></i>Mneu Starters</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="add_mneu_cart_starters.php" class="dropdown-item mb-1">Add New</a>
                            <a href="view_mneu_cart_starters.php" class="dropdown-item mb-1">View All</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2"><span style="font-size: 24px;">M</span></i>Mneu Main</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="add_mneu_cart_main.php" class="dropdown-item mb-1">Add New</a>
                            <a href="view_mneu_cart_main.php" class="dropdown-item mb-1">View All</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2"><span style="font-size: 24px;">E</span></i>Mneu Desserts</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="add_mneu_cart_desserts.php" class="dropdown-item mb-1">Add New</a>
                            <a href="view_mneu_cart_desserts.php" class="dropdown-item mb-1">View All</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2"><span style="font-size: 24px;">D</span></i>Mneu Drinks</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="add_mneu_cart_drinks.php" class="dropdown-item mb-1">Add New</a>
                            <a href="view_mneu_cart_drinks.php" class="dropdown-item mb-1">View All</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2"><span style="font-size: 24px;">C</span></i>Contact</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="add_contact.php" class="dropdown-item mb-1">Add New</a>
                            <a href="view_contact.php" class="dropdown-item mb-1">View All</a>
                            <a href="form_conact.php" class="dropdown-item">Form Contact</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
           <?php
            include "inc/navbar.php";
           ?>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                        <div class="col-sm-6 col-xl-6">
                            <h3 class="text-secondary alert-link">View Specials</h3>
                        </div>
                    </div>
                <div class="row mt-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded table-responsive cust-secroll h-100 p-3">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Image 1</th>
                                        <th scope="col">Title 1</th>
                                        <th scope="col">Description 1</th>
                                        <th scope="col">Price 1</th>
                                        <th scope="col">Image 2</th>
                                        <th scope="col">Title 2</th>
                                        <th scope="col">Description 2</th>
                                        <th scope="col">Price 2</th>
                                        <th scope="col">Image 3</th>
                                        <th scope="col">Title 3</th>
                                        <th scope="col">Description 3</th>
                                        <th scope="col">Price 3</th>
                                        <th scope="col">Image 4</th>
                                        <th scope="col">Title 4</th>
                                        <th scope="col">Description 4</th>
                                        <th scope="col">Price 4</th>
                                        <th scope="col">Image 5</th>
                                        <th scope="col">Title 5</th>
                                        <th scope="col">Description 5</th>
                                        <th scope="col">Price 5</th>
                                        <th scope="col">Image 6</th>
                                        <th scope="col">Title 6</th>
                                        <th scope="col">Description 6</th>
                                        <th scope="col">Price 6</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $Select="SELECT * FROM `specials`";
                                    $Query=mysqli_query($conn , $Select);
                                    while($row=mysqli_fetch_assoc($Query)):
                                ?>
                                    <tr>
                                        <td>
                                            <img src="Upload/<?php echo htmlspecialchars($row['img_special1']) ; ?>" title="<?php echo htmlspecialchars($row['img_special1']) ; ?>" style="width: 55px ; height:55px ;"> 
                                        </td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['title_special1']) ; ?></td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['description_special1']) ; ?></td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['price_special1']) ; ?>$</td>
                                        <td>
                                            <img src="Upload/<?php echo htmlspecialchars($row['img_special2']) ; ?>" title="<?php echo htmlspecialchars($row['img_special2']) ; ?>" style="width: 55px ; height:55px ;"> 
                                        </td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['title_special2']) ; ?></td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['description_special2']) ; ?></td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['price_special2']) ; ?>$</td>
                                        <td>
                                            <img src="Upload/<?php echo htmlspecialchars($row['img_special3']) ; ?>" title="<?php echo htmlspecialchars($row['img_special3']) ; ?>" style="width: 55px ; height:55px ;"> 
                                        </td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['title_special3']) ; ?></td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['description_special3']) ; ?></td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['price_special3']) ; ?>$</td>
                                        <td>
                                            <img src="Upload/<?php echo htmlspecialchars($row['img_special4']) ; ?>" title="<?php echo htmlspecialchars($row['img_special4']) ; ?>" style="width: 55px ; height:55px ;"> 
                                        </td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['title_special4']) ; ?></td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['description_special4']) ; ?></td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['price_special4']) ; ?>$</td>
                                        <td>
                                            <img src="Upload/<?php echo htmlspecialchars($row['img_special5']) ; ?>" title="<?php echo htmlspecialchars($row['img_special5']) ; ?>" style="width: 55px ; height:55px ;"> 
                                        </td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['title_special5']) ; ?></td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['description_special5']) ; ?></td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['price_special5']) ; ?>$</td>
                                        <td>
                                            <img src="Upload/<?php echo htmlspecialchars($row['img_special6']) ; ?>" title="<?php echo htmlspecialchars($row['img_special6']) ; ?>" style="width: 55px ; height:55px ;"> 
                                        </td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['title_special6']) ; ?></td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['description_special6']) ; ?></td>
                                        <td style="padding-top: 23px;"><?php echo htmlspecialchars($row['price_special6']) ; ?>$</td>
                                        <td style="padding-top: 23px;">
                                            <a href="add_specials.php?edit_special=<?php echo $row['id_special']; ?>" ><i class="fa fa-edit" title="edit"></i></a>  
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br><br><br>
            </div>

<?php 
    include "inc/footer.php";
?>