<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['login'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spectrum</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="pic/FAV1.png" image/x-icon ">
</head>

<body>
    <section class="header">

    <div class="row">
    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href=" # "><img src=" pic/mozclub logo.png " class=" img-fluid
        logo " alt=" ">
                <p>Spectrum</p>
            </a>
            <a class="profile" href="profile.php">
                <i class="fas fa-user-circle"></i>
                <?php echo "<p>Welcome {$_SESSION['username']}</p>";?>
            </a>
            <button class="navbar-toggler menu-toggle" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label=" Toggle navigation ">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class=" collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class=" navbar-nav ms-auto  mb-2 mb-lg-0 ">
                    <li class=" nav-item ">
                        <a class=" nav-link " href="#home">Home</a>
                    </li>
                    <li class=" nav-item ">
                        <a class=" nav-link " href=" #about ">About Us</a>
                    </li>
                    <li class=" nav-item ">
                        <a class=" nav-link " href=" #project ">Projects</a>
                    </li>
                    <li class=" nav-item ">
                        <a class=" nav-link " href=" #contact ">Contact Us</a>
                    </li>
                    <li class=" nav-item ">
                        <a class=" nav-link btn btn-success " href="logout.php">Sign Up</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    </div>
    </div>
    </section>
    <section id="home">
        <div class="mybanner">
            <img src="pic/spectrum (1).png " class="img-fluid " alt=" ">
        </div>
        <div class="img-overlay "></div>
        <div class="container ">
            <div class="row ">

                <h1 class="baner_cont">
                    Providing the simplest solution for the most complex problem
                </h1>
                <p class="baner_p ">SPECTRUM a place for all technical enthusiasts to learn, discover and innovate new
                    things in the field of Technology and Design.</p>
                <button class="mybtn ">Join Us</button>
            </div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="container " data-aos="fade-up">
            <div class="row ">
                <div class="abtcont ">
                    <h2 class="text-center mt-5 py-5 ">About Us</h2>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-7 col-md-6 col-sm-12 para " data-aos="fade-left
        ">
                    <p><b>SPECTRUM</b> ,Technical society of COLLEGE OF ENGINEERING AND TECHNOLOGY, BHUBANESWAR,a place
                        for all technical enthusiasts to learn, discover and innovate new things in the field of
                        Technology and Design. The name of the club " SPECTRUM ", a contribution of our alumni of 2015
                        batch, is particularly used to describe the characteristic colors of visible light after passing
                        through a prism, similarly students of CET consist of different skills within them
                        and Spectrum acts like a prism, Spectrum recognises their skills helps them to strengthen it.
                        <br><br>
                    </p>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 abtimg" data-aos="fade-left">
                    <img src="pic/abtu.jpg " class="img-fluid " alt=" ">
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 abtimg " data-aos="fade-left">
                    <img src="pic/bg4.jpg " class="img-fluid " alt=" ">
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 para " data-aos="fade-left ">
                    <p>
                        This club was established by " Bikram Keshari Panda (2015 batch) ".Spectrum got its recognition
                        in the year 2016 and got its workspace, funding and other facilities. Primarily this was his
                        idea to have an electronics society in our college but with the
                        efforts of other members we established two other wings - Software and Design.The other seniors
                        who had their valuable contribution for this initiative were: Ankit Mishra, Zighnesh Biswal,
                        Abhishek Dash, Avinash Nayak, Tapan Kumar
                        Pal, Krutikesh Sahoo, Abhilash Das.
                    </p>
                </div>
            </div>
            <div class="row" data-aos="fade-right ">
                <div class="abtcont ">
                    <h2 class="text-center mt-5 py-5 ">Our Wings</h2>
                </div>

            </div>
            <div class="wings" data-aos="fade-right ">
                <div class="parawing ">
                    <p><b>SPECTRUM</b> Our club is so named as it provides us with different wings emitted by the
                        hardwork from our members, showing homologous transitions between Hardware, Software and
                        Designing. <br><br></p>
                    <div class="row disp ">
                        <div class="col-lg-8 col-md-6 ">
                            <p>The <b>HARDWARE</b> team of the Club mainly focuses on VLSI, Embedded Systems and PCB
                                Design. We have developed many projects with implementation and testing of circuits,
                                components, systems, etc.<br><br>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 wbox " data-aos="fade-right ">
                            <img src="pic/hardware (W).png " class="img-fluid ">
                            <div class="box-cont ">
                                <a href=" ">vlsi</a><br>

                                <a href=" ">embedded system</a><br>

                                <a href=" ">pcb design</a><br>

                            </div>
                        </div>
                    </div>
                    <div class="row disp">
                        <div class="col-lg-4 col-md-6 col-sm-6 wbox " data-aos="fade-right ">
                            <img src="pic/software (W).png " class="img-fluid ">
                            <div class="box-cont ">
                                <a href=" ">web Development</a><br>

                                <a href=" ">app Development</a><br>

                                <a href=" ">meachine Learning</a><br>

                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 ">
                            <p>The <b>SOFTWARE</b> team is continuously striving for growth in the domains of Web
                                Development, App Development, Competitive Programming, Machine Learning and Data
                                Science. Working as a team, inspiring each other we quickly
                                develop viable solutions for a better outcome.<br><br></p>
                        </div>

                    </div>

                    <div class="row disp ">
                        <div class="col-lg-8 col-md-6 para ">
                            <p>The <b>DESIGN</b> Wing of our Club has proven their creativity in UI/UX Poster Designing.
                                We believe visual communication is a major tool to enhance various creative projects.
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 wbox " data-aos="fade-right ">
                            <img src="pic/design (W).png " class="img-fluid ">
                            <div class="box-cont ">
                                <a href=" ">ui/ux Designing</a><br>

                                <a href=" ">Poster Designing</a><br>


                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </section>
    <section id="project">
        <div class="container">
            <div class="row headingprg">
                <h1>Projects</h1>
            </div>
            <div class="row ">
                <div class="row project_card ">
                    <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="card ">
                            <img src="pic/pic1.jpg " class="card-img-top " alt="... ">
                            <div class="card-body ">
                                <h5 class="card-title ">Student Result Management System
                                </h5>
                                <p class="card-text ">This project will also help to brush up on your HTML, CSS,
                                    JavaScript, PHP and MySQL skills.</p>
                                <div class="card-footer "><a href="# " class="btn btn-primary ">View Detailes</a>
                                    <a href="# " class="btn btn-success ">Download</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="card ">
                            <img src="pic/pic2.jpg " class="card-img-top " alt="... ">
                            <div class="card-body ">
                                <h5 class="card-title ">Codechef Notifier</h5>
                                <p class="card-text ">Codechef is a very common platform used by many aspiring coders to
                                    improve their coding skills. Often when using codechef.</p>
                                <div class="card-footer "><a href="# " class="btn btn-primary ">View Detailes</a>
                                    <a href="# " class="btn btn-success ">Download</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="card ">
                            <img src="pic/pic5.png " class="card-img-top " alt="... ">
                            <div class="card-body ">
                                <h5 class="card-title ">YouTube Transcript Summarizer</h5>
                                <p class="card-text ">People are watching YouTube videos daily which can be educational,
                                    documentary or of any genre with longer length.</p>
                                <div class="card-footer "><a href="# " class="btn btn-primary ">View Detailes</a>
                                    <a href="# " class="btn btn-success ">Download</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="card ">
                            <img src="pic/maze.png " class="card-img-top " alt="... ">
                            <div class="card-body ">
                                <h5 class="card-title ">Rat in a Maze
                                </h5>
                                <p class="card-text ">In this problem, there is a given maze of size N x N. The source
                                    and the destination location is top-left cell and bottom right cell respectively.

                                </p>
                                <div class="card-footer "><a href="# " class="btn btn-primary ">View Detailes</a>
                                    <a href="# " class="btn btn-success ">Download</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="card ">
                            <img src="pic/programming.png " class="card-img-top " alt="... ">
                            <div class="card-body ">
                                <h5 class="card-title ">Sorting Visualizer</h5>
                                <p class="card-text ">This project sorting visualizer is a very simple UI and it allows
                                    the users to select the sort algorithm, select the array size, and speed of the
                                    visualization.</p>
                                <div class="card-footer "><a href="# " class="btn btn-primary ">View Detailes</a>
                                    <a href="# " class="btn btn-success ">Download</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 ">
                        <div class="card ">
                            <img src="pic/python.jpg " class="card-img-top " alt="... ">
                            <div class="card-body ">
                                <h5 class="card-title ">Text Summarizer</h5>
                                <p class="card-text ">A simple python program which can find the most important
                                    sentences in a paragraph and can give them as the output.</p>

                                <div class="card-footer "><a href="# " class="btn btn-primary ">View Detailes</a>
                                    <a href="# " class="btn btn-success ">Download</a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row btnp "><a href="# " class="btn btn-primary ">Get More</a></div>

        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row abtcont">
                <h2 class="text-center mt-5 py-5 ">Contact Us</h2>
            </div>
            <div class="contact">
                <div class="cont-form">
                    <input type="text" class="in" placeholder="Name "><br><br>
                    <input type="email " class="in " placeholder="email "><br><br>
                    <input type="text " class="in " placeholder="Contact Number "><br><br>
                    <textarea class="in " placeholder="Messege " cols="30 " rows="10 "></textarea><br>
                    <input type="button " value="Send " class="send ">
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="footer ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-4 col-md-12 footercard ">
                    <h1>Spectrum</h1>
                </div>
                <div class="col-lg-4 col-md-12 footercard ">
                    <div class="headh ">
                        <p>quick links</p>
                    </div>
                    <div class="flist ">
                        <li>
                            <a href="#home ">Home</a>
                        </li>
                        <li>
                            <a href="#about ">About</a>
                        </li>
                        <li>
                            <a href="#project ">Projects</a>
                        </li>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footercard ">
                    <div class="headh ">
                        <p>Get in touch with us</p>
                    </div>
                    <div class="mail1 ">
                        <p>Feel free to get in touch with us</p>
                    </div>

                    <div class="flist ">

                        <li>
                            <a href="#home ">contact us</a>
                        </li>
                    </div>
                    <h5></h5>
                    <div class="mail ">
                        <i class="fas fa-envelope "></i>
                        <p>spectrum@123gmail.com</p>
                    </div>
                    <div class="fsocial ">
                        <li>
                            <a href="# "><i class="fab fa-facebook-square "></i></a>
                        </li>
                        <li>
                            <a href="# "><i class="fab fa-linkedin "></i></a>
                        </li>
                        <li>
                            <a href=" "><i class="fab fa-youtube "></i></a>
                        </li>
                        <li><a href=" "><i class="fab fa-twitter-square "></i></a></li>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row ">
            <div class="reser ">
                @2021
                <p>Spectrum</p>.All Rights Reserved
            </div>
        </div>
    </section>
    </body>
    <script src="js/bootstrap.js "></script>
    <script src="js/aos.js "></script>
    <script src="js/main.js "></script>

</html>