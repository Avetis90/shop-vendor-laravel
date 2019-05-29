@extends('layouts.frontend.krystal')

@section('content')
    <main class="site-main checkout">

        <div class="container">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>{!! trans('validation.whoops') !!}</strong> {!! trans('validation.input_error') !!}
                    <br/><br/>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/checkout" class="checkout" method="post">
                @csrf
                <h4 class="title-checkout">Biiling Address</h4>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="title">First Name*</label>
                        <input type="text" class="form-control" id="forFName" placeholder="Your name"
                               name="account_bill_first_name" value="{{old('account_bill_first_name')}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="title">Last Name*</label>
                        <input type="text" class="form-control" id="forLName" placeholder="Your last name"
                               name="account_bill_last_name" value="{{old('account_bill_last_name')}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="title">Email Addreess:</label>
                        <input type="email" class="form-control" id="forEmail" placeholder="Type your email"
                               name="account_bill_email_address" value="{{old('account_bill_email_address')}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="title">Phone numbber*</label>
                        <input type="number" class="form-control" placeholder="10 digits format"
                               name="account_bill_phone_number" value="{{old('account_bill_phone_number')}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="title">Country*</label>
                        <input type="text" class="form-control" placeholder="United States"
                               name="account_bill_select_country" value="{{old('account_bill_select_country')}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="title">Address:</label>
                        <input type="text" class="form-control" placeholder="Street at apartment number"
                               name="account_bill_adddress_line_1" value="{{old('account_bill_adddress_line_1')}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="title">Postcode / ZIP:</label>
                        <input type="text" class="form-control" placeholder="Your postal code"
                               name="account_bill_zip_or_postal_code"
                               value="{{old('account_bill_zip_or_postal_code')}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="title">Town / City*</label>
                        <input type="text" class="form-control" placeholder="City name" name="account_bill_town_or_city"
                               value="{{old('account_bill_town_or_city')}}">
                    </div>
                    <div class="form-group shipping col-md-6">
                        <ul>
                            <li><label class="inline register_redirect"><input type="checkbox"><span
                                            class="input"></span>Create an
                                    account?</label></li>
                            <li class="hidden_form">
                                <label class="inline"><input type="checkbox"><span class="input"></span>Ship to a
                                    different address?</label>
                                <div class="different_address col-md-12">
                                    <div class="form-group col-md-12">
                                        <label class="title">First Name*</label>
                                        <input type="text" class="form-control" id="forFName" placeholder="Your name"
                                               name="account_shipping_first_name"
                                               value="{{old('account_shipping_first_name')}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="title">Last Name*</label>
                                        <input type="text" class="form-control" id="forLName"
                                               placeholder="Your last name"
                                               name="account_shipping_last_name"
                                               value="{{old('account_shipping_last_name')}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="title">Email Addreess:</label>
                                        <input type="email" class="form-control" id="forEmail"
                                               placeholder="Type your email"
                                               name="account_shipping_email_address"
                                               value="{{old('account_shipping_email_address')}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="title">Phone numbber*</label>
                                        <input type="number" class="form-control" placeholder="10 digits format"
                                               name="account_shipping_phone_number"
                                               value="{{old('account_shipping_phone_number')}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="title">Country*</label>
                                        <input type="text" class="form-control" placeholder="United States"
                                               name="account_shipping_select_country"
                                               value="{{old('account_shipping_select_country')}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="title">Address:</label>
                                        <input type="text" class="form-control" placeholder="Street at apartment number"
                                               name="account_shipping_adddress_line_1"
                                               value="{{old('account_shipping_adddress_line_1')}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="title">Postcode / ZIP:</label>
                                        <input type="text" class="form-control" placeholder="Your postal code"
                                               name="account_shipping_zip_or_postal_code"
                                               value="{{old('account_shipping_zip_or_postal_code')}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="title">Town / City*</label>
                                        <input type="text" class="form-control" placeholder="City name"
                                               name="account_shipping_town_or_city"
                                               value="{{old('account_shipping_town_or_city')}}">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <h4 class="title-checkout">Shipping method</h4>
                        <p>Flat Rate</p>
                        <p>Fixed $50.00</p>
                        {{--<div class="row cart-button-main">
                            <div class="apply-coupon">
                                <input type="text" class="form-control" id="apply_coupon_code" name="apply_coupon" placeholder="{{ trans('frontend.coupon_code_placeholder_text') }}">
                                <button class="btn btn-secondary" name="apply_coupon_post" id="apply_coupon_post">{!! trans('frontend.apply_coupon_label') !!}</button>
                                <div class="clearfix visible-xs"></div>
                            </div>
                        </div>--}}
                    </div>
                    @if($_settings_data['general_settings']['checkout_options']['enable_guest_user'] == true || ($_settings_data['general_settings']['checkout_options']['enable_login_user'] == true && $is_user_login == true) || ($_settings_data['general_settings']['checkout_options']['enable_guest_user'] == false && $_settings_data['general_settings']['checkout_options']['enable_login_user'] == false))
                        <div id="payment" class="step ">
                            <h5 class="step-title">{!! trans('frontend.choose_payment') !!}</h5>
                            <hr>
                            @if($payment_method_data['payment_option']['enable_payment_method'] == 'yes' && ($payment_method_data['bacs']['enable_option'] == 'yes' || $payment_method_data['cod']['enable_option'] == 'yes' || $payment_method_data['paypal']['enable_option'] == 'yes' || $payment_method_data['stripe']['enable_option'] == 'yes'))
                                <div class="payment-options">
                                    @if($payment_method_data['bacs']['enable_option'] == 'yes')
                                        <span>
                     <label>
                       @if(old('payment_option') == 'bacs')
                             <input type="radio" class="shopist-iCheck" checked name="payment_option"
                                    value="bacs"> {{ $payment_method_data['bacs']['method_title'] }}
                         @else
                             <input type="radio" class="shopist-iCheck" name="payment_option"
                                    value="bacs"> {{ $payment_method_data['bacs']['method_title'] }}
                         @endif
                     </label>
                    </span>
                                    @endif

                                    @if($payment_method_data['cod']['enable_option'] == 'yes')
                                        <span>
                     <label>
                       @if(old('payment_option') == 'cod')
                             <input type="radio" checked name="payment_option" class="shopist-iCheck"
                                    value="cod"> {{ $payment_method_data['cod']['method_title'] }}
                         @else
                             <input type="radio" name="payment_option" class="shopist-iCheck"
                                    value="cod"> {{ $payment_method_data['cod']['method_title'] }}
                         @endif
                     </label>
                    </span>
                                    @endif

                                    @if($payment_method_data['paypal']['enable_option'] == 'yes')
                                        <span>
                     <label>
                       @if(old('payment_option') == 'paypal')
                             <input type="radio" checked name="payment_option" class="shopist-iCheck"
                                    value="paypal"> {{ $payment_method_data['paypal']['method_title'] }}
                         @else
                             <input type="radio" name="payment_option" class="shopist-iCheck"
                                    value="paypal"> {{ $payment_method_data['paypal']['method_title'] }}
                         @endif
                     </label>
                    </span>
                                    @endif

                                    @if($payment_method_data['stripe']['enable_option'] == 'yes')
                                        <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
                                        <input type="hidden" name="stripe_api_key" value="{{ $stripe_api_key }}"
                                               id="stripe_api_key">
                                        <span>
                     <label>
                       @if(old('payment_option') == 'stripe')
                             <input type="radio" checked name="payment_option" class="shopist-iCheck"
                                    value="stripe"> {{ $payment_method_data['stripe']['method_title'] }}
                         @else
                             <input type="radio" name="payment_option" class="shopist-iCheck"
                                    value="stripe"> {{ $payment_method_data['stripe']['method_title'] }}
                         @endif
                     </label>
                    </span>
                                    @endif

                                    @if($payment_method_data['2checkout']['enable_option'] == 'yes')
                                        <script type="text/javascript"
                                                src="https://www.2checkout.com/checkout/api/2co.min.js"></script>
                                        <input type="hidden" name="2checkout_api_data"
                                               value="{{ $twocheckout_api_data }}" id="2checkout_api_data">
                                        <span>
                     <label>
                       @if(old('payment_option') == '2checkout')
                             <input type="radio" checked name="payment_option" class="shopist-iCheck"
                                    value="2checkout"> {{ $payment_method_data['2checkout']['method_title'] }}
                         @else
                             <input type="radio" name="payment_option" class="shopist-iCheck"
                                    value="2checkout"> {{ $payment_method_data['2checkout']['method_title'] }}
                         @endif
                     </label>
                    </span>
                                    @endif

                                    @if($payment_method_data['bacs']['enable_option'] == 'yes')
                                        <div id="bacsPopover">
                                            <p>{{ $payment_method_data['bacs']['method_description'] }}</p>
                                        </div>
                                    @endif
                                    @if($payment_method_data['cod']['enable_option'] == 'yes')
                                        <div id="codPopover">
                                            <p>{{ $payment_method_data['cod']['method_description'] }}</p>
                                        </div>
                                    @endif
                                    @if($payment_method_data['paypal']['enable_option'] == 'yes')
                                        <div id="paypalPopover">
                                            <p>{{ $payment_method_data['paypal']['method_description'] }}</p>
                                        </div>
                                    @endif

                                    @if($payment_method_data['stripe']['enable_option'] == 'yes')
                                        <div id="stripePopover">
                                            <p>{{ $payment_method_data['stripe']['method_description'] }}</p><br>

                                            <div id="stripe_content">
                                                <div class="input-group row">
                                                    <div class="col-xs-12 required">
                                                        <label class="control-label">{!! trans('frontend.email_address_label') !!}</label>
                                                        <input class="form-control" type="email" id="email_address"
                                                               name="email_address" placeholder="email address">
                                                    </div>
                                                </div>

                                                <div class="input-group row">
                                                    <div class="col-xs-12 required">
                                                        <label class="control-label">{!! trans('frontend.card_number_label') !!}</label>
                                                        <input class="form-control" type="text" id="card_number"
                                                               name="card_number" placeholder="card number">
                                                    </div>
                                                </div>

                                                <div class="input-group row">
                                                    <div class="col-xs-4 required">
                                                        <label class="control-label">{!! trans('frontend.cvc_label') !!}</label>
                                                        <input class="form-control" type="text" id="card_cvc"
                                                               name="card_cvc" placeholder="ex. 311">
                                                    </div>
                                                    <div class="col-xs-4 required">
                                                        <label class="control-label">{!! trans('frontend.expiration_month_label') !!}</label>
                                                        <input class="form-control" type="text" id="card_expiry_month"
                                                               name="card_expiry_month" placeholder="MM">
                                                    </div>
                                                    <div class="col-xs-4 required">
                                                        <label class="control-label">{!! trans('frontend.expiration_year_label') !!}</label>
                                                        <input class="form-control" type="text" id="card_expiry_year"
                                                               name="card_expiry_year" placeholder="YYYY">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if($payment_method_data['2checkout']['enable_option'] == 'yes')
                                        <div id="twocheckoutPopover">
                                            <p>{{ $payment_method_data['2checkout']['method_description'] }}</p><br>

                                            <div id="2checkout_content" style="padding-left: 15px;">
                                                <div class="input-group row">
                                                    <div class="col-xs-12 required">
                                                        <label class="control-label">{!! trans('frontend.card_number_label') !!}</label>
                                                        <input class="form-control" type="text"
                                                               id="2checkout_card_number" name="2checkout_card_number"
                                                               placeholder="card number">
                                                    </div>
                                                </div>

                                                <div class="input-group row">
                                                    <div class="col-xs-4 required">
                                                        <label class="control-label">{!! trans('frontend.cvc_label') !!}</label>
                                                        <input class="form-control" type="text" id="2checkout_card_cvc"
                                                               name="2checkout_card_cvc" placeholder="ex. 123">
                                                    </div>
                                                    <div class="col-xs-4 required">
                                                        <label class="control-label">{!! trans('frontend.expiration_month_label') !!}</label>
                                                        <input class="form-control" type="text"
                                                               id="2checkout_card_expiry_month"
                                                               name="2checkout_card_expiry_month" placeholder="MM">
                                                    </div>
                                                    <div class="col-xs-4 required">
                                                        <label class="control-label">{!! trans('frontend.expiration_year_label') !!}</label>
                                                        <input class="form-control" type="text"
                                                               id="2checkout_card_expiry_year"
                                                               name="2checkout_card_expiry_year" placeholder="YYYY">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @else
                                <p>{{ trans('frontend.checkout_payment_method_label') }}</p>
                            @endif
                        </div>
                    @endif


                </div>
                <button class="btn btn-primary" name="checkout">
                    <span>Check Out</span>
                </button>
            </form>
        </div>
    </main>
@endsection