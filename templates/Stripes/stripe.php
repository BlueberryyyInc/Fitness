<!DOCTYPE html>
<html>
<head>
    <title>Pay Now</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    3<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        .box {
            max-width: 75%;
            justify-content: center;
        }

        .form-control {
            font-size: large;
        }

        .control-label {
            font-size: x-large;
        }
    </style>
</head>
<body>
<div class="pt-xxl-5 pb-xxl-5">
    <div class="container box mt-5">

<h1 class="text-center display-1 mb-3">Pay Now</h1>
<?= $this->Flash->render() ?>

    <div class="row">
        <div class="col-md-12">
                <div>
                    <?= $this->Form->create(null, [
                        "action" => $this->Url->build("/payment", ["fullBase" => false]),
                        "method" => "post",
                        "class" => "require-validation",
                        "data-cc-on-file" => "false",
                        "data-stripe-publishable-key" => STRIPE_KEY,
                        "id" => "payment-form"
                    ]) ?>
                    <div class='row'>
                        <div class='col-md-6 form-group required'>
                            <label class='control-label'>First Name</label>
                            <input class='form-control' size='4' type='text' placeholder="John" name='firstName'>
                        </div>
                        <div class='col-md-6 form-group required'>
                            <label class='control-label'>Last Name</label>
                            <input class='form-control' size='4' type='text'placeholder="Doe" name='lastName'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Address Line 1</label>
                            <input class='form-control' size='4' type='text' placeholder="1 Smith Street" name='address' required>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Address Line 2 (Opt)</label>
                            <input class='form-control' size='4' type='text' placeholder="Appartment number etc." name='address2' >
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-6 form-group required'>
                            <label class='control-label'>State</label>
                            <select class="form-control" name="state" id="state" required>
                                <option value="ACT">Australian Capital Territory</option>
                                <option value="NSW">New South Wales</option>
                                <option value="NT ">Northern Territory</option>
                                <option value="QLD">Queensland</option>
                                <option value="SA ">South Australia</option>
                                <option value="TAS">Tasmania</option>
                                <option value="VIC">Victoria</option>
                                <option value="WA ">Western Australia</option>
                            </select>
                        </div>
                        <div class='col-xs-6 form-group required'>
                            <label class='control-label'>Postcode</label>
                            <input class='form-control' size='4' minlength="4" maxlength="4" placeholder="Enter Australian postcode" type='text' name='postcode' required>
                        </div>
                    </div>


                    <div class='form-row row'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Email Address</label>
                            <input class='form-control' size='4' placeholder="Enter full email address" type='email' name='email'>
                        </div>
                    </div>
                    <div class='form-row row'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Phone</label>
                            <input class='form-control' size='4' placeholder="Enter full email address" pattern="^\({0,1}((0|\+61)(2|4|3|7|8)){0,1}\){0,1}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{2}(\ |-){0,1}[0-9]{1}(\ |-){0,1}[0-9]{3}$" type='tel' name='phone'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Name on Card</label> <input
                                class='form-control' size='4' type='text' placeholder="John Doe">
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-9 form-group required'>
                            <label class='control-label'>Card Number</label> <input
                                autocomplete='off' class='form-control card-number' size='20'
                                type='text' value="4242424242424242" readonly>
                        </div>
                        <div class='col-xs-3 form-group cvc required'>
                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                                                            class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                                            type='text'>
                        </div>

                    </div>
                    <div class='form-row row'>
                    <div class='col-xs-6 form-group expiration required'>
                            <label class='control-label'>Expiration Month</label> <input
                                class='form-control card-expiry-month' placeholder='MM' size='2'
                                type='text'>
                        </div>
                        <div class='col-xs-6 form-group expiration required'>
                            <label class='control-label'>Expiration Year</label> <input
                                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                type='text'>
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-md-12 error form-group hide'>
                            <div class='alert-danger alert'>Please correct the errors and try
                                again.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                        </div>
                    </div>

                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>

</div>

</body>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script type="text/javascript">
    $(function() {
        var $form = $("#payment-form"); // Target the payment form by its ID

        $form.on('submit', function(e) {
            var $errorMessage = $form.find('.error');
            $errorMessage.addClass('hide');

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }
        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                var token = response['id'];

                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    });
</script>

</html>
