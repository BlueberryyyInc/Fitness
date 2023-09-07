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
