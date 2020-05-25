<div class="col-lg-9 col-md-8">
    <div class="col-lg-12 col-md-12 m-left m-right">
        <div class="all-meals-show">
            <div class="new-heading">
                <h1> All Products </h1>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="all-meal">
                    <div class="top">
                        <a href="meal_detail.html"><div class="bg-gradient"></div></a>
                        <div class="top-img">
                            <img style="width: 100%" src="/storage/img/{{$product->image}}" alt="">
                        </div>
                        <div class="logo-img">
                            <img src="{{url('template_web/images/homepage/meals/logo-1.jpg')}}" alt="">
                        </div>
                        <div class="top-text">
                            <div class="heading"><h4><a href="meal_detail.html">{{ $product->name }}</a></h4></div>
                            <div class="sub-heading">
                            <p>{{ $product->price }} VNĐ</p>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="bottom-text">
                            <div class="delivery"><i class="fas fa-shopping-cart"></i>Delivery Free : Free</div>
                            <div class="time"><i class="far fa-clock"></i>Delivery Time : 30 Min</div>
                            <div class="star">Rate							
                                <span>4.5</span> 
                                <div class="comments"><a href="#">Cart Now <i class="fas fa-shopping-cart"></i></a></div>
                            </div>								
                        </div>
                    </div>  
                </div>					
            </div>
        @endforeach						
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 ">
            <div class="main-p-pagination m-top">
                <nav aria-label="Page navigation example">
                    {{$products->links()}}
                </nav>
            </div>
        </div>
    </div>
</div>