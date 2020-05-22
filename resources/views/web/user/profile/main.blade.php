<div class="col-lg-6 col-md-8 col-12">
    <div class="tab-content">
        <div class="tab-pane active" id="edit-profile">
            <div class="timeline">
                <div class="tab-content-heading">
                    <h4>Update Profile</h4>
                    <a href="my_profile_dashbord.html"><i class="fas fa-angle-double-left"></i>Back to Profile</a>
                </div>
                @if (session('success'))
                <div class="alert alert-success" role="alert" style="text-align: center;">
                    {{ session('success') }}
                </div>
                @endif
                <div class="edit-profile">
                    <form action="{{route('update_profile')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="setting-dt">
                            <h4>Avatar</h4>										
                            <div class="avatar">
                                <img style="width: 150px" src="/storage/img/{{Auth::user()->avatar}}" alt="">											
                            </div>
                            <div class="upload-avatar">
                                <div class="input-heading">Upload New Avatar</div>	
                                <div class="input-container">																					
                                    <input class="file-upload-input" type="file" name="avatar"><button class="browse-btn">Choose File</button><span class="file-info"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="video-form" id="name" name="name"  value="{{Auth::user()->name}}">							
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="video-form" name="email" id="email" value="{{Auth::user()->email}}">									
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="video-form" id="address" name="address" value="{{Auth::user()->address}}">							
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="video-form" id="phone" name="phone" value="{{Auth::user()->phone}}">							
                        </div>
                        <button type="submit" class="change-btn btn-link">Save Changes</button>
                    </form>
                </div>
            </div>							
        </div>																													
    </div>
</div>