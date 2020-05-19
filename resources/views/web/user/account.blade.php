@extends('web.layout.app')

@section('content')
<!--title-bar start-->
@include('web.user.title_bar')
<!--title-bar end-->	
<!--my-account start-->
<section class="my-account">			
    <div class="profile-bg">
        <img src="{{url('template_web/images/profile/bg-img.jpg')}}" alt="Responsive image">
        <div class="my-Profile-dt">
            <div class="container">
                <div class="row">
                    <div class="container">							
                        <div class="profile-dpt">
                            <img src="{{url('template_web/images/profile/dp-1.jpg')}}" alt="">
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
            
            @include('web.user.about.index')
        </div>
    </div>
</section>
<!--my-account-tabs end-->    
@endsection