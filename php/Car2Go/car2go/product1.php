 <?php
    include_once('header.php');
?>
<head>
    <style>
        
/* 15. product details css here */
#img-1 {
  border: 1px solid #ebebeb;
}

.header_product {
  border-bottom: 1px solid #ebebeb;
}

.product_d_right h1 {
  text-transform: capitalize;
  line-height: 20px;
  font-size: 22px;
  font-weight: 400;
  margin-bottom: 22px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .product_d_right h1 {
    font-size: 20px;
  }
}
@media only screen and (max-width: 767px) {
  .product_d_right h1 {
    margin-bottom: 17px;
    font-size: 18px;
  }
}
.product_d_right .product_ratting {
  margin-bottom: 17px;
}
@media only screen and (max-width: 767px) {
  .product_d_right .product_ratting {
    margin-bottom: 12px;
  }
}
.product_d_right .product_ratting ul li.review a {
  color: #5a5a5a;
  margin-left: 10px;
}
.product_d_right .product_ratting ul li.review a:hover {
  color: #1D1678;
}
.product_d_right .price_box {
  margin-bottom: 14px;
}
@media only screen and (max-width: 767px) {
  .product_d_right .price_box {
    margin-bottom: 9px;
  }
}
.product_d_right .price_box span.current_price {
  font-size: 23px;
}
@media only screen and (max-width: 767px) {
  .product_d_right .price_box span.current_price {
    font-size: 18px;
  }
}
.product_d_right .price_box span.old_price {
  font-size: 20px;
}
@media only screen and (max-width: 767px) {
  .product_d_right .price_box span.old_price {
    font-size: 17px;
  }
}
.product_d_right .product_desc {
  margin-bottom: 19px;
  padding-bottom: 24px;
  border-bottom: 1px solid #ebebeb;
}

.product_desc ul {
  margin-bottom: 20px;
}

.product_desc ul li {
  color: #39b93c;
  font-weight: 600;
  margin-bottom: 5px;
  position: relative;
  padding-left: 20px;
}

.product_desc ul li:before {
  position: absolute;
  left: 0;
  top: 0;
  color: #39b93c;
  content: "\f058";
  font-family: Fontawesome;
}


@media only screen and (max-width: 767px) {
  .product_d_right .product_desc {
    margin-bottom: 15px;
    padding-bottom: 18px;
  }
}
.product_d_right .product_desc::before {
  display: none;
}
.product_d_right .product_desc p {
  font-size: 14px;
  line-height: 26px;
}
.product_d_right .priduct_social ul li {
  display: inline-block;
  margin-right: 7px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .product_d_right .priduct_social ul li {
    margin-right: 3px;
  }
}
@media only screen and (max-width: 767px) {
  .product_d_right .priduct_social ul li {
    margin-right: 2px;
  }
}
.product_d_right .priduct_social ul li:last-child {
  margin-right: 0;
}
.product_d_right .priduct_social ul li a {
  color: #fff;
  font-size: 12px;
  line-height: 24px;
  padding: 0 8px;
  border-radius: 3px;
  text-transform: capitalize;
  display: block;
}
@media only screen and (max-width: 767px) {
  .product_d_right .priduct_social ul li a {
    padding: 0 4px;
  }
}
.product_d_right .priduct_social ul li a:hover {
  opacity: 0.8;
}
.product_d_right .priduct_social ul li a.facebook {
  background: #3B5999;
}
.product_d_right .priduct_social ul li a.twitter {
  background: #1DA1F2;
}
.product_d_right .priduct_social ul li a.pinterest {
  background: #CB2028;
}
.product_d_right .priduct_social ul li a.google-plus {
  background: #fe6d4c;
}
.product_d_right .priduct_social ul li a.linkedin {
  background: #010103;
}
.product_d_right .product_timing {
  position: inherit;
  margin-bottom: 22px;
  margin-top: 30px;
}
@media only screen and (max-width: 767px) {
  .product_d_right .product_timing {
    margin-bottom: 16px;
    margin-top: 25px;
  }
}
.product_d_right .countdown_area {
  max-width: 320px;
}
@media only screen and (max-width: 767px) {
  .product_d_right .countdown_area {
    max-width: 190px;
  }
}

