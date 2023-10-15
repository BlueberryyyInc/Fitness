<!--Repair Information and Enquiry Submission Page-->
<!--On this page, the customer will be able to view a brief description of repair services and submit an enquiry about
the products that they have purchased with us in need of repair via the enquiry form.-->
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

    <style>
        p {
            font-family: sans-serif;
            font-size: larger;
        }
    </style>
</head>
<body id="page-top">

<!-- Contact-->
<section class="page-section" id="repair">
    <div class="container">
        </div>
        <br>
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Repairs</h2>
    </div>
    <div class="row">
        <div id="business-img" class="col-4">
            <!--                <img class="img-fluid" src="assets/img/barbell.jpg" alt="Barbell Image" height="300" width="300"/>-->
        </div>
        <div id="business-info" class="col-6">
            <div class="row">
                <div class="col-12"><h1><?= $this->ContentBlock->text('contact-name'); ?></h1></div></div>
            <div class="row">
                <div class="col-1"><p>Address:</p></div>
                <div class="col-11"><p><?= $this->ContentBlock->text('contact-address'); ?></p></div>
            </div>
            <div class="row">
                <div class="col-1"><p>Phone</p></div>
                <div class="col-11"><p><?= $this->ContentBlock->text('contact-number'); ?></p></div>
            </div>
            <div class="row">
                <div class="col-1"><p>Email:</p></div>
                <div class="col-11"><p><?= $this->ContentBlock->text('contact-email'); ?></p></div>
            </div>
            <div class="row">
                <div class="col-1"><p>Repairs:</p></div>
                <div class="col-11"><p>Use the button below to fill out a repair enquiry form,<br>or simply send an email directly to our above address. <br> Be sure to include the product name and the issue.</p></div>
            </div>

        </div>
    </div>


        <div id="enquiry">
            <div class="text-center">
                <button id="enquiryButton" class="btn btn-primary btn-xl text-uppercase">Repair Enquiry</button>
            </div>

            <!-- The overlay background -->
            <div class="overlay" id="overlay"></div>

            <!-- The popup form -->
            <div class="popup" id="popup">
                <h2 class="display-2 text-center">Repair Enquiry Form</h2>
                <?= $this->Form->create(null, ['url' => ['controller' => 'Repair', 'action' => 'send']]) ?>
                <div class="row align-items-stretch mb-5">
                    <div>
                        <div class="form-group">
                            <?= $this->Form->control('name', ['class' => 'form-control', 'type' => 'string', 'required' => true]) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('email', ['class' => 'form-control', 'type' => 'email','required' => true]) ?>
                        </div>
                        <div class="form-group mb-md-0">
                            <?= $this->Form->control('phone', ['class' => 'form-control', 'type' => 'tel', 'required' => true]) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('productNumber', ['class' => 'form-control', 'type' => 'string','required' => false]) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('order', ['class' => 'form-control', 'type' => 'string', 'required' => false]) ?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->control('message', ['class' => 'form-control', 'type' => 'text', 'rows' => '4', 'required' => true]) ?>
                        </div>
                    </div>
                    <div class="text-center">

                        <?= $this->Form->button('Send Message', ['class' => 'btn btn-primary btn-xl text-uppercase', 'type' => 'submit', 'name' => 'submit', 'value' => 'Send']) ?>
                        <?= $this->Form->button('Close', ['class' => 'btn btn-primary btn-xl text-uppercase', 'type' => 'button', 'name' => 'close', 'onclick' => 'closePopup()']) ?>
                        <?= $this->Form->end() ?>
                    </div>


                </div>
            </div>
            <!-- Submit Button -->


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
