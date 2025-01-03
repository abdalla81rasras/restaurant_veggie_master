<?php  
include "Dashboard/inc/connection.php";

if(isset($_POST['send'])){

    $name_form = mysqli_real_escape_string($conn , $_POST['name_form']);
    $email_form = mysqli_real_escape_string($conn , $_POST['email_form']);
    $message_form = mysqli_real_escape_string($conn , $_POST['message_form']);

    $sql="INSERT INTO `form_contact`(`name_form`,`email_form`,`message_form`) VALUES('$name_form','$email_form','$message_form')";

    mysqli_query($conn , $sql);

    echo "<script type='text/javascript'>alert('Send Successfully');
         window.location='index.php';</script>";
}
?>
<footer id="contact-us">
        <div class="container">
            <div class="footer-content">
                <h1 class="header-txt scroll-reveal">Contact</h1>
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
                <div class="contact-info scroll-reveal">
                    <?php 
                        $select="SELECT * FROM `contact`";
                        $query=mysqli_query($conn , $select);
                        while($row=mysqli_fetch_assoc($query)):
                    ?>
                        <div class="info-address">
                            <h3>Veggie</h3>
                            <p><?php echo $row['address_contact'] ?></p>
                        </div>
                        <div class="reservations">
                            <h3>Reservations</h3>
                            <p><?php echo $row['email_contact'] ?><br><?php echo $row['phonen_contact'] ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
                <!--.contact-info-->
                <div class="contact-form scroll-reveal" data-origin="bottom" data-distance="20%">
                    <h3>Contact us</h3>
                    <form action="index.php" method="post">
                        <input type="text" name="name_form" placeholder="Name" required="">
                        <input type="email" name="email_form" placeholder="Email" required="">
                        <textarea placeholder="Message" name="message_form" required=""></textarea>
                        <button class="send-form" name="send">Send</button>
                    </form>
                </div>
                <!--.contact-form-->
                <div class="social-icons scroll-reveal" data-duration="1500">
                    <?php 
                        $select="SELECT * FROM `footer`";
                        $query=mysqli_query($conn , $select);
                        while($row=mysqli_fetch_assoc($query)):
                    ?>
                        <a target="_blank" href="<?php echo $row['facebook_footer'] ?>">
                            <div class="fb-i">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 288.861 288.861" style="enable-background:new 0 0 288.861 288.861;" xml:space="preserve" width="30px" height="30px">
                                        <path d="M167.172,288.861h-62.16V159.347H70.769v-59.48h34.242v-33.4C105.011,35.804,124.195,0,178.284,0   c19.068,0,33.066,1.787,33.651,1.864l5.739,0.746l-1.382,55.663l-6.324-0.058c-0.013,0-14.223-0.135-29.724-0.135   c-11.536,0-13.066,2.847-13.066,14.171v27.629h50.913l-2.821,59.48h-48.086v129.501H167.172z M117.858,276.007h36.453V146.5h48.677   l1.607-33.779h-50.284V72.238c0-13.368,3.078-27.025,25.919-27.025c9.178,0,17.899,0.045,23.509,0.09l0.778-31.292   c-5.675-0.508-15.116-1.157-26.247-1.157c-44.544,0-60.419,27.693-60.419,53.613v46.254H83.61V146.5h34.242v129.507H117.858z" fill="#3c3c3c"/>
                                </svg>
                            </div>
                        </a>
                        <a target="_blank" href="<?php echo $row['instagram_footer'] ?>">
                            <div class="insta-i">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 48 48" style="enable-background:new 0 0 48 48;" xml:space="preserve" width="30px" height="30px">
                                    <path d="M40.4,5.5H35.6c-1.434,0-2.6,1.166-2.6,2.6V12.9c0,1.434,1.166,2.6,2.6,2.6H40.4c1.434,0,2.6-1.166,2.6-2.6V8.1    C43,6.666,41.834,5.5,40.4,5.5z M41,12.9c0,0.331-0.269,0.6-0.6,0.6H35.6c-0.331,0-0.6-0.269-0.6-0.6V8.1    c0-0.331,0.269-0.6,0.6-0.6H40.4c0.331,0,0.6,0.269,0.6,0.6V12.9z" fill="#3c3c3c"/>
                                    <path d="M37.8,0.5H10.2C4.576,0.5,0,5.089,0,10.731V17.5v2v17.77C0,42.911,4.576,47.5,10.2,47.5h27.6    c5.624,0,10.2-4.589,10.2-10.23V19.5v-2v-6.769C48,5.089,43.424,0.5,37.8,0.5z M46,37.27c0,4.538-3.679,8.23-8.2,8.23H10.2    c-4.522,0-8.2-3.692-8.2-8.23V19.5h12.221C11.62,22.043,10,25.584,10,29.5c0,7.72,6.28,14,14,14s14-6.28,14-14    c0-3.916-1.62-7.457-4.221-10H46V37.27z M36,29.5c0,6.617-5.383,12-12,12s-12-5.383-12-12s5.383-12,12-12S36,22.883,36,29.5z     M31.174,17.5c-2.101-1.261-4.55-2-7.174-2s-5.073,0.739-7.174,2H2v-6.769C2,6.192,5.679,2.5,10.2,2.5h27.6    c4.521,0,8.2,3.692,8.2,8.231V17.5H31.174z" fill="#3c3c3c"/>
                                    <path d="M15,29.5c0,4.962,4.037,9,9,9s9-4.038,9-9s-4.037-9-9-9S15,24.538,15,29.5z M31,29.5c0,3.86-3.141,7-7,7s-7-3.14-7-7    s3.141-7,7-7S31,25.64,31,29.5z" fill="#3c3c3c"/>
                                </svg>
                            </div>
                        </a>
                        <a target="_blank" href="<?php echo $row['twitter_footer'] ?>">
                            <div class="twitt-i">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 48 48" style="enable-background:new 0 0 48 48;" xml:space="preserve" width="90px" height="90px"> 
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/> 
                                </svg>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
                <!--.social-icons-->
            </div>
            <!--.footer-content-->
            <p class="copy-info">Copyright 2021 © Clever Mind POB ICT</p>
        </div>
        <!--.container-->
    </footer>

    <div id="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/what-input/5.0.2/what-input.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.js"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

    <script type="text/javascript">
        $('.slider').slick({
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            fade: true,
            cssEase: 'linear'
        });

    </script>

    <script>
        $(window).on('load', function() {
            $("#preloader").fadeOut();
        });
    </script>

</body>

</html>
