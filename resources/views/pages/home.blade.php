@extends('layout')
@section('content')
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Sản phẩm mới nhất</h2>
    @foreach ($all_product as $key => $product)
        
   
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="{{ URL::to('/chi-tiet-san-pham/'.$product->product_id) }}">
                        <img src="{{ URL::to('public/uploads/product/'.$product->product_image) }}" alt="" />
                        <h2>{{ number_format($product->product_price).' VND' }}</h2>
                        <p>{{ $product->product_name }}</p>
                        </a>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
                        {{-- <input type="button" value="Thêm giỏ hàng" class="btn btn-default add-to-cart" data-id_product="{{$product->product_id}}" name="add-to-cart"> --}}
                    </div>
                
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    @endforeach

</div><!--features_items-->
{{ $all_product->links() }}

@endsection