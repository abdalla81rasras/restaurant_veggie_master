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
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa me-2"><span style="font-size: 24px;">U</span></i>Under Slider</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="add_under_slider.php" class="dropdown-item avtive mb-1">Add New</a>
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
                    <input type="hidden" name="id_under" value="<?php echo $id_under; ?>">
                    <div class="row g-4">
                        <div class="col-lg-6 col-xl-6">
                            <?php if($update==true || $edit==true): ?>
                                <h3 class="text-secondary alert-link">Update Under Slider</h3>
                            <?php else: ?>
                                <h3 class="text-secondary alert-link">Add Under Slider</h3>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row g-4 mb-3 mt-1">
                        <div class="col-lg-12 col-xl-12">
                            <h4 class="text-secondary alert-link d-block">
                                under slider 1 :
                            </h4>
                        </div>
                    </div>
                    <div class="row g-4 mb-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="input-group custom-file-button">
                                    <label class="input-group-text form-control-lg alert-link text-secondary" for="inputGroupFile1">Select Icon 1</label>
                                    <input type="file" name="img_under1" accept=".svg" class="form-control text-primary form-control-lg bg-dark" id="inputGroupFile1">
                                </div>
                                <div class="text-danger mt-1"><?php echo $errors['img_under1'] ?></div>
                                <?php if($edit==true): ?>
                                    <div class="text-warning my-2"><?php echo $errors['edit_img_under1'] ?></div>
                                    <p class="text-primary font-weight-bold mr-2 d-inline">Old Image :  </p>
                                    <img src="Upload/<?php echo $img_under1 ?>" title="<?php echo $img_under1 ?>" alt="Image" style="width:100px; height: 100px;">
                                <?php endif; ?> 
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="title_under1" class="form-control" value="<?php echo htmlspecialchars($title_under1); ?>" id="floatingInput1" placeholder=" ">
                                    <label for="floatingInput1">Title Under Slider 1</label>
                                    <div class="text-danger mt-1"><?php echo $errors['title_under1'] ?></div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <textarea name="description_under1" class="form-control" style="height: 170px;" id="floatingInput1" placeholder=" "><?php echo htmlspecialchars($description_under1); ?></textarea>
                                    <label for="floatingInput1">Description Under Slider 1</label>
                                    <div class="text-danger mt-1"><?php echo $errors['description_under1'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 mb-3 mt-1">
                        <div class="col-lg-12 col-xl-12">
                            <h4 class="text-secondary alert-link d-block">
                                under slider 2 :
                            </h4>
                        </div>
                    </div>
                    <div class="row g-4 mb-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="input-group custom-file-button">
                                    <label class="input-group-text form-control-lg alert-link text-secondary" for="inputGroupFile2">Select Icon 2</label>
                                    <input type="file" name="img_under2" accept=".svg" class="form-control text-primary form-control-lg bg-dark" id="inputGroupFile2">
                                </div>
                                <div class="text-danger mt-1"><?php echo $errors['img_under2'] ?></div>
                                <?php if($edit==true): ?>
                                    <div class="text-warning my-2"><?php echo $errors['edit_img_under2'] ?></div>
                                    <p class="text-primary font-weight-bold mr-2 d-inline">Old Image :  </p>
                                    <img src="Upload/<?php  echo $img_under2 ?>" title="<?php echo $img_under2 ?>" alt="Image" style="width:100px; height: 100px;">
                                <?php endif; ?> 
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="title_under2" class="form-control" value="<?php echo htmlspecialchars($title_under2); ?>" id="floatingInput2" placeholder=" ">
                                    <label for="floatingInput2">Title Under Slider 2</label>
                                    <div class="text-danger mt-1"><?php echo $errors['title_under2'] ?></div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <textarea name="description_under2" class="form-control" style="height: 170px;" id="floatingInput2" placeholder=" "><?php echo htmlspecialchars($description_under2); ?></textarea>
                                    <label for="floatingInput2">Description Under Slider 2</label>
                                    <div class="text-danger mt-1"><?php echo $errors['description_under2'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 mb-3 mt-1">
                        <div class="col-lg-12 col-xl-12">
                            <h4 class="text-secondary alert-link d-block">
                                under slider 3 :
                            </h4>
                        </div>
                    </div>
                    <div class="row g-4 mb-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="input-group custom-file-button">
                                    <label class="input-group-text form-control-lg alert-link text-secondary" for="inputGroupFile3">Select Icon 3</label>
                                    <input type="file" name="img_under3" accept=".svg" class="form-control text-primary form-control-lg bg-dark" id="inputGroupFile3">
                                </div>
                                <div class="text-danger mt-1"><?php echo $errors['img_under3'] ?></div>
                                <?php if($edit==true): ?>
                                    <div class="text-warning my-2"><?php echo $errors['edit_img_under3'] ?></div>
                                    <p class="text-primary font-weight-bold mr-2 d-inline">Old Image :  </p>
                                    <img src="Upload/<?php  echo $img_under3 ?>" title="<?php echo $img_under3 ?>" alt="Image" style="width:100px; height: 100px;">
                                <?php endif; ?> 
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="title_under3" class="form-control" value="<?php echo htmlspecialchars($title_under3); ?>" id="floatingInput3" placeholder=" ">
                                    <label for="floatingInput3">Title Under Slider 3</label>
                                    <div class="text-danger mt-1"><?php echo $errors['title_under3'] ?></div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <textarea name="description_under3" class="form-control" style="height: 170px;" id="floatingInput3" placeholder=" "><?php echo htmlspecialchars($description_under3); ?></textarea>
                                    <label for="floatingInput3">Description Under Slider 3</label>
                                    <div class="text-danger mt-1"><?php echo $errors['description_under3'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 justify-content-around mt-2 mb-3">
                        <div class="col-lg-2 col-xl-2">
                            <?php if($update==true): ?>
                                <button name="update_under" class="btn btn-secondary m-2 w-100 h-100 alert-link">Update</button>
                            <?php else: ?>
                                <button name="save_under" class="btn btn-secondary m-2 w-100 h-100 alert-link">Save</button>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-2 col-xl-2">
                            <button name="cansel_under" class="btn btn-secondary m-2 w-100 h-100 alert-link">Cansel</button>
                        </div>
                    </div>
                </form>            
            </div>

<?php 
    include "inc/footer.php";
?>