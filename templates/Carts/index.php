<!DOCTYPE html>
<html lang="en">
<body id="page-top">
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="container mt-5">
            <h1>Your Cart</h1>
            <?php foreach ($carts as $cart): ?>
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img
                                    src="http://localhost:8888/team115-app_fit3047-main/assets/img/portfolio/5kgweights.jpg"
                                    class="img-fluid" alt="Product Image">
                            </div>
                            <div class="col-md-9">
                                <h3 class="card-title"><?php echo $cart['product']['product_name'] ?></h3>
                                <p class="card-text">$<span
                                        id="product-price"><?php echo $cart['product']['product_cost'] ?></span></p>
                                <h4>Quantity: </h4>
                                <div class="d-flex flex-row">
                                    <?= $this->Form->create($cart, ['url' => ['action' => 'updateQuantity', $cart->id], 'type' => 'post']) ?>
                                    <?= $this->Form->control('quantity', ['type' => 'number', 'min' => 1, 'label' => false, 'class' => 'mb-3']) ?>
                                    <?= $this->Form->button(__('Update Quantity'), ['class' => 'btn btn-primary btn-sm mb-3']) ?>
                                    <?= $this->Form->end() ?>
                                </div>
                                <?php echo $this->Html->link(
                                    __('Remove from cart'),
                                    ['action' => 'delete', $cart->id],
                                    [
                                        'confirm' => __('Are you sure you want to delete {0}?', $cart['product']['product_name']),
                                        'class' => 'btn btn-danger'
                                    ]
                                ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="mt-4 d-flex flex-row justify-content-end">
                <div class="d-flex flex-column justify-content-end">
                    <h4>Total Price: $<span id="total-price"><?php echo $total ?></span></h4>
                    <button class="btn btn-success mb-3">Buy Cart</button>
                </div>
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
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
