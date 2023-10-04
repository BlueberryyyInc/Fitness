<!DOCTYPE html>
<html>
<head>
    <title>Pay Now</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
        .panel-title {
            display: inline;
            font-weight: bold;
        }
        .display-table {
            display: table;
        }
        .display-tr {
            display: table-row;
        }
        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 61%;
        }
    </style>
</head>
<body>

<div class="container">

    <h3 style="text-align: center;">Pay Now</h3><br/>

    <?= $this->Flash->render() ?>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-body">

                    <?= $this->Form->create(null, [
                        "action" => $this->Url->build("/payment", ["fullBase" => false]),
                        "method" => "post",
                        "class" => "require-validation",
                        "data-cc-on-file" => "false",
                        "data-stripe-publishable-key" => STRIPE_KEY,
                        "id" => "payment-form"
                    ]) ?>
                    <div class='form-row row'>
                        <div class='col-xs-6 form-group required'>
                            <label class='control-label'>First Name</label>
                            <input class='form-control' size='4' type='text' placeholder="John" name='firstName'>
                        </div>
                        <div class='col-xs-6 form-group required'>
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
