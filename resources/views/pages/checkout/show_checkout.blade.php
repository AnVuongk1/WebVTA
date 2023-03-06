@extends('layout')
@section('content')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="#">Trang chủ</a></li>
              <li class="active">thanh toán</li>
            </ol>
        </div>

       
       
        {{-- <div class="register-req">
            <p>làm ơn đăng kí hoặc đăng nhập</p>
        </div><!--/register-req--> --}}

        <div class="shopper-informations">
            <div class="row">
              
                <div class="col-sm-12 clearfix">
                    <div class="bill-to">
                        <p>Thông tin gửi hàng</p>
                        <div class="form-one">
                            <form action="{{ URL::to('/save-checkout-customer') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="text" name="shipping_email" placeholder="Email*">
                                
                                <input type="text" name="shipping_name" placeholder="Họ Tên *">
                                <input type="text" name="shipping_address" placeholder="Địa chỉ">
                                <input type="text" name="shipping_phone" placeholder="SĐT">
                                <textarea name="shipping_notes"  placeholder="Ghi chú đơn hàng" rows="8"></textarea>
                                <input type="submit" value="Gửi" name="send_order" class="btn btn-primary btn-small">
                            </form>
                        </div>
                      
                    </div>
                </div>
                			
            </div>
        </div>
        {{-- <div class="review-payment">
            <h2>Xem lại giỏ hàng</h2>
        </div> --}}

    
        {{-- <div class="payment-options">
                <span>
                    <label><input type="checkbox"> Direct Bank Transfer</label>
                </span>
                <span>
                    <label><input type="checkbox"> Check Payment</label>
                </span>
                <span>
                    <label><input type="checkbox"> Paypal</label>
                </span>
            </div> --}}
    </div>
</section> <!--/#cart_items-->
@endsection