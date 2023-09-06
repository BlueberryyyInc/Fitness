<!-- Contact Form Email Template -->
<h2>Contact Form Submission</h2>

<div class="row align-items-stretch mb-5">
    <div class="col-md-6">
        <div class="form-group">
            <strong>Name:</strong> <?= h($data['name']) ?>
        </div>
        <div class="form-group">
            <strong>Email:</strong> <?= h($data['email']) ?>
        </div>
        <div class="form-group">
            <strong>Phone:</strong> <?= h($data['phone']) ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-group-textarea mb-md-0">
            <strong>Message:</strong><br>
            <?= nl2br(h($data['message'])) ?>
        </div>
    </div>
</div>
