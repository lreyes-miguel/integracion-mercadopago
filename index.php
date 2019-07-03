<?php

require __DIR__ . '/vendor/autoload.php';

MercadoPago\SDK::setClientId("2523051781938465");
MercadoPago\SDK::setClientSecret("tNTKSqad8cC0f96SKBdKdN8yaVC0YDMg");

require 'app/webCheckout.php';

?>


<!DOCTYPE html>
<html>
<head>
    <title>Pagar</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>



<!------ Include the above in your HEAD tag ---------->

<div class="container">

    <hr>

    <div class="row">

        <aside class="col-sm-6">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Métodos de Pago</span>
            </h4>

            <article class="card">
                <div class="card-body p-5">

                    <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
                                <i class="fa fa-cubes"></i> Api</a></li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
                                <i class="fa fa-key"></i> Web Checkout Token</a></li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
                                <i class="fa fa-external-link-alt"></i> Web Checkout</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-tab-card">
                            <p class="alert alert-success">Some text success or error</p>
                            <form role="form">
                                <div class="form-group">
                                    <label for="username">Full name (on the card)</label>
                                    <input type="text" class="form-control" name="username" placeholder="" required="">
                                </div> <!-- form-group.// -->

                                <div class="form-group">
                                    <label for="cardNumber">Card number</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="cardNumber" placeholder="">
                                        <div class="input-group-append">
				<span class="input-group-text text-muted">
					<i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>  
					<i class="fab fa-cc-mastercard"></i>
				</span>
                                        </div>
                                    </div>
                                </div> <!-- form-group.// -->

                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label><span class="hidden-xs">Expiration</span> </label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" placeholder="MM" name="">
                                                <input type="number" class="form-control" placeholder="YY" name="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label data-toggle="tooltip" title=""
                                                   data-original-title="3 digits code on back side of the card">CVV <i
                                                        class="fa fa-question-circle"></i></label>
                                            <input type="number" class="form-control" required="">
                                        </div> <!-- form-group.// -->
                                    </div>
                                </div> <!-- row.// -->
                                <button class="subscribe btn btn-primary btn-block" type="button"> Confirm</button>
                            </form>
                        </div> <!-- tab-pane.// -->
                        <div class="tab-pane fade" id="nav-tab-paypal">
                            <p>Se abre un modal para realizar el pago con toda la funcionalidad de MercadoPago, el botón y el modal se pueden custumizar.</p>
                            <div class="text-center">
                            <form action="/procesar-pago" method="POST">
                                <script src="https://www.mercadopago.com.pe/integrations/v1/web-tokenize-checkout.js"
                                        data-public-key="TEST-e30dd35c-c289-4de3-8882-4891165f29d0"
                                        data-transaction-amount="200.00">
                                </script>
                            </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-tab-bank">
                            <p>El pago se realiza en la página de MercadoPago y se redireccionara con los datos de la transacción.</p>
                            <br><br>
                            <div class="text-center">
                                <a href="<?php echo $preference->init_point; ?>" class="btn btn-success">Continuar pago en MercadoPago</a>
                            </div>
                        </div> <!-- tab-pane.// -->
                    </div> <!-- tab-content .// -->

                </div> <!-- card-body.// -->
            </article> <!-- card.// -->


        </aside> <!-- col.// -->

        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Product name</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Second product</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Third item</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                        <small>EXAMPLECODE</small>
                    </div>
                    <span class="text-success">-$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>$20</strong>
                </li>
            </ul>

            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                    </div>
                </div>
            </form>
        </div>
    </div> <!-- row.// -->

</div>
<!--container end.//-->
</body>
</html>


