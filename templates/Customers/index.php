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
            <div class="container">
                <a class="navbar-brand" href="<?= $this->Url->build('/') ?>"><img src="assets/img/Pasted_image-removebg-preview.png" alt="..."/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="BuyProducts">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <!--TODO make this link to admin dashboard login-->
                        <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <!--TODO alter fonts to suit fitness industry-->
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
                <!-- Renamed the project and created a slogan -->
                <div class="masthead-subheading">  <a class="navbar-brand" href="<?= $this->Url->build('/') ?>"><img src="assets/img/navbar-logo-removebg.png" alt="..." width="465" height="133"/></a>
                </div>
                <div class="masthead-heading text-uppercase">Empowerment, Strength, Potential</div>
                <!--changed href to send to portfolio which will be our products display-->
                <a class="btn btn-primary btn-xl text-uppercase" href="BuyProducts">Shop Now</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <!--TODO change icons to something relevant to the services we offer as well as colour scheme changes-->
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">We make fitness accessible for ameteurs and professionals.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Home Delivery</h4>
                        <p class="text-muted">We help you set up your home gym purchases to create the home fitness environment that will allow you to reach all of your goals.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Wholesale</h4>
                        <p class="text-muted">We can help you build your ideal fitness centre to support your business in providing fitness services to your clients.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Repair</h4>
                        <p class="text-muted">While we stock quality products, repairs are sometimes necessary. As such, we provide extensive repair services for the products that we sell.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Superior Fitness - Empowering Your Fitness Journey</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/Vision.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Our Vision</h4>
                                <h4 class="subheading">Discover Our Fitness Mission</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">At Superior Fitness, we believe that everyone deserves access to top-quality gym equipment and unparalleled services. Our vision is to empower individuals, whether you're a dedicated fitness enthusiast, a commercial gym owner, or someone just starting on your fitness journey, to live your healthiest life. We're here to support your every step, lift, and sprint towards a better you.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/Commitment.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Our Commitment</h4>
                                <h4 class="subheading">Uncompromising Quality</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">What sets Superior Fitness apart is our unwavering commitment to excellence. We meticulously curate a vast range of gym equipment and accessories to cater to every fitness need. Our products undergo rigorous quality checks to ensure they meet the highest standards, so you can work out with confidence.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/why.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Why Choose Superior Fitness?</h4>
                                <h4 class="subheading">Because we are Superior, Superior Fitness</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Superior Fitness is more than a brand; it's a lifestyle. We're here to support, guide, and motivate you to be the best version of yourself. Whether you're aiming to build muscle, lose weight, or simply stay active, we've got the tools, expertise, and dedication to make your fitness dreams a reality. Join us in this exciting fitness journey, and together, we'll achieve greatness, one workout at a time. Welcome to Superior Fitness - where fitness meets excellence.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Your Journey
                                <br />
                                Starts
                                <br />
                                Here!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
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
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Threads
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Explore
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Graphic Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Finish
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Identity
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Lines
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
