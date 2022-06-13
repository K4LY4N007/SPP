<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home Page · Marks Prediction</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">

    <!-- Custom styles for this template -->
    <link href="css/home.css" rel="stylesheet">
    <link rel="shortcut icon" href="icon.jpg" />   
</head>
        <div class="main">
    <body>
        <section class="header">
        <img class="mySlides" src="images/colg-buliding.jpg">
        <img class= "mySlides" src="images/SP1-scaled.jpg">
        <img class="mySlides" src="images/SP2-scaled.jpg">
        <img class="mySlides" src="images/Hostel.jpg">
        <img class="mySlides" src="images/FS-CSE.jpg">
        <img class="mySlides" src="images/4Z2A3324.jpg">
        <img class="mySlides" src="images/SP4-scaled.jpg">
        <script>
                var slideIndex = 0;
                carousel();

                function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > x.length) {slideIndex = 1}
                x[slideIndex-1].style.display = "block";
                setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    
        </script>
        </section>
            <section class="courses">
                        <div class="text-box">
                        <h1> K S SCHOOL OF ENGINEERING AND MANAGEMENT</h1>
                        </div><br><br>
                    
                    <h1> Student Performance Prediction</h1>
                    <div class="row">
                            <!-- <div class="course-col">
                            <a href="About_us.php" class="link-dark"><h3>ABOUT US</h3></a>
                            </div> -->
                            
                            <div class="course-col">
                            <a href="contact_us.php" class="link-dark"><h3>CONTACT US</h3></a>
                            </div>
                            
                            <div class="course-col">
                            <a href="index.php" class="link-dark"><h3>ADMIN LOGIN</h3></a>
                            </div>

                            <div class="course-col">
                            <a href="student_login.php" class="link-dark"><h3>STUDENT LOGIN</h3></a>
                            </div>
                    </div>

                    <!-- <div class="card-columns">
                        <div class="card">
                            <a href="view_details.php" class="btn d-block card-btn">
                                <div class="card-body">
                                    <h5 class="card-title">ABOUT US</h5>
                                </div>
                            </a>
                        </div>

                        <div class="card">
                            <a href="view_details.php" class="btn d-block card-btn">
                                <div class="card-body">
                                    <h5 class="card-title">CONTACT US</h5>
                                </div>
                            </a>
                        </div>
                        <div class="card">
                            <a href="view_details.php" class="btn d-block card-btn">
                                <div class="card-body">
                                    <h5 class="card-title">ADMIN LOGIN</h5>
                                </div>
                            </a>
                        </div>
                    </div> -->
                        </section>
                        <footer class="mastfoot mt-auto">
                <div class="inner">
                <p>Designed By <span class="text-light">Department Of Computer Science And Engineering</span>.</p>
                </div>
            </footer>
            
       
    </body>
    </div>
    </html>
        
       
