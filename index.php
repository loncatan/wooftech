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
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#trades" class="menu-btn">Trades</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Reymond Susi</div>
                <div class="text-3">And I'm a <span class="text">Freelance Contractor</span></div>
                <a href="#">Hire me</a>
            </div>
        </div>
    </section>
    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/reymond.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Reymond and I'm a <span class="text">Contractor</span></div>
                    <p>I was born in a small town in Pampanga called Sasmuan in the northern part of the Philippines. 
                        Since childhood, I have a passion for improving things, something that made me excel to walk the life of an Engineer. 
                        Unfortunately due to lack of financial support I did not finish my studies so I was forced to stop and look for a living and that's where I thought to find of work related to my knowledge as a skilled worker. 
                        Eventually my passion for repairing broken things pushed me to learn while working until I became a small contractor where my first client was my boss who pushed me to enter the contracting business. 
                        While working I decided enrolled weekly IT course in Filipino Institute in Dubai, UAE where I studying and learned about web developing.
                        Now asside from field technical works I can even accept IT and other computer works.</p>
                    <a href="resume/my_resume.html">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fa fa-building" aria-hidden="true"></i>
                        <div class="text">Construction</div>
                        <p>Learn more about our services</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa fa-wrench" aria-hidden="true"></i>
                        <div class="text">Maintenance</div>
                        <p>Learn more about our services</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        <div class="text">Computer Works</div>
                        <p>Learn more about our services</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>
    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>
                        Here are some of my unique knowledge that you can rely on to hire me as one of the technical managers to meet your needs
                        inside and outside your home.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>Electrical</span>
                            <span>90%</span>
                        </div>
                        <div class="line electrical"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Plumbing</span>
                            <span>75%</span>
                        </div>
                        <div class="line plumbing"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Refrigeration and Airconditioning</span>
                            <span>85%</span>
                        </div>
                        <div class="line refrigeration"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Solar PV Installation and Maintenance</span>
                            <span>80%</span>
                        </div>
                        <div class="line pv"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Carpentry</span>
                            <span>70%</span>
                        </div>
                        <div class="line carpentry"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Computer</span>
                            <span>65%</span>
                        </div>
                        <div class="line computer"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- teams section start -->
    <section class="trades" id="trades">
        <div class="max-width">
            <h2 class="title">Maintenance Services Include</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/Solar PV installation.jpg" alt="">
                        <div class="text">Solar PV Installation</div>
                        <p>Solar PV Installation</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/ac repair.jpg" alt="">
                        <div class="text">Refrigeration/AC</div>
                        <p>Ref and AC Maintenance</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/carpentry works.jpg" alt="">
                        <div class="text">Carpentry</div>
                        <p>Civil and Carpentry Works</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/Electrical Works.jpg" alt="">
                        <div class="text">Electrical</div>
                        <p>Electrical Works</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/painting works.jpg" alt="">
                        <div class="text">Painting</div>
                        <p>Painting Works</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/computer.jpg" alt="">
                        <div class="text">Computer Job</div>
                        <p>computer typing job</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/Plumbing works.jpg" alt="">
                        <div class="text">Plumbing</div>
                        <p>Plumbing Works</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/cctv system.jpg" alt="">
                        <div class="text">Security System</div>
                        <p>CCTV / Access Control System</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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