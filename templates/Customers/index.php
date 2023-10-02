<!DOCTYPE html>
<html lang="en">

<body id="page-top">
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
                <!-- Renamed the project and created a slogan -->
                <div class="masthead-subheading">  <a class="navbar-brand" href="<?= $this->Url->build('/') ?>"><?= $this->ContentBlock->image('logo'); ?></a>
                </div>
                <div class="masthead-heading text-uppercase"><?= $this->ContentBlock->text('home-slogan'); ?></div>
                <!--changed href to send to portfolio which will be our products display-->
                <a class="btn btn-primary btn-xl text-uppercase" href="BuyProducts">Shop Now</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">We make fitness accessible for ameteurs and professionals.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <!--TODO Make Pages that Make More Sense for Home Delivery and Wholesale to Click To-->
                        <a href="Contact">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-danger"></i>
                            <i class="fas fa-truck fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                        <h4 class="my-3">Home Delivery</h4>
                        <p class="text-muted services-paragraph">We help you set up your home gym purchases to create the home fitness environment that will allow you to reach all of your goals.</p>
                    </div>
                    <div class="col-md-4">
                        <a href="Contact">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-danger"></i>
                            <i class="fas fa-building fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                        <h4 class="my-3">Wholesale</h4>
                        <p class="text-muted services-paragraph">We can help you build your ideal fitness centre to support your business in providing fitness services to your clients.</p>
                    </div>
                    <div class="col-md-4">
                        <a href="Repair">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-danger"></i>
                            <i class="fas fa-cogs fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                        <h4 class="my-3">Repair</h4>
                        <p class="text-muted services-paragraph">While we stock quality products, repairs are sometimes necessary. As such, we provide extensive repair services for the products that we sell.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        
    </body>
</html>
