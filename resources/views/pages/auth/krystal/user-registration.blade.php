
@extends('layouts.frontend.krystal')

@section('content')
    <div class="customer-login">
        <div class="container">
            @include('pages-message.notify-msg-error')
            @include('pages-message.form-submit')
            <div class="col-sm-6 col-sm-offset-3">
                <h5 class="title-login">Great an account</h5>
                <p class="p-title-login">Fersonal infomation</p>
                <form class="register" method="post" action="/user/registration" enctype="multipart/form-data">
                    @csrf
                    <p class="form-row form-row-wide">
                        <label>Fist name<span class="required">*</span></label>
                        <input type="text" value="" name="user_reg_display_name" placeholder="Fist name" class="input-text">
                    </p>

                    <p class="form-row form-row-wide">
                        <label>Last name<span class="required">*</span></label>
                        <input type="text" name="user_reg_name" placeholder="Last name" class="input-text">
                    </p>
                    <p class="form-row form-row-wide">
                        <label>Email Address<span class="required">*</span></label>
                        <input type="email" name="reg_email_id" placeholder="Email address" class="input-text">
                    </p>
                    <ul>
                        <li><label class="inline" ><input type="checkbox"><span class="input"></span>Sign Up for Newsletter</label></li>
                    </ul>
                    <p class="form-row form-row-wide col-md-6 padding-left">
                        <label>Password:<span class="required"></span></label>
                        <input type="password" name="reg_password" class="input-text">
                    </p>
                    <p class="form-row form-row-wide col-md-6 padding-right">
                        <label>Confirm Password<span class="required">*</span></label>
                        <input type="password" name="reg_password_confirmation" class="input-text">
                    </p>

                    <p class="form-row">
                        <input type="submit" value="Submit" name="Submit" class="button-submit">
                    </p>
                </form>
            </div>


        </div>
    </div>

@endsection