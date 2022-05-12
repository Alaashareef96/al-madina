@extends('site.parent')

@section('titel','Payment Srtipe')

@section('style')
    <style>
        /**
     * The CSS shown here will not be introduced in the Quickstart guide, but shows
     * how you can use CSS to style your Element's container.
     */
        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }
        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }
        .StripeElement--invalid {
            border-color: #fa755a;
        }
        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;}
    </style>
@endsection
@section('contact')


    <div class="container">
        <nav aria-label="breadcrumb">
            <ol  class="breadcrumb official ">
                <li class="breadcrumb-item"><a href="{{route('home')}}">{{trans('site/product.Home')}}</a></li>
                <li class="breadcrumb-item"><a href="{{route('product')}}">{{trans('site/product.products')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Payment Srtipe</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">{{$cartQty}}</span>
                </h4>
                <ul class="list-group mb-3">

                    @if(Session::has('coupon'))
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">SubTotal</h6>
                            </div>
                            <strong>${{ $cartTotal }}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success-aa">
                                <h6 class="my-0">coupon name</h6>
                            </div>
                            <span class="text-success">{{ session()->get('coupon')['coupon_name'] }}
                                         ( {{ session()->get('coupon')['coupon_discount'] }} % )</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>discount amount</span>
                            <strong>${{ session()->get('coupon')['discount_amount'] }} </strong>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span>Grand Total</span>
                            <strong>${{ session()->get('coupon')['total_amount'] }} </strong>
                        </li>
                    @else
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">SubTotal</h6>
                                <small class="text-muted">SubTotal</small>
                            </div>
                            <span class="text-muted">${{ $cartTotal }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Grand Total </h6>
                                <small class="text-muted">Grand Total</small>
                            </div>
                            <span class="text-muted">{{ $cartTotal }}$</span>
                        </li>
                    @endif
                </ul>

            </div>
            <div class="col-md-6 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form action="{{route('site.stripe.order')}}"  method="post" id="payment-form">
                    @csrf
                    <div class="form-group">
                        <label for="card-element">
                            Credit or debit card
                            <input type="hidden" name="name" value="{{ $data['name'] }}">
                            <input type="hidden" name="email" value="{{ $data['email'] }}">
                            <input type="hidden" name="mobile" value="{{ $data['mobile'] }}">
                            <input type="hidden" name="city_id" value="{{ $data['city_id'] }}">
                            <input type="hidden" name="address" value="{{ $data['address'] }}">

                        </label>

                        <div class="card-body">
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>
                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>

                        </div>
                    </div>

                        <button
                            id="card-button" class="btn btn-dark" type="submit"> Pay </button>
                </form>

            </div>
        </div>
    </div>


@endsection
@section('script')

    <script type="text/javascript">
        // Create a Stripe client.
        //your publishable key here
        var stripe = Stripe('pk_test_51KxubPLGMOgTn7EoYf4WnLBgzFAsv7G99D4qu6ZTGUuWvYiGvViOsLRdNExWe2Cp6pr1MfLB5mVhHcw57qc3BYiE00nMLBZIPc');
        // Create an instance of Elements.
        var elements = stripe.elements();
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});
        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
        // Handle real-time validation errors from the card Element.
        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });
        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            // Submit the form
            form.submit();
        }
    </script>

@endsection


