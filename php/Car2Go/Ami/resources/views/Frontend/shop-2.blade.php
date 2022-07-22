
@extends('Frontend.Layout.mainlayout')
@section('remaining_content')

    


    <!-- shop-style-two -->
    <section class="shop-style-two shop-page-2">
        <div class="container">
            <div class="upper-box">
                <div class="row">
                <h1>Peoduct Types</h1>   
                    
            <div class="latest-product">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="{{url('Frontend/images/resource/shop/machine-1.png')}}" alt=""></figure>
                            <div class="content-box">
                                <h3><a href="shop-single">industrial Motor decanter</a></h3>
                                <div class="link-btn"><a href="shop-single">Check More<i class="far fa-arrow-alt-circle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="{{url('Frontend/images/resource/shop/machine-2.png')}}" alt=""></figure>
                            <div class="content-box">
                                <h3><a href="shop-single">Water jet pumps</a></h3>
                                <div class="link-btn"><a href="shop-single">Check More<i class="far fa-arrow-alt-circle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="latest-product">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="{{url('Frontend/images/resource/shop/machine-1.png')}}" alt=""></figure>
                            <div class="content-box">
                                <h3><a href="shop-single">industrial Motor decanter</a></h3>
                                <div class="link-btn"><a href="shop-single">Check More<i class="far fa-arrow-alt-circle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                        <div class="single-item wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <figure class="image-box"><img src="{{url('Frontend/images/resource/shop/machine-2.png')}}" alt=""></figure>
                            <div class="content-box">
                                <h3><a href="shop-single">Water jet pumps</a></h3>
                                <div class="link-btn"><a href="shop-single">Check More<i class="far fa-arrow-alt-circle-right"></i></a></div>
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


   @endsection