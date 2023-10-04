<!-- Contact Form Email Template -->
<h2>Contact Form Submission</h2>

<div class="row align-items-stretch mb-5">
    <div class="col-md-6">
        <div class="form-group">
            <strong>First Name:</strong> <?= $firstName; ?>
        </div>
        <div class="form-group">
            <strong>Last Name:</strong> <?= $lastName; ?>
        </div>
        <div class="form-group">
            <strong>Email:</strong> <?= $email; ?>
        </div>
        <div class="form-group">
            <strong>Phone:</strong> <?= $phone; ?>
        </div>
        <div class="form-group">
            <strong>Address:</strong> <?= $address; ?><br>
            <?= $address2; ?>
        </div>
        <div class="form-group">
            <strong>State:</strong> <?= $state; ?>
        </div>
        <div class="form-group">
            <strong>Postcode:</strong> <?= $postcode; ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group form-group-textarea mb-md-0">
            <strong>Products:</strong><br>
            <p>List of Products</p>
            <?= $product; ?>
        </div>
    </div>
</div>
