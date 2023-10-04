<!-- Contact Form Email Template -->
<h2>Contact Form Submission</h2>

<div class="row align-items-stretch mb-5">
    <div class="col-md-6">
        <div class="form-group">
            <strong>Name:</strong> <?= $name; ?>
        </div>
        <div class="form-group">
            <strong>Email:</strong> <?= $email; ?>
        </div>
        <div class="form-group">
            <strong>Phone:</strong> <?= $phone; ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-group-textarea mb-md-0">
            <strong>Message:</strong><br>
            <?= $message; ?>
        </div>
    </div>
</div>