.product_nav {
  float: right;
  position: relative;
  top: -46px;
}
@media only screen and (max-width: 767px) {
  .product_nav {
    display: none;
  }
}
.product_nav ul li {
  display: inline-block;
  margin-left: 3px;
}
.product_nav ul li:first-child {
  margin-left: 0;
}
.product_nav ul li a {
  background: #1D1678;
  border-radius: 3px;
  color: #ffffff;
  display: block;
  font-size: 15px;
  height: 30px;
  width: 30px;
  line-height: 28px;
  text-align: center;
}
.product_nav ul li a:hover {
  background: #242424;
}

.product_variant.quantity {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}
@media only screen and (max-width: 767px) {
  .product_variant.quantity {
    margin-bottom: 16px;
  }
}
.product_variant.quantity label {
  font-weight: 600;
  text-transform: capitalize;
  font-size: 14px;
  margin-bottom: 0;
}
.product_variant.quantity input {
  width: 130px;
  border: 1px solid #ebebeb;
  background: none;
  height: 42px;
  padding: 0 12px;
  border-radius: 5px;
  margin-left: 15px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .product_variant.quantity input {
    width: 110px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .product_variant.quantity input {
    width: 80px;
  }
}
@media only screen and (max-width: 767px) {
  .product_variant.quantity input {
    width: 65px;
    margin-left: 10px;
  }
}
.product_variant.quantity button {
  border: 0;
  font-size: 16px;
  margin-left: 20px;
  background: #1D1678;
  height: 42px;
  line-height: 42px;
  text-transform: capitalize;
  min-width: 270px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .product_variant.quantity button {
    min-width: 240px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .product_variant.quantity button {
    min-width: 170px;
  }
}
@media only screen and (max-width: 767px) {
  .product_variant.quantity button {
    min-width: inherit;
    margin-left: 10px;
  }
}
.product_variant.quantity button:hover {
  background: #3E444A;
}
.product_variant.color {
  margin-bottom: 26px;
}
@media only screen and (max-width: 767px) {
  .product_variant.color {
    margin-bottom: 18px;
  }
}
.product_variant.color h3 {
  font-weight: 600;
  text-transform: capitalize;
  font-size: 18px;
  margin-bottom: 0;
  margin-right: 40px;
}
.product_variant.color label {
  font-size: 15px;
  font-weight: 600;
  text-transform: capitalize;
}
.product_variant.color ul li {
  display: inline-block;
  padding: 2px;
  border: 1px solid #ccc;
  margin-right: 5px;
}
.product_variant.color ul li:hover {
  border-color: #E88888;
}
.product_variant.color ul li:last-child {
  margin-right: 0;
}
.product_variant.color ul li a {
  width: 30px;
  height: 30px;
  display: block;
}
.product_variant.color ul li.color1 a {
  background: #000000;
}
.product_variant.color ul li.color2 a {
  background: #BEBEBE;
}
.product_variant.color ul li.color3 a {
  background: #FE0000;
}
.product_variant.color ul li.color4 a {
  background: #FFFF01;
}
.product_variant.size {
  margin-bottom: 30px;
}
.product_variant.size label {
  font-size: 15px;
  font-weight: 600;
  text-transform: capitalize;
}
.product_variant.size .niceselect_option {
  float: inherit;
  max-width: 200px;
}

.product_d_action {
  margin-bottom: 14px;
}
.product_d_action ul li a {
  font-size: 14px;
  line-height: 28px;
}
.product_d_action ul li a:hover {
  color: #1D1678;
}

.product_meta {
  margin-bottom: 24px;
}
@media only screen and (max-width: 767px) {
  .product_meta {
    margin-bottom: 20px;
  }
}
.product_meta span {
  font-weight: 600;
}
.product_meta span a {
  margin-left: 10px;
  font-weight: 400;
}
.product_meta span a:hover {
  color: #1D1678;
}

.product_info_button {
  border-bottom: 1px solid #ebebeb;
  padding-bottom: 15px;
  margin-bottom: 29px;
}
@media only screen and (max-width: 767px) {
  .product_info_button ul li {
    margin-bottom: 5PX;
  }
  .product_info_button ul li:last-child {
    margin-bottom: 0;
  }
}
.product_info_button ul li a {
  display: block;
  float: left;
  text-transform: capitalize;
  font-size: 20px;
  color: #555;
  font-weight: 600;
  margin-right: 35px;
  line-height: 26px;
  position: relative;
}
@media only screen and (max-width: 767px) {
  .product_info_button ul li a {
    margin-right: 25px;
    font-size: 17px;
  }
}
.product_info_button ul li a.active {
  color: #333333;
}
.product_info_button ul li a:hover {
  color: #333333;
}
.product_info_button ul li:last-child a {
  margin-right: 0;
}

.product_review_form button {
  border: none;
  background: #242424;
  color: #ffffff;
  text-transform: uppercase;
  font-weight: 600;
  padding: 5px 15px 3px;
  display: block;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  cursor: pointer;
  margin-top: 20px;
  border-radius: 5px;
  font-size: 13px;
}
.product_review_form button:hover {
  background: #1D1678;
  color: #ffffff;
}

.product_info_content p {
  line-height: 28px;
}

.product_d_table {
  padding: 10px 0 22px;
}
.product_d_table table {
  border-top: 1px solid #ddd;
  width: 100%;
}
.product_d_table table tbody tr {
  border-bottom: 1px solid #ddd;
}
.product_d_table table tbody tr td {
  padding: 7px 17px;
}
.product_d_table table tbody tr td:first-child {
  border-right: 1px solid #ddd;
  width: 30%;
  font-weight: 700;
}

.product_d_inner {
  padding: 20px 30px 27px;
  border: 1px solid #ebebeb;
}
@media only screen and (max-width: 767px) {
  .product_d_inner {
    padding: 20px 20px 27px;
  }
}

.product_info_inner {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-top: 15px;
}
.product_info_inner .product_ratting {
  margin-bottom: 10px;
}
.product_info_inner .product_ratting p {
  margin-bottom: 5px;
}
.product_info_inner .product_ratting strong {
  margin-top: 10px;
  display: block;
  margin-bottom: 8px;
}

.reviews_wrapper h2 {
  font-size: 18px;
  font-weight: 600;
  text-transform: capitalize;
}
@media only screen and (max-width: 767px) {
  .reviews_wrapper h2 {
    font-size: 15px;
  }
}
.reviews_wrapper .product_ratting {
  margin-bottom: 20px;
}
.reviews_wrapper .product_ratting h3 {
  font-size: 14px;
  font-weight: 700;
  text-transform: capitalize;
}

.comment_title {
  margin-bottom: 20px;
}

.product_review_form input {
  border: 1px solid #ddd;
  background: none;
  width: 100%;
  height: 40px;
  padding: 0 20px;
}
.product_review_form textarea {
  border: 1px solid #ddd;
  background: none;
  height: 120px;
  resize: none;
  width: 100%;
  margin-bottom: 14px;
  padding: 0 20px;
}
.product_review_form p {
  margin-bottom: 7px;
}

.star_rating {
  float: right;
}
.star_rating ul li {
  display: inline-block;
}
.star_rating ul li a {
  color: #1D1678;
}

.reviews_comment_box {
  display: flex;
  margin-bottom: 22px;
}
.reviews_comment_box .comment_text {
  width: 100%;
  border: 1px solid #ebebeb;
  position: relative;
  margin-left: 21px;
  padding: 12px;
  border-radius: 3px;
}
.reviews_comment_box .comment_text::before {
  background: #fff;
  border-bottom: 1px solid #ebebeb;
  border-left: 1px solid #ebebeb;
  content: '';
  display: block;
  height: 10px;
  left: -6px;
  position: absolute;
  top: 10px;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  width: 10px;
}

.reviews_meta p {
  font-size: 15px;
  margin-bottom: 15px;
}
.reviews_meta p strong {
  text-transform: uppercase;
  font-weight: 600;
  color: #242424;
}

.s-tab-zoom.owl-carousel .owl-nav {
  display: block;
}
.s-tab-zoom.owl-carousel .owl-nav div {
  position: absolute;
  background: #f2f2f2;
  border-radius: 3px;
  height: 32px;
  top: 50%;
  transform: translatey(-50%);
  width: 32px;
  text-align: center;
  line-height: 32px;
  left: -7px;
  font-size: 18px;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  opacity: 0;
  visibility: hidden;
}
.s-tab-zoom.owl-carousel .owl-nav div:hover {
  background: #1D1678;
  color: #ffffff;
}
.s-tab-zoom.owl-carousel .owl-nav div.owl-next {
  right: -7px;
  left: auto;
}

@media only screen and (max-width: 767px) {
  .product-details-tab {
    margin-bottom: 58px;
  }
}
.product-details-tab:hover .s-tab-zoom.owl-carousel .owl-nav div {
  opacity: 1;
  visibility: visible;
}

.single-zoom-thumb {
  margin-top: 20px !important;
  width: 80%;
  margin: 0 auto;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .single-zoom-thumb {
    width: 85%;
  }
}
@media only screen and (max-width: 767px) {
  .single-zoom-thumb {
    width: 101%;
  }
}
.single-zoom-thumb ul li {
  border: 1px solid #ddd;
}
.single-zoom-thumb ul li a {
  width: 100%;
}

.related_products {
  margin-bottom: 33px;
}

.upsell_products {
  margin-bottom: 34px;
}
    </style>
</head>
 <!--product details start-->
 <div class="product_details mt-60 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                   <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="../Admin/upload/car/<?php echo $fetch->Car_img?>" data-zoom-image="../Admin/upload/car/<?php echo $fetch->Car_img?>" alt="big-1">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                       <form action="#">
                           
                            <h1><?php echo $fetch->Title;?></h1>
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="review"><a href="#"> (250 reviews) </a></li>
                                </ul>
                                
                            </div>
                            <div class="price_box">
                                <span class="current_price"><?php echo $fetch->Rent;?></span>
                                <?php echo $fetch->Rent_type;?>
                            </div>
                            <div class="product_desc">
                                <ul>
                                    <li><?php echo $fetch->Car_status;?></li>
                                    <li>Passenger Capacity : <?php echo $fetch->Passenger_cap;?></li>
                                   
                                </ul>
                                <p><?php echo $fetch->Description;?></p>
                                </div>
		
                            <div class="product_variant color">
                                <h3>About this car</h3>
                                <ul>
                                <li>Car Model :<?php echo $fetch->Car_model;?></li>
                                <li>Car Brand :<?php echo $fetch->Car_brand;?></li>
                                <li>Location :<?php echo $fetch->Loca_name;?></li>
                                </ul>
                                </div>
                                
                            <div class="product_variant quantity">  
                                <button class="button" >
                                    <a  type="submit" href="wishlist"> + Add to Wishlist</a>
                                </button>                               
                            </div>                      
                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>           
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>           
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>           
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>        
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>        
                            </ul>      
                        </div>

                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info mb-60">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">   
                        <div class="product_info_button">    
                            <ul class="nav" role="tablist">
                                <li >
                                    <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Description</a>
                                </li>
                                <li>
                                     <a data-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false">Specification</a>
                                </li>
                                <li>
                                   <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (1)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel" >
                                <div class="product_info_content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                    <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                                </div>    
                            </div>
                            <div class="tab-pane fade" id="sheet" role="tabpanel" >
                                <div class="product_d_table">
                                   <form action="#">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="first_child">Compositions</td>
                                                    <td>Polyester</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Styles</td>
                                                    <td>Girly</td>
                                                </tr>
                                                <tr>
                                                    <td class="first_child">Properties</td>
                                                    <td>Short Dress</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div class="product_info_content">
                                    <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                                </div>    
                            </div>

                            <div class="tab-pane fade" id="reviews" role="tabpanel" >
                                <div class="reviews_wrapper">
                                    <h2>1 review for Donec eu furniture</h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="assets/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                    </ul>   
                                                </div>
                                                <p><strong>admin </strong>- September 12, 2018</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published.  Required fields are marked </p>
                                    </div>
                                    <div class="product_ratting mb-10">
                                       <h3>Your rating</h3>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment" ></textarea>
                                                </div> 
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author"  type="text">

                                                </div> 
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email"  type="text">
                                                </div>  
                                            </div>
                                            <button type="submit">Submit</button>
                                         </form>   
                                    </div> 
                                </div>     
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
        </div>    
    </div>  
    <!--product info end-->

   <?php
    include_once('footer.php');
    ?>