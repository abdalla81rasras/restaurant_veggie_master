<?php
include "connection.php";
include "incFun.php";

//header
if(isset($_POST['save_head'])){

   if(empty($_FILES['img_tab']['name'])){
        $errors['img_tab']="No Selected Image !";
     }else{
        $img_tab =$_FILES['img_tab']['name'];
        $img_tabTamp=$_FILES["img_tab"]["tmp_name"];
        $folderimg_tab="Upload/" . $img_tab;
        move_uploaded_file($img_tabTamp , $folderimg_tab);
   }

   if(empty($_POST['title_tab'])){
       $errors['title_tab']="No Title !";
    }else{
       $title_tab  = $_POST['title_tab'];
   }

   if(!array_filter($errors)){
      $img_tab= mysqli_real_escape_string($conn , $_FILES['img_tab']['name']);
      $title_tab = mysqli_real_escape_string($conn , $_POST['title_tab']);
      
      $sql="UPDATE `header` SET `img_tab`='$img_tab' ,`title_tab`='$title_tab'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_header.php");
      }else{
      echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_header'])){
   $id_header=$_GET['edit_header'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `header` WHERE `id_header`='$id_header'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_tab = $row['img_tab'];
      $title_tab = $row['title_tab'];
   }

   if(empty($_FILES['img_tab']['name'])){
      $errors['edit_img_tab']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_head'])){
   $id_header=$_POST['id_header'];

   $update=true;
   
   if(empty($_FILES['img_tab']['name'])){
         $errors['img_tab']="No update image , or the original image must be selected when updating data !!";
      }else{
         $img_tab =$_FILES['img_tab']['name'];
         $img_tabTamp=$_FILES["img_tab"]["tmp_name"];
         $folderimg_tab="Upload/" . $img_tab;
         move_uploaded_file($img_tabTamp , $folderimg_tab);
   }

   if(empty($_POST['title_tab'])){
      $errors['title_tab']="No Update Title !";
   }else{
      $title_tab = $_POST['title_tab'];
   }

   if(!array_filter($errors)){
     $img_tab= mysqli_real_escape_string($conn , $_FILES['img_tab']['name']);
     $title_tab = mysqli_real_escape_string($conn , $_POST['title_tab']);
     
     $sql="UPDATE `header` SET `img_tab`='$img_tab' ,`title_tab`='$title_tab' WHERE `id_header`= '$id_header'";

     if(mysqli_query($conn , $sql)){
        header("Location:view_header.php");
     }else{
     echo 'query error !' . mysqli_error($conn);
     }
   } 
}

//footer
if(isset($_POST['save_footer'])){
	
   if(empty($_POST['facebook_footer'])){
       $errors['facebook_footer']="No Link !";
    }else{
       $facebook_footer = $_POST['facebook_footer'];
   }

   if(empty($_POST['instagram_footer'])){
       $errors['instagram_footer']="No Link !";
    }else{
       $instagram_footer = $_POST['instagram_footer'];
   }

   if(empty($_POST['twitter_footer'])){
       $errors['twitter_footer']="No Link !";
    }else{
       $twitter_footer = $_POST['twitter_footer'];
   }

   if(!array_filter($errors)){
      $facebook_footer = mysqli_real_escape_string($conn , $_POST['facebook_footer']);
      $instagram_footer = mysqli_real_escape_string($conn , $_POST['instagram_footer']);
      $twitter_footer = mysqli_real_escape_string($conn , $_POST['twitter_footer']);

      $sql="UPDATE `footer` SET `facebook_footer`='$facebook_footer' ,`instagram_footer`='$instagram_footer' ,`twitter_footer`='$twitter_footer'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_footer.php");
      }else{
      echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_footer'])){
   $id_footer=$_GET['edit_footer'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `footer` WHERE `id_footer`='$id_footer'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $facebook_footer = $row['facebook_footer'];
      $instagram_footer = $row['instagram_footer'];
      $twitter_footer = $row['twitter_footer'];
   }
}

if(isset($_POST['update_footer'])){
   $id_footer=$_POST['id_footer'];

   $update=true;

   if(empty($_POST['facebook_footer'])){
       $errors['facebook_footer']="No Update Link !";
    }else{
       $facebook_footer = $_POST['facebook_footer'];
   }

   if(empty($_POST['instagram_footer'])){
       $errors['instagram_footer']="No Update Link !";
    }else{
       $instagram_footer = $_POST['instagram_footer'];
   }

   if(empty($_POST['twitter_footer'])){
       $errors['twitter_footer']="No Update Link !";
    }else{
       $twitter_footer = $_POST['twitter_footer'];
   }

   if(!array_filter($errors)){
      $facebook_footer = mysqli_real_escape_string($conn , $_POST['facebook_footer']);
      $instagram_footer = mysqli_real_escape_string($conn , $_POST['instagram_footer']);
      $twitter_footer = mysqli_real_escape_string($conn , $_POST['twitter_footer']);

      $sql="UPDATE `footer` SET `facebook_footer`='$facebook_footer' ,`instagram_footer`='$instagram_footer' ,`twitter_footer`='$twitter_footer' WHERE `id_footer`='$id_footer'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_footer.php");
      }else{
      echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//slider
if(isset($_POST['save_slider'])){

	if(empty($img_slider = $_FILES['img_slider']['name'])){
        $errors['img_slider']="No Selected Image !";
     }else{
        $img_slider =$_FILES['img_slider']['name'];
        $img_sliderTamp=$_FILES["img_slider"]["tmp_name"];
        $folderimg_slider="Upload/" . $img_slider;
        move_uploaded_file($img_sliderTamp , $folderimg_slider);
   }

   if(empty($_POST['title_slider'])){
       $errors['title_slider']="No Title !";
    }else{
       $title_slider = $_POST['title_slider'];
   }
   
   if(!array_filter($errors)){
      $img_slider= mysqli_real_escape_string($conn , $_FILES['img_slider']['name']);
      $title_slider = mysqli_real_escape_string($conn , $_POST['title_slider']);

      $sql="INSERT INTO `slider`(`img_slider`,`title_slider`) VALUES('$img_slider','$title_slider')";

      if(mysqli_query($conn , $sql)){
         header("Location:view_slider.php");
      }else{
      echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_slider'])){
   $id_slider=$_GET['delete_slider'];

   $sql="DELETE FROM `slider` WHERE `id_slider`='$id_slider'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   header("Location:view_slider.php");
}

if(isset($_GET['edit_slider'])){
   $id_slider=$_GET['edit_slider'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `slider` WHERE `id_slider`='$id_slider'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_slider = $row['img_slider'];
      $title_slider = $row['title_slider'];
   }

   if(empty($_FILES['img_slider']['name'])){
      $errors['edit_img_slider']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_slider'])){
   $id_slider=$_POST['id_slider'];

   $update=true;

   if(empty($_FILES['img_slider']['name'])){
      $errors['img_slider']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_slider = $_FILES['img_slider']['name'];
      $img_sliderTamp = $_FILES["img_slider"]["tmp_name"];
      $folderimg_slider="Upload/" . $img_slider;
      move_uploaded_file($img_sliderTamp , $folderimg_slider);
   }

   if(empty($_POST['title_slider'])){
       $errors['title_slider']="No Update Title !";
    }else{
       $title_slider = $_POST['title_slider'];
   }
   
   if(!array_filter($errors)){
      $img_slider= mysqli_real_escape_string($conn , $_FILES['img_slider']['name']);
      $title_slider = mysqli_real_escape_string($conn , $_POST['title_slider']);

      $sql="UPDATE `slider` SET `img_slider`='$img_slider' ,`title_slider`='$title_slider'  WHERE `id_slider`= '$id_slider'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_slider.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//under slider
if(isset($_POST['save_under'])){

   if(empty($_FILES['img_under1']['name'])){
        $errors['img_under1']="No Selected Image !";
     }else{
        $img_under1 = $_FILES['img_under1']['name'];
        $img_underTamp1 = $_FILES["img_under1"]["tmp_name"];
        $folderimg_under1 ="Upload/" . $img_under1;
        move_uploaded_file($img_underTamp1 , $folderimg_under1);
   }

   if(empty($_POST['title_under1'])){
      $errors['title_under1']="No Title !";
   }else{
      $title_under1 = $_POST['title_under1'];
   }

   if(empty($_POST['description_under1'])){
      $errors['description_under1']="No Description !";
   }else{
      $description_under1 = $_POST['description_under1'];
   }

   if(empty($_FILES['img_under2']['name'])){
        $errors['img_under2']="No Selected Image !";
     }else{
        $img_under2 = $_FILES['img_under2']['name'];
        $img_underTamp2 = $_FILES["img_under2"]["tmp_name"];
        $folderimg_under2="Upload/" . $img_under2;
        move_uploaded_file($img_underTamp2 , $folderimg_under2);
   }

   if(empty($_POST['title_under2'])){
      $errors['title_under2']="No Title !";
   }else{
      $title_under2 = $_POST['title_under2'];
   }

   if(empty($_POST['description_under2'])){
      $errors['description_under2']="No Description !";
   }else{
      $description_under2 = $_POST['description_under2'];
   }

   if(empty($_FILES['img_under3']['name'])){
        $errors['img_under3']="No Selected Image !";
     }else{
        $img_under3 = $_FILES['img_under3']['name'];
        $img_underTamp3 = $_FILES["img_under3"]["tmp_name"];
        $folderimg_under3="Upload/" . $img_under3;
        move_uploaded_file($img_underTamp3 , $folderimg_under3);
   }

   if(empty($_POST['title_under3'])){
      $errors['title_under3']="No Title !";
   }else{
      $title_under3 = $_POST['title_under3'];
   }

   if(empty($_POST['description_under3'])){
      $errors['description_under3']="No Description !";
   }else{
      $description_under3 = $_POST['description_under3'];
   }

   if(!array_filter($errors)){
      $img_under1 = mysqli_real_escape_string($conn , $_FILES['img_under1']['name']);
      $title_under1 = mysqli_real_escape_string($conn , $_POST['title_under1']);
      $description_under1 = mysqli_real_escape_string($conn , $_POST['description_under1']);
      $img_under2 = mysqli_real_escape_string($conn , $_FILES['img_under2']['name']);
      $title_under2 = mysqli_real_escape_string($conn , $_POST['title_under2']);
      $description_under2 = mysqli_real_escape_string($conn , $_POST['description_under2']);
      $img_under3 = mysqli_real_escape_string($conn , $_FILES['img_under3']['name']);
      $title_under3 = mysqli_real_escape_string($conn , $_POST['title_under3']);
      $description_under3 = mysqli_real_escape_string($conn , $_POST['description_under3']);
      
      $sql="UPDATE `under_slider` SET `img_under1`='$img_under1' ,`title_under1`='$title_under1' ,`description_under1`='$description_under1' , `img_under2`='$img_under2' ,`title_under2`='$title_under2' ,`description_under2`='$description_under2' , `img_under3`='$img_under3' ,`title_under3`='$title_under3' ,`description_under3`='$description_under3'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_under_slider.php");
      }else{
      echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_under'])){
   $id_under=$_GET['edit_under'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `under_slider` WHERE `id_under`='$id_under'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_under1 = $row['img_under1'];
      $title_under1 = $row['title_under1'];
      $description_under1 = $row['description_under1'];
      $img_under2 = $row['img_under2'];
      $title_under2 = $row['title_under2'];
      $description_under2 = $row['description_under2'];
      $img_under3 = $row['img_under3'];
      $title_under3 = $row['title_under3'];
      $description_under3 = $row['description_under3'];
   }

   if(empty($_FILES['img_under1']['name'])){
      $errors['edit_img_under1']="Be selected Old image when updating data !!";
   }

   if(empty($_FILES['img_under2']['name'])){
      $errors['edit_img_under2']="Be selected Old image when updating data !!";
   }

   if(empty($_FILES['img_under3']['name'])){
      $errors['edit_img_under3']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_under'])){
   $id_under=$_POST['id_under'];

   $update=true;

   if(empty($_FILES['img_under1']['name'])){
      $errors['img_under1']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_under1 = $_FILES['img_under1']['name'];
      $img_underTamp1 = $_FILES["img_under1"]["tmp_name"];
      $folderimg_under1 ="Upload/" . $img_under1;
      move_uploaded_file($img_underTamp1 , $folderimg_under1);
   }

   if(empty($_POST['title_under1'])){
      $errors['title_under1']="No Update Title !";
   }else{
      $title_under1 = $_POST['title_under1'];
   }

   if(empty($_POST['description_under1'])){
      $errors['description_under1']="No Update Description !";
   }else{
      $description_under1 = $_POST['description_under1'];
   }

   if(empty($_FILES['img_under2']['name'])){
      $errors['img_under2']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_under2 = $_FILES['img_under2']['name'];
      $img_underTamp2 = $_FILES["img_under2"]["tmp_name"];
      $folderimg_under2="Upload/" . $img_under2;
      move_uploaded_file($img_underTamp2 , $folderimg_under2);
   }

   if(empty($_POST['title_under2'])){
      $errors['title_under2']="No Update Title !";
   }else{
      $title_under2 = $_POST['title_under2'];
   }

   if(empty($_POST['description_under2'])){
      $errors['description_under2']="No Update Description !";
   }else{
      $description_under2 = $_POST['description_under2'];
   }

   if(empty($_FILES['img_under3']['name'])){
      $errors['img_under3']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_under3 = $_FILES['img_under3']['name'];
      $img_underTamp3 = $_FILES["img_under3"]["tmp_name"];
      $folderimg_under3="Upload/" . $img_under3;
      move_uploaded_file($img_underTamp3 , $folderimg_under3);
   }

   if(empty($_POST['title_under3'])){
      $errors['title_under3']="No Update Title !";
   }else{
      $title_under3 = $_POST['title_under3'];
   }

   if(empty($_POST['description_under3'])){
      $errors['description_under3']="No Update Description !";
   }else{
      $description_under3 = $_POST['description_under3'];
   }

   if(!array_filter($errors)){
      $img_under1 = mysqli_real_escape_string($conn , $_FILES['img_under1']['name']);
      $title_under1 = mysqli_real_escape_string($conn , $_POST['title_under1']);
      $description_under1 = mysqli_real_escape_string($conn , $_POST['description_under1']);
      $img_under2 = mysqli_real_escape_string($conn , $_FILES['img_under2']['name']);
      $title_under2 = mysqli_real_escape_string($conn , $_POST['title_under2']);
      $description_under2 = mysqli_real_escape_string($conn , $_POST['description_under2']);
      $img_under3 = mysqli_real_escape_string($conn , $_FILES['img_under3']['name']);
      $title_under3 = mysqli_real_escape_string($conn , $_POST['title_under3']);
      $description_under3 = mysqli_real_escape_string($conn , $_POST['description_under3']);
      
      $sql="UPDATE `under_slider` SET `img_under1`='$img_under1' ,`title_under1`='$title_under1' ,`description_under1`='$description_under1' , `img_under2`='$img_under2' ,`title_under2`='$title_under2' ,`description_under2`='$description_under2' , `img_under3`='$img_under3' ,`title_under3`='$title_under3' ,`description_under3`='$description_under3' WHERE `id_under`='$id_under'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_under_slider.php");
      }else{
      echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//about
if(isset($_POST['save_about'])){
	
   if(empty( $_FILES['img_about']['name'])){
      $errors['img_about']="No Selected Image !";
   }else{
      $img_about = $_FILES['img_about']['name'];
      $img_aboutTamp = $_FILES["img_about"]["tmp_name"];
      $folderimg_about="Upload/" . $img_about;
      move_uploaded_file($img_aboutTamp , $folderimg_about);
   }

   if(empty($_POST['title_about'])){
      $errors['title_about']="No Title !";
   }else{
      $title_about = $_POST['title_about'];
   }

   if(empty($_POST['description_about'])){
      $errors['description_about']="No Description !";
   }else{
      $description_about = $_POST['description_about'];
   }

   if(!array_filter($errors)){
      $img_about = mysqli_real_escape_string($conn , $_FILES['img_about']['name']);
      $title_about = mysqli_real_escape_string($conn , $_POST['title_about']);
      $description_about = mysqli_real_escape_string($conn , $_POST['description_about']);

      $sql="UPDATE `about` SET `img_about`='$img_about' ,`title_about`='$title_about' ,`description_about`='$description_about'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_about.php");
      }else{
      echo 'query error !' . mysqli_error($conn);
      }
   
   }
}

if(isset($_GET['edit_about'])){
    $id_about=$_GET['edit_about'];

    $update=true;
    $edit=true;

    $sql="SELECT * FROM `about` WHERE `id_about`='$id_about'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $img_about = $row['img_about'];
        $title_about = $row['title_about'];
        $description_about = $row['description_about'];
    }

    if(empty($_FILES['img_about']['name'])){
        $errors['edit_img_about']="Be selected Old image when updating data !!";
    }
}

if(isset($_POST['update_about'])){
   $id_about=$_POST['id_about'];

   $update=true;

   if(empty( $_FILES['img_about']['name'])){
      $errors['img_about']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_about =$_FILES['img_about']['name'];
      $img_aboutTamp=$_FILES["img_about"]["tmp_name"];
      $folderimg_about="Upload/" . $img_about;
      move_uploaded_file($img_aboutTamp , $folderimg_about);
   }

   if(empty($_POST['title_about'])){
      $errors['title_about']="No Update Title !";
   }else{
      $title_about = $_POST['title_about'];
   }

   if(empty($_POST['description_about'])){
      $errors['description_about']="No Update Description !";
   }else{
      $description_about = $_POST['description_about'];
   }

   if(!array_filter($errors)){
      $img_about = mysqli_real_escape_string($conn , $_FILES['img_about']['name']);
      $title_about = mysqli_real_escape_string($conn , $_POST['title_about']);
      $description_about = mysqli_real_escape_string($conn , $_POST['description_about']);

      $sql="UPDATE `about` SET `img_about`='$img_about' ,`title_about`='$title_about' ,`description_about`='$description_about'  WHERE `id_about`= '$id_about'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_about.php");
      }else{
      echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//specials
if(isset($_POST['save_special'])){

	if(empty( $_FILES['img_special1']['name'])){
     $errors['img_special1']="No Selected Image !";
   }else{
     $img_special1 =$_FILES['img_special1']['name'];
     $img_special1Tamp=$_FILES["img_special1"]["tmp_name"];
     $folderimg_special1="Upload/" . $img_special1;
     move_uploaded_file($img_special1Tamp , $folderimg_special1);
   }

   if(empty($_POST['title_special1'])){
     $errors['title_special1']="No Title !";
   }else{
     $title_special1 = $_POST['title_special1'];
   }

   if(empty($_POST['description_special1'])){
     $errors['description_special1']="No Description !";
   }else{
     $description_special1 = $_POST['description_special1'];
   }

   if(empty($_POST['price_special1'])){
     $errors['price_special1']="No Description !";
   }else{
     $price_special1 = $_POST['price_special1'];
   }

   if(empty( $_FILES['img_special2']['name'])){
     $errors['img_special2']="No Selected Image !";
   }else{
     $img_special2 =$_FILES['img_special2']['name'];
     $img_special2Tamp=$_FILES["img_special2"]["tmp_name"];
     $folderimg_special2="Upload/" . $img_special2;
     move_uploaded_file($img_special2Tamp , $folderimg_special2);
   }

   if(empty($_POST['title_special2'])){
     $errors['title_special2']="No Title !";
   }else{
     $title_special2 = $_POST['title_special2'];
   }

   if(empty($_POST['description_special2'])){
     $errors['description_special2']="No Description !";
   }else{
     $description_special2 = $_POST['description_special2'];
   }

   if(empty($_POST['price_special2'])){
     $errors['price_special2']="No Description !";
   }else{
     $price_special2 = $_POST['price_special2'];
   }

   if(empty( $_FILES['img_special3']['name'])){
     $errors['img_special3']="No Selected Image !";
   }else{
     $img_special3 =$_FILES['img_special3']['name'];
     $img_special3Tamp=$_FILES["img_special3"]["tmp_name"];
     $folderimg_special3="Upload/" . $img_special3;
     move_uploaded_file($img_special3Tamp , $folderimg_special3);
   }

   if(empty($_POST['title_special3'])){
     $errors['title_special3']="No Title !";
   }else{
     $title_special3 = $_POST['title_special3'];
   }

   if(empty($_POST['description_special3'])){
     $errors['description_special3']="No Description !";
   }else{
     $description_special3 = $_POST['description_special3'];
   }

   if(empty($_POST['price_special3'])){
     $errors['price_special3']="No Description !";
   }else{
     $price_special3 = $_POST['price_special3'];
   }

   if(empty( $_FILES['img_special4']['name'])){
     $errors['img_special4']="No Selected Image !";
   }else{
     $img_special4 =$_FILES['img_special4']['name'];
     $img_special4Tamp=$_FILES["img_special4"]["tmp_name"];
     $folderimg_special4="Upload/" . $img_special4;
     move_uploaded_file($img_special4Tamp , $folderimg_special4);
   }

   if(empty($_POST['title_special4'])){
     $errors['title_special4']="No Title !";
   }else{
     $title_special4 = $_POST['title_special4'];
   }

   if(empty($_POST['description_special4'])){
     $errors['description_special4']="No Description !";
   }else{
     $description_special4 = $_POST['description_special4'];
   }

   if(empty($_POST['price_special4'])){
     $errors['price_special4']="No Description !";
   }else{
     $price_special4 = $_POST['price_special4'];
   }

   if(empty( $_FILES['img_special5']['name'])){
     $errors['img_special5']="No Selected Image !";
   }else{
     $img_special5 =$_FILES['img_special5']['name'];
     $img_special5Tamp=$_FILES["img_special5"]["tmp_name"];
     $folderimg_special5="Upload/" . $img_special5;
     move_uploaded_file($img_special5Tamp , $folderimg_special5);
   }

   if(empty($_POST['title_special5'])){
     $errors['title_special5']="No Title !";
   }else{
     $title_special5 = $_POST['title_special5'];
   }

   if(empty($_POST['description_special5'])){
     $errors['description_special5']="No Description !";
   }else{
     $description_special5 = $_POST['description_special5'];
   }

   if(empty($_POST['price_special5'])){
     $errors['price_special5']="No Description !";
   }else{
     $price_special5 = $_POST['price_special5'];
   }
   
   if(empty( $_FILES['img_special6']['name'])){
     $errors['img_special6']="No Selected Image !";
   }else{
     $img_special6 =$_FILES['img_special6']['name'];
     $img_special6Tamp=$_FILES["img_special6"]["tmp_name"];
     $folderimg_special6="Upload/" . $img_special6;
     move_uploaded_file($img_special6Tamp , $folderimg_special6);
   }

   if(empty($_POST['title_special6'])){
     $errors['title_special6']="No Title !";
   }else{
     $title_special6 = $_POST['title_special6'];
   }

   if(empty($_POST['description_special6'])){
     $errors['description_special6']="No Description !";
   }else{
     $description_special6 = $_POST['description_special6'];
   }

   if(empty($_POST['price_special6'])){
     $errors['price_special6']="No Description !";
   }else{
     $price_special6 = $_POST['price_special6'];
   }
   
   if(!array_filter($errors)){
      $img_special1 = mysqli_real_escape_string($conn , $_FILES['img_special1']['name']);
      $title_special1 = mysqli_real_escape_string($conn , $_POST['title_special1']);
      $description_special1 = mysqli_real_escape_string($conn , $_POST['description_special1']);
      $price_special1 = mysqli_real_escape_string($conn , $_POST['price_special1']);
      $img_special2 = mysqli_real_escape_string($conn , $_FILES['img_special2']['name']);
      $title_special2 = mysqli_real_escape_string($conn , $_POST['title_special2']);
      $description_special2 = mysqli_real_escape_string($conn , $_POST['description_special2']);
      $price_special2 = mysqli_real_escape_string($conn , $_POST['price_special2']);
      $img_special3 = mysqli_real_escape_string($conn , $_FILES['img_special3']['name']);
      $title_special3 = mysqli_real_escape_string($conn , $_POST['title_special3']);
      $description_special3 = mysqli_real_escape_string($conn , $_POST['description_special3']);
      $price_special3 = mysqli_real_escape_string($conn , $_POST['price_special3']);
      $img_special4 = mysqli_real_escape_string($conn , $_FILES['img_special4']['name']);
      $title_special4 = mysqli_real_escape_string($conn , $_POST['title_special4']);
      $description_special4 = mysqli_real_escape_string($conn , $_POST['description_special4']);
      $price_special4 = mysqli_real_escape_string($conn , $_POST['price_special4']);
      $img_special5 = mysqli_real_escape_string($conn , $_FILES['img_special5']['name']);
      $title_special5 = mysqli_real_escape_string($conn , $_POST['title_special5']);
      $description_special5 = mysqli_real_escape_string($conn , $_POST['description_special5']);
      $price_special5 = mysqli_real_escape_string($conn , $_POST['price_special5']);
      $img_special6 = mysqli_real_escape_string($conn , $_FILES['img_special6']['name']);
      $title_special6 = mysqli_real_escape_string($conn , $_POST['title_special6']);
      $description_special6 = mysqli_real_escape_string($conn , $_POST['description_special6']);
      $price_special6 = mysqli_real_escape_string($conn , $_POST['price_special6']);

      $sql="UPDATE `specials` SET `img_special1`='$img_special1' ,`title_special1`='$title_special1' ,`description_special1`='$description_special1' , `price_special1`='$price_special1' ,
                     `img_special2`='$img_special2' ,`title_special2`='$title_special2' ,`description_special2`='$description_special2' , `price_special2`='$price_special2' ,
                     `img_special3`='$img_special3' ,`title_special3`='$title_special3' ,`description_special3`='$description_special3' , `price_special3`='$price_special3' ,
                     `img_special4`='$img_special4' ,`title_special4`='$title_special4' ,`description_special4`='$description_special4' , `price_special4`='$price_special4' ,
                     `img_special5`='$img_special5' ,`title_special5`='$title_special5' ,`description_special5`='$description_special5' , `price_special5`='$price_special5' ,
                     `img_special6`='$img_special6' ,`title_special6`='$title_special6' ,`description_special6`='$description_special6' , `price_special6`='$price_special6' ";

      if(mysqli_query($conn , $sql)){
         header("Location:view_specials.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_special'])){
   $id_special=$_GET['edit_special'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `specials` WHERE `id_special`='$id_special'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_special1 = $row['img_special1'];
      $title_special1 = $row['title_special1'];
      $description_special1 = $row['description_special1'];
      $price_special1 = $row['price_special1'];
      $img_special2 = $row['img_special2'];
      $title_special2 = $row['title_special2'];
      $description_special2 = $row['description_special2'];
      $price_special2 = $row['price_special2'];
      $img_special3 = $row['img_special3'];
      $title_special3 = $row['title_special3'];
      $description_special3 = $row['description_special3'];
      $price_special3 = $row['price_special3'];
      $img_special4 = $row['img_special4'];
      $title_special4 = $row['title_special4'];
      $description_special4 = $row['description_special4'];
      $price_special4 = $row['price_special4'];
      $img_special5 = $row['img_special5'];
      $title_special5 = $row['title_special5'];
      $description_special5 = $row['description_special5'];
      $price_special5 = $row['price_special5'];
      $img_special6 = $row['img_special6'];
      $title_special6 = $row['title_special6'];
      $description_special6 = $row['description_special6'];
      $price_special6 = $row['price_special6'];
   }

   if(empty($_FILES['img_special1']['name'])){
      $errors['edit_img_special1']="Be selected Old image when updating data !!";
   }

   if(empty($_FILES['img_special2']['name'])){
      $errors['edit_img_special2']="Be selected Old image when updating data !!";
   }

   if(empty($_FILES['img_special3']['name'])){
      $errors['edit_img_special3']="Be selected Old image when updating data !!";
   }

   if(empty($_FILES['img_special4']['name'])){
      $errors['edit_img_special4']="Be selected Old image when updating data !!";
   }

   if(empty($_FILES['img_special5']['name'])){
      $errors['edit_img_special5']="Be selected Old image when updating data !!";
   }

   if(empty($_FILES['img_special6']['name'])){
      $errors['edit_img_special6']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_special'])){
  $id_special=$_POST['id_special'];

  $update=true;

   if(empty( $_FILES['img_special1']['name'])){
     $errors['img_special1']="No update image , or the original image must be selected when updating data !!";
   }else{
     $img_special1 =$_FILES['img_special1']['name'];
     $img_special1Tamp=$_FILES["img_special1"]["tmp_name"];
     $folderimg_special1="Upload/" . $img_special1;
     move_uploaded_file($img_special1Tamp , $folderimg_special1);
   }

   if(empty($_POST['title_special1'])){
     $errors['title_special1']="No Update Title !";
   }else{
     $title_special1 = $_POST['title_special1'];
   }

   if(empty($_POST['description_special1'])){
     $errors['description_special1']="No Update Description !";
   }else{
     $description_special1 = $_POST['description_special1'];
   }

   if(empty($_POST['price_special1'])){
     $errors['price_special1']="No Update Description !";
   }else{
     $price_special1 = $_POST['price_special1'];
   }

   if(empty( $_FILES['img_special2']['name'])){
     $errors['img_special2']="No update image , or the original image must be selected when updating data !!";
   }else{
     $img_special2 =$_FILES['img_special2']['name'];
     $img_special2Tamp=$_FILES["img_special2"]["tmp_name"];
     $folderimg_special2="Upload/" . $img_special2;
     move_uploaded_file($img_special2Tamp , $folderimg_special2);
   }

   if(empty($_POST['title_special2'])){
     $errors['title_special2']="No Update Title !";
   }else{
     $title_special2 = $_POST['title_special2'];
   }

   if(empty($_POST['description_special2'])){
     $errors['description_special2']="No Update Description !";
   }else{
     $description_special2 = $_POST['description_special2'];
   }

   if(empty($_POST['price_special2'])){
     $errors['price_special2']="No Update Description !";
   }else{
     $price_special2 = $_POST['price_special2'];
   }

   if(empty( $_FILES['img_special3']['name'])){
     $errors['img_special3']="No update image , or the original image must be selected when updating data !!";
   }else{
     $img_special3 =$_FILES['img_special3']['name'];
     $img_special3Tamp=$_FILES["img_special3"]["tmp_name"];
     $folderimg_special3="Upload/" . $img_special3;
     move_uploaded_file($img_special3Tamp , $folderimg_special3);
   }

   if(empty($_POST['title_special3'])){
     $errors['title_special3']="No Update Title !";
   }else{
     $title_special3 = $_POST['title_special3'];
   }

   if(empty($_POST['description_special3'])){
     $errors['description_special3']="No Update Description !";
   }else{
     $description_special3 = $_POST['description_special3'];
   }

   if(empty($_POST['price_special3'])){
     $errors['price_special3']="No Update Description !";
   }else{
     $price_special3 = $_POST['price_special3'];
   }

   if(empty( $_FILES['img_special4']['name'])){
     $errors['img_special4']="No update image , or the original image must be selected when updating data !!";
   }else{
     $img_special4 =$_FILES['img_special4']['name'];
     $img_special4Tamp=$_FILES["img_special4"]["tmp_name"];
     $folderimg_special4="Upload/" . $img_special4;
     move_uploaded_file($img_special4Tamp , $folderimg_special4);
   }

   if(empty($_POST['title_special4'])){
     $errors['title_special4']="No Update Title !";
   }else{
     $title_special4 = $_POST['title_special4'];
   }

   if(empty($_POST['description_special4'])){
     $errors['description_special4']="No Update Description !";
   }else{
     $description_special4 = $_POST['description_special4'];
   }

   if(empty($_POST['price_special4'])){
     $errors['price_special4']="No Update Description !";
   }else{
     $price_special4 = $_POST['price_special4'];
   }

   if(empty( $_FILES['img_special5']['name'])){
     $errors['img_special5']="No update image , or the original image must be selected when updating data !!";
   }else{
     $img_special5 =$_FILES['img_special5']['name'];
     $img_special5Tamp=$_FILES["img_special5"]["tmp_name"];
     $folderimg_special5="Upload/" . $img_special5;
     move_uploaded_file($img_special5Tamp , $folderimg_special5);
   }

   if(empty($_POST['title_special5'])){
     $errors['title_special5']="No Update Title !";
   }else{
     $title_special5 = $_POST['title_special5'];
   }

   if(empty($_POST['description_special5'])){
     $errors['description_special5']="No Update Description !";
   }else{
     $description_special5 = $_POST['description_special5'];
   }

   if(empty($_POST['price_special5'])){
     $errors['price_special5']="No Update Description !";
   }else{
     $price_special5 = $_POST['price_special5'];
   }
   
   if(empty( $_FILES['img_special6']['name'])){
     $errors['img_special6']="No update image , or the original image must be selected when updating data !!";
   }else{
     $img_special6 =$_FILES['img_special6']['name'];
     $img_special6Tamp=$_FILES["img_special6"]["tmp_name"];
     $folderimg_special6="Upload/" . $img_special6;
     move_uploaded_file($img_special6Tamp , $folderimg_special6);
   }

   if(empty($_POST['title_special6'])){
     $errors['title_special6']="No Update Title !";
   }else{
     $title_special6 = $_POST['title_special6'];
   }

   if(empty($_POST['description_special6'])){
     $errors['description_special6']="No Update Description !";
   }else{
     $description_special6 = $_POST['description_special6'];
   }

   if(empty($_POST['price_special6'])){
     $errors['price_special6']="No Update Description !";
   }else{
     $price_special6 = $_POST['price_special6'];
   }

   if(!array_filter($errors)){
     $img_special1 = mysqli_real_escape_string($conn , $_FILES['img_special1']['name']);
     $title_special1 = mysqli_real_escape_string($conn , $_POST['title_special1']);
     $description_special1 = mysqli_real_escape_string($conn , $_POST['description_special1']);
     $price_special1 = mysqli_real_escape_string($conn , $_POST['price_special1']);
     $img_special2 = mysqli_real_escape_string($conn , $_FILES['img_special2']['name']);
     $title_special2 = mysqli_real_escape_string($conn , $_POST['title_special2']);
     $description_special2 = mysqli_real_escape_string($conn , $_POST['description_special2']);
     $price_special2 = mysqli_real_escape_string($conn , $_POST['price_special2']);
     $img_special3 = mysqli_real_escape_string($conn , $_FILES['img_special3']['name']);
     $title_special3 = mysqli_real_escape_string($conn , $_POST['title_special3']);
     $description_special3 = mysqli_real_escape_string($conn , $_POST['description_special3']);
     $price_special3 = mysqli_real_escape_string($conn , $_POST['price_special3']);
     $img_special4 = mysqli_real_escape_string($conn , $_FILES['img_special4']['name']);
     $title_special4 = mysqli_real_escape_string($conn , $_POST['title_special4']);
     $description_special4 = mysqli_real_escape_string($conn , $_POST['description_special4']);
     $price_special4 = mysqli_real_escape_string($conn , $_POST['price_special4']);
     $img_special5 = mysqli_real_escape_string($conn , $_FILES['img_special5']['name']);
     $title_special5 = mysqli_real_escape_string($conn , $_POST['title_special5']);
     $description_special5 = mysqli_real_escape_string($conn , $_POST['description_special5']);
     $price_special5 = mysqli_real_escape_string($conn , $_POST['price_special5']);
     $img_special6 = mysqli_real_escape_string($conn , $_FILES['img_special6']['name']);
     $title_special6 = mysqli_real_escape_string($conn , $_POST['title_special6']);
     $description_special6 = mysqli_real_escape_string($conn , $_POST['description_special6']);
     $price_special6 = mysqli_real_escape_string($conn , $_POST['price_special6']);

     $sql="UPDATE `specials` SET `img_special1`='$img_special1' ,`title_special1`='$title_special1' ,`description_special1`='$description_special1' , `price_special1`='$price_special1' ,
                  `img_special2`='$img_special2' ,`title_special2`='$title_special2' ,`description_special2`='$description_special2' , `price_special2`='$price_special2' ,
                  `img_special3`='$img_special3' ,`title_special3`='$title_special3' ,`description_special3`='$description_special3' , `price_special3`='$price_special3' ,
                  `img_special4`='$img_special4' ,`title_special4`='$title_special4' ,`description_special4`='$description_special4' , `price_special4`='$price_special4' ,
                  `img_special5`='$img_special5' ,`title_special5`='$title_special5' ,`description_special5`='$description_special5' , `price_special5`='$price_special5' ,
                  `img_special6`='$img_special6' ,`title_special6`='$title_special6' ,`description_special6`='$description_special6' , `price_special6`='$price_special6' WHERE `id_special`= '$id_special'";

     if(mysqli_query($conn , $sql)){
         header("Location:view_specials.php");
     }else{
         echo 'query error !' . mysqli_error($conn);
     }
  } 
}

//mneu cart desserts
if(isset($_POST['save_desserts'])){
	
   if(empty($_POST['name_recipe_desserts'])){
       $errors['name_recipe_desserts']="No Name !";
    }else{
       $name_recipe_desserts = $_POST['name_recipe_desserts'];
   }

   if(empty($_POST['content_recipe_desserts'])){
       $errors['content_recipe_desserts']="No Content !";
    }else{
      $content_recipe_desserts = $_POST['content_recipe_desserts'];
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $content_recipe_desserts)){
         $errors['content_recipe_desserts'] = 'Content must be a comma separated list';
      }  
   }

   if(empty($_POST['price_recipe_desserts'])){
      $errors['price_recipe_desserts']="No Price !";
    }else{
      $price_recipe_desserts = $_POST['price_recipe_desserts'];
   }

   if(!array_filter($errors)){
      $name_recipe_desserts = mysqli_real_escape_string($conn , $_POST['name_recipe_desserts']);
      $content_recipe_desserts = mysqli_real_escape_string($conn , $_POST['content_recipe_desserts']);
      $price_recipe_desserts = mysqli_real_escape_string($conn , $_POST['price_recipe_desserts']);

      $sql="INSERT INTO `mneu_cart_desserts`(`name_recipe_desserts`,`content_recipe_desserts`,`price_recipe_desserts`) VALUES('$name_recipe_desserts','$content_recipe_desserts','$price_recipe_desserts')";
      
      if(mysqli_query($conn , $sql)){
      header("Location:view_mneu_cart_desserts.php");
      }else{
      echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_desserts'])){
   $id_cart_desserts=$_GET['delete_desserts'];

   $sql="DELETE FROM `mneu_cart_desserts` WHERE `id_cart_desserts`='$id_cart_desserts'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   header("Location:view_mneu_cart_desserts.php");
}

if(isset($_GET['edit_desserts'])){
   $id_cart_desserts=$_GET['edit_desserts'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `mneu_cart_desserts` WHERE `id_cart_desserts`='$id_cart_desserts'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $name_recipe_desserts = $row['name_recipe_desserts'];
      $content_recipe_desserts = $row['content_recipe_desserts'];
      $price_recipe_desserts = $row['price_recipe_desserts'];
   }
}

if(isset($_POST['update_desserts'])){
   $id_cart_desserts=$_POST['id_cart_desserts'];

   $update=true;

   if(empty($_POST['name_recipe_desserts'])){
       $errors['name_recipe_desserts']="No Update Name !";
    }else{
       $name_recipe_desserts = $_POST['name_recipe_desserts'];
   }

   if(empty($_POST['content_recipe_desserts'])){
       $errors['content_recipe_desserts']="No Update Content !";
    }else{
       $content_recipe_desserts = $_POST['content_recipe_desserts'];
       if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $content_recipe_desserts)){
         $errors['content_recipe_desserts'] = 'Content must be a comma separated list';
      }
   }

   if(empty($_POST['price_recipe_desserts'])){
      $errors['price_recipe_desserts']="No Update Price !";
    }else{
      $price_recipe_desserts = $_POST['price_recipe_desserts'];
   }

   if(!array_filter($errors)){
      $name_recipe_desserts = mysqli_real_escape_string($conn , $_POST['name_recipe_desserts']);
      $content_recipe_desserts = mysqli_real_escape_string($conn , $_POST['content_recipe_desserts']);
      $price_recipe_desserts = mysqli_real_escape_string($conn , $_POST['price_recipe_desserts']);

      $sql="UPDATE `mneu_cart_desserts` SET `name_recipe_desserts`='$name_recipe_desserts' ,`content_recipe_desserts`='$content_recipe_desserts' ,`price_recipe_desserts`='$price_recipe_desserts'  WHERE `id_cart_desserts`= '$id_cart_desserts'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_mneu_cart_desserts.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//mneu cart drinks
if(isset($_POST['save_recipe_drinks'])){
	
   if(empty($_POST['name_recipe_drinks'])){
      $errors['name_recipe_drinks']="No Name !";
   }else{
      $name_recipe_drinks = $_POST['name_recipe_drinks'];
   }

   if(empty($_POST['content_recipe_drinks'])){
      $errors['content_recipe_drinks']="No Content !";
   }else{
      $content_recipe_drinks = $_POST['content_recipe_drinks'];
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $content_recipe_drinks)){
         $errors['content_recipe_drinks'] = 'Content must be a comma separated list';
      }
   }

   if(empty($_POST['price_recipe_drinks'])){
      $errors['price_recipe_drinks']="No Price !";
   }else{
      $price_recipe_drinks = $_POST['price_recipe_drinks'];
   }

   if(!array_filter($errors)){
      $name_recipe_drinks = mysqli_real_escape_string($conn , $_POST['name_recipe_drinks']);
      $content_recipe_drinks = mysqli_real_escape_string($conn , $_POST['content_recipe_drinks']);
      $price_recipe_drinks = mysqli_real_escape_string($conn , $_POST['price_recipe_drinks']);

      $sql="INSERT INTO `mneu_cart_drinks`(`name_recipe_drinks`,`content_recipe_drinks`,`price_recipe_drinks`) VALUES('$name_recipe_drinks','$content_recipe_drinks','$price_recipe_drinks')";

      if(mysqli_query($conn , $sql)){
         header("Location:view_mneu_cart_drinks.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_drinks'])){
   $id_cart_drinks=$_GET['delete_drinks'];

   $sql="DELETE FROM `mneu_cart_drinks` WHERE `id_cart_drinks`='$id_cart_drinks'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   header("Location:view_mneu_cart_drinks.php");
}

if(isset($_GET['edit_drinks'])){
   $id_cart_drinks=$_GET['edit_drinks'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `mneu_cart_drinks` WHERE `id_cart_drinks`='$id_cart_drinks'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $name_recipe_drinks = $row['name_recipe_drinks'];
      $content_recipe_drinks = $row['content_recipe_drinks'];
      $price_recipe_drinks = $row['price_recipe_drinks'];
   }
}

if(isset($_POST['update_recipe_drinks'])){
   $id_cart_drinks=$_POST['id_cart_drinks'];

   $update=true;

   if(empty($_POST['name_recipe_drinks'])){
      $errors['name_recipe_drinks']="No Update Name !";
   }else{
      $name_recipe_drinks = $_POST['name_recipe_drinks'];
   }

   if(empty($_POST['content_recipe_drinks'])){
      $errors['content_recipe_drinks']="No Update Content !";
   }else{
      $content_recipe_drinks = $_POST['content_recipe_drinks'];
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $content_recipe_drinks)){
         $errors['content_recipe_drinks'] = 'Content must be a comma separated list';
      }
   }

   if(empty($_POST['price_recipe_drinks'])){
      $errors['price_recipe_drinks']="No Update Price !";
   }else{
      $price_recipe_drinks = $_POST['price_recipe_drinks'];
   }

   if(!array_filter($errors)){
      $name_recipe_drinks = mysqli_real_escape_string($conn , $_POST['name_recipe_drinks']);
      $content_recipe_drinks = mysqli_real_escape_string($conn , $_POST['content_recipe_drinks']);
      $price_recipe_drinks = mysqli_real_escape_string($conn , $_POST['price_recipe_drinks']);

      $sql="UPDATE `mneu_cart_drinks` SET `name_recipe_drinks`='$name_recipe_drinks' ,`content_recipe_drinks`='$content_recipe_drinks' ,`price_recipe_drinks`='$price_recipe_drinks'  WHERE `id_cart_drinks`= '$id_cart_drinks'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_mneu_cart_drinks.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//mneu cart main
if(isset($_POST['save_recipe_main'])){
	
   if(empty($_POST['name_recipe_main'])){
      $errors['name_recipe_main']="No Name !";
   }else{
      $name_recipe_main = $_POST['name_recipe_main'];
   }

   if(empty($_POST['content_recipe_main'])){
      $errors['content_recipe_main']="No Content !";
   }else{
      $content_recipe_main = $_POST['content_recipe_main'];
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $content_recipe_main)){
         $errors['content_recipe_main'] = 'Content must be a comma separated list';
      }
   }

   if(empty($_POST['price_recipe_main'])){
      $errors['price_recipe_main']="No Price !";
   }else{
      $price_recipe_main = $_POST['price_recipe_main'];
   }

   if(!array_filter($errors)){
      $name_recipe_main = mysqli_real_escape_string($conn , $_POST['name_recipe_main']);
      $content_recipe_main = mysqli_real_escape_string($conn , $_POST['content_recipe_main']);
      $price_recipe_main = mysqli_real_escape_string($conn , $_POST['price_recipe_main']);

      $sql="INSERT INTO `mneu_cart_main`(`name_recipe_main`,`content_recipe_main`,`price_recipe_main`) VALUES('$name_recipe_main','$content_recipe_main','$price_recipe_main')";

      if(mysqli_query($conn , $sql)){
         header("Location:view_mneu_cart_main.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_main'])){
   $id_cart_main=$_GET['delete_main'];

   $sql="DELETE FROM `mneu_cart_main` WHERE `id_cart_main`='$id_cart_main'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   header("Location:view_mneu_cart_main.php");
}

if(isset($_GET['edit_main'])){
   $id_cart_main = $_GET['edit_main'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `mneu_cart_main` WHERE `id_cart_main`='$id_cart_main'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $name_recipe_main = $row['name_recipe_main'];
      $content_recipe_main = $row['content_recipe_main'];
      $price_recipe_main = $row['price_recipe_main'];
   }

}

if(isset($_POST['update_recipe_main'])){
   $id_cart_main = $_POST['id_cart_main'];

   $update=true;

   if(empty($_POST['name_recipe_main'])){
      $errors['name_recipe_main']="No Update Name !";
   }else{
      $name_recipe_main = $_POST['name_recipe_main'];
   }

   if(empty($_POST['content_recipe_main'])){
      $errors['content_recipe_main']="No Update Content !";
   }else{
      $content_recipe_main = $_POST['content_recipe_main'];
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $content_recipe_main)){
         $errors['content_recipe_main'] = 'Content must be a comma separated list';
      }
   }

   if(empty($_POST['price_recipe_main'])){
      $errors['price_recipe_main']="No Update Price !";
   }else{
      $price_recipe_main = $_POST['price_recipe_main'];
   }

   if(!array_filter($errors)){
      $name_recipe_main = mysqli_real_escape_string($conn , $_POST['name_recipe_main']);
      $content_recipe_main = mysqli_real_escape_string($conn , $_POST['content_recipe_main']);
      $price_recipe_main = mysqli_real_escape_string($conn , $_POST['price_recipe_main']);

      $sql="UPDATE `mneu_cart_main` SET `name_recipe_main`='$name_recipe_main' ,`content_recipe_main`='$content_recipe_main' ,`price_recipe_main`='$price_recipe_main' WHERE `id_cart_main`= '$id_cart_main'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_mneu_cart_main.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//mneu cart starters
if(isset($_POST['save_recipe_starters'])){
	
   if(empty($_POST['name_recipe_starters'])){
      $errors['name_recipe_starters']="No Name !";
   }else{
      $name_recipe_starters = $_POST['name_recipe_starters'];
   }

   if(empty($_POST['content_recipe_starters'])){
      $errors['content_recipe_starters']="No Content !";
   }else{
      $content_recipe_starters = $_POST['content_recipe_starters'];
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $content_recipe_starters)){
         $errors['content_recipe_starters'] = 'Content must be a comma separated list';
      }
   }

   if(empty($_POST['price_recipe_starters'])){
      $errors['price_recipe_starters']="No Price !";
   }else{
      $price_recipe_starters = $_POST['price_recipe_starters'];
   }

   if(!array_filter($errors)){
      $name_recipe_starters = mysqli_real_escape_string($conn , $_POST['name_recipe_starters']);
      $content_recipe_starters = mysqli_real_escape_string($conn , $_POST['content_recipe_starters']);
      $price_recipe_starters = mysqli_real_escape_string($conn , $_POST['price_recipe_starters']);

      $sql="INSERT INTO `mneu_cart_starters`(`name_recipe_starters`,`content_recipe_starters`,`price_recipe_starters`) VALUES('$name_recipe_starters','$content_recipe_starters','$price_recipe_starters')";
      
      if(mysqli_query($conn , $sql)){
         header("Location:view_mneu_cart_starters.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_starters'])){
   $id_cart_starters=$_GET['delete_starters'];

   $sql="DELETE FROM `mneu_cart_starters` WHERE `id_cart_starters`='$id_cart_starters'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   header("Location:view_mneu_cart_starters.php");
}

if(isset($_GET['edit_starters'])){
   $id_cart_starters=$_GET['edit_starters'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `mneu_cart_starters` WHERE `id_cart_starters`='$id_cart_starters'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $name_recipe_starters = $row['name_recipe_starters'];
      $content_recipe_starters = $row['content_recipe_starters'];
      $price_recipe_starters = $row['price_recipe_starters'];
   }
}

if(isset($_POST['update_recipe_starters'])){
   $id_cart_starters=$_POST['id_cart_starters'];

   $update=true;

   if(empty($_POST['name_recipe_starters'])){
      $errors['name_recipe_starters']="No Update Name !";
   }else{
      $name_recipe_starters = $_POST['name_recipe_starters'];
   }

   if(empty($_POST['content_recipe_starters'])){
      $errors['content_recipe_starters']="No Update Content !";
   }else{
      $content_recipe_starters = $_POST['content_recipe_starters'];
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $content_recipe_starters)){
         $errors['content_recipe_starters'] = 'Content must be a comma separated list';
      }
   }

   if(empty($_POST['price_recipe_starters'])){
      $errors['price_recipe_starters']="No Update Price !";
   }else{
      $price_recipe_starters = $_POST['price_recipe_starters'];
   }

   if(!array_filter($errors)){
      $name_recipe_starters = mysqli_real_escape_string($conn , $_POST['name_recipe_starters']);
      $content_recipe_starters = mysqli_real_escape_string($conn , $_POST['content_recipe_starters']);
      $price_recipe_starters = mysqli_real_escape_string($conn , $_POST['price_recipe_starters']);

      $sql="UPDATE `mneu_cart_starters` SET `name_recipe_starters`='$name_recipe_starters' ,`content_recipe_starters`='$content_recipe_starters' ,`price_recipe_starters`='$price_recipe_starters' WHERE `id_cart_starters`= '$id_cart_starters'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_mneu_cart_starters.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//contact
if(isset($_POST['save_contact'])){
	
   if(empty($_POST['email_contact'])){
      $errors['email_contact']="No Update Email !";
   }else{
      $email_contact = $_POST['email_contact'];
      if(!filter_var($email_contact, FILTER_VALIDATE_EMAIL)){
         $errors['email_contact'] = 'Email valid !';
      }
   }

   if(empty($_POST['address_contact'])){
      $errors['address_contact']="No Address !";
   }else{
      $address_contact = $_POST['address_contact'];
   }

   if(empty($_POST['phonen_contact'])){
      $errors['phonen_contact']="No Phone Number !";
   }else{
      $phonen_contact = $_POST['phonen_contact'];
      if(!preg_match('/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/', $phonen_contact)){
         $errors['phonen_contact'] = 'Phone Number valid !';
      }
   }

   if(!array_filter($errors)){
      $email_contact = mysqli_real_escape_string($conn , $_POST['email_contact']);
      $address_contact = mysqli_real_escape_string($conn , $_POST['address_contact']);
      $phonen_contact = mysqli_real_escape_string($conn , $_POST['phonen_contact']);

      $sql="UPDATE `contact` SET `email_contact`='$email_contact' ,`address_contact`='$address_contact' ,`phonen_contact`='$phonen_contact'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_contact.php");
      }else{
      echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_contact'])){
   $id_contact=$_GET['edit_contact'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `contact` WHERE `id_contact`='$id_contact'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $email_contact = $row['email_contact'];
      $address_contact = $row['address_contact'];
      $phonen_contact = $row['phonen_contact'];
   }
}

if(isset($_POST['update_contact'])){
   $id_contact=$_POST['id_contact'];

   $update=true;

   if(empty($_POST['email_contact'])){
      $errors['email_contact']="No Update Email !";
   }else{
      $email_contact = $_POST['email_contact'];
      if(!filter_var($email_contact, FILTER_VALIDATE_EMAIL)){
         $errors['email_contact'] = 'Email valid !';
      }
   }

   if(empty($_POST['address_contact'])){
      $errors['address_contact']="No Update Address !";
   }else{
      $address_contact = $_POST['address_contact'];
   }

   if(empty($_POST['phonen_contact'])){
      $errors['phonen_contact']="No Update Phone Number !";
   }else{
      $phonen_contact = $_POST['phonen_contact'];
      if(!preg_match('/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/', $phonen_contact)){
         $errors['phonen_contact'] = 'Phone Number valid !';
     }
   }

   if(!array_filter($errors)){
      $email_contact = mysqli_real_escape_string($conn , $_POST['email_contact']);
      $address_contact = mysqli_real_escape_string($conn , $_POST['address_contact']);
      $phonen_contact = mysqli_real_escape_string($conn , $_POST['phonen_contact']);

      $sql="UPDATE `contact` SET `email_contact`='$email_contact' ,`address_contact`='$address_contact' ,`phonen_contact`='$phonen_contact' WHERE `id_contact`= '$id_contact'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_contact.php");
      }else{
      echo 'query error !' . mysqli_error($conn);
      }
   } 
}

//form contact
if(isset($_GET['delete_form'])){
   $id_form=$_GET['delete_form'];

   $sql="DELETE FROM `form_contact` WHERE `id_form`='$id_form'";

   if(mysqli_query($conn, $sql)){

   } else {
       echo 'query error: '. mysqli_error($conn);
   }
   
   header('Location:form_conact.php');
}
?>