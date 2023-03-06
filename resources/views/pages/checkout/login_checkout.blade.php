@extends('layout')
@section('content')
<section id="form" style="margin-top: 0 !important"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Đăng nhập</h2>
                    <form action="{{ URL::to('/login-customer') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" name="email_account" placeholder="Tài khoản " />
                        <input type="password" name="password_account" placeholder="password" />
                        <span>
                            <input type="checkbox" class="checkbox"> 
                            Ghi nhớ đăng nhập
                        </span>
                        <button type="submit" class="btn btn-default">Đăng nhập</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">Hoặc</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>Đăng kí</h2>
                    <form action="{{ URL::to('/add-customer') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" name="customer_name" placeholder="Họ và tên"/>
                        <input type="email" name="customer_email" placeholder="Địa chỉ email"/>
                        <input type="password" name="customer_password" placeholder="Mật khẩu"/>
                        <input type="text" data-validation-length="min10" name="customer_phone" placeholder="Phone"/>
                        <button type="submit" class="btn btn-default">Đăng ký</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->

@endsection