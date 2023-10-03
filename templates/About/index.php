<!DOCTYPE html>
<html lang="en">

<body id="page-top">

<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted"><?= $this->ContentBlock->text('about-subheading'); ?></h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" <?= $this->ContentBlock->image('about-image1'); ?> alt="About Image 1"/></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4><?= $this->ContentBlock->text('about-title1'); ?></h4>
                        <h5 class="subheading"><?= $this->ContentBlock->text('about-subheading1'); ?></h5>
                    </div>
                    <div class="timeline-body"><p class="text-muted"><?= $this->ContentBlock->html('about-content1'); ?></p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" <?= $this->ContentBlock->image('about-image2'); ?> alt="About Image 2" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4><?= $this->ContentBlock->text('about-title2'); ?></h4>
                        <h5 class="subheading"><?= $this->ContentBlock->text('about-subheading2'); ?></h5>
                    </div>
                    <div class="timeline-body"><p class="text-muted"><?= $this->ContentBlock->html('about-content2'); ?></p></div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" <?= $this->ContentBlock->image('about-image3'); ?> alt="About Image 3" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4><?= $this->ContentBlock->text('about-title3'); ?></h4>
                        <h5 class="subheading"><?= $this->ContentBlock->text('about-subheading3'); ?></h5>
                    </div>
                    <div class="timeline-body"><p class="text-muted"><?= $this->ContentBlock->html('about-content3'); ?></p></div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <?= $this->ContentBlock->html('about-bubble'); ?>
                </div>
            </li>
        </ul>
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
