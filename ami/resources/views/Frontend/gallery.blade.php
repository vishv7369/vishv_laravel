@extends('Frontend.Layout.mainlayout')
@section('remaining_content')

    <!-- gallery-banner -->
    <section class="gallery-banner centred">
        <div class="container">
            <div class="content-box">
                <h1>Our Catelog</h1>
            </div>
        </div>
    </section>
    <!-- gallery-banner end -->


    <!-- image-gallery -->
    <section class="image-gallery">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 gallery-block">
                    <div class="single-item">
                        <figure class="image-box"><a href="{{url('Frontend/images/gallery/gallery-1.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/gallery/gallery-1.jpg')}}" alt=""></a></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 gallery-block">
                    <div class="single-item">
                        <figure class="image-box"><a href="{{url('Frontend/images/gallery/gallery-2.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/gallery/gallery-2.jpg')}}" alt=""></a></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 gallery-block">
                    <div class="single-item">
                        <figure class="image-box"><a href="{{url('Frontend/images/gallery/gallery-3.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/gallery/gallery-3.jpg')}}" alt=""></a></figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 gallery-block">
                    <div class="single-item">
                        <figure class="image-box"><a href="{{url('Frontend/images/gallery/gallery-4.jpg')}}" class="lightbox-image" data-fancybox="gallery"><img src="{{url('Frontend/images/gallery/gallery-4.jpg')}}" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- image-gallery end -->


    @endsection