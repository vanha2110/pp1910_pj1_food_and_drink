@extends('web.layout.app')

@section('content')
<!--title-bar start-->
<section class="title-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-title-text">
                <h3>My Account</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-title-text">  
                    <ul>
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--title-bar end-->	
<!--my-account start-->
<section class="my-account">			
    <div class="profile-bg">
        <img src="template_web/images/profile/bg-img.jpg" alt="Responsive image">
        <div class="my-Profile-dt">
            <div class="container">
                <div class="row">
                    <div class="container">							
                        <div class="profile-dpt">
                            <img src="template_web/images/profile/dp-1.jpg" alt="">
                        </div>
                        <div class="profile-all-dt">
                            <div class="profile-name-dt">
                                <h1>John Doe</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--my-account end-->	
<!--my-account-tabs start-->
<section class="all-profile-details">
    <div class="container">
        <div class="row">
            @include('web.user.menu')
            
            @include('web.user.about.main')
        </div>
    </div>
</section>
<!--my-account-tabs end-->    
@endsection