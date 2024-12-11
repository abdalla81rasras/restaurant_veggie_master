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
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2"><span style="font-size: 24px;">U</span></i>Under Slider</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="add_under_slider.php" class="dropdown-item mb-1">Add New</a>
                            <a href="view_under_slider.php" class="dropdown-item mb-1">View All</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown mb-3">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="fa me-2"><span style="font-size: 24px;">S</span></i>Specials</a>
                        <div class="dropdown-menu bg-transparent border-0 mx-4 mt-0">
                            <a href="add_specials.php" class="dropdown-item active mb-1">Add New</a>
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
                    <input type="hidden" name="id_special" value="<?php echo $id_special; ?>">
                    <div class="row g-4">
                        <div class="col-lg-6 col-xl-6">
                            <?php if($update==true || $edit==true): ?>
                                <h3 class="text-secondary alert-link">Update Specials</h3>
                            <?php else: ?>
                                <h3 class="text-secondary alert-link">Add Specials</h3>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row g-4 mb-3 mt-1">
                        <div class="col-lg-12 col-xl-12">
                            <h4 class="text-secondary alert-link d-block">Specials 1 :</h4>
                        </div>
                    </div>
                    <div class="row g-4 mb-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="input-group custom-file-button">
                                    <label class="input-group-text form-control-lg alert-link text-secondary" for="inputFileSpecials">Image Special 1</label>
                                    <input type="file" name="img_special1" accept="Image/*" class="form-control text-primary form-control-lg bg-dark" id="inputFileSpecials">
                                </div>
                                <div class="text-danger mt-1"><?php echo $errors['img_special1'] ?></div>
                                <?php if($edit==true): ?>
                                    <div class="text-warning my-2"><?php echo $errors['edit_img_special1'] ?></div>
                                    <p class="text-primary font-weight-bold mr-2 d-inline">Old Image :  </p>
                                    <img src="Upload/<?php echo $img_special1 ?>" title="<?php echo $img_special1 ?>" alt="Image" style="width:100px; height: 100px;">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="title_special1" class="form-control" value="<?php echo htmlspecialchars($title_special1); ?>" id="floatingInputTitle" placeholder=" ">
                                    <label for="floatingInputTitle">Title Special 1</label>
                                    <div class="text-danger mt-1"><?php echo $errors['title_special1'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <textarea name="description_special1" class="form-control" style="height: 170px;" id="floatingInputDescription" placeholder=" "><?php echo htmlspecialchars($description_special1); ?></textarea>
                                    <label for="floatingInputDescription">Description Special 1</label>
                                    <div class="text-danger mt-1"><?php echo $errors['description_special1'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="number" name="price_special1" class="form-control" min="0" step="0.00001" value="<?php echo htmlspecialchars($price_special1); ?>" id="floatingInputPrice" placeholder=" ">
                                    <label for="floatingInputPrice">Price Special 1 ( $ )</label>
                                    <div class="text-danger mt-1"><?php echo $errors['price_special1'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 mb-3 mt-1">
                        <div class="col-lg-12 col-xl-12">
                            <h4 class="text-secondary alert-link d-block">Specials 2 :</h4>
                        </div>
                    </div>
                    <div class="row g-4 mb-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="input-group custom-file-button">
                                    <label class="input-group-text form-control-lg alert-link text-secondary" for="inputFileSpecials2">Image Special 2</label>
                                    <input type="file" name="img_special2" accept="Image/*" class="form-control text-primary form-control-lg bg-dark" id="inputFileSpecials2">
                                </div>
                                <div class="text-danger mt-1"><?php echo $errors['img_special2'] ?></div>
                                <?php if($edit==true): ?>
                                    <div class="text-warning my-2"><?php echo $errors['edit_img_special2'] ?></div>
                                    <p class="text-primary font-weight-bold mr-2 d-inline">Old Image :  </p>
                                    <img src="Upload/<?php echo $img_special2 ?>" title="<?php echo $img_special2 ?>" alt="Image" style="width:100px; height: 100px;">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="title_special2" class="form-control" value="<?php echo htmlspecialchars($title_special2); ?>" id="floatingInputTitle2" placeholder=" ">
                                    <label for="floatingInputTitle2">Title Special 2</label>
                                    <div class="text-danger mt-1"><?php echo $errors['title_special2'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <textarea name="description_special2" class="form-control" style="height: 170px;" id="floatingInputDescription2" placeholder=" "><?php echo htmlspecialchars($description_special2); ?></textarea>
                                    <label for="floatingInputDescription2">Description Special 2</label>
                                    <div class="text-danger mt-1"><?php echo $errors['description_special2'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="number" name="price_special2" class="form-control" min="0" step="0.00001" value="<?php echo htmlspecialchars($price_special2); ?>" id="floatingInputPrice2" placeholder=" ">
                                    <label for="floatingInputPrice2">Price Special 2 ( $ )</label>
                                    <div class="text-danger mt-1"><?php echo $errors['price_special2'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 mb-3 mt-1">
                        <div class="col-lg-12 col-xl-12">
                            <h4 class="text-secondary alert-link d-block">Specials 3 :</h4>
                        </div>
                    </div>
                    <div class="row g-4 mb-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="input-group custom-file-button">
                                    <label class="input-group-text form-control-lg alert-link text-secondary" for="inputFileSpecials3">Image Special 3</label>
                                    <input type="file" name="img_special3" accept="Image/*" class="form-control text-primary form-control-lg bg-dark" id="inputFileSpecials3">
                                </div>
                                <div class="text-danger mt-1"><?php echo $errors['img_special3'] ?></div>
                                <?php if($edit==true): ?>
                                    <div class="text-warning my-2"><?php echo $errors['edit_img_special3'] ?></div>
                                    <p class="text-primary font-weight-bold mr-2 d-inline">Old Image :  </p>
                                    <img src="Upload/<?php echo $img_special3 ?>" title="<?php echo $img_special3 ?>" alt="Image" style="width:100px; height: 100px;">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="title_special3" class="form-control" value="<?php echo htmlspecialchars($title_special3); ?>" id="floatingInputTitle3" placeholder=" ">
                                    <label for="floatingInputTitle3">Title Special 3</label>
                                    <div class="text-danger mt-1"><?php echo $errors['title_special3'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <textarea name="description_special3" class="form-control" style="height: 170px;" id="floatingInputDescription3" placeholder=" "><?php echo htmlspecialchars($description_special3); ?></textarea>
                                    <label for="floatingInputDescription3">Description Special 3</label>
                                    <div class="text-danger mt-1"><?php echo $errors['description_special3'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="number" name="price_special3" class="form-control" min="0" step="0.00001" value="<?php echo htmlspecialchars($price_special3); ?>" id="floatingInputPrice3" placeholder=" ">
                                    <label for="floatingInputPrice3">Price Special 3 ( $ )</label>
                                    <div class="text-danger mt-1"><?php echo $errors['price_special3'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 mb-3 mt-1">
                        <div class="col-lg-12 col-xl-12">
                            <h4 class="text-secondary alert-link d-block">Specials 4 :</h4>
                        </div>
                    </div>
                    <div class="row g-4 mb-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="input-group custom-file-button">
                                    <label class="input-group-text form-control-lg alert-link text-secondary" for="inputFileSpecials4">Image Special 4</label>
                                    <input type="file" name="img_special4" accept="Image/*" class="form-control text-primary form-control-lg bg-dark" id="inputFileSpecials4">
                                </div>
                                <div class="text-danger mt-1"><?php echo $errors['img_special4'] ?></div>
                                <?php if($edit==true): ?>
                                    <div class="text-warning my-2"><?php echo $errors['edit_img_special4'] ?></div>
                                    <p class="text-primary font-weight-bold mr-2 d-inline">Old Image :  </p>
                                    <img src="Upload/<?php echo $img_special4 ?>" title="<?php echo $img_special4 ?>" alt="Image" style="width:100px; height: 100px;">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="title_special4" class="form-control" value="<?php echo htmlspecialchars($title_special4); ?>" id="floatingInputTitle4" placeholder=" ">
                                    <label for="floatingInputTitle4">Title Special 4</label>
                                    <div class="text-danger mt-1"><?php echo $errors['title_special4'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <textarea name="description_special4" class="form-control" style="height: 170px;" id="floatingInputDescription4" placeholder=" "><?php echo htmlspecialchars($description_special4); ?></textarea>
                                    <label for="floatingInputDescription4">Description Special 4</label>
                                    <div class="text-danger mt-1"><?php echo $errors['description_special4'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="number" name="price_special4" class="form-control" min="0" step="0.00001" value="<?php echo htmlspecialchars($price_special4); ?>" id="floatingInputPrice4" placeholder=" ">
                                    <label for="floatingInputPrice4">Price Special 4 ( $ )</label>
                                    <div class="text-danger mt-1"><?php echo $errors['price_special4'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 mb-3 mt-1">
                        <div class="col-lg-12 col-xl-12">
                            <h4 class="text-secondary alert-link d-block">Specials 5 :</h4>
                        </div>
                    </div>
                    <div class="row g-4 mb-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="input-group custom-file-button">
                                    <label class="input-group-text form-control-lg alert-link text-secondary" for="inputFileSpecials5">Image Special 5</label>
                                    <input type="file" name="img_special5" accept="Image/*" class="form-control text-primary form-control-lg bg-dark" id="inputFileSpecials5">
                                </div>
                                <div class="text-danger mt-1"><?php echo $errors['img_special5'] ?></div>
                                <?php if($edit==true): ?>
                                    <div class="text-warning my-2"><?php echo $errors['edit_img_special5'] ?></div>
                                    <p class="text-primary font-weight-bold mr-2 d-inline">Old Image :  </p>
                                    <img src="Upload/<?php echo $img_special5 ?>" title="<?php echo $img_special5 ?>" alt="Image" style="width:100px; height: 100px;">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="title_special5" class="form-control" value="<?php echo htmlspecialchars($title_special5); ?>" id="floatingInputTitle5" placeholder=" ">
                                    <label for="floatingInputTitle5">Title Special 5</label>
                                    <div class="text-danger mt-1"><?php echo $errors['title_special5'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <textarea name="description_special5" class="form-control" style="height: 170px;" id="floatingInputDescription5" placeholder=" "><?php echo htmlspecialchars($description_special5); ?></textarea>
                                    <label for="floatingInputDescription5">Description Special 5</label>
                                    <div class="text-danger mt-1"><?php echo $errors['description_special5'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="number" name="price_special5" class="form-control" min="0" step="0.00001" value="<?php echo htmlspecialchars($price_special5); ?>" id="floatingInputPrice5" placeholder=" ">
                                    <label for="floatingInputPrice5">Price Special 5 ( $ )</label>
                                    <div class="text-danger mt-1"><?php echo $errors['price_special5'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 mb-3 mt-1">
                        <div class="col-lg-12 col-xl-12">
                            <h4 class="text-secondary alert-link d-block">Specials 6 :</h4>
                        </div>
                    </div>
                    <div class="row g-4 mb-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="input-group custom-file-button">
                                    <label class="input-group-text form-control-lg alert-link text-secondary" for="inputFileSpecials6">Image Special 6</label>
                                    <input type="file" name="img_special6" accept="Image/*" class="form-control text-primary form-control-lg bg-dark" id="inputFileSpecials6">
                                </div>
                                <div class="text-danger mt-1"><?php echo $errors['img_special6'] ?></div>
                                <?php if($edit==true): ?>
                                    <div class="text-warning my-2"><?php echo $errors['edit_img_special6'] ?></div>
                                    <p class="text-primary font-weight-bold mr-2 d-inline">Old Image :  </p>
                                    <img src="Upload/<?php echo $img_special6 ?>" title="<?php echo $img_special6 ?>" alt="Image" style="width:100px; height: 100px;">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="text" name="title_special6" class="form-control" value="<?php echo htmlspecialchars($title_special6); ?>" id="floatingInputTitle6" placeholder=" ">
                                    <label for="floatingInputTitle6">Title Special 6</label>
                                    <div class="text-danger mt-1"><?php echo $errors['title_special6'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <textarea name="description_special6" class="form-control" style="height: 170px;" id="floatingInputDescription6" placeholder=" "><?php echo htmlspecialchars($description_special6); ?></textarea>
                                    <label for="floatingInputDescription6">Description Special 6</label>
                                    <div class="text-danger mt-1"><?php echo $errors['description_special6'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 my-3">
                        <div class="col-lg-6 col-xl-6">
                            <div class="bg-secondary rounded align-items-center justify-content-between p-3">
                                <div class="form-floating">
                                    <input type="number" name="price_special6" class="form-control" min="0" step="0.00001" value="<?php echo htmlspecialchars($price_special6); ?>" id="floatingInputPrice6" placeholder=" ">
                                    <label for="floatingInputPrice6">Price Special 6 ( $ )</label>
                                    <div class="text-danger mt-1"><?php echo $errors['price_special6'] ?></div>
                                </div>                            
                            </div>                    
                        </div>
                    </div>
                    <div class="row g-4 justify-content-around mt-2 mb-2">
                        <div class="col-lg-2 col-xl-2">
                            <?php if($update==true): ?>
                                <button name="update_special" class="btn btn-secondary m-2 w-100 h-100 alert-link">Update</button>
                            <?php else: ?>
                                <button name="save_special" class="btn btn-secondary m-2 w-100 h-100 alert-link">Save</button>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-2 col-xl-2">
                            <button name="cansel_special" class="btn btn-secondary m-2 w-100 h-100 alert-link">Cansel</button>
                        </div>
                    </div>
                </form>
            </div>

<?php 
    include "inc/footer.php";
?>