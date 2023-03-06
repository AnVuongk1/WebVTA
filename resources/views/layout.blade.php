<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('public/frontend/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('public/frontend/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/sweetalert.css') }}">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{ ('public/frontend/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ ('public/frontend/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ ('public/frontend/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ ('public/frontend/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ ('public/frontend/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body>
	@include('layouts.header')
	@include('layouts.slider')

   
    
	
    
	<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Danh mục</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            @foreach($category as $key => $cate)
                           
                            
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/')}}">{{ $cate->category_name }}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Thương hiệu</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach($brand as $key => $brand)
                                    <li><a href="{{URL::to('/thuong-hieu/'.$brand->brand_id)}}"> <span class="pull-right">(50)</span>{{ $brand->brand_name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                       
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                   @yield('content')
                    
                </div>
            </div>
        </div>
    </section>
    
    @include('layouts.footer')

  
    <script src="{{ asset('public/frontend/js/jquery.js') }}"></script>
	<script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('public/frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('public/frontend/js/main.js') }}"></script>
    <script src="{{ asset('public/frontend/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('public/jquery.form-validator.min.js') }}"></script>
    <script type="text/javascript">
     $(document).ready(function(){
        var product_id = $('.comment_product_id').val();
        var _token = $('input[name="_token"]').val();
        function load_comment() {
            $.ajax({
                url:"{{ url('/load-comment') }}",
                method:"POST",
                data:[product_id:product_id,_token:_token],
                success:function(data){
                    $('#comment_show').html(data);
                }
            })
           
        }
     });
    </script>
    <script>
        $.validate({

        });
    </script>
</body>
</html>