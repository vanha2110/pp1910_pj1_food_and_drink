@extends('web.layout.app')

@section('content')
<section id="slider" class="slider">
    <div class="slider_overlay">
        <div class="container">
            <div class="row">
                <div class="main_slider text-center">
                    <div class="col-md-12">
                        <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                            <h1>Foody Love</h1>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. </p>
                            {{-- <button href="" class="btn-lg">Click here</button> --}}
                        </div>
                    </div>	
                </div>

            </div>
        </div>
    </div>
</section>
<section id="abouts" class="abouts">
    <div class="container">
        <div class="row">
            <div class="abouts_content">
                <div class="col-md-6">
                    <div class="single_abouts_text text-center wow slideInLeft" data-wow-duration="1s">
                        <img src="template_web/images/ab.png" alt="" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="single_abouts_text wow slideInRight" data-wow-duration="1s">
                        <h4>Về chúng tôi</h4>
                        <h3>WE ARE TASTY</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stan</p>

                        <p>dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesettingdard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>

                        <a href="" class="btn btn-primary">xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="portfolio" class="portfolio">
    <div class="container">
        <div class="row">
            <div class="portfolio_content text-center  wow fadeIn" data-wow-duration="5s">
                <div class="col-md-12">
                    <div class="head_title text-center">
                        <h4>Delightful</h4>
                        <h3>Experience</h3>
                    </div>

                    <div class="main_portfolio_content">
                        <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                            <img src="template_web/images/p1.png" alt="" />
                            <div class="portfolio_images_overlay text-center">
                                <h6>Italian Source Mushroom</h6>
                                <p class="product_price">$12</p>
                                <a href="" class="btn btn-primary">Click here</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                            <img src="template_web/images/p2.png" alt="" />
                            <div class="portfolio_images_overlay text-center">
                                <h6>Italian Source Mushroom</h6>
                                <p class="product_price">$12</p>
                                <a href="" class="btn btn-primary">Click here</a>
                            </div>								
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                            <img src="template_web/images/p3.png" alt="" />
                            <div class="portfolio_images_overlay text-center">
                                <h6>Italian Source Mushroom</h6>
                                <p class="product_price">$12</p>
                                <a href="" class="btn btn-primary">Click here</a>
                            </div>								
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                            <img src="template_web/images/p4.png" alt="" />
                            <div class="portfolio_images_overlay text-center">
                                <h6>Italian Source Mushroom</h6>
                                <p class="product_price">$12</p>
                                <a href="" class="btn btn-primary">Click here</a>
                            </div>								
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                            <img src="template_web/images/p5.png" alt="" />
                            <div class="portfolio_images_overlay text-center">
                                <h6>Italian Source Mushroom</h6>
                                <p class="product_price">$12</p>
                                <a href="" class="btn btn-primary">Click here</a>
                            </div>								
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                            <img src="template_web/images/p6.png" alt="" />
                            <div class="portfolio_images_overlay text-center">
                                <h6>Italian Source Mushroom</h6>
                                <p class="product_price">$12</p>
                                <a href="" class="btn btn-primary">Click here</a>
                            </div>								
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                            <img src="template_web/images/p7.png" alt="" />
                            <div class="portfolio_images_overlay text-center">
                                <h6>Italian Source Mushroom</h6>
                                <p class="product_price">$12</p>
                                <a href="" class="btn btn-primary">Click here</a>
                            </div>								
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6 single_portfolio_text">
                            <img src="template_web/images/p8.png" alt="" />
                            <div class="portfolio_images_overlay text-center">
                                <h6>Italian Source Mushroom</h6>
                                <p class="product_price">$12</p>
                                <a href="" class="btn btn-primary">Click here</a>
                            </div>								
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection