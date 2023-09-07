<!DOCTYPE html>
<html lang="en">
    
<body id="page-top">
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
            <!--TODO change icons to something relevant to the services we offer as well as colour scheme changes - attempted-->
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">We make fitness accessible for ameteurs and professionals.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-danger"></i>
                            <i class="fas fa-truck fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Home Delivery</h4>
                        <p class="text-muted">We help you set up your home gym purchases to create the home fitness environment that will allow you to reach all of your goals.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-danger"></i>
                            <i class="fas fa-building fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Wholesale</h4>
                        <p class="text-muted">We can help you build your ideal fitness centre to support your business in providing fitness services to your clients.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-danger"></i>
                            <i class="fas fa-cogs fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Repair</h4>
                        <p class="text-muted">While we stock quality products, repairs are sometimes necessary. As such, we provide extensive repair services for the products that we sell.</p>
                    </div>
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
