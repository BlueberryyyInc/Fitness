<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Superior Fitness';
$plugin = $this->request->getParam('plugin');
$controller = $this->request->getParam('controller');
$action = $this->request->getParam('action');
if ($plugin === 'ContentBlocks' && $controller === 'ContentBlocks' && $action === 'index') {
    $this->layout = 'admin';
}
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $this->ContentBlock->text('website-title'); ?>
    </title>
    <!-- Favicon-->
    <?= $this->Html->meta(
            'favicon.png',
            '/webroot/assets/favicon.png',
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

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake','styles']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="Customers">Superior Fitness</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="Customers">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="BuyProducts">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="About">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="Contact">Contact</a></li>
                        <!--TODO make this link to admin dashboard login-->
                        <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <!-- Footer-->
    <!-- Privacy Policy Modal -->
    <div class="modal fade" id="privacyPolicyModal" tabindex="-1" aria-labelledby="privacyPolicyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="privacyPolicyModalLabel">Privacy Policy</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container mt-5">
                    <h2 class="mb-4">Privacy Policy</h2>
                    <p><strong>Last Updated: 10/09/2023</strong></p>
                    <p>This Privacy Policy describes how we collect, use, and protect your personal information when you use our website and related services.</p>

                    <h3>1. Information We Collect</h3>
                    <p>We may collect the following types of personal information when you interact with our website or make a purchase:</p>
                    <h4>1.1 Personal Information:</h4>
                    <ul>
                        <li>Name</li>
                        <li>Contact information (email address, phone number, mailing address)</li>
                        <li>Payment information (credit card number, billing address)</li>
                    </ul>

                    <h3>2. How We Use Your Information</h3>
                    <p>We use your personal information for the following purposes:</p>

                    <h4>2.1 Order Processing:</h4>
                    <ul>
                        <li>Fulfilling and processing orders</li>
                        <li>Providing customer support</li>
                    </ul>

                    <h4>2.2 Marketing:</h4>
                    <ul>
                        <li>Sending promotional emails and newsletters</li>
                        <li>Personalizing your shopping experience</li>
                    </ul>

                    <h3>3. Sharing Your Information</h3>
                    <p>We may share your personal information with third parties in the following situations:</p>
                    <h4>3.1 Service Providers:</h4>
                    <p>Sharing information with trusted service providers to assist with order processing, payment processing, and customer support.</p>
                    <h4>3.2 Legal Requirements:</h4>
                    <p>Complying with applicable laws and regulations<br>Responding to legal requests and protecting our rights</p>
                    <h4>3.3 Business Transfers:</h4>
                    <p>In the event of a merger, acquisition, or sale of assets, your information may be transferred to the acquiring entity.</p>

                    <h3>4. Children's Privacy</h3>
                    <p>Our services are not intended for individuals under the age of 18. We do not knowingly collect personal information from children.</p>

                    <h3>5. Changes to this Privacy Policy</h3>
                    <p>We may update this Privacy Policy to reflect changes in our practices or for legal reasons. We will notify you of any significant changes by posting the updated policy on our website.</p>

                    <h3>6. Contact Us</h3>
                    <p>If you have questions or concerns about this Privacy Policy or your personal information, you can find our contact information <a class="text-danger" href="Contact">here</a>.</p>
                    <p>By using our website, you agree to the terms of this Privacy Policy. Please review this policy periodically for any updates.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Terms of Use Modal -->
    <div class="modal fade" id="termsOfUseModal" tabindex="-1" aria-labelledby="termsOfUseModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="termsOfUseModalLabel">Terms of Use</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container mt-5">
                            <h2 class="mb-4">Terms of Use</h2>
                            <p><strong>Effective Date: 10/09/2023</strong></p>
                            <p>By accessing and using this website, you agree to comply with and be bound by the following terms and conditions:</p>

                            <ol>
                                <li><strong>Content Usage:</strong> You may use the content on this website for personal, non-commercial purposes only. Any unauthorized use or reproduction of content is prohibited.</li>
                                <li><strong>User Conduct:</strong> You agree not to engage in any activities that may disrupt the website's functionality or violate applicable laws and regulations.</li>
                                <li><strong>Privacy:</strong> Your use of this website is also governed by our Privacy Policy, which explains how we collect, use, and protect your information.</li>
                                <li><strong>Links to Third-Party Sites:</strong> We may provide links to third-party websites for your convenience. We are not responsible for the content or practices of these websites.</li>
                                <li><strong>Disclaimer:</strong> This website is provided "as is," and we make no warranties regarding its accuracy, completeness, or fitness for a particular purpose.</li>
                                <li><strong>Limitation of Liability:</strong> We shall not be liable for any direct or indirect damages resulting from your use of this website.</li>
                                <li><strong>Changes to Terms:</strong> We reserve the right to update or modify these Terms of Use at any time. Please review them periodically.</li>
                                <li><strong>Contact Us:</strong> If you have any questions or concerns about these terms, please contact us <a class="text-danger" href="Contact">here</a>.</li>
                            </ol>

                            <p>By using this website, you agree to these Terms of Use. If you do not agree, please refrain from using the website.</p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Superior Fitness 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
<!--                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>-->
<!--                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>-->
<!--                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>-->
                    </div>
                    <div class="col-lg-4 text-lg-end">
                            <a class="link-dark text-decoration-none me-3" href="#" data-bs-toggle="modal" data-bs-target="#privacyPolicyModal">Privacy Policy</a>
                            <a class="link-dark text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#termsOfUseModal">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>
