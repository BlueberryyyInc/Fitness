<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>
        <?= $this->fetch('title') ?>
    </title>

    <!-- Favicon-->
    <?= $this->Html->meta(
        'favicon.ico',
        '/favicon.ico',
        ['type' => 'icon']
    );
    ?>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->

    <?= $this->Html->css('/css/styles.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body id="page-top">
<!-- Navigation-->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <!-- TODO make always visible-->
    <div class="container">
        <a class="navbar-brand" href="<?= $this->Url->build('/') ?>"><img src="assets/img/Pasted_image-removebg-preview.png" alt="..."/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="Customers">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="BuyProducts">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="About">About</a></li>
                <li class="nav-item"><a class="nav-link" href="Contact">Contact</a></li>
                <!--TODO make this link to admin dashboard login-->
                <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
        </div>
        <br>
        <div class="row">
            <div id="business-img" class="col-4">
                <!--                    <img class="img-fluid" src="assets/img/barbell.jpg" alt="Barbell Image" width="200" height="200"/>-->
            </div>
            <div id="business-info" class="col-6">
                <div class="row">
                    <div class="col-12"><h1>Superior Fitness</h1></div></div>
                <div class="row">
                    <div class="col-1"><p>Address:</p></div>
                    <div class="col-11"><p>100 Superior Fitness Way, Melbourne, Victoria</p></div>
                </div>
                <div class="row">
                    <div class="col-1"><p>Phone</p></div>
                    <div class="col-11"><p>05757575</p></div>
                </div>
                <div class="row">
                    <div class="col-1"><p>Email:</p></div>
                    <div class="col-11"><p>damien@superiorfitness.com</p></div>
                </div>
                <div class="row">
                    <div class="col-sm-8"><p>Opening Hours:</p>
                        <table class="table mt-4">
                            <thead>
                            <tr>
                                <th scope="col">Day</th>
                                <th scope="col">Opening Time</th>
                                <th scope="col">Closing Time</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Monday</td>
                                <td>9:00 AM</td>
                                <td>5:00 PM</td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td>9:00 AM</td>
                                <td>5:00 PM</td>
                            </tr>
                            <tr>
                                <td>Wednesday</td>
                                <td>9:00 AM</td>
                                <td>5:00 PM</td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td>9:00 AM</td>
                                <td>5:00 PM</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>9:00 AM</td>
                                <td>5:00 PM</td>
                            </tr>
                            <tr>
                                <td>Saturday</td>
                                <td>10:00 AM</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>Closed</td>
                                <td>Closed</td>
                            </tr>
                            </tbody>
                        </table>
                    </div></div>
            </div>
        </div>
        <br>
        <div id="enquiry">
            <div class="text-center">
                <button id="enquiryButton" class="btn btn-primary btn-xl text-uppercase">Enquiry</button>
            </div>

            <!-- The overlay background -->
            <div class="overlay" id="overlay"></div>

            <!-- The popup form -->
            <!--TODO fix circle going over top of popup-->
            <div class="popup" id="popup">
                <h2 class="display-2 text-center">Enquiry Form</h2>
                <form id="contactForm" action="mailto:damien@superiorfitness.com" method="post" enctype="text/plain">
                    <div class="row align-items-stretch mb-5">
                        <div>
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input class="form-control" id="name" name="Name" type="text" placeholder="Enter Full Name" required />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" name="Email" type="email" placeholder="Enter Preferred Contact Email" required />
                            </div>
                            <div class="form-group mb-md-0">
                                <label for="phone">Phone</label>
                                <input class="form-control" id="phone" name="Phone" type="tel" placeholder="Enter Phone" required />
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input class="form-control" id="subject" name="Subject" type="text" placeholder="Enter Subject" required />
                            </div>
                            <div class="form-group">
                                <label for="message">Your Message</label>
                                <textarea class="form-control" id="message" name="Message" rows="4" placeholder="Your Message" required></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button class="btn btn-primary btn-xl text-uppercase" id="submit" name="submit" type="submit" value="Send">Send Message</button>
                        <button class="btn btn-primary btn-xl text-uppercase" id="close" name="close" onclick="closePopup()">Close</button>
                    </div>
                </form>


            </div>

            <script>
                // Function to open the popup form
                function openPopup() {
                    document.getElementById("overlay").style.display = "block";
                    document.getElementById("popup").style.display = "block";
                }

                // Function to close the popup form
                function closePopup() {
                    document.getElementById("overlay").style.display = "none";
                    document.getElementById("popup").style.display = "none";
                }

                // Add a click event listener to the "Enquiry" button
                document.getElementById("enquiryButton").addEventListener("click", openPopup);
            </script>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="footer py-4">
    <!--TODO make this relevant to superior fitness-->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">Copyright &copy; Superior Fitness 2023</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <!--                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>-->
                <!--                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>-->
                <!--                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>-->
            </div>
            <div class="col-lg-4 text-lg-end">
                <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
