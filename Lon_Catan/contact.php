<?php 
if (isset($_POST['sub'])) {
    //Insert the Data From HTML to Database
    //1st: Connect to database
    //2nd: Get the data from HTML thru names
    //3rd: run a mysql query

    $connect = mysqli_connect('localhost', 'root', '', 'contact_form');
    
    $Name = $_POST['Full_name'];
    $Contact_Number = $_POST['Contact_Number'];
    $Email_Address = $_POST['Email_Address'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];

    $query = "INSERT INTO users Values
    (null, '$Name', '$Contact_Number', '$Email_Address', '$Subject', '$Message')";

    if(mysqli_query($connect, $query)){
        echo "Records inserted successfully."; 
    } else{
        echo "ERROR: Could not able to execute $query. " . mysql_error($connect);
    }
    mysqli_close($connect);
}

else{

}
 
?>


<!DOCTYPE html>
<!-- Created By Monching0013 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="index.php" class="menu-btn">Home</a></li>
                <li><a href="about.php" class="menu-btn">About</a></li>
                <li><a href="services.php" class="menu-btn">Services</a></li>
                <li><a href="skills.php" class="menu-btn">Skills</a></li>
                <li><a href="trades.php" class="menu-btn">Trades</a></li>
                <li><a href="contact.php" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Book Now</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>For more details, querry and suggestions regarding the services I offer, please leave a message and I will get back to you as soon as possible.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Reymond Susi</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Pampanga, Philippines</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">monching0013@yahoo.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form method="POST" action="">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="Full_name" placeholder="Name" required >
                            </div>
                            <div class="field">
                            <input type="text" name="Contact_Number" placeholder="Contact Number" required>
                            </div>
                        </div>
                        <div class="field email">
                                <input type="email" name="Email_Address" placeholder="Email" required>
                            </div>
                        <div class="field">
                            <input type="text" name="Subject" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10"  name="Message" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="sub">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- footer section start -->
    <footer>
        <span>Created By <a href="">Monching0013</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>

    <script>
        $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplay: false,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });
    </script>
    <script src="script.js"></script>
</body>
</html>