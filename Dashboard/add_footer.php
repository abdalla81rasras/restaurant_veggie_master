<?php
include "inc/connection.php";
include "inc/Functions.php";
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
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa me-2"><span style="font-size: 24px;">F</span></i>Footer</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="add_footer.php" class="dropdown-item active mb-1">Add new</a>
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
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2"><span style="font-size: 24px;">S</span></i>Specials</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="add_specials.php" class="dropdown-item mb-1">Add New</a>
                            <a href="view_specials.php" class="dropdown-item mb-1">View All</a>
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
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_footer" value="<?php echo $id_footer ; ?>">
                    <div class="row g-4">
                        <div class="col-lg-6 col-xl-6">
                            <?php if($update==true || $edit==true): ?>
                                <h3 class="text-secondary alert-link">Update Footer</h3>
                            <?php else: ?>
                                <h3 class="text-secondary alert-link">Add Footer</h3>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row g-4 mb-3 mt-1">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="facebook_footer" value="<?php echo htmlspecialchars($facebook_footer); ?>" class="form-control" id="floatingInputFacebook" placeholder=" ">
                                    <label for="floatingInputFacebook">Copy Link Fecebook</label>
                                    <div class="text-danger mt-1"><?php echo $errors['facebook_footer'] ?></div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="instagram_footer" value="<?php echo htmlspecialchars($instagram_footer); ?>" class="form-control" id="floatingInputInsta" placeholder=" ">
                                    <label for="floatingInputInsta">Copy Link Instagram</label>
                                    <div class="text-danger mt-1"><?php echo $errors['instagram_footer'] ?></div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="twitter_footer" value="<?php echo htmlspecialchars($twitter_footer); ?>" class="form-control" id="floatingInputTwitter" placeholder=" ">
                                    <label for="floatingInputTwitter">Copy Link Twitter</label>
                                    <div class="text-danger mt-1"><?php echo $errors['twitter_footer'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 justify-content-around mt-2 mb-2">
                        <div class="col-lg-2 col-xl-2">
                            <?php if($update==true): ?>
                                <button name="update_footer" class="btn btn-secondary m-2 w-100 h-100 alert-link">Update</button>
                            <?php else: ?>
                                <button name="save_footer" class="btn btn-secondary m-2 w-100 h-100 alert-link">Save</button>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-2 col-xl-2">
                            <button name="cansel_footer" class="btn btn-secondary m-2 w-100 h-100 alert-link">Cansel</button>
                        </div>
                    </div>
                </form>            
            </div>

<?php 
    include "inc/footer.php";
?>