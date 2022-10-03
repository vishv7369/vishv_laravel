@extends('Frontend.Layout.mainlayout')
@section('remaining_content')


    <!-- shop-style-two -->
    <section class="shop-style-two shop-page-2">
        <div class="container">
        <h1>{{$category->category_name}}</h1>            
        <div class="upper-box">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 product-block">
                    <a class="btn btn-primary" href="/shop" role="button">Back</a>
                    <br><br>
                        <div class="product-block-area centred">
                            <div class="row">
                                    <?php
									foreach($products as $data)
									{
									?>
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                    <div class="shop-block-two">
                                        <div class="inner-box">
                                            <div class="image-holder">
                                                <figure class="image-box"><img src="{{asset('upload/product/' . $data->img)}}" style="width:400px;height:230px" alt=""></figure>
                                            </div>
                                            <div class="lower-content">
                                            <h4><a href="shop-single"><?php echo $data->productname;?></a></h4>
                                                <div class="price">
                                                    <span>&#8377; <?php echo $data->productprice;?></span>
                                                </div>
                                                    <span><?php echo $data->description;?></span> 
                                                <div class="btn-box"><a href="<?php echo $data->productlink;?>">Buy Now</a></div>
                                                <br>
                                                <div class="btn-box"><a href="{{url('/downloadcatelog')}}">Download catelog</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <?php
									}
									?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-style-two end -->



    <!-- shipping-service -->
    <section class="shipping-service">
        <div class="container">
            <div class="outer-container clearfix">
                <div class="single-item wow zoomIn animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="box">
                            <div class="inner">
                                <div class="icon-box"><i class="fas fa-truck"></i></div>
                                <h4>Free Shipping</h4>
                                <div class="text">Orders over $500.00</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item wow zoomIn animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="box">
                            <div class="inner">
                                <div class="icon-box"><i class="far fa-thumbs-up"></i></div>
                                <h4>100% Made In US</h4>
                                <div class="text">Respecting natur</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-item wow zoomIn animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="box">
                            <div class="inner">
                                <div class="icon-box"><i class="fas fa-lock"></i></div>
                                <h4>Safety And Quality</h4>
                                <div class="text">Delivery within 3-4<br />business days</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shipping-service end -->
    <script>
$('#cate_id').on('change', function () {
                var cate_id = this.value;
                $('#id').html('');
                $.ajax({
				url:"{{url('/getproduct')}}",
				type: "POST",
				data: {
				sid: sid,
				_token: '{{csrf_token()}}'
				},
				
				success: function(result) {
                        $('#id').html('');
                        $.each(result.productadvs, function (key, value) {
                            $('#id').append('');
                        });
                        
                    }
                });
            });			
</script>	

   @endsection