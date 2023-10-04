<!DOCTYPE html>
<html lang="en">
<body id="page-top">
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
        </div>
        <br>
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
                    <div class="col-sm-8"><p>Opening Hours:</p>
                    <?= $this->ContentBlock->html('contact-hours'); ?>
                    </div>
                </div>
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
            <div><h1>Test Form</h1>
                <?
                echo $this->Form->create($contact);
                echo $this->Form->control('name');
                echo $this->Form->control('email');
                echo $this->Form->control('body');
                echo $this->Form->button('Submit');
                echo $this->Form->end();?>
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
