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
                    <h2 class="section-heading text-uppercase"><?= $this->ContentBlock->text('home-heading'); ?></h2>
                    <h3 class="section-subheading text-muted"><?= $this->ContentBlock->text('home-subheading'); ?></h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <!--TODO Make Pages that Make More Sense for Home Delivery and Wholesale to Click To-->
                        <a href="Contact">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-danger"></i>
                            <?= $this->ContentBlock->html('content-icon1') ?>
                        </span>
                        </a>
                        <h4 class="my-3"><?= $this->ContentBlock->text('content-title1') ?></h4>
                        <p class="text-muted services-paragraph"><?= $this->ContentBlock->html('content-text1') ?></p>
                    </div>
                    <div class="col-md-4">
                        <a href="Contact">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-danger"></i>
                            <?= $this->ContentBlock->html('content-icon2') ?>
                        </span>
                        </a>
                        <h4 class="my-3"><?= $this->ContentBlock->text('content-title2') ?></h4>
                        <p class="text-muted services-paragraph"><?= $this->ContentBlock->html('content-text2') ?></p>
                    </div>
                    <div class="col-md-4">
                        <a href="Repair">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-danger"></i>
                            <?= $this->ContentBlock->html('content-icon3') ?>
                        </span>
                        </a>
                        <h4 class="my-3"><?= $this->ContentBlock->text('content-title3') ?></h4>
                        <p class="text-muted services-paragraph"><?= $this->ContentBlock->html('content-text3') ?></p>
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
