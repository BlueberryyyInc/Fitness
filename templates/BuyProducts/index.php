<!DOCTYPE html>
<html lang="en">

<body id="page-top">

<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Catalogue</h2>
            <h2 class="section-subheading">For purchase enquiries, you can contact us <a href="Contact">here.</a></h2>
        </div>
        <div>
            <a href="Stripes/stripe" class="btn btn-xl btn-primary">Buy 10kg Barbell Now</a>
        </div>
        <div class="row">
            <?php foreach ($products as $product): ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal"
                           href="#portfolioModal<?= $this->Number->format($product->id) ?>">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid"
                                 src="img/<?= h($product->product_image_path) ?>" alt="<?= h($product->product_name) ?>"/>
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading"><?= h($product->product_name) ?></div>
                            <div class="portfolio-caption-subheading text-muted">
                                $<?= $this->Number->format($product->product_cost) ?></div>
                            <!-- Add to Cart Form -->
                            <form method="post"
                                  action="<?= $this->Url->build(['controller' => 'Cart', 'action' => 'add']); ?>">
                                <div class="input-group mb-3">
                                    <input id="<?php echo 'product' . $product->id . 'quantity' ?>" type="number"
                                           name="quantity" class="form-control" value="1" min="1">
                                    <button onclick="addToCart(<?php echo $product->id ?>)" class="btn btn-primary"
                                            type="button">Add to Cart
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Portfolio Modals-->
<?php foreach ($products as $product): ?>
    <div class="portfolio-modal modal fade" id="portfolioModal<?= $this->Number->format($product->id) ?>" tabindex="-1"
         role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                                                                      alt="Close modal"/></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h2 class="text-uppercase"><?= h($product->product_name) ?></h2>
                                <img class="img-fluid d-block mx-auto"
                                     src="img/<?= h($product->product_image_path) ?>" alt="..."/>
                                <p><?= h($product->product_description) ?></p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Brand:</strong>
                                        <?= h($product->product_brand) ?>
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        <?= h($product->product_category) ?>
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script>
    const csrfToken = <?= json_encode($this->request->getAttribute('csrfToken')); ?>;

    function addToCart(productId) {
        const quantity = document.getElementById("product" + productId + "quantity").value;
        fetch("<?= $this->Url->build(['controller' => 'Carts', 'action' => 'add']); ?>", {
            method: "POST",
            headers: {

                'X-CSRF-Token': csrfToken,
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                product_id: productId,
                quantity: quantity
            })
        }).then(function (response) {
            return response.json();
        }).then(function (data) {
            console.log(data);
            alert("Added to cart!")
        });
    }
</script>
</body>
</html>
