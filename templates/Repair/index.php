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
</head>
<body id="page-top">

<!-- Contact-->
<section class="page-section" id="repair">
    <div class="container">
        <!--TODO create information page-->
        </div>
        <br>
        <div id="enquiry">
            <div class="text-center">
                <button id="enquiryButton" class="btn btn-primary btn-xl text-uppercase">Repair Enquiry</button>
            </div>

            <!-- The overlay background -->
            <div class="overlay" id="overlay"></div>

            <!-- The popup form -->
            <div class="popup" id="popup">
                <h2 class="display-2 text-center">Repair Enquiry Form</h2>
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
                                <label for="order">Purchase Order Number</label>
                                <input class="form-control" id="order" name="Order" type="text" placeholder="Enter Order Number" required />
                            </div>
                            <div class="form-group">
                                <label for="order">Product Number</label>
                                <!--TODO make this a product list that loads from DB-->
                                <input class="form-control" id="order" name="Order" type="text" placeholder="Enter Product Number" required />
                            </div>
                            <div class="form-group">
                                <label for="message">Description</label>
                                <textarea class="form-control" id="message" name="Message" rows="4" placeholder="Please describe your problem" required></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="text-center">
                        <!--TODO if enquiry submit is successful, echo feedback "We'll get back to you soon!"-->
                        <button class="btn btn-primary btn-xl text-uppercase" id="submit" name="submit" type="submit" value="Send">Submit Enquiry</button>
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
